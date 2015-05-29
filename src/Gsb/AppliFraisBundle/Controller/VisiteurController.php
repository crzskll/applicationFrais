<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gsb\AppliFraisBundle\Form\SaisieForfait;
use Gsb\AppliFraisBundle\Form\SaisieHorsForfait;

use Gsb\AppliFraisBundle\Entity\ForfaitLigne;
use Gsb\AppliFraisBundle\Entity\HorsForfaitLigne;
use Gsb\AppliFraisBundle\Entity\Fiche;
use Gsb\AppliFraisBundle\Entity\FraisForfait;
use Gsb\AppliFraisBundle\Entity\Forfait;

use \DateTime;


/**
 * Visiteur controller.
 *
 */
class VisiteurController extends Controller{

    /**
     * Show laste fiche and forms to create and update lignes when init page.
     *
     */
	public function saisieAction()
    {   
    	$date = new DateTime();

        //recupération de l'id visiteur depuis la session
        $session = $this->getRequest()->getSession();
        $id = $session->get('id');

    	//Récupération de la base de données
        $em = $this->getDoctrine()->getManager();

        //Récupération du visiteur connecté
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);

        //Récupération de la fiche en cours ou création d'une nouvelle fiche
        $derniereFiche = $this->getDerniereFiche($visiteur);
        
        //Création form forfait
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $id);

        //Création form horsForfait
        $ligneHorsForfait = new HorsForfaitLigne();
        $formSaisieHorsForfait = $this->createFraisHorsForfaitForm($derniereFiche, $ligneHorsForfait, $id);

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->generateViewSaisie($visiteur, $derniereFiche, $formSaisieForfait, $formSaisieHorsForfait);
        
    }

    /**
     * Show laste fiche and forms to create and update lignes when update ligne forfait.
     *
     */
    public function updateForfaitLigneAction(Request $request, $idLigne)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $idVisit = $session->get('id');
        $ligne = $em->getRepository('GsbAppliFraisBundle:ForfaitLigne')->find($idLigne);

        if (!$ligne) {
            throw $this->createNotFoundException('Unable to find ForfaitLigne entity.');
        }

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);
        $derniereFiche = $this->getDerniereFiche($visiteur);
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $idVisit);
        $ligneHorsForfait = new HorsForfaitLigne();
        $formSaisieHorsForfait = $this->createFraisHorsForfaitForm($derniereFiche, $ligneHorsForfait, $idVisit);
        $formSaisieForfait->handleRequest($request);

        if ($formSaisieForfait->isValid()) {
            
            if ($formSaisieForfait->get('Ajouter')->isClicked()){

                $data = $formSaisieForfait->getData();
                $ligneForfait = $derniereFiche->getForfaitLignes()[0];
                $frais = $ligneForfait->getFraisForfaits();

                foreach ($frais as $aFrais) {
                    $forfait = $aFrais->getForfait();
                    $quantite = $aFrais->getQuantite();
                    $newQuantite =  $data[$forfait->getLibelle()];
                    $aFrais->setQuantite($quantite + $newQuantite);
                }

                $em->flush();
                $this->changeDateModif($derniereFiche);

            }else{

                $data = $formSaisieForfait->getData();
                $ligneForfait = $derniereFiche->getForfaitLignes()[0];
                $frais = $ligneForfait->getFraisForfaits();

                foreach ($frais as $aFrais) {
                    $forfait = $aFrais->getForfait();
                    $quantite = $aFrais->getQuantite();
                    $newQuantite =  $data[$forfait->getLibelle()];
                    $aFrais->setQuantite($quantite - $newQuantite);
                }

                $em->flush();
                $this->changeDateModif($derniereFiche);
            }

            return $this->redirect($this->generateUrl('visiteur'));
        }

        return $this->generateViewSaisie($visiteur, $derniereFiche, $formSaisieForfait, $formSaisieHorsForfait);
    }

    /**
     * Show laste fiche and forms to create and update lignes when a new ligne hors forfait is created.
     *
     */
    public function createHorsForfaitLigneAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $idVisit = $session->get('id');
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);
        $derniereFiche = $this->getDerniereFiche($visiteur);
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $idVisit);
        $ligneHorsForfait = new HorsForfaitLigne();
        $formSaisieHorsForfait = $this->createFraisHorsForfaitForm($derniereFiche, $ligneHorsForfait, $idVisit);
        $formSaisieHorsForfait->handleRequest($request);

        if ($formSaisieHorsForfait->isValid()) {
            
            $em->persist($ligneHorsForfait);
            $em->flush();
            $this->changeDateModif($derniereFiche);
            return $this->redirect($this->generateUrl('visiteur'));
        }

        return $this->generateViewSaisie($visiteur, $derniereFiche, $formSaisieForfait, $formSaisieHorsForfait);
    }

    /**
     * Show laste fiche and forms to create and update lignes when a hors forfait ligne is edit.
     * The horsForfaitLigne form is charge whith the editing ligne. 
     *
     */
    public function editLigneAction()
    {   

        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $idVisit = $session->get('id');
        $idLigne = $session->get('idLigne');
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);
        $derniereFiche = $this->getDerniereFiche($visiteur);
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $idVisit);
        $ligneHorsForfait = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->find($idLigne);

        if (!$ligneHorsForfait) {

            throw $this->createNotFoundException('Unable to find HorsForfaitLigne entity.');
        }

        $formSaisieHorsForfait = $this->createUpdateLigneForm($derniereFiche, $ligneHorsForfait, $idVisit);
        $deleteForm = $this->createDeleteLigneForm($idLigne, $idVisit);

        return $this->render('GsbAppliFraisBundle:Visiteur:update.html.twig', array(
                'visiteur' => $visiteur,
                'fiche' => $derniereFiche,
                'formSaisieForfait' => $formSaisieForfait->createView(),
                'formSaisieHorsForfait' => $formSaisieHorsForfait->createView(),
                'formDelete' => $deleteForm->createView(),                
            ));
    }

    /**
     * Show laste fiche and forms to create and update lignes when a hor forfait ligne is deleted.
     *
     */
    public function deleteLigneAction(Request $request, $id)
    {   

        $session = $this->getRequest()->getSession();
        $idVisit = $session->get('id');
        $form = $this->createDeleteLigneForm($id, $idVisit);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);
        $derniereFiche = $this->getDerniereFiche($visiteur);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $ligne = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->find($id);

            if (!$ligne) {
                throw $this->createNotFoundException('Unable to find HorsForfaitLigne entity.');
            }

            $em->remove($ligne);
            $em->flush();
            $this->changeDateModif($derniereFiche);
        }

        return $this->redirect($this->generateUrl('visiteur'));
    }

    /**
     * Show laste fiche and forms to create and update lignes when a hors forfait ligne is update.
     *
     */
    public function updateLigneAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $idVisit = $session->get('id');
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);
        $derniereFiche = $this->getDerniereFiche($visiteur);
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $idVisit);
        $ligneHorsForfait = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->find($id);

        if (!$ligneHorsForfait) {
            throw $this->createNotFoundException('Unable to find HorsForfaitLigne entity.');
        }

        $formSaisieHorsForfait = $this->createUpdateLigneForm($derniereFiche, $ligneHorsForfait, $idVisit);
        $formSaisieHorsForfait->handleRequest($request);
        if ($formSaisieHorsForfait->isValid()) {
            $em->flush();
            $this->changeDateModif($derniereFiche);
            return $this->redirect($this->generateUrl('visiteur'));
        }

        $deleteForm = $this->createDeleteLigneForm($idLigne, $idVisit);

        return $this->render('GsbAppliFraisBundle:Visiteur:update.html.twig', array(
                'visiteur' => $visiteur,
                'fiche' => $derniereFiche,
                'formSaisieForfait' => $formSaisieForfait->createView(),
                'formSaisieHorsForfait' => $formSaisieHorsForfait->createView(),
                'formDelete' => $deleteForm->createView(),                
            ));
    }

    /**
     * Creates a form to update FraisForfait entity.
     *
     * @param Fiche $fiche The last fiche of visiteur
     * @param Integer $id The Visiteur id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createFraisForfaitForm(Fiche $fiche, $id)
    {	
        $forfaitLignes = $fiche->getForfaitLignes();
        $ligne = $forfaitLignes[0];

        $form = $this->createFormBuilder()
                ->setAction($this->generateUrl('visiteur_update_forfait_ligne', array('idLigne' => $ligne->getId(), 'idVisit' => $id)))
                ->setMethod('PUT')
                ->getForm();
            
        foreach ($forfaitLignes as $ligne){
            $listeFrais = $ligne->getFraisForfaits();
            foreach ($listeFrais as $frais) {
                $libelle = $frais->getForfait()->getLibelle();
                $form->add($libelle, 'integer', array(
                    'data' => 0,
                ));
            }
        }

        $form->add('Ajouter', 'submit');
        $form->add('Enlever', 'submit');

        return $form;
    }

    /**
     * Creates a form to create HorsFraisForfait entity.
     *
     * @param Fiche $fiche The last fiche of visiteur
     * @param HorsForfaitLigne $ligne A new empty HorsForfaitLigne entity
     * @param Integer $id The Visiteur id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createFraisHorsForfaitForm(Fiche $fiche, HorsForfaitLigne $ligne, $id)
    {	
    	$em = $this->getDoctrine()->getManager();
    	$statut = $em->getRepository('GsbAppliFraisBundle:Statut')->findOneByLibelle('En attente');
        $ligne->setFiche($fiche);
        $ligne->setStatut($statut);
        $form = $this->createForm(new SaisieHorsForfait(), $ligne, array(
            'action' => $this->generateUrl('visiteur_create_hors_forfait_ligne',  array('idVisit' => $id)),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Creates a form to delete HorsFraisForfait entity.
     *
     * @param Integer $idLigne The ligne id to delete
     * @param Integer $idVisit The Visiteur id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteLigneForm($idLigne, $idVisit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('visiteur_ligneHorsForfait_delete', array('id' => $idLigne, 'idVisit' => $idVisit)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }

    /**
     * Creates a form to update HorsFraisForfait entity.
     *
     * @param Fiche $fiche The last fiche of visiteur
     * @param HorsForfaitLigne $ligne The HorsForfaitLigne entity to update
     * @param Integer $idVisit The Visiteur id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createUpdateLigneForm(Fiche $fiche, HorsForfaitLigne $ligne, $idVisit)
    {  
        $form = $this->createForm(new SaisieHorsForfait(), $ligne, array(
            'action' => $this->generateUrl('visiteur_ligneHorsForfait_update',  array('idVisit' => $idVisit, 'id' => $ligne->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    /**
     * Get the last visiteur's fiche.
     *
     * @param Visiteur $visiteur The current visiteur
     *
     * @return Fiche The last visiteur's fiche 
     */
    private function getDerniereFiche ($visiteur)
    {	
    	$em = $this->getDoctrine()->getManager();
    	$date = new DateTime();
    	$fiches = $visiteur->getFiches();

    	if (sizeof($fiches) == 0){
        	$derniereFiche = $this->createNewFiche($visiteur);
        }else{
        	$derniereFiche = $fiches[sizeof($fiches)-1];
        }

        if ($derniereFiche->getDate()->format('Y-m') != $date->format('Y-m')){
            if ($derniereFiche->getEtat()->getLibelle() != 'Cloturée'){

                $etatClot = $em->getRepository('GsbAppliFraisBundle:Etat')->findOneByLibelle('Cloturée');
                $derniereFiche->setEtat($etatClot);
                $em->flush();
            }
            $derniereFiche = $this->createNewFiche($visiteur);

        }

        return $derniereFiche;
    }

    /**
     * Create a new fiche for the current visieur.
     *
     * @param Visiteur $visiteur The current visiteur
     *
     * @return Fiche The new current visiteur's fiche 
     */
    private function createNewFiche ($visiteur)
    {	
    	$em = $this->getDoctrine()->getManager();
    	$etat = $em->getRepository('GsbAppliFraisBundle:Etat')->findOneByLibelle('En cours');
    	$statut = $em->getRepository('GsbAppliFraisBundle:Statut')->findOneByLibelle('En attente');

        $forfaitNuit = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('nuit');
        $forfaitKm = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('km');
        $forfaitEtape = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('etape');
        $forfaitRepas = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('repas');   

    	$newFiche = new Fiche();
    	$newFiche->setDate(new DateTime());
    	$newFiche->setNbJustificatifs(0);
    	$newFiche->setDateModification(new DateTime());
    	$newFiche->setMontantValide(0);
    	$newFiche->setEmploye($visiteur);
    	$newFiche->setEtat($etat);

        $newLigneForfait = new ForfaitLigne();
        $newLigneForfait->setStatut($statut);
        $newLigneForfait->setFiche($newFiche);

        $newFraisNuit = new FraisForfait();
        $newFraisNuit->setQuantite(0);
        $newFraisNuit->setForfait($forfaitNuit);
        $newFraisNuit->setForfaitLigne($newLigneForfait);

        $newFraisKm = new FraisForfait();
        $newFraisKm->setQuantite(0);
        $newFraisKm->setForfait($forfaitKm);
        $newFraisKm->setForfaitLigne($newLigneForfait);

        $newFraisEtape = new FraisForfait();
        $newFraisEtape->setQuantite(0);
        $newFraisEtape->setForfait($forfaitEtape);
        $newFraisEtape->setForfaitLigne($newLigneForfait);

        $newFraisRepas = new FraisForfait();
        $newFraisRepas->setQuantite(0);
        $newFraisRepas->setForfait($forfaitRepas);
        $newFraisRepas->setForfaitLigne($newLigneForfait);

        $newLigneForfait->addFraisForfait($newFraisNuit);
        $newLigneForfait->addFraisForfait($newFraisRepas);
        $newLigneForfait->addFraisForfait($newFraisKm);
        $newLigneForfait->addFraisForfait($newFraisEtape);

        $newFiche->addForfaitLigne($newLigneForfait);
        //$em->persist($newFraisNuit);
        //$em->persist($newFraisKm);
        //$em->persist($newFraisEtape);
        //$em->persist($newFraisRepas);       
        //$em->persist($newLigneForfait);
        $em->persist($newFiche);
        $em->flush();

        return $newFiche;
    }

    /**
     * Generate the render of saisie visiteur.
     *
     * @param Visiteur $visiteur The current visiteur
     * @param Fiche $fiche The current fiche
     * @param \Symfony\Component\Form\Form $formSaisieForfait The form for ForfaitLigne entity
     * @param \Symfony\Component\Form\Form $formSaisieHorsForfait The form for HorsForfaitLigne entity
     *
     * @return Number The sum of ligneFraisForfait 
     */
    private function generateViewSaisie ($visiteur, $fiche, $formSaisieForfait, $formSaisieHorsForfait)
    {   

    	return $this->render('GsbAppliFraisBundle:Visiteur:saisie.html.twig', array(
                'visiteur' => $visiteur,
                'fiche' => $fiche,
                'formSaisieForfait' => $formSaisieForfait->createView(),
                'formSaisieHorsForfait' => $formSaisieHorsForfait->createView(),             
            ));
    }

    /**
     * Change DateModification attribut when fiche is update.
     *
     * @param Fiche $fiche The current fiche
     *
     */
    private function changeDateModif ($fiche){

        $em = $this->getDoctrine()->getManager();
        $fiche->setDateModification(new DateTime());
        $em->flush();
    }


    public function preeditLigneAction($idLigne)
    {   

        $session = $this->getRequest()->getSession();
        $session->set('idLigne', $idLigne);

        return $this->redirect($this->generateUrl('visiteur_edit'));
    }



    public function syncAction(Request $request)
    {   
        $file=$request->get('fileJson');

        $json=file_get_contents($_FILES['fileJson']['tmp_name']);
        //$json = '{"Fiche" : { "ForfaitLigne" : {"Nuit" : 2, "Etape" : 3, "Repas" : 4, "Km" : 1} , "HorsForfaitLigne" : [{"date" : "8-12-2015", "libelle" : "test 4", "montant" : 30},{"date" : "21-2-2015", "libelle" : "test 5", "montant" : 50}] }}';
        $majFiche = json_decode($json);
        $fraisForfait = $majFiche->{'Fiche'}->{'ForfaitLigne'};
        $fraisHorsForfait = $majFiche->{'Fiche'}->{'HorsForfaitLigne'};

        $session = $this->getRequest()->getSession();
        $id = $session->get('id');
        $em = $this->getDoctrine()->getManager();
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $derniereFiche = $this->getDerniereFiche($visiteur);

        $ligneForfait = $derniereFiche->getForfaitLignes()[0];
        $frais = $ligneForfait->getFraisForfaits();

        foreach ($frais as $aFrais) {
            $forfait = $aFrais->getForfait();
            $quantite = $aFrais->getQuantite();
            $newQuantite =  $fraisForfait->{$forfait};
            $aFrais->setQuantite($quantite + $newQuantite);
        }

        $statut = $em->getRepository('GsbAppliFraisBundle:Statut')->findOneByLibelle('En attente');
        foreach ($fraisHorsForfait as $nvHf) {
            $nvFraisHorsForfait = new HorsForfaitLigne();
            $nvFraisHorsForfait->setFiche($derniereFiche);
            $nvFraisHorsForfait->setDate(new DateTime($nvHf->{'date'}));
            $nvFraisHorsForfait->setLibelle($nvHf->{'libelle'});
            $nvFraisHorsForfait->setMontant($nvHf->{'montant'});
            $nvFraisHorsForfait->setStatut($statut);
            $em->persist($nvFraisHorsForfait);
            $derniereFiche->addHorsForfaitLigne($nvFraisHorsForfait);
        }

        $em->flush();
        return $this->redirect($this->generateUrl('visiteur'));    
    }
}	


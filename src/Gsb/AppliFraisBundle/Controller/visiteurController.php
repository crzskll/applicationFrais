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
	public function saisieAction($id)
    {   
    	$date = new DateTime();

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
    public function updateForfaitLigneAction(Request $request, $idLigne, $idVisit)
    {
        $em = $this->getDoctrine()->getManager();

        $ligne = $em->getRepository('GsbAppliFraisBundle:ForfaitLigne')->find($idLigne);

        if (!$ligne) {
            throw $this->createNotFoundException('Unable to find ForfaitLigne entity.');
        }

        //Récupération du visiteur connecté
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);

        //Récupération de la fiche en cours ou création d'une nouvelle fiche
        $derniereFiche = $this->getDerniereFiche($visiteur);

        //Création form forfait
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $idVisit);

        //Création form horsForfait
        $ligneHorsForfait = new HorsForfaitLigne();
        $formSaisieHorsForfait = $this->createFraisHorsForfaitForm($derniereFiche, $ligneHorsForfait, $idVisit);

        //Récupération de l'envoi du formulaire
        $formSaisieForfait->handleRequest($request);

        //Verrification du formulaire
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

            return $this->redirect($this->generateUrl('visiteur', array('id' => $idVisit)));
        }

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->generateViewSaisie($visiteur, $derniereFiche, $formSaisieForfait, $formSaisieHorsForfait);
    }

    /**
     * Show laste fiche and forms to create and update lignes when a new ligne hors forfait is created.
     *
     */
    public function createHorsForfaitLigneAction(Request $request, $idVisit)
    {   
        $em = $this->getDoctrine()->getManager();

        //Récupération du visiteur connecté
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);

        //Récupération de la fiche en cours ou création d'une nouvelle fiche
        $derniereFiche = $this->getDerniereFiche($visiteur);

        //Création form forfait
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $idVisit);

        //Création form horsForfait
        $ligneHorsForfait = new HorsForfaitLigne();
        $formSaisieHorsForfait = $this->createFraisHorsForfaitForm($derniereFiche, $ligneHorsForfait, $idVisit);

        //Récupération de l'envoi du formulaire
        $formSaisieHorsForfait->handleRequest($request);

        //Verrification du formulaire
        if ($formSaisieHorsForfait->isValid()) {
            
            $em->persist($ligneHorsForfait);
            $em->flush();
            $this->changeDateModif($derniereFiche);
            return $this->redirect($this->generateUrl('visiteur', array('id' => $idVisit)));
        }

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->generateViewSaisie($visiteur, $derniereFiche, $formSaisieForfait, $formSaisieHorsForfait);
    }

    /**
     * Show laste fiche and forms to create and update lignes when a hors forfait ligne is edit.
     * The horsForfaitLigne form is charge whith the editing ligne. 
     *
     */
    public function editLigneAction($idVisit, $idLigne)
    {   

        //Récupération de la base de données
        $em = $this->getDoctrine()->getManager();

        //Récupération du visiteur connecté
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);

        //Récupération de la fiche en cours ou création d'une nouvelle fiche
        $derniereFiche = $this->getDerniereFiche($visiteur);
        
        //Création form forfait
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $idVisit);

        //Création form horsForfait
        $ligneHorsForfait = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->find($idLigne);

        if (!$ligneHorsForfait) {
            throw $this->createNotFoundException('Unable to find HorsForfaitLigne entity.');
        }

        $formSaisieHorsForfait = $this->createUpdateLigneForm($derniereFiche, $ligneHorsForfait, $idVisit);

        //Création form delete
        $deleteForm = $this->createDeleteLigneForm($idLigne, $idVisit);

        //Calcul des totaux
        $totFraisForfait = $this->calculateFraisForfait($derniereFiche);

        return $this->render('GsbAppliFraisBundle:Visiteur:update.html.twig', array(
                'visiteur' => $visiteur,
                'fiche' => $derniereFiche,
                'formSaisieForfait' => $formSaisieForfait->createView(),
                'formSaisieHorsForfait' => $formSaisieHorsForfait->createView(),
                'totFraisForfait' => $totFraisForfait,
                'formDelete' => $deleteForm->createView(),                
            ));
    }

    /**
     * Show laste fiche and forms to create and update lignes when a hor forfait ligne is deleted.
     *
     */
    public function deleteLigneAction(Request $request, $idVisit, $id)
    {   
        $form = $this->createDeleteLigneForm($id, $idVisit);
        $form->handleRequest($request);

        //Récupération de la base de données
        $em = $this->getDoctrine()->getManager();

        //Récupération du visiteur connecté
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);

        //Récupération de la fiche en cours ou création d'une nouvelle fiche
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

        return $this->redirect($this->generateUrl('visiteur', array('id' => $idVisit)));
    }

    /**
     * Show laste fiche and forms to create and update lignes when a hors forfait ligne is update.
     *
     */
    public function updateLigneAction(Request $request, $idVisit, $id)
    {
         //Récupération de la base de données
        $em = $this->getDoctrine()->getManager();

        //Récupération du visiteur connecté
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);

        //Récupération de la fiche en cours ou création d'une nouvelle fiche
        $derniereFiche = $this->getDerniereFiche($visiteur);
        
        //Création form forfait
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $idVisit);

        //Création form horsForfait
        $ligneHorsForfait = $em->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')->find($id);

        if (!$ligneHorsForfait) {
            throw $this->createNotFoundException('Unable to find HorsForfaitLigne entity.');
        }

        $formSaisieHorsForfait = $this->createUpdateLigneForm($derniereFiche, $ligneHorsForfait, $idVisit);
        $formSaisieHorsForfait->handleRequest($request);

        //Verrification form update
        if ($formSaisieHorsForfait->isValid()) {
            $em->flush();
            $this->changeDateModif($derniereFiche);
            return $this->redirect($this->generateUrl('visiteur', array('id' => $idVisit)));
        }

        //Création form delete
        $deleteForm = $this->createDeleteLigneForm($idLigne, $idVisit);

        //Calcul des totaux
        $totFraisForfait = $this->calculateFraisForfait($derniereFiche);

        return $this->render('GsbAppliFraisBundle:Visiteur:update.html.twig', array(
                'visiteur' => $visiteur,
                'fiche' => $derniereFiche,
                'formSaisieForfait' => $formSaisieForfait->createView(),
                'formSaisieHorsForfait' => $formSaisieHorsForfait->createView(),
                'totFraisForfait' => $totFraisForfait, 
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
            ->add('submit', 'submit', array('label' => 'Delete'))
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

    	$em->persist($newFiche);
        $em->flush();

        $newLigneForfait = new ForfaitLigne();
        $newLigneForfait->setStatut($statut);
        $newLigneForfait->setFiche($newFiche);

        $em->persist($newLigneForfait);
        $em->flush();

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

        $em->persist($newFraisNuit);
        $em->persist($newFraisKm);
        $em->persist($newFraisEtape);
        $em->persist($newFraisRepas);       

        $em->flush();

        return $newFiche;
    }

    /**
     * Calculate the value of ligneFraisForfait.
     *
     * @param Fiche $fiche The current fiche
     *
     * @return Number The sum of ligneFraisForfait 
     */
    private function calculateFraisForfait ($fiche)
    {
        $em = $this->getDoctrine()->getManager();

        $lignesForfait = $fiche->getForfaitLignes();

        $tot = 0;

        foreach ($lignesForfait as $ligne) {
            $listeFrais = $ligne->getFraisForfaits();
            foreach ($listeFrais as $frais) {
                $montant = $frais->getForfait()->getMontant();
                $quantite = $frais->getQuantite();

                $tot += $montant * $quantite;
            }
        }

        return $tot;
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

        $totFraisForfait = $this->calculateFraisForfait($fiche);

    	return $this->render('GsbAppliFraisBundle:Visiteur:saisie.html.twig', array(
                'visiteur' => $visiteur,
                'fiche' => $fiche,
                'formSaisieForfait' => $formSaisieForfait->createView(),
                'formSaisieHorsForfait' => $formSaisieHorsForfait->createView(),
                'totFraisForfait' => $totFraisForfait,                
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
}	


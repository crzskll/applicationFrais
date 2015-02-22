<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gsb\AppliFraisBundle\Form\SaisieForfait;
use Gsb\AppliFraisBundle\Form\SaisieHorsForfait;

use Gsb\AppliFraisBundle\Entity\ForfaitLigne;
use Gsb\AppliFraisBundle\Entity\HorsForfaitLigne;
use Gsb\AppliFraisBundle\Entity\Fiche;

use \DateTime;

class VisiteurController extends Controller{

	public function saisieAction($id)
    {   
    	$date = new DateTime();

    	//Récupération de la base de données
        $em = $this->getDoctrine()->getManager();

        $ficheEnCours = false;

        //Récupération du visiteur connecté
        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);

        //Récupération de la fiche en cours ou création d'une nouvelle fiche
        $derniereFiche = $this->getDerniereFiche($visiteur);
        
        //Création form forfait
        $formSaisieForfait = $this->createFraisForfaitForm($derniereFiche, $id);

        //Création form horsForfait
        $ligneHorsForfait = new HorsForfaitLigne();
        $formSaisieHorsForfait = $this->createFraisHorsForfaitForm($derniereFiche, $ligneHorsForfait, $id);
        
        //Control du formulair ligneForfait
        if ($formSaisieForfait->isValid()) {
            
            $em->flush();

            return $this->redirect($this->generateUrl('visiteur', array('id' => $id)));
        }

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->generateViewSaisie($visiteur, $derniereFiche, $formSaisieForfait, $formSaisieHorsForfait);
        
    }

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
            
            $em->flush();

            return $this->redirect($this->generateUrl('visiteur', array('id' => $idVisit)));
        }

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->generateViewSaisie($visiteur, $derniereFiche, $formSaisieForfait, $formSaisieHorsForfait);
    }

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

            return $this->redirect($this->generateUrl('visiteur', array('id' => $idVisit)));
        }

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->generateViewSaisie($visiteur, $derniereFiche, $formSaisieForfait, $formSaisieHorsForfait);
    }

    //Methode de création du formulair de saisie de ligne forfait
    private function createFraisForfaitForm(Fiche $fiche, $id)
    {	
    	$lignesForfait = $fiche->getForfaitLignes();
    	$ligne = $lignesForfait[0];

        $form = $this->createForm(new SaisieForfait(), $ligne, array(
            'action' => $this->generateUrl('visiteur_update_forfait_ligne', array('idLigne' => $ligne->getId(), 'idVisit' => $id)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

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
                $derniereFiche = $this->createNewFiche($visiteur);
            }
        }

        return $derniereFiche;
    }

    private function createNewFiche ($visiteur)
    {	
    	$em = $this->getDoctrine()->getManager();
    	$etat = $em->getRepository('GsbAppliFraisBundle:Etat')->findOneByLibelle('En cours');
    	$statut = $em->getRepository('GsbAppliFraisBundle:Statut')->findOneByLibelle('En attente');

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
        $newLigneForfait->setNbKm(0);
        $newLigneForfait->setNbEtape(0);
        $newLigneForfait->setNbNuit(0);
        $newLigneForfait->setNbRepas(0);
        $newLigneForfait->setStatut($statut);
        $newLigneForfait->setFiche($newFiche);

        $em->persist($newLigneForfait);
        $em->flush();

        return $newFiche;
    }

    private function calculateFraisForfait ($fiche)
    {
        $em = $this->getDoctrine()->getManager();

        $forfaitNuit = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('nuit');
        $forfaitRepas = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('repas');
        $forfaitKm = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('km');
        $forfaitEtape = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('etape');

        $lignesForfait = $fiche->getForfaitLignes();

        $tot = 0;
        foreach ($lignesForfait as $ligne) {
            $nbKm = $ligne->getNbKm();             
            $nbEtape = $ligne->getNbEtape(); 
            $nbNuit = $ligne->getNbNuit(); 
            $nbRepas = $ligne->getNbRepas();   
            
            $tot = $nbKm*$forfaitKm->getMontant() + $nbEtape*$forfaitEtape->getMontant() + $nbNuit*$forfaitNuit->getMontant() + $nbRepas*$forfaitRepas->getMontant();
        }

        return $tot;
    }

    private function calculateFraisHorsForfait ($fiche){

        $em = $this->getDoctrine()->getManager();

        $lignesHorsForfait = $fiche->getHorsForfaitLignes();

        $tot = 0;
        foreach ($lignesHorsForfait as $ligne) {
            $tot += $ligne->getMontant();
        }

        return $tot;
    }     

    private function generateViewSaisie ($visiteur, $fiche, $formSaisieForfait, $formSaisieHorsForfait)
    {   
        $em = $this->getDoctrine()->getManager();

        $forfaitNuit = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('nuit');
        $forfaitRepas = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('repas');
        $forfaitKm = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('km');
        $forfaitEtape = $em->getRepository('GsbAppliFraisBundle:Forfait')->findOneByLibelle('etape');

        $totFraisForfait = $this->calculateFraisForfait($fiche);
        $totFraisHorsForfait = $this->calculateFraisHorsForfait($fiche);

    	return $this->render('GsbAppliFraisBundle:Visiteur:saisie.html.twig', array(
                'visiteur' => $visiteur,
                'fiche' => $fiche,
                'formSaisieForfait' => $formSaisieForfait->createView(),
                'formSaisieHorsForfait' => $formSaisieHorsForfait->createView(),
                'forfaitNuit' => $forfaitNuit, 
                'forfaitRepas' => $forfaitRepas, 
                'forfaitKm' => $forfaitKm, 
                'forfaitEtape' => $forfaitEtape,
                'totFraisForfait' => $totFraisForfait,
                'totFraisHorsForfait' => $totFraisHorsForfait,                 
            ));
    }
}	


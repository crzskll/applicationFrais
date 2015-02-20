<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gsb\AppliFraisBundle\Form\SaisieForfait;
use Gsb\AppliFraisBundle\Form\SaisieHorsForfait;

use Gsb\AppliFraisBundle\Entity\ForfaitLigne;
use Gsb\AppliFraisBundle\Form\ForfaitLigneType;

use \DateTime;

class VisiteurController extends Controller
{
    public function saisieAction($id)
    {   
        $ficheEnCours = false;

        $em = $this->getDoctrine()->getManager();

        $date = new DateTime();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $fiches = $visiteur->getFiches();
        $derniereFiche = $fiches[sizeof($fiches)-1];
        
        $lignesForfait = $derniereFiche->getForfaitLignes();
        $formSaisieForfait = $this->createFraisForm($lignesForfait[0], $id);
        $formSaisieHorsForfait = $this->createForm(new SaisieHorsForfait());

        if ($derniereFiche->getDate()->format('Y-m') != $date->format('Y-m')){
            if ($derniereFiche->getEtat()->getLibelle() != 'Cloturée'){

                $etatClot = $em->getRepository('GsbAppliFraisBundle:Etat')->findOneByLibelle('Cloturée');

                $derniereFiche->setEtat($etatClot);
                $em->flush();
            }
        }

        if ($formSaisieForfait->isValid()) {
            
            $em->flush();

            return $this->redirect($this->generateUrl('visiteur', array('id' => $id)));
        }


        return $this->render('GsbAppliFraisBundle:Visiteur:saisie.html.twig', array(
                'visiteur' => $visiteur,
                'fiche' => $derniereFiche,
                'formSaisieForfait' => $formSaisieForfait->createView(),
                'formSaisieHorsForfait' => $formSaisieHorsForfait->createView(),
            ));
    }
    
    public function historiqueAction()
    {
        return $this->render('GsbAppliFraisBundle:Default:historique.html.twig');
    }

    private function createFraisForm(ForfaitLigne $ligne, $id)
    {
        $form = $this->createForm(new SaisieForfait(), $ligne, array(
            'action' => $this->generateUrl('visiteur_update_forfait_ligne', array('idLigne' => $ligne->getId(), 'idVisit' => $id)),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    public function updateForfaitLigneAction(Request $request, $idLigne, $idVisit)
    {
        $em = $this->getDoctrine()->getManager();

        $ligne = $em->getRepository('GsbAppliFraisBundle:ForfaitLigne')->find($idLigne);

        if (!$ligne) {
            throw $this->createNotFoundException('Unable to find ForfaitLigne entity.');
        }

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);
        $fiches = $visiteur->getFiches();
        $derniereFiche = $fiches[sizeof($fiches)-1];
        $lignesForfait = $derniereFiche->getForfaitLignes();
        $formSaisieForfait = $this->createFraisForm($lignesForfait[0], $idVisit);
        $formSaisieHorsForfait = $this->createForm(new SaisieHorsForfait());

        $formSaisieForfait->handleRequest($request);

        if ($formSaisieForfait->isValid()) {
            
            $em->flush();

            return $this->redirect($this->generateUrl('visiteur', array('id' => $idVisit)));
        }

        return $this->render('GsbAppliFraisBundle:Visiteur:saisie.html.twig', array(
            'visiteur' => $visiteur,
            'fiche' => $derniereFiche,
            'formSaisieForfait' => $formSaisieForfait->createView(),
            'formSaisieHorsForfait' => $formSaisieHorsForfait->createView(),
        ));
    }
    
}

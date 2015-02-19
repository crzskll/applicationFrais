<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gsb\AppliFraisBundle\Form\SaisieForfait;
use Gsb\AppliFraisBundle\Form\SaisieHorsForfait;

use \DateTime;

class VisiteurController extends Controller
{
    public function saisieAction($id)
    {   
        $ficheEnCours = false;

        $em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $fiches = $visiteur->getFiches();
        $derniereFiche = $fiches[sizeof($fiches)-1];
        $date = new DateTime();
        $formSaisieForfait = $this->createForm(new SaisieForfait());
        $formSaisieHorsForfait = $this->createForm(new SaisieHorsForfait());

        if ($derniereFiche->getDate()->format('Y-m') != $date->format('Y-m')){
            if ($derniereFiche->getEtat()->getLibelle() != 'Cloturée'){

                $etatClot = $em->getRepository('GsbAppliFraisBundle:Employe')->findByLibelle('Cloturée');

                $derniereFiche->setEtat($etatClot);
            }
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
}

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

class HistoriqueController extends Controller{

	public function indexAction($id)
    {   
    	$em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $fiches = $visiteur->getFiches();

        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
            ));
        
    }
}	


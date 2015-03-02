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
class ComptableController extends Controller{

    /**
     * Show laste fiche and forms to create and update lignes when init page.
     *
     */
	public function indexAction()
    {   
        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptable.html.twig', array(
            ));
        
    }
}	


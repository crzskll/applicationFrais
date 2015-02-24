<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gsb\AppliFraisBundle\Form\FindDate;
use Gsb\AppliFraisBundle\Form\SaisieHorsForfait;

use Gsb\AppliFraisBundle\Entity\ForfaitLigne;
use Gsb\AppliFraisBundle\Entity\HorsForfaitLigne;
use Gsb\AppliFraisBundle\Entity\Fiche;

use \DateTime;

/**
 * Historiaue controller.
 *
 */
class HistoriqueController extends Controller{

    /**
     * Lists all fiche of vurrent visiteur.
     *
     */
	public function indexAction($id)
    {   
    	$em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $fiches = $visiteur->getFiches();
        $formDate = $this->createFindDateForm($visiteur);

        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formDate' => $formDate->createView(),
            ));
        
    }

    public function testAction()
    {   
        $em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find(25);
        $fiches = $visiteur->getFiches();
        $formDate = $this->createFindDateForm($visiteur);

        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formDate' => $formDate->createView(),
            ));
        
    }

    /**
     * Creates a form to find fiche by date.
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createFindDateForm($visiteur)
    {   
        $date = $visiteur->getDateEmbauche();

        $form = $this->createForm(new FindDate(array('date' => $date)), array(
            'action' => $this->generateUrl('historique_test'),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Find'));

        return $form;
    }
}	


<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
	public function indexAction(Request $request, $id)
    {   
    	$em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $fiches = $visiteur->getFiches();
        $formDate = $this->createFindDateForm($visiteur);

        $formDate->handleRequest($request);


        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formDate' => $formDate->createView(),
            ));
        
    }

    public function findDateAction(Request $request, $id)
    {   
        $em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $fiches = $visiteur->getFiches();
        $formDate = $this->createFindDateForm($visiteur);

        $formDate->handleRequest($request);

        if($formDate->isValid()){

            $data = $formDate->getData();
            $dateDeb = $data['debut'];
            $dateFin = $data['fin'];

            $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('GsbAppliFraisBundle:Fiche')
              ;
  
            $fiches = $repository->ficheByDate($visiteur, $dateDeb, $dateFin);

             return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formDate' => $formDate->createView(),
            ));
        }

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

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historique_test', array('id' => $visiteur->getId())))
            ->setMethod('POST')
            ->add('debut', 'date', array('data' => $date))
            ->add('fin', 'date', array('data' => new DateTime() ))
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}	


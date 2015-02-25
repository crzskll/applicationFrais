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
        $formFiche = $this->createFindFicheForm($visiteur);

        $formFiche->handleRequest($request);


        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formDate' => $formFiche->createView(),
            ));
        
    }

    public function findDateAction(Request $request, $id)
    {   
        $em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $fiches = $visiteur->getFiches();
        $formFiche = $this->createFindFicheForm($visiteur);

        $formFiche->handleRequest($request);

        if($formFiche->isValid()){

            $data = $formFiche->getData();
            $dateDeb = $data['debut'];
            $dateFin = $data['fin'];
            $etat = $data['etat'];

            $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('GsbAppliFraisBundle:Fiche')
              ;
            
            if ($etat){
                $fiches = $repository->ficheByDateEtat($visiteur, $dateDeb, $dateFin, $etat);
            }else{
                $fiches = $repository->ficheByDate($visiteur, $dateDeb, $dateFin);    
            }
            

             return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formDate' => $formFiche->createView(),
            ));
        }

        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formDate' => $formFiche->createView(),
            ));
        
    }

    /**
     * Creates a form to find fiche by date.
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createFindFicheForm($visiteur)
    {   
        $date = $visiteur->getDateEmbauche();

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historique_test', array('id' => $visiteur->getId())))
            ->setMethod('POST')
            ->add('debut', 'date', array('data' => $date))
            ->add('fin', 'date', array('data' => new DateTime() ))
            ->add('etat', 'entity', array(
                'class' => 'GsbAppliFraisBundle:Etat',
                'property' => 'libelle',
                'required' => false,
                'empty_value' => 'Tous',
            ))
            ->add('submit', 'submit', array('label' => 'Find'))
            ->getForm()
        ;
    }
}	


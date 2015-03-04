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

	public function indexAction()
    {   
        $em = $this->getDoctrine()->getManager();

        $etat = $em->getRepository('GsbAppliFraisBundle:Etat')->findOneByLibelle('Cloturée');

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('GsbAppliFraisBundle:Fiche')
              ;

        $fiches =  $repository->ficheByEtat($etat);

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptable.html.twig', array(
            'fiches' => $fiches,
            ));
        
    }

    public function showAction($idFiche)
    {   
        $em = $this->getDoctrine()->getManager();

        $fiche = $em->getRepository('GsbAppliFraisBundle:Fiche')->find($idFiche);

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptableShow.html.twig', array(
            'fiche' => $fiche,
            ));
        
    }

    private function createFindFicheForm()
    {   

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comptable_find_visit', array()))
            ->setMethod('POST')
            ->add('visiteur', 'entity', array(
                'class' => 'GsbAppliFraisBundle:Employe',
                'property' => 'nom',
            ))
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


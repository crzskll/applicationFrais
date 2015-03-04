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
use Doctrine\ORM\EntityRepository;

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
        $formFindVisiteur = $this->createFindFicheForm();

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptable.html.twig', array(
            'fiches' => $fiches,
            'form' => $formFindVisiteur->createView(),
            ));
        
    }

    public function showAction($idFiche)
    {   
        $em = $this->getDoctrine()->getManager();

        $fiche = $em->getRepository('GsbAppliFraisBundle:Fiche')->find($idFiche);
        $formFindVisiteur = $this->createFindFicheForm();

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptableShow.html.twig', array(
            'fiche' => $fiche,
            'form' => $formFindVisiteur->createView(),
            ));
        
    }

    public function findAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();

        $formFindVisiteur = $this->createFindFicheForm();
        $formFindVisiteur->handleRequest($request);
        $etat = $em->getRepository('GsbAppliFraisBundle:Etat')->findOneByLibelle('Cloturée');

        $repositoryFiche = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('GsbAppliFraisBundle:Fiche')
              ;

        $fiches =  $repositoryFiche->ficheByEtat($etat);

        if($formFindVisiteur->isValid()){

            $data = $formFindVisiteur->getData();
            $dateDeb = $data['debut'];
            $dateFin = $data['fin'];
            $etat= $data['etat'];
            $visiteur = $data['visiteur'];

            if ($etat){
                $fiches = $repositoryFiche->ficheByDateEtat($visiteur, $dateDeb, $dateFin, $etat);
            }else{
                $fiches = $repositoryFiche->ficheComptable($visiteur, $dateDeb, $dateFin);
            }

            return $this->render('GsbAppliFraisBundle:Comptable:comptable.html.twig', array(
            'fiches' => $fiches,
            'form' => $formFindVisiteur->createView(),
            ));
        }

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptable.html.twig', array(
            'fiches' => $fiches,
            'form' => $formFindVisiteur->createView(),
            ));
        
    }

    private function createFindFicheForm()
    {   

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comptable_find_visit', array()))
            ->setMethod('POST')
            ->add('debut', 'date', array('format' => 'dd MMM yyyy',))
            ->add('fin', 'date', array('data' => new DateTime(), 'format' => 'dd MMM yyyy', ))
            ->add('visiteur', 'entity', array(
                'class' => 'GsbAppliFraisBundle:Employe',
                'property' => 'nom',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->where('e.poste = :visiteur')
                            ->setParameter('visiteur', 'Visiteur');
                    },
            ))
            ->add('etat', 'entity', array(
                'class' => 'GsbAppliFraisBundle:Etat',
                'property' => 'libelle',
                'required' => false,
                'empty_value' => 'Tous',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->where('e.libelle != :enCours')
                            ->setParameter('enCours', 'En cours');
                    },
            ))
            ->add('submit', 'submit', array('label' => 'Find'))
            ->getForm()
        ;
    }
}	


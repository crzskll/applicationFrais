<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gsb\AppliFraisBundle\Form\SaisieForfait;
use Gsb\AppliFraisBundle\Form\SaisieHorsForfait;
use Gsb\AppliFraisBundle\Form\majFiche;

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
        $formFindVisiteur = $this->createFindVisiteurFicheForm();
        $formFindFiche = $this->createFindFicheForm();

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptable.html.twig', array(
            'fiches' => $fiches,
            'formVisit' => $formFindVisiteur->createView(),
            'formFiche' => $formFindFiche->createView(),
            ));
        
    }

    public function showAction()
    {   
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $idFiche = $session->get('idFiche');
        $fiche = $em->getRepository('GsbAppliFraisBundle:Fiche')->find($idFiche);
        $formFindVisiteur = $this->createFindVisiteurFicheForm();
        $formFindFiche = $this->createFindFicheForm();

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptableShow.html.twig', array(
            'fiche' => $fiche,
            'formVisit' => $formFindVisiteur->createView(),
            'formFiche' => $formFindFiche->createView(),
            ));
        
    }

    public function miseAJourAction()
    {   
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $idFiche = $session->get('idFiche');
        $fiche = $em->getRepository('GsbAppliFraisBundle:Fiche')->find($idFiche);
        $formFindVisiteur = $this->createFindVisiteurFicheForm();
        $formFindFiche = $this->createFindFicheForm();

        $formMaj = $this->createForm(new majFiche(), $fiche);

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptableMaj.html.twig', array(
            'fiche' => $fiche,
            'formVisit' => $formFindVisiteur->createView(),
            'formFiche' => $formFindFiche->createView(),
            'formMaj' => $formMaj->createView(),
            ));
        
    }

    public function saveMajAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();
        $session = $this->getRequest()->getSession();
        $idFiche = $session->get('idFiche');
        $fiche = $em->getRepository('GsbAppliFraisBundle:Fiche')->find($idFiche);
        $formFindVisiteur = $this->createFindVisiteurFicheForm();
        $formFindFiche = $this->createFindFicheForm();

        $formMaj = $this->createForm(new majFiche(), $fiche);
        $formMaj->handleRequest($request);

        if($formMaj->isValid()){

            $em->flush();

            return $this->redirect($this->generateUrl('comptable_show_fiche'));
        }

        return $this->render('GsbAppliFraisBundle:Comptable:comptableMaj.html.twig', array(
            'fiche' => $fiche,
            'formVisit' => $formFindVisiteur->createView(),
            'formFiche' => $formFindFiche->createView(),
            'formMaj' => $formMaj->createView(),
            ));
        
    }

    public function findVisiteurAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();

        $formFindVisiteur = $this->createFindVisiteurFicheForm();
        $formFindVisiteur->handleRequest($request);

        $formFindFiche = $this->createFindFicheForm();
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
            'formVisit' => $formFindVisiteur->createView(),
            'formFiche' => $formFindFiche->createView(),
            ));
        }

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptable.html.twig', array(
            'fiches' => $fiches,
            'formVisit' => $formFindVisiteur->createView(),
            'formFiche' => $formFindFiche->createView(),
            ));
        
    }

    public function findAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();

        $formFindVisiteur = $this->createFindVisiteurFicheForm();

        $formFindFiche = $this->createFindFicheForm();
        $formFindFiche->handleRequest($request);

        $etat = $em->getRepository('GsbAppliFraisBundle:Etat')->findOneByLibelle('Cloturée');

        $repositoryFiche = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('GsbAppliFraisBundle:Fiche')
              ;

        if($formFindFiche->isValid()){

            $data = $formFindFiche->getData();
            $dateDeb = $data['debut'];
            $dateFin = $data['fin'];
            $etat= $data['etat'];

            $fiches = $repositoryFiche->ficheAllByDateEtat($dateDeb, $dateFin, $etat);
            

            return $this->render('GsbAppliFraisBundle:Comptable:comptable.html.twig', array(
            'fiches' => $fiches,
            'formVisit' => $formFindVisiteur->createView(),
            'formFiche' => $formFindFiche->createView(),
            ));
        }

        //Retourne la vue avec le visiteur, la fiche en cours et les formulaires de saisie
        return $this->render('GsbAppliFraisBundle:Comptable:comptable.html.twig', array(
            'fiches' => $fiches,
            'formVisit' => $formFindVisiteur->createView(),
            'formFiche' => $formFindFiche->createView(),
            ));
        
    }



    private function createFindVisiteurFicheForm()
    {   

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comptable_find_visit', array()))
            ->setMethod('POST')
            ->add('debut', 'date', 
                array('format' => 'dd MMM yyyy',
                    'days' => range(1, 1)))
            ->add('fin', 'date', 
                array('data' => new DateTime(), 
                    'format' => 'dd MMM yyyy',
                    'days' => range(28, 28) ))
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
            ->add('submit', 'submit', array('label' => 'Chercher'))
            ->getForm()
        ;
    }

    private function createFindFicheForm()
    {   

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comptable_find', array()))
            ->setMethod('POST')
            ->add('debut', 'date', 
                array('format' => 'dd MMM yyyy',
                    'days' => range(1, 1)))
            ->add('fin', 'date', 
                array('data' => new DateTime(), 
                    'format' => 'dd MMM yyyy',
                    'days' => range(28, 28) ))
            ->add('etat', 'entity', array(
                'class' => 'GsbAppliFraisBundle:Etat',
                'property' => 'libelle',
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('e')
                        ->where('e.libelle != :enCours')
                            ->setParameter('enCours', 'En cours');
                    },
            ))
            ->add('submit', 'submit', array('label' => 'Chercher'))
            ->getForm()
        ;
    }

    private function createMajForm()
    {   

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comptable_maj_fiche', array()))
            ->setMethod('POST')
            ->add('statut', 'entity', array(
                'class' => 'GsbAppliFraisBundle:Statut',
                'property' => 'libelle',
            ))
            ->add('commentaire', 'textarea')
            ->add('id', 'integer')
            ->getForm()
        ;
    }

    public function loadshowAction($idFiche)
    {   
        $session = $this->getRequest()->getSession();
        $session->set('idFiche', $idFiche);
        
        return $this->redirect($this->generateUrl('comptable_show_fiche'));
    }
}	


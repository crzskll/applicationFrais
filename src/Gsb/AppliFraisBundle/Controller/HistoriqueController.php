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
        $formLigne = $this->createFindLigneForm($visiteur);


        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formFiche' => $formFiche->createView(),
                'formLigne' => $formLigne->createView(),
            ));
        
    }

    public function findFicheAction(Request $request, $id)
    {   
        $em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $fiches = $visiteur->getFiches();
        $formFiche = $this->createFindFicheForm($visiteur);
        $formLigne = $this->createFindLigneForm($visiteur);

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
                'formFiche' => $formFiche->createView(),
                'formLigne' => $formLigne->createView(),
            ));
        }

        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formFiche' => $formFiche->createView(),
                'formLigne' => $formLigne->createView(),
            ));
        
    }

    public function findLigneAction(Request $request, $id)
    {   
        $em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $fiches = $visiteur->getFiches();
        $formFiche = $this->createFindFicheForm($visiteur);
        $formLigne = $this->createFindLigneForm($visiteur);

        $formLigne->handleRequest($request);


        if($formLigne->isValid()){

            $data = $formLigne->getData();
            $dateDeb = $data['debut'];
            $dateFin = $data['fin'];
            $statut= $data['statut'];
            $type = $data['type'];

            $repositoryForfait = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('GsbAppliFraisBundle:ForfaitLigne')
              ;

            $repositoryHorsForfait = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('GsbAppliFraisBundle:HorsForfaitLigne')
              ;

            if ($statut){
                $lignesForfait = $repositoryForfait->ligneByDateStatut($visiteur, $dateDeb, $dateFin, $statut);
                $lignesHorsForfait = $repositoryHorsForfait->ligneByDateStatut($visiteur, $dateDeb, $dateFin, $statut);
            }else{
                $lignesForfait = $repositoryForfait->ligneByDate($visiteur, $dateDeb, $dateFin); 
                $lignesHorsForfait = $repositoryHorsForfait->ligneByDate($visiteur, $dateDeb, $dateFin);   
            }

            switch ($type)
            { 
                case 'Toutes':
                break;
                
                case 'Forfait': 
                    $lignesHorsForfait = array();
                break;
                
                case 'horsForfait': 
                    $lignesForfait = array();
                break;
            }

             return $this->render('GsbAppliFraisBundle:Visiteur:ligneHistorique.html.twig', array(
                'visiteur' => $visiteur,
                'lignesForfait' => $lignesForfait,
                'lignesHorsForfait' => $lignesHorsForfait,
                'formFiche' => $formFiche->createView(),
                'formLigne' => $formLigne->createView(),
                'type' => $type,
            ));
        }

        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formFiche' => $formFiche->createView(),
                'formLigne' => $formLigne->createView(),
            ));
        
    }

    public function showAction($idVisit, $idFiche)
    {
        $em = $this->getDoctrine()->getManager();

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($idVisit);
        $fiche = $em->getRepository('GsbAppliFraisBundle:Fiche')->find($idFiche);
        $formFiche = $this->createFindFicheForm($visiteur);
        $formLigne = $this->createFindLigneForm($visiteur);


        return $this->render('GsbAppliFraisBundle:Visiteur:showHistorique.html.twig', array(
                'visiteur' => $visiteur,
                'fiche' => $fiche,
                'formFiche' => $formFiche->createView(),
                'formLigne' => $formLigne->createView(),
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
            ->setAction($this->generateUrl('historique_find_dateEtat', array('id' => $visiteur->getId())))
            ->setMethod('POST')
            ->add('debut', 'date', array('data' => $date, 'format' => 'dd MMM yyyy',))
            ->add('fin', 'date', array('data' => new DateTime(), 'format' => 'dd MMM yyyy', ))
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

    /**
     * Creates a form to find ligne by statut.
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createFindLigneForm($visiteur)
    {   
        $date = $visiteur->getDateEmbauche();

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historique_find_dateStatut', array('id' => $visiteur->getId())))
            ->setMethod('POST')
            ->add('debut', 'date', array('data' => $date, 'format' => 'dd MMM yyyy',))
            ->add('fin', 'date', array('data' => new DateTime(), 'format' => 'dd MMM yyyy', ))
            ->add('statut', 'entity', array(
                'class' => 'GsbAppliFraisBundle:Statut',
                'property' => 'libelle',
                'required' => false,
                'empty_value' => 'Tous',
            ))
            ->add('type', 'choice', array(
                'choices'   => array(
                    'Toutes'   => 'Toutes',
                    'Forfait' => 'Forfaitisées',
                    'horsForfait'   => 'Non forfaitisées',
                ),
                'multiple'  => false,
                'expanded' => true,
                'data' => 'Toutes',
            ))
            ->add('submit', 'submit', array('label' => 'Find'))
            ->getForm()
        ;
    }
}	
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
 * Historique controller.
 *
 */
class HistoriqueController extends Controller{

    /**
     * Lists all fiche of current visiteur.
     *
     */
	public function indexAction(Request $request)
    {   
    	$em = $this->getDoctrine()->getManager();

        $session = $this->getRequest()->getSession();

        $id = $session->get('id');

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $dateDeb = $visiteur->getDateEmbauche();
        $dateFin = new DateTime();

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('GsbAppliFraisBundle:Fiche')
            ;
            
        $fiches = $repository->ficheByDate($visiteur, $dateDeb, $dateFin);    
            
        $formFiche = $this->createFindFicheForm($visiteur);
        $formLigne = $this->createFindLigneForm($visiteur);


        return $this->render('GsbAppliFraisBundle:Visiteur:historique.html.twig', array(
                'visiteur' => $visiteur,
                'fiches' => $fiches,
                'formFiche' => $formFiche->createView(),
                'formLigne' => $formLigne->createView(),
            ));
        
    }

    /**
    *
    * Allows visiteur to find fiche by Etat, Debut and Fin
    *
    */

    public function findFicheAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();

        $session = $this->getRequest()->getSession();

        $id = $session->get('id');

        $visiteur = $em->getRepository('GsbAppliFraisBundle:Employe')->find($id);
        $dateDeb = $visiteur->getDateEmbauche();
        $dateFin = new DateTime();

        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('GsbAppliFraisBundle:Fiche')
            ;
            
        $fiches = $repository->ficheByDate($visiteur, $dateDeb, $dateFin); 
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
    /**
    *
    * Allows Visiteur to find Ligne Fiche according to the Debut, Fin, Statut and Type.
    *
    */

    public function findLigneAction(Request $request)
    {   
        $em = $this->getDoctrine()->getManager();

        $session = $this->getRequest()->getSession();

        $id = $session->get('id');

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

    /**
    *
    * Display details from a selected Fiche. 
    *
    */

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();

        $session = $this->getRequest()->getSession();

        $idVisit = $session->get('id');
        $idFiche = $session->get('idFiche');

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
     * @param Visiteur $visiteur The current visiteur
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createFindFicheForm($visiteur)
    {   
        $date = $visiteur->getDateEmbauche();

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historique_find_dateEtat', array()))
            ->setMethod('POST')
            ->add('debut', 'date', 
                array('data' => $date, 
                    'format' => 'dd MMM yyyy',
                    'days' => range(1, 1)))
            ->add('fin', 'date', 
                array('data' => new DateTime(), 
                    'format' => 'dd MMM yyyy',
                    'days' => range(28, 28) ))
            ->add('etat', 'entity', array(
                'class' => 'GsbAppliFraisBundle:Etat',
                'property' => 'libelle',
                'required' => false,
                'empty_value' => 'Tous',
            ))
            ->add('submit', 'submit', array('label' => 'Chercher'))
            ->getForm()
        ;
    }

    /**
     * Creates a form to find ligne by statut.
     *
     * @param Visiteur $visiteur The current visiteur
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createFindLigneForm($visiteur)
    {   
        $date = $visiteur->getDateEmbauche();

        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historique_find_dateStatut', array()))
            ->setMethod('POST')
            ->add('debut', 'date', 
                array('data' => $date, 
                    'format' => 'dd MMM yyyy',
                    'days' => range(1, 1)))
            ->add('fin', 'date', 
                array('data' => new DateTime(), 
                    'format' => 'dd MMM yyyy',
                    'days' => range(28, 28) ))
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
                'expanded' => false,
                'data' => 'Toutes',
            ))
            ->add('submit', 'submit', array('label' => 'Chercher'))
            ->getForm()
        ;
    }

    /**
    * redirect Visiteur to his historique Fiche List
    *
    * @param idFiche $idFiche The fiche to show
    *
    * @return redirection
    *
    */
    public function loadShowAction($idFiche)
    {   

        $session = $this->getRequest()->getSession();
        $session->set('idFiche', $idFiche);

        return $this->redirect($this->generateUrl('historique_show_fiche'));
    }
}	
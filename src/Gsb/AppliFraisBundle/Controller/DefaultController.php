<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gsb\AppliFraisBundle\Entity\Employe;
use Symfony\Component\HttpFoundation\Request;
use Gsb\AppliFraisBundle\Form\ConnexionPortal;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
        $connectUser = new Employe();

        $form = $this->createForm(new ConnexionPortal(), $connectUser);
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            
            $log=$connectUser->getLogin();
            
            $employe = $this->getDoctrine()
                ->getRepository('GsbAppliFraisBundle:Employe')
                ->findOneByLogin($log);
            
            $url = $this->get('router')->generate('gsb_appli_frais_saisie', array('visiteur' => $employe->getId()), true);
            
            return $this->render('GsbAppliFraisBundle:Default:saisie.html.twig', array(
                'visiteur' => $employe->getId(),
            ));
        }
        
        return $this->render('GsbAppliFraisBundle:Default:portal.html.twig', array(
            'formConnect' => $form->createView(),
        ));
    }
}

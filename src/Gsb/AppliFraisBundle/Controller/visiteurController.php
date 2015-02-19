<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VisiteurController extends Controller
{
    public function saisieAction($id)
    {
        return $this->render('GsbAppliFraisBundle:Visiteur:saisie.html.twig', array(
                'visiteur' => $id,
            ));
    }
    
    public function historiqueAction()
    {
        return $this->render('GsbAppliFraisBundle:Default:historique.html.twig');
    }
}

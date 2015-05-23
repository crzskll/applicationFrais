<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class JuryController extends Controller
{
    public function indexAction()
    {

        return $this->render('GsbAppliFraisBundle:Jury:index.html.twig');
    }
}

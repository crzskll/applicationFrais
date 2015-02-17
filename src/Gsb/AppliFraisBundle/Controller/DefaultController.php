<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GsbAppliFraisBundle:Default:index.html.twig', array('name' => $name));
    }
}

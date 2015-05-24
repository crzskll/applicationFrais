<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Employe controller.
 *
 */
class AdminController extends Controller
{

    /**
     * Lists all Employe entities.
     *
     */
    public function indexAction()
    {
        return $this->render('GsbAppliFraisBundle:Admin:index.html.twig');
    }
}

<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Admin controller.
 *
 */
class AdminController extends Controller
{

    /**
     * Show acces to all entities.
     *
     */
    public function indexAction()
    {
        return $this->render('GsbAppliFraisBundle:Admin:index.html.twig');
    }
}

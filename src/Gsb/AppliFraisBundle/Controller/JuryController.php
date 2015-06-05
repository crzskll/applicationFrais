<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Jury controller.
 *
 */
class JuryController extends Controller
{
	/**
     * Display a tab with documentation.
     *
     */
    public function indexAction()
    {

        return $this->render('GsbAppliFraisBundle:Jury:index.html.twig');
    }
}

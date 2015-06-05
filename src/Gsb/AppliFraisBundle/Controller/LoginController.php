<?php

namespace Gsb\AppliFraisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    /**
    * 
    *Show the portal with the last user 
    * 
    */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        return $this->render('GsbAppliFraisBundle:Default:portal.html.twig', array(
            // last username entered by the user
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
    }

    /**
    * redirect User after login according his Role. 
    */
    public function redirectAction()
    {   
        $session = $this->getRequest()->getSession();
        $user = $user = $this->get('security.context')->getToken()->getUser();
        $id = $user->getId();
        $session->set('id', $id);
        $role = $user->getPoste();

        switch ($role)
            { 
                case 'Visiteur':
                    return $this->redirect($this->generateUrl('visiteur'));
                break;
                
                case 'Comptable': 
                    return $this->redirect($this->generateUrl('comptable'));
                break;
               case 'Admin': 
                    return $this->redirect($this->generateUrl('admin'));
                break;
            }
        
    }
}
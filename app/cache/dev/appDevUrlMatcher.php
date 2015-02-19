<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/gsb_')) {
            if (0 === strpos($pathinfo, '/gsb_forfait')) {
                // gsb_forfait
                if (rtrim($pathinfo, '/') === '/gsb_forfait') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gsb_forfait');
                    }

                    return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::indexAction',  '_route' => 'gsb_forfait',);
                }

                // gsb_forfait_show
                if (preg_match('#^/gsb_forfait/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_forfait_show')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::showAction',));
                }

                // gsb_forfait_new
                if ($pathinfo === '/gsb_forfait/new') {
                    return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::newAction',  '_route' => 'gsb_forfait_new',);
                }

                // gsb_forfait_create
                if ($pathinfo === '/gsb_forfait/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_gsb_forfait_create;
                    }

                    return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::createAction',  '_route' => 'gsb_forfait_create',);
                }
                not_gsb_forfait_create:

                // gsb_forfait_edit
                if (preg_match('#^/gsb_forfait/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_forfait_edit')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::editAction',));
                }

                // gsb_forfait_update
                if (preg_match('#^/gsb_forfait/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_gsb_forfait_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_forfait_update')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::updateAction',));
                }
                not_gsb_forfait_update:

                // gsb_forfait_delete
                if (preg_match('#^/gsb_forfait/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_gsb_forfait_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_forfait_delete')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::deleteAction',));
                }
                not_gsb_forfait_delete:

            }

            if (0 === strpos($pathinfo, '/gsb_horsforfaitligne')) {
                // gsb_horsforfaitligne
                if (rtrim($pathinfo, '/') === '/gsb_horsforfaitligne') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gsb_horsforfaitligne');
                    }

                    return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::indexAction',  '_route' => 'gsb_horsforfaitligne',);
                }

                // gsb_horsforfaitligne_show
                if (preg_match('#^/gsb_horsforfaitligne/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_horsforfaitligne_show')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::showAction',));
                }

                // gsb_horsforfaitligne_new
                if ($pathinfo === '/gsb_horsforfaitligne/new') {
                    return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::newAction',  '_route' => 'gsb_horsforfaitligne_new',);
                }

                // gsb_horsforfaitligne_create
                if ($pathinfo === '/gsb_horsforfaitligne/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_gsb_horsforfaitligne_create;
                    }

                    return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::createAction',  '_route' => 'gsb_horsforfaitligne_create',);
                }
                not_gsb_horsforfaitligne_create:

                // gsb_horsforfaitligne_edit
                if (preg_match('#^/gsb_horsforfaitligne/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_horsforfaitligne_edit')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::editAction',));
                }

                // gsb_horsforfaitligne_update
                if (preg_match('#^/gsb_horsforfaitligne/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_gsb_horsforfaitligne_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_horsforfaitligne_update')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::updateAction',));
                }
                not_gsb_horsforfaitligne_update:

                // gsb_horsforfaitligne_delete
                if (preg_match('#^/gsb_horsforfaitligne/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_gsb_horsforfaitligne_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_horsforfaitligne_delete')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::deleteAction',));
                }
                not_gsb_horsforfaitligne_delete:

            }

            if (0 === strpos($pathinfo, '/gsb_f')) {
                if (0 === strpos($pathinfo, '/gsb_forfaitligne')) {
                    // gsb_forfaitligne
                    if (rtrim($pathinfo, '/') === '/gsb_forfaitligne') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'gsb_forfaitligne');
                        }

                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::indexAction',  '_route' => 'gsb_forfaitligne',);
                    }

                    // gsb_forfaitligne_show
                    if (preg_match('#^/gsb_forfaitligne/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_forfaitligne_show')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::showAction',));
                    }

                    // gsb_forfaitligne_new
                    if ($pathinfo === '/gsb_forfaitligne/new') {
                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::newAction',  '_route' => 'gsb_forfaitligne_new',);
                    }

                    // gsb_forfaitligne_create
                    if ($pathinfo === '/gsb_forfaitligne/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gsb_forfaitligne_create;
                        }

                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::createAction',  '_route' => 'gsb_forfaitligne_create',);
                    }
                    not_gsb_forfaitligne_create:

                    // gsb_forfaitligne_edit
                    if (preg_match('#^/gsb_forfaitligne/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_forfaitligne_edit')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::editAction',));
                    }

                    // gsb_forfaitligne_update
                    if (preg_match('#^/gsb_forfaitligne/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_gsb_forfaitligne_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_forfaitligne_update')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::updateAction',));
                    }
                    not_gsb_forfaitligne_update:

                    // gsb_forfaitligne_delete
                    if (preg_match('#^/gsb_forfaitligne/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_gsb_forfaitligne_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_forfaitligne_delete')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::deleteAction',));
                    }
                    not_gsb_forfaitligne_delete:

                }

                if (0 === strpos($pathinfo, '/gsb_fiche')) {
                    // gsb_fiche
                    if (rtrim($pathinfo, '/') === '/gsb_fiche') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'gsb_fiche');
                        }

                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::indexAction',  '_route' => 'gsb_fiche',);
                    }

                    // gsb_fiche_show
                    if (preg_match('#^/gsb_fiche/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_fiche_show')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::showAction',));
                    }

                    // gsb_fiche_new
                    if ($pathinfo === '/gsb_fiche/new') {
                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::newAction',  '_route' => 'gsb_fiche_new',);
                    }

                    // gsb_fiche_create
                    if ($pathinfo === '/gsb_fiche/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gsb_fiche_create;
                        }

                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::createAction',  '_route' => 'gsb_fiche_create',);
                    }
                    not_gsb_fiche_create:

                    // gsb_fiche_edit
                    if (preg_match('#^/gsb_fiche/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_fiche_edit')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::editAction',));
                    }

                    // gsb_fiche_update
                    if (preg_match('#^/gsb_fiche/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_gsb_fiche_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_fiche_update')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::updateAction',));
                    }
                    not_gsb_fiche_update:

                    // gsb_fiche_delete
                    if (preg_match('#^/gsb_fiche/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_gsb_fiche_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_fiche_delete')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::deleteAction',));
                    }
                    not_gsb_fiche_delete:

                }

            }

            if (0 === strpos($pathinfo, '/gsb_statut')) {
                // gsb_statut
                if (rtrim($pathinfo, '/') === '/gsb_statut') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'gsb_statut');
                    }

                    return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::indexAction',  '_route' => 'gsb_statut',);
                }

                // gsb_statut_show
                if (preg_match('#^/gsb_statut/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_statut_show')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::showAction',));
                }

                // gsb_statut_new
                if ($pathinfo === '/gsb_statut/new') {
                    return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::newAction',  '_route' => 'gsb_statut_new',);
                }

                // gsb_statut_create
                if ($pathinfo === '/gsb_statut/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_gsb_statut_create;
                    }

                    return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::createAction',  '_route' => 'gsb_statut_create',);
                }
                not_gsb_statut_create:

                // gsb_statut_edit
                if (preg_match('#^/gsb_statut/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_statut_edit')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::editAction',));
                }

                // gsb_statut_update
                if (preg_match('#^/gsb_statut/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_gsb_statut_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_statut_update')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::updateAction',));
                }
                not_gsb_statut_update:

                // gsb_statut_delete
                if (preg_match('#^/gsb_statut/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_gsb_statut_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_statut_delete')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::deleteAction',));
                }
                not_gsb_statut_delete:

            }

            if (0 === strpos($pathinfo, '/gsb_e')) {
                if (0 === strpos($pathinfo, '/gsb_etat')) {
                    // gsb_etat
                    if (rtrim($pathinfo, '/') === '/gsb_etat') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'gsb_etat');
                        }

                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::indexAction',  '_route' => 'gsb_etat',);
                    }

                    // gsb_etat_show
                    if (preg_match('#^/gsb_etat/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_etat_show')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::showAction',));
                    }

                    // gsb_etat_new
                    if ($pathinfo === '/gsb_etat/new') {
                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::newAction',  '_route' => 'gsb_etat_new',);
                    }

                    // gsb_etat_create
                    if ($pathinfo === '/gsb_etat/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gsb_etat_create;
                        }

                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::createAction',  '_route' => 'gsb_etat_create',);
                    }
                    not_gsb_etat_create:

                    // gsb_etat_edit
                    if (preg_match('#^/gsb_etat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_etat_edit')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::editAction',));
                    }

                    // gsb_etat_update
                    if (preg_match('#^/gsb_etat/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_gsb_etat_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_etat_update')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::updateAction',));
                    }
                    not_gsb_etat_update:

                    // gsb_etat_delete
                    if (preg_match('#^/gsb_etat/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_gsb_etat_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_etat_delete')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::deleteAction',));
                    }
                    not_gsb_etat_delete:

                }

                if (0 === strpos($pathinfo, '/gsb_employe')) {
                    // gsb_employe
                    if (rtrim($pathinfo, '/') === '/gsb_employe') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'gsb_employe');
                        }

                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::indexAction',  '_route' => 'gsb_employe',);
                    }

                    // gsb_employe_show
                    if (preg_match('#^/gsb_employe/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_employe_show')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::showAction',));
                    }

                    // gsb_employe_new
                    if ($pathinfo === '/gsb_employe/new') {
                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::newAction',  '_route' => 'gsb_employe_new',);
                    }

                    // gsb_employe_create
                    if ($pathinfo === '/gsb_employe/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_gsb_employe_create;
                        }

                        return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::createAction',  '_route' => 'gsb_employe_create',);
                    }
                    not_gsb_employe_create:

                    // gsb_employe_edit
                    if (preg_match('#^/gsb_employe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_employe_edit')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::editAction',));
                    }

                    // gsb_employe_update
                    if (preg_match('#^/gsb_employe/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_gsb_employe_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_employe_update')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::updateAction',));
                    }
                    not_gsb_employe_update:

                    // gsb_employe_delete
                    if (preg_match('#^/gsb_employe/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_gsb_employe_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_employe_delete')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::deleteAction',));
                    }
                    not_gsb_employe_delete:

                }

            }

        }

        // gsb_appli_frais_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_appli_frais_homepage')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\DefaultController::indexAction',));
        }

        // gsb_appli_frais_portal
        if ($pathinfo === '/portal') {
            return array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gsb_appli_frais_portal',);
        }

        // visiteur
        if (0 === strpos($pathinfo, '/visiteur') && preg_match('#^/visiteur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'visiteur')), array (  '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\VisiteurController::saisieAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

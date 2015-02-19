<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfait' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_forfait/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfait_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_forfait',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfait_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_forfait/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfait_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_forfait/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfait_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_forfait',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfait_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_forfait',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfait_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_forfait',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_horsforfaitligne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_horsforfaitligne/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_horsforfaitligne_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_horsforfaitligne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_horsforfaitligne_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_horsforfaitligne/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_horsforfaitligne_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_horsforfaitligne/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_horsforfaitligne_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_horsforfaitligne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_horsforfaitligne_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_horsforfaitligne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_horsforfaitligne_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\HorsForfaitLigneController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_horsforfaitligne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfaitligne' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_forfaitligne/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfaitligne_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_forfaitligne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfaitligne_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_forfaitligne/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfaitligne_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_forfaitligne/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfaitligne_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_forfaitligne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfaitligne_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_forfaitligne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_forfaitligne_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\ForfaitLigneController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_forfaitligne',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_fiche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_fiche/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_fiche_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_fiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_fiche_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_fiche/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_fiche_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_fiche/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_fiche_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_fiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_fiche_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_fiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_fiche_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\FicheController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_fiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_statut' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_statut/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_statut_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_statut',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_statut_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_statut/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_statut_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_statut/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_statut_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_statut',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_statut_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_statut',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_statut_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\StatutController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_statut',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_etat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_etat/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_etat_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_etat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_etat_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_etat/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_etat_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_etat/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_etat_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_etat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_etat_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_etat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_etat_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EtatController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_etat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_employe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_employe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_employe_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_employe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_employe_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_employe/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_employe_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gsb_employe/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_employe_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_employe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_employe_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_employe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_employe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\EmployeController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/gsb_employe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_appli_frais_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_appli_frais_portal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portal',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'visiteur' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Gsb\\AppliFraisBundle\\Controller\\VisiteurController::saisieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/visiteur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/Abonnement/Read_Back' => [[['_route' => 'Read_Back_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::ReadBackAbonnement'], null, null, null, false, false, null]],
        '/Abonnement/Read_Front' => [[['_route' => 'Read_Front_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::ReadFrontAbonnement'], null, null, null, false, false, null]],
        '/Abonnement/Create' => [[['_route' => 'Create_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::CreateAbonnement'], null, null, null, false, false, null]],
        '/gestioncategorie' => [[['_route' => 'Read_Back_Category', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/ad' => [[['_route' => 'add_category', '_controller' => 'App\\Controller\\CategorieController::ajoutCategorie'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/Abonnement/(?'
                    .'|Read_More_Front/([^/]++)(*:46)'
                    .'|Delete/([^/]++)(*:68)'
                    .'|Update/([^/]++)(*:90)'
                .')'
                .'|/update/categorie/([^/]++)(*:124)'
                .'|/delete/categorie/([^/]++)(*:158)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:197)'
                    .'|wdt/([^/]++)(*:217)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:263)'
                            .'|router(*:277)'
                            .'|exception(?'
                                .'|(*:297)'
                                .'|\\.css(*:310)'
                            .')'
                        .')'
                        .'|(*:320)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'Read_More_Front_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::ReadMoreFrontAbonnement'], ['id'], null, null, false, true, null]],
        68 => [[['_route' => 'Delete_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::DeleteAbonnement'], ['id'], null, null, false, true, null]],
        90 => [[['_route' => 'Update_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::UpdateAbonnement'], ['id'], null, null, false, true, null]],
        124 => [[['_route' => 'updateCategorie', '_controller' => 'App\\Controller\\CategorieController::updateCategorie'], ['id'], null, null, false, true, null]],
        158 => [[['_route' => 'deleteCategorie', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], null, null, false, true, null]],
        197 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        217 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        263 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        277 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        297 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        310 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        320 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

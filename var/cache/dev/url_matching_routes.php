<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/offres/back' => [[['_route' => 'app_offres_back_index', '_controller' => 'App\\Controller\\OffresBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offres/back/new' => [[['_route' => 'app_offres_back_new', '_controller' => 'App\\Controller\\OffresBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offres' => [[['_route' => 'app_offres_index', '_controller' => 'App\\Controller\\OffresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offres/new' => [[['_route' => 'app_offres_new', '_controller' => 'App\\Controller\\OffresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotion/back' => [[['_route' => 'app_promotion_back_index', '_controller' => 'App\\Controller\\PromotionBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotion/back/new' => [[['_route' => 'app_promotion_back_new', '_controller' => 'App\\Controller\\PromotionBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotion' => [[['_route' => 'app_promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotion/new' => [[['_route' => 'app_promotion_new', '_controller' => 'App\\Controller\\PromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/back' => [[['_route' => 'app_reclamation_back_index', '_controller' => 'App\\Controller\\ReclamationBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/back/new' => [[['_route' => 'app_reclamation_back_new', '_controller' => 'App\\Controller\\ReclamationBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse/back' => [[['_route' => 'app_reponse_back_index', '_controller' => 'App\\Controller\\ReponseBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/back/new' => [[['_route' => 'app_reponse_back_new', '_controller' => 'App\\Controller\\ReponseBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sponsor/back' => [[['_route' => 'app_sponsor_back_index', '_controller' => 'App\\Controller\\SponsorBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sponsor/back/new' => [[['_route' => 'app_sponsor_back_new', '_controller' => 'App\\Controller\\SponsorBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sponsor' => [[['_route' => 'app_sponsor_index', '_controller' => 'App\\Controller\\SponsorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sponsor/new' => [[['_route' => 'app_sponsor_new', '_controller' => 'App\\Controller\\SponsorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/offres/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:34)'
                        .'|/edit(*:46)'
                        .'|(*:53)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:72)'
                        .'|/edit(*:84)'
                        .'|(*:91)'
                    .')'
                .')'
                .'|/promotion/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:130)'
                        .'|/edit(*:143)'
                        .'|(*:151)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:171)'
                        .'|/edit(*:184)'
                        .'|(*:192)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|back/([^/]++)(?'
                            .'|(*:237)'
                            .'|/edit(*:250)'
                            .'|(*:258)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:278)'
                            .'|/edit(*:291)'
                            .'|(*:299)'
                        .')'
                    .')'
                    .'|ponse/(?'
                        .'|back/([^/]++)(?'
                            .'|(*:334)'
                            .'|/(?'
                                .'|edit(*:350)'
                                .'|auto_response(*:371)'
                            .')'
                            .'|(*:380)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:400)'
                            .'|/edit(*:413)'
                            .'|(*:421)'
                        .')'
                    .')'
                .')'
                .'|/sponsor/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:460)'
                        .'|/edit(*:473)'
                        .'|(*:481)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:501)'
                        .'|/edit(*:514)'
                        .'|(*:522)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:563)'
                    .'|wdt/([^/]++)(*:583)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:629)'
                            .'|router(*:643)'
                            .'|exception(?'
                                .'|(*:663)'
                                .'|\\.css(*:676)'
                            .')'
                        .')'
                        .'|(*:686)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_offres_back_show', '_controller' => 'App\\Controller\\OffresBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_offres_back_edit', '_controller' => 'App\\Controller\\OffresBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        53 => [[['_route' => 'app_offres_back_delete', '_controller' => 'App\\Controller\\OffresBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        72 => [[['_route' => 'app_offres_show', '_controller' => 'App\\Controller\\OffresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        84 => [[['_route' => 'app_offres_edit', '_controller' => 'App\\Controller\\OffresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        91 => [[['_route' => 'app_offres_delete', '_controller' => 'App\\Controller\\OffresController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        130 => [[['_route' => 'app_promotion_back_show', '_controller' => 'App\\Controller\\PromotionBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        143 => [[['_route' => 'app_promotion_back_edit', '_controller' => 'App\\Controller\\PromotionBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        151 => [[['_route' => 'app_promotion_back_delete', '_controller' => 'App\\Controller\\PromotionBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        171 => [[['_route' => 'app_promotion_show', '_controller' => 'App\\Controller\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        184 => [[['_route' => 'app_promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        192 => [[['_route' => 'app_promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        237 => [[['_route' => 'app_reclamation_back_show', '_controller' => 'App\\Controller\\ReclamationBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        250 => [[['_route' => 'app_reclamation_back_edit', '_controller' => 'App\\Controller\\ReclamationBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        258 => [[['_route' => 'app_reclamation_back_delete', '_controller' => 'App\\Controller\\ReclamationBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        299 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        334 => [[['_route' => 'app_reponse_back_show', '_controller' => 'App\\Controller\\ReponseBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_reponse_back_edit', '_controller' => 'App\\Controller\\ReponseBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        371 => [[['_route' => 'app_reclamation_auto_response', '_controller' => 'App\\Controller\\ReponseBackController::newAuto'], ['id'], ['POST' => 0], null, false, false, null]],
        380 => [[['_route' => 'app_reponse_back_delete', '_controller' => 'App\\Controller\\ReponseBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        400 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        413 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        421 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        460 => [[['_route' => 'app_sponsor_back_show', '_controller' => 'App\\Controller\\SponsorBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        473 => [[['_route' => 'app_sponsor_back_edit', '_controller' => 'App\\Controller\\SponsorBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        481 => [[['_route' => 'app_sponsor_back_delete', '_controller' => 'App\\Controller\\SponsorBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        501 => [[['_route' => 'app_sponsor_show', '_controller' => 'App\\Controller\\SponsorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        514 => [[['_route' => 'app_sponsor_edit', '_controller' => 'App\\Controller\\SponsorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        522 => [[['_route' => 'app_sponsor_delete', '_controller' => 'App\\Controller\\SponsorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        563 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        583 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        629 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        643 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        663 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        676 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        686 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

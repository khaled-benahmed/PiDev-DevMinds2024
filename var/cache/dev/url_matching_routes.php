<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/activite/crud' => [[['_route' => 'app_activite_crud_index', '_controller' => 'App\\Controller\\ActiviteCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activite/crud/viewActivite' => [[['_route' => 'app_activite_crud_index_front', '_controller' => 'App\\Controller\\ActiviteCrudController::viewActivite'], null, ['GET' => 0], null, false, false, null]],
        '/activite/crud/new' => [[['_route' => 'app_activite_crud_new', '_controller' => 'App\\Controller\\ActiviteCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/activite/viewJSON' => [[['_route' => 'listJSONActivite', '_controller' => 'App\\Controller\\ActiviteJSONController::getActivities'], null, null, null, false, false, null]],
        '/activite/newJSON' => [[['_route' => 'addJSONActivite', '_controller' => 'App\\Controller\\ActiviteJSONController::newJSON'], null, null, null, false, false, null]],
        '/searchActivite' => [[['_route' => 'searchActivity', '_controller' => 'App\\Controller\\ActiviteJSONController::searchActivity'], null, null, null, false, false, null]],
        '/api/calendar' => [[['_route' => 'app_api_calendar', '_controller' => 'App\\Controller\\ApiCalendarController::index'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'app_calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'app_calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/planning/crud/viewPlanning' => [[['_route' => 'app_planning_crud_index_front', '_controller' => 'App\\Controller\\PlanningCrudController::viewPlanning'], null, ['GET' => 0], null, false, false, null]],
        '/planning/crud' => [[['_route' => 'app_planning_crud_index', '_controller' => 'App\\Controller\\PlanningCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/planning/crud/new' => [[['_route' => 'app_planning_crud_new', '_controller' => 'App\\Controller\\PlanningCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/planning/viewJSON' => [[['_route' => 'viewJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::viewJSON'], null, null, null, false, false, null]],
        '/planning/newJSON' => [[['_route' => 'addJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::newJSON'], null, null, null, false, false, null]],
        '/calendrier' => [[['_route' => 'app_calendar', '_controller' => 'App\\Controller\\PlanningJSONController::CalendarView'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|ctivite/(?'
                        .'|crud/(?'
                            .'|([^/]++)(*:39)'
                            .'|show/([^/]++)(*:59)'
                            .'|edit/([^/]++)(*:79)'
                            .'|([^/]++)(*:94)'
                        .')'
                        .'|editJSON/([^/]++)(*:119)'
                        .'|deleteJSON/([^/]++)(*:146)'
                        .'|showJSON/([^/]++)(*:171)'
                        .'|([^/]++)/pdf(*:191)'
                    .')'
                    .'|pi/calendarOnClick/([^/]++)(*:227)'
                .')'
                .'|/calendar/([^/]++)(?'
                    .'|(*:257)'
                    .'|/edit(*:270)'
                    .'|(*:278)'
                .')'
                .'|/planning/(?'
                    .'|crud(?'
                        .'|delete/([^/]++)(*:322)'
                        .'|/(?'
                            .'|edit/([^/]++)(*:347)'
                            .'|([^/]++)(*:363)'
                        .')'
                    .')'
                    .'|editJSON/([^/]++)(*:390)'
                    .'|showJSON/([^/]++)(*:415)'
                    .'|deleteJSON/([^/]++)(*:442)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:482)'
                    .'|wdt/([^/]++)(*:502)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:548)'
                            .'|router(*:562)'
                            .'|exception(?'
                                .'|(*:582)'
                                .'|\\.css(*:595)'
                            .')'
                        .')'
                        .'|(*:605)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'app_activite_crud_show', '_controller' => 'App\\Controller\\ActiviteCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        59 => [[['_route' => 'app_activite_crud_show_front', '_controller' => 'App\\Controller\\ActiviteCrudController::showActivite'], ['id'], ['GET' => 0], null, false, true, null]],
        79 => [[['_route' => 'app_activite_crud_edit', '_controller' => 'App\\Controller\\ActiviteCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        94 => [[['_route' => 'app_activite_crud_delete', '_controller' => 'App\\Controller\\ActiviteCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        119 => [[['_route' => 'editJSONActivite', '_controller' => 'App\\Controller\\ActiviteJSONController::editJSON'], ['id'], null, null, false, true, null]],
        146 => [[['_route' => 'deleteJSONActivite', '_controller' => 'App\\Controller\\ActiviteJSONController::deleteJSON'], ['id'], null, null, false, true, null]],
        171 => [[['_route' => 'showJSONActivite', '_controller' => 'App\\Controller\\ActiviteJSONController::showJSON'], ['id'], null, null, false, true, null]],
        191 => [[['_route' => 'app_activite_pdf', '_controller' => 'App\\Controller\\ActiviteJSONController::AfficheTicketPDF'], ['id'], ['GET' => 0], null, false, false, null]],
        227 => [[['_route' => 'calendar_onClick', '_controller' => 'App\\Controller\\ApiCalendarController::onClick'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'app_calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        278 => [[['_route' => 'app_calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        322 => [[['_route' => 'app_planning_crud_delete', '_controller' => 'App\\Controller\\PlanningCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        347 => [[['_route' => 'app_planning_crud_edit', '_controller' => 'App\\Controller\\PlanningCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        363 => [[['_route' => 'app_planning_crud_show', '_controller' => 'App\\Controller\\PlanningCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        390 => [[['_route' => 'editJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::editJSON'], ['id'], null, null, false, true, null]],
        415 => [[['_route' => 'showJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::showJSON'], ['id'], null, null, false, true, null]],
        442 => [[['_route' => 'deleteJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::deleteJSON'], ['id'], null, null, false, true, null]],
        482 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        502 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        548 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        562 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        582 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        595 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        605 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

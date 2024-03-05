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
        '/admin' => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\MainController::index'], null, null, null, true, false, null],
            [['_route' => 'admin_home', '_controller' => 'App\\Controller\\SecurityController::adminHome'], null, null, null, false, false, null],
        ],
        '/admin/utilisateurs' => [[['_route' => 'admin_users_list', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, null, null, true, false, null]],
        '/admin/utilisateurs/admin/user/statistics' => [[['_route' => 'admin_users_statistics', '_controller' => 'App\\Controller\\Admin\\UserController::userStatistics'], null, null, null, false, false, null]],
        '/allergie/allergie' => [[['_route' => 'app_allergie_index', '_controller' => 'App\\Controller\\AllergieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/allergie/new' => [[['_route' => 'app_allergie_new', '_controller' => 'App\\Controller\\AllergieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/calendar' => [[['_route' => 'app_api_calendar', '_controller' => 'App\\Controller\\ApiCalendarController::index'], null, null, null, false, false, null]],
        '/blog/view' => [[['_route' => 'app_blog_index', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0], null, false, false, null]],
        '/blog/new' => [[['_route' => 'app_blog_new', '_controller' => 'App\\Controller\\BlogController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar' => [[['_route' => 'app_calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/new' => [[['_route' => 'app_calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/planning/crud/viewPlanning' => [[['_route' => 'app_planning_crud_index_front', '_controller' => 'App\\Controller\\PlanningCrudController::viewPlanning'], null, ['GET' => 0], null, false, false, null]],
        '/planning/crud' => [[['_route' => 'app_planning_crud_index', '_controller' => 'App\\Controller\\PlanningCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/planning/crud/new' => [[['_route' => 'app_planning_crud_new', '_controller' => 'App\\Controller\\PlanningCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/planning/viewJSON' => [[['_route' => 'viewJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::viewJSON'], null, null, null, false, false, null]],
        '/planning/newJSON' => [[['_route' => 'addJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::newJSON'], null, null, null, false, false, null]],
        '/calendrier' => [[['_route' => 'app_calendar', '_controller' => 'App\\Controller\\PlanningJSONController::CalendarView'], null, null, null, false, false, null]],
        '/plat/plat' => [[['_route' => 'app_plat_index', '_controller' => 'App\\Controller\\PlatController::index'], null, ['GET' => 0], null, false, false, null]],
        '/plat/affiche_front' => [[['_route' => 'app_affiche_front', '_controller' => 'App\\Controller\\PlatController::affiche_front'], null, ['GET' => 0], null, false, false, null]],
        '/plat/new' => [[['_route' => 'app_plat_new', '_controller' => 'App\\Controller\\PlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [
            [['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null],
            [['_route' => 'profile_show', '_controller' => 'App\\Controller\\ProfileController::show'], null, null, null, false, false, null],
        ],
        '/profile/edit' => [[['_route' => 'profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password/reset' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/2fa' => [[['_route' => '2fa_login', '_controller' => 'scheb_two_factor.form_controller::form'], null, null, null, false, false, null]],
        '/2fa_check' => [[['_route' => '2fa_login_check'], null, null, null, false, false, null]],
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
                    .'|dmin/utilisateurs/(?'
                        .'|([^/]++)(?'
                            .'|(*:232)'
                            .'|/edit(*:245)'
                        .')'
                        .'|block/user/([^/]++)(*:273)'
                        .'|user/([^/]++)/unblock(*:302)'
                        .'|([^/]++)/supprimer(*:328)'
                    .')'
                    .'|llergie/([^/]++)(?'
                        .'|(*:356)'
                        .'|/edit(*:369)'
                        .'|(*:377)'
                    .')'
                    .'|pi/calendarOnClick/([^/]++)(*:413)'
                .')'
                .'|/blo(?'
                    .'|g/(?'
                        .'|([^/]++)(?'
                            .'|(*:445)'
                            .'|/edit(*:458)'
                        .')'
                        .'|delete/([^/]++)(*:482)'
                    .')'
                    .'|ck/user/([^/]++)(*:507)'
                .')'
                .'|/calendar/([^/]++)(?'
                    .'|(*:537)'
                    .'|/edit(*:550)'
                    .'|(*:558)'
                .')'
                .'|/pla(?'
                    .'|nning/(?'
                        .'|crud(?'
                            .'|delete/([^/]++)(*:605)'
                            .'|/(?'
                                .'|edit/([^/]++)(*:630)'
                                .'|([^/]++)(*:646)'
                            .')'
                        .')'
                        .'|editJSON/([^/]++)(*:673)'
                        .'|showJSON/([^/]++)(*:698)'
                        .'|deleteJSON/([^/]++)(*:725)'
                    .')'
                    .'|t/(?'
                        .'|pdf/([^/]++)(*:751)'
                        .'|([^/]++)(?'
                            .'|(*:770)'
                            .'|/edit(*:783)'
                            .'|(*:791)'
                        .')'
                        .'|plat/([^/]++)/like(*:818)'
                    .')'
                .')'
                .'|/reset\\-password/reset\\-password(?:/([^/]++))?(*:874)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:913)'
                    .'|wdt/([^/]++)(*:933)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:979)'
                            .'|router(*:993)'
                            .'|exception(?'
                                .'|(*:1013)'
                                .'|\\.css(*:1027)'
                            .')'
                        .')'
                        .'|(*:1038)'
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
        232 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\Admin\\UserController::showUser'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\Admin\\UserController::updateUser'], ['id'], null, null, false, false, null]],
        273 => [[['_route' => 'admin_users_block_user', '_controller' => 'App\\Controller\\Admin\\UserController::blockUser'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'admin_users_user_unblock', '_controller' => 'App\\Controller\\Admin\\UserController::unblockUser'], ['id'], null, null, false, false, null]],
        328 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\Admin\\UserController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        356 => [[['_route' => 'app_allergie_show', '_controller' => 'App\\Controller\\AllergieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'app_allergie_edit', '_controller' => 'App\\Controller\\AllergieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'app_allergie_delete', '_controller' => 'App\\Controller\\AllergieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        413 => [[['_route' => 'calendar_onClick', '_controller' => 'App\\Controller\\ApiCalendarController::onClick'], ['id'], ['GET' => 0], null, false, true, null]],
        445 => [[['_route' => 'app_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        458 => [[['_route' => 'app_blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        482 => [[['_route' => 'app_blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        507 => [[['_route' => 'block_user', '_controller' => 'YourController::blockUser'], ['id'], null, null, false, true, null]],
        537 => [[['_route' => 'app_calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        550 => [[['_route' => 'app_calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        558 => [[['_route' => 'app_calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        605 => [[['_route' => 'app_planning_crud_delete', '_controller' => 'App\\Controller\\PlanningCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        630 => [[['_route' => 'app_planning_crud_edit', '_controller' => 'App\\Controller\\PlanningCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        646 => [[['_route' => 'app_planning_crud_show', '_controller' => 'App\\Controller\\PlanningCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        673 => [[['_route' => 'editJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::editJSON'], ['id'], null, null, false, true, null]],
        698 => [[['_route' => 'showJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::showJSON'], ['id'], null, null, false, true, null]],
        725 => [[['_route' => 'deleteJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::deleteJSON'], ['id'], null, null, false, true, null]],
        751 => [[['_route' => 'app_pdf', '_controller' => 'App\\Controller\\PlatController::affiche_pdf'], ['id'], ['GET' => 0], null, false, true, null]],
        770 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        783 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        791 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        818 => [[['_route' => 'post_like', '_controller' => 'App\\Controller\\PlatController::like'], ['id'], null, null, false, false, null]],
        874 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        913 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        933 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        979 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        993 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1013 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1027 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1038 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [
            [['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\MainController::index'], null, null, null, true, false, null],
            [['_route' => 'admin_home', '_controller' => 'App\\Controller\\SecurityController::adminHome'], null, null, null, false, false, null],
        ],
        '/admin/utilisateurs' => [[['_route' => 'admin_users_list', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, null, null, true, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
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
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/utilisateurs/(?'
                    .'|([^/]++)(?'
                        .'|(*:41)'
                        .'|/edit(*:53)'
                    .')'
                    .'|block/user/([^/]++)(*:80)'
                    .'|user/([^/]++)/unblock(*:108)'
                    .'|([^/]++)/supprimer(*:134)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:179)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:218)'
                    .'|wdt/([^/]++)(*:238)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:284)'
                            .'|router(*:298)'
                            .'|exception(?'
                                .'|(*:318)'
                                .'|\\.css(*:331)'
                            .')'
                        .')'
                        .'|(*:341)'
                    .')'
                .')'
                .'|/block/user/([^/]++)(*:371)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\Admin\\UserController::showUser'], ['id'], null, null, false, true, null]],
        53 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\Admin\\UserController::updateUser'], ['id'], null, null, false, false, null]],
        80 => [[['_route' => 'admin_users_block_user', '_controller' => 'App\\Controller\\Admin\\UserController::blockUser'], ['id'], null, null, false, true, null]],
        108 => [[['_route' => 'admin_users_user_unblock', '_controller' => 'App\\Controller\\Admin\\UserController::unblockUser'], ['id'], ['POST' => 0], null, false, false, null]],
        134 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\Admin\\UserController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        179 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        218 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        238 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        284 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        298 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        318 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        331 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        341 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        371 => [
            [['_route' => 'block_user', '_controller' => 'YourController::blockUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

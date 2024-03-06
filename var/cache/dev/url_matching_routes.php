<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/Abonnement/Read_Back' => [[['_route' => 'Read_Back_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::ReadBackAbonnement'], null, null, null, false, false, null]],
        '/Abonnement/Create' => [[['_route' => 'Create_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::CreateAbonnement'], null, null, null, false, false, null]],
        '/Abonnement/Read_front' => [[['_route' => 'Read_FRONT_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::ReadFRONTAbonnement'], null, null, null, false, false, null]],
        '/stripe/payment' => [[['_route' => 'stripe_payment', '_controller' => 'App\\Controller\\AbonnementController::stripePayment'], null, null, null, false, false, null]],
        '/stripe/payment/success' => [[['_route' => 'stripe_payment_success', '_controller' => 'App\\Controller\\AbonnementController::stripePaymentSuccess'], null, null, null, false, false, null]],
        '/stripe/payment/cancel' => [[['_route' => 'stripe_payment_cancel', '_controller' => 'App\\Controller\\AbonnementController::stripePaymentCancel'], null, null, null, false, false, null]],
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
        '/gestioncategorie' => [[['_route' => 'Read_Back_Category', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/ad' => [[['_route' => 'add_category', '_controller' => 'App\\Controller\\CategorieController::ajoutCategorie'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/offres/back/pdfO' => [[['_route' => 'offres_pdf', '_controller' => 'App\\Controller\\OffresBackController::generatePdf'], null, null, null, false, false, null]],
        '/offres/back' => [[['_route' => 'app_offres_back_index', '_controller' => 'App\\Controller\\OffresBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offres/back/new' => [[['_route' => 'app_offres_back_new', '_controller' => 'App\\Controller\\OffresBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/offres' => [[['_route' => 'app_offres_index', '_controller' => 'App\\Controller\\OffresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/offres/new' => [[['_route' => 'app_offres_new', '_controller' => 'App\\Controller\\OffresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/planning/crud/viewPlanning' => [[['_route' => 'app_planning_crud_index_front', '_controller' => 'App\\Controller\\PlanningCrudController::viewPlanning'], null, ['GET' => 0], null, false, false, null]],
        '/planning/crud/planning/upcoming' => [[['_route' => 'check_upcoming_planning', '_controller' => 'App\\Controller\\PlanningCrudController::checkUpcomingPlanning'], null, null, null, false, false, null]],
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
        '/promotion/back' => [[['_route' => 'app_promotion_back_index', '_controller' => 'App\\Controller\\PromotionBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotion/back/new' => [[['_route' => 'app_promotion_back_new', '_controller' => 'App\\Controller\\PromotionBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotion' => [[['_route' => 'app_promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotion/new' => [[['_route' => 'app_promotion_new', '_controller' => 'App\\Controller\\PromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/back' => [[['_route' => 'app_reclamation_back_index', '_controller' => 'App\\Controller\\ReclamationBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/back/resetCounter' => [[['_route' => 'app_resetCounter', '_controller' => 'App\\Controller\\ReclamationBackController::resetCounter'], null, null, null, false, false, null]],
        '/reclamation/back/pdf' => [[['_route' => 'reclamations_pdf', '_controller' => 'App\\Controller\\ReclamationBackController::generatePdf'], null, null, null, false, false, null]],
        '/reclamation/back/new' => [[['_route' => 'app_reclamation_back_new', '_controller' => 'App\\Controller\\ReclamationBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reponse/back' => [[['_route' => 'app_reponse_back_index', '_controller' => 'App\\Controller\\ReponseBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/back/new' => [[['_route' => 'app_reponse_back_new', '_controller' => 'App\\Controller\\ReponseBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponse' => [[['_route' => 'app_reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'app_reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password/reset' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/sponsor/back' => [[['_route' => 'app_sponsor_back_index', '_controller' => 'App\\Controller\\SponsorBackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sponsor/back/new' => [[['_route' => 'app_sponsor_back_new', '_controller' => 'App\\Controller\\SponsorBackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sponsor' => [[['_route' => 'app_sponsor_index', '_controller' => 'App\\Controller\\SponsorController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sponsor/new' => [[['_route' => 'app_sponsor_new', '_controller' => 'App\\Controller\\SponsorController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/Abonnement/(?'
                    .'|Delete/([^/]++)(*:37)'
                    .'|Update/([^/]++)(*:59)'
                    .'|pay/([^/]++)(*:78)'
                .')'
                .'|/a(?'
                    .'|ctivite/(?'
                        .'|crud/(?'
                            .'|([^/]++)(*:118)'
                            .'|show/([^/]++)(*:139)'
                            .'|edit/([^/]++)(*:160)'
                            .'|([^/]++)(*:176)'
                        .')'
                        .'|editJSON/([^/]++)(*:202)'
                        .'|deleteJSON/([^/]++)(*:229)'
                        .'|showJSON/([^/]++)(*:254)'
                        .'|([^/]++)/pdf(*:274)'
                    .')'
                    .'|dmin/utilisateurs/(?'
                        .'|([^/]++)(?'
                            .'|(*:315)'
                            .'|/edit(*:328)'
                        .')'
                        .'|block/user/([^/]++)(*:356)'
                        .'|user/([^/]++)/unblock(*:385)'
                        .'|([^/]++)/supprimer(*:411)'
                    .')'
                    .'|llergie/([^/]++)(?'
                        .'|(*:439)'
                        .'|/edit(*:452)'
                        .'|(*:460)'
                    .')'
                    .'|pi/calendarOnClick/([^/]++)(*:496)'
                .')'
                .'|/blo(?'
                    .'|g/(?'
                        .'|([^/]++)(?'
                            .'|(*:528)'
                            .'|/edit(*:541)'
                        .')'
                        .'|delete/([^/]++)(*:565)'
                    .')'
                    .'|ck/user/([^/]++)(*:590)'
                .')'
                .'|/calendar/([^/]++)(?'
                    .'|(*:620)'
                    .'|/edit(*:633)'
                    .'|(*:641)'
                .')'
                .'|/update/categorie/([^/]++)(*:676)'
                .'|/delete/categorie/([^/]++)(*:710)'
                .'|/offres/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:745)'
                        .'|/edit(*:758)'
                        .'|(*:766)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:786)'
                        .'|/edit(*:799)'
                        .'|(*:807)'
                    .')'
                .')'
                .'|/p(?'
                    .'|la(?'
                        .'|nning/(?'
                            .'|crud(?'
                                .'|delete/([^/]++)(*:858)'
                                .'|/(?'
                                    .'|edit/([^/]++)(*:883)'
                                    .'|([^/]++)(*:899)'
                                .')'
                            .')'
                            .'|editJSON/([^/]++)(*:926)'
                            .'|showJSON/([^/]++)(*:951)'
                            .'|deleteJSON/([^/]++)(*:978)'
                        .')'
                        .'|t/(?'
                            .'|pdf/([^/]++)(*:1004)'
                            .'|([^/]++)(?'
                                .'|(*:1024)'
                                .'|/edit(*:1038)'
                                .'|(*:1047)'
                            .')'
                            .'|plat/([^/]++)/like(*:1075)'
                        .')'
                    .')'
                    .'|romotion/(?'
                        .'|back/([^/]++)(?'
                            .'|(*:1114)'
                            .'|/edit(*:1128)'
                            .'|(*:1137)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:1158)'
                            .'|/edit(*:1172)'
                            .'|(*:1181)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|back/([^/]++)(?'
                            .'|(*:1228)'
                            .'|/edit(*:1242)'
                            .'|(*:1251)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:1272)'
                            .'|/(?'
                                .'|edit(*:1289)'
                                .'|pdf_front(*:1307)'
                            .')'
                            .'|(*:1317)'
                        .')'
                    .')'
                    .'|ponse/(?'
                        .'|back/([^/]++)(?'
                            .'|(*:1353)'
                            .'|/(?'
                                .'|edit(*:1370)'
                                .'|auto_response(*:1392)'
                            .')'
                            .'|(*:1402)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:1423)'
                            .'|/edit(*:1437)'
                            .'|(*:1446)'
                        .')'
                    .')'
                    .'|set\\-password/reset\\-password(?:/([^/]++))?(*:1500)'
                .')'
                .'|/sponsor/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:1538)'
                        .'|/edit(*:1552)'
                        .'|(*:1561)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:1582)'
                        .'|/edit(*:1596)'
                        .'|(*:1605)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1647)'
                    .'|wdt/([^/]++)(*:1668)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1715)'
                            .'|router(*:1730)'
                            .'|exception(?'
                                .'|(*:1751)'
                                .'|\\.css(*:1765)'
                            .')'
                        .')'
                        .'|(*:1776)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'Delete_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::DeleteAbonnement'], ['id'], null, null, false, true, null]],
        59 => [[['_route' => 'Update_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::UpdateAbonnement'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'pay_Abonnement', '_controller' => 'App\\Controller\\AbonnementController::pay'], ['id'], null, null, false, true, null]],
        118 => [[['_route' => 'app_activite_crud_show', '_controller' => 'App\\Controller\\ActiviteCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_activite_crud_show_front', '_controller' => 'App\\Controller\\ActiviteCrudController::showActivite'], ['id'], ['GET' => 0], null, false, true, null]],
        160 => [[['_route' => 'app_activite_crud_edit', '_controller' => 'App\\Controller\\ActiviteCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        176 => [[['_route' => 'app_activite_crud_delete', '_controller' => 'App\\Controller\\ActiviteCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        202 => [[['_route' => 'editJSONActivite', '_controller' => 'App\\Controller\\ActiviteJSONController::editJSON'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'deleteJSONActivite', '_controller' => 'App\\Controller\\ActiviteJSONController::deleteJSON'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'showJSONActivite', '_controller' => 'App\\Controller\\ActiviteJSONController::showJSON'], ['id'], null, null, false, true, null]],
        274 => [[['_route' => 'app_activite_pdf', '_controller' => 'App\\Controller\\ActiviteJSONController::AfficheTicketPDF'], ['id'], ['GET' => 0], null, false, false, null]],
        315 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\Admin\\UserController::showUser'], ['id'], null, null, false, true, null]],
        328 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\Admin\\UserController::updateUser'], ['id'], null, null, false, false, null]],
        356 => [[['_route' => 'admin_users_block_user', '_controller' => 'App\\Controller\\Admin\\UserController::blockUser'], ['id'], null, null, false, true, null]],
        385 => [[['_route' => 'admin_users_user_unblock', '_controller' => 'App\\Controller\\Admin\\UserController::unblockUser'], ['id'], null, null, false, false, null]],
        411 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\Admin\\UserController::deleteUser'], ['id'], ['POST' => 0], null, false, false, null]],
        439 => [[['_route' => 'app_allergie_show', '_controller' => 'App\\Controller\\AllergieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        452 => [[['_route' => 'app_allergie_edit', '_controller' => 'App\\Controller\\AllergieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        460 => [[['_route' => 'app_allergie_delete', '_controller' => 'App\\Controller\\AllergieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        496 => [[['_route' => 'calendar_onClick', '_controller' => 'App\\Controller\\ApiCalendarController::onClick'], ['id'], ['GET' => 0], null, false, true, null]],
        528 => [[['_route' => 'app_blog_show', '_controller' => 'App\\Controller\\BlogController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        541 => [[['_route' => 'app_blog_edit', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        565 => [[['_route' => 'app_blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        590 => [[['_route' => 'block_user', '_controller' => 'YourController::blockUser'], ['id'], null, null, false, true, null]],
        620 => [[['_route' => 'app_calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        633 => [[['_route' => 'app_calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        641 => [[['_route' => 'app_calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        676 => [[['_route' => 'updateCategorie', '_controller' => 'App\\Controller\\CategorieController::updateCategorie'], ['id'], null, null, false, true, null]],
        710 => [[['_route' => 'deleteCategorie', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], null, null, false, true, null]],
        745 => [[['_route' => 'app_offres_back_show', '_controller' => 'App\\Controller\\OffresBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        758 => [[['_route' => 'app_offres_back_edit', '_controller' => 'App\\Controller\\OffresBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        766 => [[['_route' => 'app_offres_back_delete', '_controller' => 'App\\Controller\\OffresBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        786 => [[['_route' => 'app_offres_show', '_controller' => 'App\\Controller\\OffresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        799 => [[['_route' => 'app_offres_edit', '_controller' => 'App\\Controller\\OffresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        807 => [[['_route' => 'app_offres_delete', '_controller' => 'App\\Controller\\OffresController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        858 => [[['_route' => 'app_planning_crud_delete', '_controller' => 'App\\Controller\\PlanningCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        883 => [[['_route' => 'app_planning_crud_edit', '_controller' => 'App\\Controller\\PlanningCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        899 => [[['_route' => 'app_planning_crud_show', '_controller' => 'App\\Controller\\PlanningCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        926 => [[['_route' => 'editJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::editJSON'], ['id'], null, null, false, true, null]],
        951 => [[['_route' => 'showJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::showJSON'], ['id'], null, null, false, true, null]],
        978 => [[['_route' => 'deleteJSONPlanning', '_controller' => 'App\\Controller\\PlanningJSONController::deleteJSON'], ['id'], null, null, false, true, null]],
        1004 => [[['_route' => 'app_pdf', '_controller' => 'App\\Controller\\PlatController::affiche_pdf'], ['id'], ['GET' => 0], null, false, true, null]],
        1024 => [[['_route' => 'app_plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1038 => [[['_route' => 'app_plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1047 => [[['_route' => 'app_plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1075 => [[['_route' => 'post_like', '_controller' => 'App\\Controller\\PlatController::like'], ['id'], null, null, false, false, null]],
        1114 => [[['_route' => 'app_promotion_back_show', '_controller' => 'App\\Controller\\PromotionBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1128 => [[['_route' => 'app_promotion_back_edit', '_controller' => 'App\\Controller\\PromotionBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1137 => [[['_route' => 'app_promotion_back_delete', '_controller' => 'App\\Controller\\PromotionBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1158 => [[['_route' => 'app_promotion_show', '_controller' => 'App\\Controller\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1172 => [[['_route' => 'app_promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1181 => [[['_route' => 'app_promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1228 => [[['_route' => 'app_reclamation_back_show', '_controller' => 'App\\Controller\\ReclamationBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1242 => [[['_route' => 'app_reclamation_back_edit', '_controller' => 'App\\Controller\\ReclamationBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1251 => [[['_route' => 'app_reclamation_back_delete', '_controller' => 'App\\Controller\\ReclamationBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1272 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1289 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1307 => [[['_route' => 'reclamations_pdf_front', '_controller' => 'App\\Controller\\ReclamationController::generatePdf'], ['id'], null, null, false, false, null]],
        1317 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1353 => [[['_route' => 'app_reponse_back_show', '_controller' => 'App\\Controller\\ReponseBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1370 => [[['_route' => 'app_reponse_back_edit', '_controller' => 'App\\Controller\\ReponseBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1392 => [[['_route' => 'app_reclamation_auto_response', '_controller' => 'App\\Controller\\ReponseBackController::newAuto'], ['id'], ['POST' => 0], null, false, false, null]],
        1402 => [[['_route' => 'app_reponse_back_delete', '_controller' => 'App\\Controller\\ReponseBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1423 => [[['_route' => 'app_reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1437 => [[['_route' => 'app_reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1446 => [[['_route' => 'app_reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1500 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1538 => [[['_route' => 'app_sponsor_back_show', '_controller' => 'App\\Controller\\SponsorBackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1552 => [[['_route' => 'app_sponsor_back_edit', '_controller' => 'App\\Controller\\SponsorBackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1561 => [[['_route' => 'app_sponsor_back_delete', '_controller' => 'App\\Controller\\SponsorBackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1582 => [[['_route' => 'app_sponsor_show', '_controller' => 'App\\Controller\\SponsorController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1596 => [[['_route' => 'app_sponsor_edit', '_controller' => 'App\\Controller\\SponsorController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1605 => [[['_route' => 'app_sponsor_delete', '_controller' => 'App\\Controller\\SponsorController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1647 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1668 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1715 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1730 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1751 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1765 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1776 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

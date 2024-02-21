<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_activite_crud_index' => [[], ['_controller' => 'App\\Controller\\ActiviteCrudController::index'], [], [['text', '/activite/crud/']], [], [], []],
    'app_activite_crud_index_front' => [[], ['_controller' => 'App\\Controller\\ActiviteCrudController::viewActivite'], [], [['text', '/activite/crud/viewActivite']], [], [], []],
    'app_activite_crud_new' => [[], ['_controller' => 'App\\Controller\\ActiviteCrudController::new'], [], [['text', '/activite/crud/new']], [], [], []],
    'app_activite_crud_show' => [['id'], ['_controller' => 'App\\Controller\\ActiviteCrudController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite/crud']], [], [], []],
    'app_activite_crud_show_front' => [['id'], ['_controller' => 'App\\Controller\\ActiviteCrudController::showActivite'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite/crud/show']], [], [], []],
    'app_activite_crud_edit' => [['id'], ['_controller' => 'App\\Controller\\ActiviteCrudController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite/crud/edit']], [], [], []],
    'app_activite_crud_delete' => [['id'], ['_controller' => 'App\\Controller\\ActiviteCrudController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite/crud']], [], [], []],
    'editJSONActivite' => [['id'], ['_controller' => 'App\\Controller\\ActiviteJSONController::editJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite/editJSON']], [], [], []],
    'deleteJSONActivite' => [['id'], ['_controller' => 'App\\Controller\\ActiviteJSONController::deleteJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite/deleteJSON']], [], [], []],
    'showJSONActivite' => [['id'], ['_controller' => 'App\\Controller\\ActiviteJSONController::showJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite/showJSON']], [], [], []],
    'app_activite_pdf' => [['id'], ['_controller' => 'App\\Controller\\ActiviteJSONController::AfficheTicketPDF'], [], [['text', '/pdf'], ['variable', '/', '[^/]++', 'id', true], ['text', '/activite']], [], [], []],
    'listJSONActivite' => [[], ['_controller' => 'App\\Controller\\ActiviteJSONController::getActivities'], [], [['text', '/activite/viewJSON']], [], [], []],
    'addJSONActivite' => [[], ['_controller' => 'App\\Controller\\ActiviteJSONController::newJSON'], [], [['text', '/activite/newJSON']], [], [], []],
    'searchActivity' => [[], ['_controller' => 'App\\Controller\\ActiviteJSONController::searchActivity'], [], [['text', '/searchActivite']], [], [], []],
    'app_api_calendar' => [[], ['_controller' => 'App\\Controller\\ApiCalendarController::index'], [], [['text', '/api/calendar']], [], [], []],
    'calendar_onClick' => [['id'], ['_controller' => 'App\\Controller\\ApiCalendarController::onClick'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/calendarOnClick']], [], [], []],
    'app_calendar_index' => [[], ['_controller' => 'App\\Controller\\CalendarController::index'], [], [['text', '/calendar/']], [], [], []],
    'app_calendar_new' => [[], ['_controller' => 'App\\Controller\\CalendarController::new'], [], [['text', '/calendar/new']], [], [], []],
    'app_calendar_show' => [['id'], ['_controller' => 'App\\Controller\\CalendarController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calendar']], [], [], []],
    'app_calendar_edit' => [['id'], ['_controller' => 'App\\Controller\\CalendarController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/calendar']], [], [], []],
    'app_calendar_delete' => [['id'], ['_controller' => 'App\\Controller\\CalendarController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/calendar']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/main']], [], [], []],
    'app_planning_crud_index_front' => [[], ['_controller' => 'App\\Controller\\PlanningCrudController::viewPlanning'], [], [['text', '/planning/crud/viewPlanning']], [], [], []],
    'app_planning_crud_delete' => [['id'], ['_controller' => 'App\\Controller\\PlanningCrudController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planning/cruddelete']], [], [], []],
    'app_planning_crud_edit' => [['id'], ['_controller' => 'App\\Controller\\PlanningCrudController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planning/crud/edit']], [], [], []],
    'app_planning_crud_index' => [[], ['_controller' => 'App\\Controller\\PlanningCrudController::index'], [], [['text', '/planning/crud/']], [], [], []],
    'app_planning_crud_new' => [[], ['_controller' => 'App\\Controller\\PlanningCrudController::new'], [], [['text', '/planning/crud/new']], [], [], []],
    'app_planning_crud_show' => [['id'], ['_controller' => 'App\\Controller\\PlanningCrudController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planning/crud']], [], [], []],
    'editJSONPlanning' => [['id'], ['_controller' => 'App\\Controller\\PlanningJSONController::editJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planning/editJSON']], [], [], []],
    'showJSONPlanning' => [['id'], ['_controller' => 'App\\Controller\\PlanningJSONController::showJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planning/showJSON']], [], [], []],
    'deleteJSONPlanning' => [['id'], ['_controller' => 'App\\Controller\\PlanningJSONController::deleteJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/planning/deleteJSON']], [], [], []],
    'viewJSONPlanning' => [[], ['_controller' => 'App\\Controller\\PlanningJSONController::viewJSON'], [], [['text', '/planning/viewJSON']], [], [], []],
    'addJSONPlanning' => [[], ['_controller' => 'App\\Controller\\PlanningJSONController::newJSON'], [], [['text', '/planning/newJSON']], [], [], []],
    'app_calendar' => [[], ['_controller' => 'App\\Controller\\PlanningJSONController::CalendarView'], [], [['text', '/calendrier']], [], [], []],
    'app_test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];

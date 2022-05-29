<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/p/d/f' => [[['_route' => 'app_p_d_f', '_controller' => 'App\\Controller\\PDFController::index'], null, null, null, false, false, null]],
        '/registrar-post' => [[['_route' => 'RegistrarPost', '_controller' => 'App\\Controller\\PostsController::index'], null, null, null, false, false, null]],
        '/misPosts' => [[['_route' => 'misPosts', '_controller' => 'App\\Controller\\PostsController::misPosts'], null, null, null, false, false, null]],
        '/posts/crud' => [[['_route' => 'app_posts_crud_index', '_controller' => 'App\\Controller\\PostsCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/posts/crud/new' => [[['_route' => 'app_posts_crud_new', '_controller' => 'App\\Controller\\PostsCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/registro' => [[['_route' => 'app_registro', '_controller' => 'App\\Controller\\RegistroController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/crud' => [[['_route' => 'app_user_crud_index', '_controller' => 'App\\Controller\\UserCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/crud/pdf' => [[['_route' => 'app_user_crud_pdf', '_controller' => 'App\\Controller\\UserCrudController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/user/crud/new' => [[['_route' => 'app_user_crud_new', '_controller' => 'App\\Controller\\UserCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/js/routing(?:\\.(js|json))?(*:34)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:72)'
                    .'|wdt/([^/]++)(*:91)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:136)'
                            .'|router(*:150)'
                            .'|exception(?'
                                .'|(*:170)'
                                .'|\\.css(*:183)'
                            .')'
                        .')'
                        .'|(*:193)'
                    .')'
                .')'
                .'|/verPost/([^/]++)(*:220)'
                .'|/posts/crud/([^/]++)(?'
                    .'|(*:251)'
                    .'|/edit(*:264)'
                    .'|(*:272)'
                .')'
                .'|/user/crud/([^/]++)(?'
                    .'|(*:303)'
                    .'|/edit(*:316)'
                    .'|(*:324)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        72 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        91 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        136 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        150 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        170 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        183 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        193 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        220 => [[['_route' => 'verPost', '_controller' => 'App\\Controller\\PostsController::verPosts'], ['id'], null, null, false, true, null]],
        251 => [[['_route' => 'app_posts_crud_show', '_controller' => 'App\\Controller\\PostsCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'app_posts_crud_edit', '_controller' => 'App\\Controller\\PostsCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'app_posts_crud_delete', '_controller' => 'App\\Controller\\PostsCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_user_crud_show', '_controller' => 'App\\Controller\\UserCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_user_crud_edit', '_controller' => 'App\\Controller\\UserCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        324 => [
            [['_route' => 'app_user_crud_delete', '_controller' => 'App\\Controller\\UserCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

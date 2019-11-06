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
        '/cv' => [[['_route' => 'cv', '_controller' => 'App\\Controller\\CvController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/loadmessage' => [[['_route' => 'loadmessage', '_controller' => 'App\\Controller\\MainController::loadmessage'], null, ['POST' => 0], null, false, false, null]],
        '/addmessage' => [[['_route' => 'addmessage', '_controller' => 'App\\Controller\\MainController::addmessage'], null, ['POST' => 0], null, false, false, null]],
        '/MarasSofrasi' => [[['_route' => 'maras_home', '_controller' => 'App\\Controller\\RestoController::index'], null, null, null, false, false, null]],
        '/checktype' => [[['_route' => 'maras_type', '_controller' => 'App\\Controller\\RestoController::checktype'], null, ['POST' => 0], null, false, false, null]],
        '/panier' => [[['_route' => 'maras_panier', '_controller' => 'App\\Controller\\RestoController::panier'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/p(?'
                    .'|rojet/([0-9])(*:187)'
                    .'|lat/([^/]++)(*:207)'
                .')'
                .'|/delete(?'
                    .'|com/([^/]++)(*:238)'
                    .'|message/([^/]++)(*:262)'
                .')'
                .'|/addpanier/([^/]++)(*:290)'
                .'|/removepanier/([^/]++)(*:320)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'projet', '_controller' => 'App\\Controller\\MainController::projet'], ['id'], null, null, false, true, null]],
        207 => [[['_route' => 'maras_plat', '_controller' => 'App\\Controller\\RestoController::plats'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'deletecommentaire', '_controller' => 'App\\Controller\\MainController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        262 => [[['_route' => 'deletemessage', '_controller' => 'App\\Controller\\MainController::deletemessage'], ['id'], ['POST' => 0], null, false, true, null]],
        290 => [[['_route' => 'maras_addpanier', '_controller' => 'App\\Controller\\RestoController::addpanier'], ['id'], null, null, false, true, null]],
        320 => [
            [['_route' => 'maras_removepanier', '_controller' => 'App\\Controller\\RestoController::removepanier'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

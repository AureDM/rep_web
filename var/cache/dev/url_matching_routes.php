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
        '/serv' => [[['_route' => 'serv', '_controller' => 'App\\Controller\\ServDmsController::index'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\ServDmsController::accueil'], null, null, null, false, false, null]],
        '/newUsers' => [[['_route' => 'newUsers', '_controller' => 'App\\Controller\\ServDmsController::newUsers'], null, null, null, false, false, null]],
        '/insertUser' => [[['_route' => 'insertUser', '_controller' => 'App\\Controller\\ServDmsController::insertUser'], null, null, null, false, false, null]],
        '/listeUsers' => [[['_route' => 'listeUsers', '_controller' => 'App\\Controller\\ServDmsController::listeUsers'], null, null, null, false, false, null]],
        '/decoUtilisateur' => [[['_route' => 'deco_Utilisateur', '_controller' => 'App\\Controller\\ServDmsController::decoUtilisateur'], null, null, null, false, false, null]],
        '/trait_Fichier' => [[['_route' => 'trait_Fichier', '_controller' => 'App\\Controller\\ServDmsController::trait_Fichier'], null, null, null, false, false, null]],
        '/ajoueFichier' => [[['_route' => 'ajoueFichier', '_controller' => 'App\\Controller\\ServDmsController::ajouefichier'], null, null, null, false, false, null]],
        '/listFichier' => [[['_route' => 'listFichier', '_controller' => 'App\\Controller\\ServDmsController::listfichier'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/supprimerUtilisateur/([^/]++)(*:198)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        198 => [
            [['_route' => 'supprimer_Utilisateur', '_controller' => 'App\\Controller\\ServDmsController::supprimerUtilisateur'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

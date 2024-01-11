<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_genid' => [['id'], ['_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/.well-known/genid']], [], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', 'index', 'index', true], ['text', '/api']], [], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/docs']], [], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '[^.]+', '_format' => 'jsonld'], [['variable', '.', 'jsonld', '_format', true], ['variable', '/', '[^.]+', 'shortName', true], ['text', '/api/contexts']], [], [], []],
    'api_agents_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agent', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_agents_get_collection', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/agents']], [], [], []],
    'api_agents_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agent', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_agents_post_collection', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/agents']], [], [], []],
    'api_agents_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agent', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_agents_get_item', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/agents']], [], [], []],
    'api_agents_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agent', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_agents_delete_item', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/agents']], [], [], []],
    'api_agents_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agent', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_agents_put_item', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/agents']], [], [], []],
    'api_agents_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Agent', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_agents_patch_item', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/agents']], [], [], []],
    'api_clubs_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Club', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_clubs_get_collection', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/clubs']], [], [], []],
    'api_clubs_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Club', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_clubs_post_collection', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/clubs']], [], [], []],
    'api_clubs_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Club', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_clubs_get_item', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clubs']], [], [], []],
    'api_clubs_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Club', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_clubs_delete_item', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clubs']], [], [], []],
    'api_clubs_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Club', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_clubs_put_item', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clubs']], [], [], []],
    'api_clubs_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Club', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_clubs_patch_item', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/clubs']], [], [], []],
    'api_joueurs_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Joueur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_joueurs_get_collection', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/joueurs']], [], [], []],
    'api_joueurs_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Joueur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_joueurs_post_collection', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/joueurs']], [], [], []],
    'api_joueurs_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Joueur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_joueurs_get_item', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/joueurs']], [], [], []],
    'api_joueurs_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Joueur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_joueurs_delete_item', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/joueurs']], [], [], []],
    'api_joueurs_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Joueur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_joueurs_put_item', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/joueurs']], [], [], []],
    'api_joueurs_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Joueur', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_joueurs_patch_item', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/joueurs']], [], [], []],
    'api_offres_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Offre', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_offres_get_collection', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/offres']], [], [], []],
    'api_offres_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Offre', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_offres_post_collection', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format', true], ['text', '/api/offres']], [], [], []],
    'api_offres_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Offre', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_offres_get_item', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/offres']], [], [], []],
    'api_offres_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Offre', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_offres_delete_item', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/offres']], [], [], []],
    'api_offres_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Offre', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_offres_put_item', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/offres']], [], [], []],
    'api_offres_patch_item' => [['id', '_format'], ['_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Offre', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_offres_patch_item', '_api_item_operation_name' => 'patch'], [], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '[^/\\.]++', 'id', true], ['text', '/api/offres']], [], [], []],
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
    'app_acceuil' => [[], ['_controller' => 'App\\Controller\\DefaultController::acceuil'], [], [['text', '/']], [], [], []],
    'app_Joueurs' => [[], ['_controller' => 'App\\Controller\\DefaultController::Joueurs'], [], [['text', '/Joueurs']], [], [], []],
    'app_un_Joueur' => [['id'], ['id' => '', '_controller' => 'App\\Controller\\DefaultController::un_joueur'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/un_joueur']], [], [], []],
    'app_contact_nous' => [[], ['_controller' => 'App\\Controller\\DefaultController::contact_nous'], [], [['text', '/contact_nous']], [], [], []],
    'app_Clubs' => [[], ['_controller' => 'App\\Controller\\DefaultController::Club'], [], [['text', '/Clubs']], [], [], []],
    'app_Agents' => [[], ['_controller' => 'App\\Controller\\DefaultController::Agents'], [], [['text', '/Agents']], [], [], []],
    'app_un_Agent' => [['id'], ['id' => '', '_controller' => 'App\\Controller\\DefaultController::un_Agent'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/un_Agent']], [], [], []],
    'app_Offres' => [[], ['_controller' => 'App\\Controller\\DefaultController::Offres'], [], [['text', '/Offres']], [], [], []],
];
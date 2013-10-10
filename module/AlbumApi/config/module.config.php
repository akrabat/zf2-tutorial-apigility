<?php
return array (
  'router' => 
  array (
    'routes' => 
    array (
      'album-api.rest.album' => 
      array (
        'type' => 'Segment',
        'options' => 
        array (
          'route' => '/api/album[/:id]',
          'defaults' => 
          array (
            'controller' => 'AlbumApi\\V1\\Rest\\Album\\Controller',
          ),
        ),
      ),
    ),
  ),
  'zf-versioning' => 
  array (
    'uri' => 
    array (
      0 => 'album-api.rest.album',
    ),
  ),
  'zf-rest' => 
  array (
    'AlbumApi\\V1\\Rest\\Album\\Controller' => 
    array (
      'listener' => 'AlbumApi\\V1\\Rest\\Album\\AlbumResource',
      'route_name' => 'album-api.rest.album',
      'identifier_name' => 'id',
      'collection_name' => 'album',
      'resource_http_methods' => 
      array (
        0 => 'GET',
        1 => 'PUT',
        2 => 'DELETE',
        3 => 'PATCH',
      ),
      'collection_http_methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
      ),
      'collection_query_whitelist' => 
      array (
      ),
      'page_size' => 25,
      'page_size_param' => NULL,
      'entity_class' => 'AlbumApi\\V1\\Rest\\Album\\AlbumEntity',
      'collection_class' => 'AlbumApi\\V1\\Rest\\Album\\AlbumCollection',
    ),
  ),
  'zf-content-negotiation' => 
  array (
    'controllers' => 
    array (
      'AlbumApi\\V1\\Rest\\Album\\Controller' => 'HalJson',
    ),
    'accept-whitelist' => 
    array (
      'AlbumApi\\V1\\Rest\\Album\\Controller' => 
      array (
        0 => 'application/vnd.album-api.v1+json',
        1 => 'application/hal+json',
        2 => 'application/json',
      ),
    ),
    'content-type-whitelist' => 
    array (
      'AlbumApi\\V1\\Rest\\Album\\Controller' => 
      array (
        0 => 'application/vnd.album-api.v1+json',
        1 => 'application/json',
      ),
    ),
  ),
  'zf-hal' => 
  array (
    'metadata_map' => 
    array (
      'AlbumApi\\V1\\Rest\\Album\\AlbumEntity' => 
      array (
        'identifier_name' => 'id',
        'route_name' => 'album-api.rest.album',
        'hydrator' => 'ArraySerializable',
      ),
      'AlbumApi\\V1\\Rest\\Album\\AlbumCollection' => 
      array (
        'identifier_name' => 'id',
        'route_name' => 'album-api.rest.album',
        'is_collection' => true,
      ),
    ),
  ),
  'zf-apigility' => 
  array (
    'db-connected' => 
    array (
      'AlbumApi\\V1\\Rest\\Album\\AlbumResource' => 
      array (
        'adapter_name' => 'DB\\Album',
        'table_name' => 'album',
        'hydrator_name' => 'ArraySerializable',
        'controller_service_name' => 'AlbumApi\\V1\\Rest\\Album\\Controller',
        'table_service' => 'AlbumApi\\V1\\Rest\\Album\\AlbumResource\\Table',
      ),
    ),
  ),
);

<?php
return array (
  'service_manager' => 
  array (
    'factories' => 
    array (
      'Zend\\Db\\Adapter\\Adapter' => 'Zend\\Db\\Adapter\\AdapterServiceFactory',
    ),
    'abstract_factories' => 
    array (
      0 => 'Zend\\Db\\Adapter\\AdapterAbstractServiceFactory',
    ),
  ),
  'db' => 
  array (
    'adapters' => 
    array (
      'DB\\Album' => 
      array (
      ),
    ),
  ),
);

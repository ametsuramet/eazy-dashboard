<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => 'balakutak',
        'dbname'      => 'radite',
        'charset'     => 'utf8',
    ),
    'application' => array(
        //  'controllersDir' => __DIR__ . '/../../app/controllers/',
        // 'modelsDir'      => __DIR__ . '/../../app/models/',
        // 'migrationsDir'  => __DIR__ . '/../../app/migrations/',
        // 'viewsDir'       => __DIR__ . '/../../app/views/',
        // 'pluginsDir'     => __DIR__ . '/../../app/plugins/',
        // 'libraryDir'     => __DIR__ . '/../../app/library/',
        // 'cacheDir'       => __DIR__ . '/../../app/cache/'
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'baseUri'        => '/eazy-dashboard/',
    )
));

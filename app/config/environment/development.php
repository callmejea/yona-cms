<?php

return [
    'base_path' => '/',
    //'base_path' => 'http://localhost/yona-cms/web/',

    'database' => [
        'adapter' => 'Mysql',
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => 'root',
        'dbname' => 'yona',
        'charset' => 'utf8',
    ],

    'memcache' => [
        'host' => 'localhost',
        'port' => 11211,
    ],

    'memcached' => [
        'host' => 'localhost',
        'port' => 11211,
    ],

    'debug' => true,

    'cache' => 'file', // memcache, memcached
];
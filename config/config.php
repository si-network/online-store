<?php

return [
    'path' => [
        'root'         => $_SERVER['DOCUMENT_ROOT'],
        'core'         => $_SERVER['DOCUMENT_ROOT'] . '/../core',
        'controller'   => $_SERVER['DOCUMENT_ROOT'] . '/../app/Controllers',
        'view'         => $_SERVER['DOCUMENT_ROOT'] . '/../app/Views',
        'model'        => $_SERVER['DOCUMENT_ROOT'] . '/../app/Models',
    ],

    'db' => [
        'driver'    => 'mysql',
        'dbname'    => 'store_db',
        'host'      => '10.99.86.89',
        'port'      => '3306',
        'user'      => 'root',
        'password'  => '777777',
        'charset'   => 'utf8'
    ],

    'namespace' => [
        'controller'    => '\App\Controllers',
        'model'         => '\App\Models',
        'view'          => '\App\Views'
    ]
];
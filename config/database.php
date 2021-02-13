<?php

return [

    /*
    |----------------------------------------------------------
    | Default Database Connection
    |----------------------------------------------------------
    | Default used database driver
    */

    'default' => 'none',

    /*
    |----------------------------------------------------------
    | Database Connections
    |----------------------------------------------------------
    | all drivers that Pikia Work with
    */

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => __DIR__.'/../database/production.sqlite',
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'test',
            'username'  => 'root',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'database' => 'forge',
            'username' => 'forge',
            'password' => '',
            'charset'  => 'utf8',
            'schema'   => 'public',
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => 'localhost',
            'database' => 'database',
            'username' => 'root',
            'password' => '',
        ],

    ],

    /*
    |----------------------------------------------------------
    | Schemas Table
    |----------------------------------------------------------
    | Database used to store migrations info
    */

    'migration' => 'vinala_migrations',

    /*
    |----------------------------------------------------------
    | Prefixing
    |----------------------------------------------------------
    | if true, Pikia will add prefixe for all
    | Database tables created by the framework
    */

    'prefixing' => true,

    /*
    |----------------------------------------------------------
    | The prefixe
    |----------------------------------------------------------
    | This string will be add to all tables names
    | created by Pikia if prefixing parameter was true
    */

    'prefixe' => 'vnl_',

];

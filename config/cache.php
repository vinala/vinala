<?php


return [

    /*
    |---------------------------------------------
    | Default Cache Store
    |---------------------------------------------
    | Name of cache storage mode
    */

    'default' => 'file',

    'lifetime' => 0,

    /*
    |----------------------------------------------------------
    | Cache options
    |----------------------------------------------------------
    */

    'options' => [

        'file' => [
            'driver'   => 'file',
            'location' => 'storage/cache',
        ],

        'array' => [
            'driver'    => 'array',
            'serialize' => true,
        ],

        'database' => [
            'driver' => 'database',
            'table'  => 'cache_table',
        ],
    ],
];

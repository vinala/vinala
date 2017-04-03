<?php


return [

    /*
    |----------------------------------------------------------
    | Panel Activation
    |----------------------------------------------------------
    |  To define if you wanna give access to the
    |  panel or not , for your security if you
    |  complete building your app, please turn
    |  this off
    */

    'enable'=> true,

    /*
    |----------------------------------------------------------
    | Panel Route
    |----------------------------------------------------------
    |  Route for panel, for your security please change it
    */

    'route'=> 'lighty',

    /*
    |----------------------------------------------------------
    | Panel Passwords
    |----------------------------------------------------------
    |  Here are the passwords to access to the panel
    */

    'password1'=> '1234',
    'password2'=> '5678',

    /*
    |----------------------------------------------------------
    | Setup
    |----------------------------------------------------------
    |  The framework will set true if you passed
    |  the setup
    */

    'setup' => false,

    /*
    |----------------------------------------------------------
    | Ajax Routes
    |----------------------------------------------------------
    |  This is links of ajax functions
    */

    'ajax' => [

        // for new seeds
            'new_seed' => 'new_seed',

        // to exec migrations
            'exec_migration' => 'exec_migration',

        // to rollback migrations
            'rollback_migration' => 'rollback_migration',

        // for new migrations
            'new_migration' => 'new_migration',

        // for new controllers
            'new_controller' => 'new_controller',

        // for new language folder
            'new_dir_lang' => 'new_dir_lang',

        // for new language file
            'new_file_lang' => 'new_file_lang',

        // for new links file
            'new_link' => 'new_link',

        // for new models
            'new_model' => 'new_model',

        // for new views
            'new_view' => 'new_view',

        // to exec costume migrations
            'exec_cos_migration' => 'exec_cos_migration',

        // to rollback costume migrations
            'rollback_cos_migration' => 'rollback_cos_migration',
    ],

];

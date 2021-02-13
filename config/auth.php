<?php

return [

    /*
    |----------------------------------------------------------
    | Authentication Table
    |----------------------------------------------------------
    | If you want working with Vinala authentication,
    | the framework will need to know the Database
    | table where to get data from
    |
    */

    'table' => 'user',

    /*
    |----------------------------------------------------------
    | Hashed fields
    |----------------------------------------------------------
    | the secure columns that will be used hashed
    |
    */

    'hashed_fields' => [
        'password',
    ],

    /*
    |----------------------------------------------------------
    | Saved fields
    |----------------------------------------------------------
    | Columns that will be stored in session
    |
    */

    'saved_fields' => [
        'user_id',
    ],

    /*
    |----------------------------------------------------------
    | Saved fields
    |----------------------------------------------------------
    | Name of cookie and session where storing
    | the authentication data, the cookie will
    | be used to make remember me
    |
    */

    'cookie' => config('security.key1'),

    'session' => config('security.key1'),

    /*
    |----------------------------------------------------------
    | Saved fields lifetime
    |----------------------------------------------------------
    | The life time of cookie and session in minitues where
    | storing the authentication data, if the session lifetime
    | was 0 it means forever
    |
    */

    'cookie_lifetime' => 3600 * 24 * 7,

    'session_lifetime' => 0,

    /*
    |----------------------------------------------------------
    | The ORM model
    |----------------------------------------------------------
    | Name of ORM model class used in authentication
    |
    */

    'model' => UserM::class,

    /*
    |----------------------------------------------------------
    | CSRF Protection Token name
    |----------------------------------------------------------
    | Name of input hidden of CSRF
    | (cross-site request forgery attacks)
    |
    */

    'csrf_token' => '_token',

];

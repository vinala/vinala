<?php


return [

    /*
    |----------------------------------------------------------
    | Authentication Table
    |----------------------------------------------------------
    | If you want working with Pikia authentification,
    | the framework will need to know the Database
    | table where to get data from
    */

    'table' => 'tbl_user',

    /*
    |----------------------------------------------------------
    | Password fields
    |----------------------------------------------------------
    | Here are the hashed columns
    */

    'hashed_fields' => [
        'password',
        'token',
    ],

    /*
    |----------------------------------------------------------
    | Saved fields
    |----------------------------------------------------------
    | Columns to store in $_SESSION
    */

    'saved_fields' => [
        'pk',
    ],

    /*
    |----------------------------------------------------------
    | Saved fields
    |----------------------------------------------------------
    | Name of cookie where storing the authentification
    | data, to make remember me
    */

    'rememeber_cookie' => 'rPuqyyAOg',

    /*
    |----------------------------------------------------------
    | CSRF Protection Token name
    |----------------------------------------------------------
    | Name of input hidden of CSRF
    | (cross-site request forgery attacks)
    */

    'csrf_token' => '_token',

];

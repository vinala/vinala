<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SMTP Host Address
    |--------------------------------------------------------------------------
    |  SMTP host server where e-mail sends from
    */

    'host' => '',

    /*
    |--------------------------------------------------------------------------
    | SMTP Host Port
    |--------------------------------------------------------------------------
    |  Port of SMTP server
    |  supported 25 or 465 or 587
    */

    'port' => 465,

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |  Here you should put the e-mail adresse where e-mails send
    |  from and user name to show them in sender e-mail
    */

    'from' => ['adresse' => '', 'name' => ''],

    /*
    |--------------------------------------------------------------------------
    | E-Mail Encryption Protocol
    |--------------------------------------------------------------------------
    |  This is the e-mail encryption protocol
    |  supported tls ola ssl
    */

    'encryption' => 'ssl',

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Username
    |--------------------------------------------------------------------------
    |  Username to log into SMTP server
    */

    'username' => '',

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Password
    |--------------------------------------------------------------------------
    |  Password to log into SMTP server
    */

    'password' => '',

    /*
    |--------------------------------------------------------------------------
    | E-mail default subject
    |--------------------------------------------------------------------------
    |  The default subject of sended e-mails you can changeit
    |  when you want to send e-mail
    */

    'subject' => 'Vinala',

];

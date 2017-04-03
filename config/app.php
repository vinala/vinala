<?php

use Lighty\Kernel\Foundation\Application;

return [

    /*
    |----------------------------------------------------------
    | Project name
    |----------------------------------------------------------
    | Your project name
    */

    'project'=> '',

    /*
    |----------------------------------------------------------
    | Owner name
    |----------------------------------------------------------
    | Your name
    */

    'owner'=> '',

    /*
    |----------------------------------------------------------
    | Project url
    |----------------------------------------------------------
    | Your website root link, you should put your
    | root link , by default we using App::root
    | function to get the root link even if you
    | working on localhost
    */

    'url'=> Application::root(),

    /*
    |----------------------------------------------------------
    | HTML Default title
    |----------------------------------------------------------
    | Default HTML title
    */

    'title'=> 'Lighty PHP Framework',

    /*
    |----------------------------------------------------------
    | Timezone
    |----------------------------------------------------------
    | Here you should set your timezone after that
    | whenever you wanna get time, Pikia will give
    | you exact time for the timezone.
    | To get all of timezones supported in php
    | visite here : http://php.net/manual/en/timezones.php
    */

    'timezone'=> 'UTC',

    /*
    |----------------------------------------------------------
    | Routing inexists event
    |----------------------------------------------------------
    | When HttpNotFoundException trown if unrouted
    | parameter was true it will be show to
    | exception else the framework will redirect
    | user to Error::r_404 route,
    */

    'unrouted'=> true,

    /*
    |----------------------------------------------------------
    | Default Character Set
    |----------------------------------------------------------
    | Default encodage when you using HTML::charset
    */

    'charset'=> 'utf-8',

];

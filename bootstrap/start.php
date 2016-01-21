<?php 

/*
|----------------------------------------
| Fiesta (http://ipixa.net)
| Copyright 2016 Youssef Had, Inc.
| Licensed under MIT License
|----------------------------------------
*/


/*
|----------------------------------------------
| Framework calling
|----------------------------------------------
| Calling the fiesta framework
*/

// require_once __DIR__.'/../core/Ini.php';
require __DIR__.'/../vendor/autoload.php';

/*
|----------------------------------------------
| Run the Framework
|----------------------------------------------
| launch the Fiesta framework
*/

Fiesta\Core\Glob\App::run();
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

require __DIR__.'/../vendor/autoload.php';

/*
|----------------------------------------------
| Run the Framework
|----------------------------------------------
| launch the Fiesta framework
*/

Fiesta\Kernel\Fondation\Application::run();
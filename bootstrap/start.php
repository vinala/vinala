<?php 

/*
|----------------------------------------
| Pikia (http://ipixa.net)
| Copyright 2016 Youssef Had, Inc.
| Licensed under MIT License
|----------------------------------------
*/


/*
|----------------------------------------------
| Framework calling
|----------------------------------------------
| Calling the Pikia framework
*/

require __DIR__.'/../vendor/autoload.php';

/*
|----------------------------------------------
| Run the Framework
|----------------------------------------------
| launch the Pikia framework
*/

Pikia\Kernel\Foundation\Application::run();
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

require_once 'core/Ini.php';

/*
|----------------------------------------------
| Run the Framework
|----------------------------------------------
| launch the Fiesta framework
*/

Fiesta\Core\Glob\App::run();
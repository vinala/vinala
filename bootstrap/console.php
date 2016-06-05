<?php 

require __DIR__.'/../vendor/autoload.php';


/*
|----------------------------------------------
| Run the console
|----------------------------------------------
| launch the Lighty console
*/

try 
{
	Lighty\Kernel\Foundation\Application::console();
} 
catch (Exception $e) 
{
	echo $e->xdebug_message;
}
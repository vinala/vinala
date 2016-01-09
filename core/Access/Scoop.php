<?php 

use Fiesta\Core\MVC\View\View;
use Fiesta\Core\Router\Route;

/**
 * Views
 */
function view($value,$data=null)
{
	View::make($value,$data);
}

/**
 * Route
 */
function get($uri,$callback,$subdomains=null)
{
	Route::get($uri,$callback,$subdomains);
}
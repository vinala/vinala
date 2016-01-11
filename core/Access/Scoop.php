<?php 

use Fiesta\Core\MVC\View\View;
use Fiesta\Core\Router\Route;

/**
 * Views
 */
function view($value,$data=null)
{
	return View::make($value,$data);
}

/**
 * Route
 */
function get($uri,$callback,$subdomains=null)
{
	return Route::get($uri,$callback,$subdomains);
}

/**
 * Config
 */
function config($param)
{
	return Config::get($param);
}
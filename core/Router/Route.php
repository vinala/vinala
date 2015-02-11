<?php 



/**
* Route class
*/

class Route
{
	//protected routes;

	public static function get($uri,$callback,$subdomains=null)
	{
		return Fiesta\Router\Routes::get($uri,$callback,$subdomains);
	}

	public static function post($uri,$callback,$subdomains=null)
	{
		return Fiesta\Router\Routes::get($uri,$callback);
	}

	public static function filter($name,$callback,$falsecall=null)
	{
		return Fiesta\Router\Routes::filter($name,$callback,$falsecall);
	}

	public static function resource($uri,$controller,$data=null)
	{
		return Fiesta\Router\Routes::resource($uri,$controller,$data);
	}

}
<?php 

/**
* System Class
*/
class Sys
{
	public static $root;
	public static $base;
	public static $path;
	public static $app;
	public static $libs;

	/*public static function ini()
	{
		$path="$_SERVER[REQUEST_URI]";
		$paths=explode('/', $path);
		$root="../";
		$base="";
		//
		for ($i=0; $i < count($paths)-2; $i++) { 
			$root.="../";
			$base.="../";
		}
		self::$root=$root;
		self::$base=$base;
		//
		self::$path="http://$_SERVER[HTTP_HOST]/";
	}*/

	public static function ini()
	{
		$path="$_SERVER[REQUEST_URI]";
		$paths=explode('/', $path);
		$root="";
		$base="";
		
		self::$root=$root;
		self::$base=$base;
		self::$app=Config::get('app.url')."app/";
		//
		self::$path="http://$_SERVER[HTTP_HOST]/";
		//
		//self::$rt_page=self::$root."app/pages/";
	}
}
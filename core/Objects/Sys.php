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

	public static function ini()
	{
		$path="$_SERVER[REQUEST_URI]";
		$paths=explode('/', $path);
		$root="";
		$base="";
		
		self::$root=$root;
		self::$base=$base;
		self::$app="../app";
		//
		self::$path="http://$_SERVER[HTTP_HOST]/";
	}
}

/**
* System Class
*/
class Path
{
	public static $root;
	public static $base;
	public static $path;
	//
	public static $app;
	public static $core;
	public static $public;
	//
	public static $libs;

	public static function ini()
	{
		$path="$_SERVER[REQUEST_URI]";
		$paths=explode('/', $path);
		$root="";
		$base="";
		
		self::$root=$root;
		self::$base=$base;
		//
		self::$app="app";
		self::$core="core";
		self::$public="public";
		//
		self::$path="http://$_SERVER[HTTP_HOST]/";
	}
}
Path::ini();
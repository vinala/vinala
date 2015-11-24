<?php 

namespace Fiesta\Alias;

/**
* Alias Class for "lazy"
*/
class Alias
{
	protected static $aliases;
	//

	public static function ini($root)
	{
		self::load($root);
		//
		foreach (self::$aliases as $key => $value) 
			class_alias ( "$value" , $key);
	}

	protected static function load($root)
	{
		self::$aliases = include $root."../app/config/alias.php";
		return self::$aliases;
	}
}
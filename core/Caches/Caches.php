<?php 

namespace Fiesta\Caches;

/**
* Cache class
*/
class Caches
{
	public static function put($key,$value,$minutes)
	{
		return (new FileCache)->put($key, $value, $minutes);
	}

	public static function get($key)
	{
		return (new FileCache)->get($key);
	}

	public static function existe($key)
	{
		return (new FileCache)->existe($key);
	}
}
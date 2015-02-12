<?php 



/**
* Cache class
*/
class Cache
{
	public static function put($key, $value, $minutes)
	{
		return Fiesta\Caches\Caches::put($key, $value, $minutes);
	}

	public static function get($key)
	{
		return Fiesta\Caches\Caches::get($key);
	}

	public static function has($key)
	{
		return Fiesta\Caches\Caches::exists($key);
	}
}
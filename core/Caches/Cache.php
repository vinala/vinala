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

	public static function forever($key, $value)
	{
		return Fiesta\Caches\Caches::forever($key, $value);
	}

	public static function clearOld()
	{
		return Fiesta\Caches\Caches::clearOld();
	}

	public static function prolongation($key,$minutes)
	{
		return Fiesta\Caches\Caches::prolongation($key,$minutes);
	}

	public static function pull($key)
	{
		return Fiesta\Caches\Caches::pull($key);
	}
}
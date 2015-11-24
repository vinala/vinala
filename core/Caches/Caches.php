<?php 

namespace Fiesta\Core\Caches;

/**
* Cache class
*/
class Caches
{
	public static function put($key,$value,$minutes)
	{
		return self::driver()->put($key, $value, $minutes);
	}

	public static function get($key)
	{
		return self::driver()->get($key);
	}

	public static function exists($key)
	{
		return self::driver()->exists($key);
	}

	public static function forever($key,$value)
	{
		return self::driver()->forever($key,$value);
	}

	public static function clearOld()
	{
		return self::driver()->clearOld();
	}

	public static function prolongation($key,$minutes)
	{
		return self::driver()->prolongation($key,$minutes);
	}

	public static function pull($key)
	{
		return self::driver()->pull($key);
	}

	protected static function driver()
	{
		$option=\Fiesta\Core\Config\Config::get('cache.options');
		$default=\Fiesta\Core\Config\Config::get('cache.default');
		//
		switch ($default) {
			case 'file':
				return new \Fiesta\Core\Caches\FileCache;
				break;
			
			case 'database':
				return new \Fiesta\Core\Caches\DatabaseCache;
				break;

			default:
			throw new \Fiesta\Core\Caches\Exception\DriverNotFoundException();
				break;
		}
		


	}

}
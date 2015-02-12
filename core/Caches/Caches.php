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

	public static function exists($key)
	{
		return (new FileCache)->exists($key);
	}

	public static function forever($key,$value)
	{
		return (new FileCache)->forever($key,$value);
	}

	public static function clearOld()
	{
		return (new FileCache)->clearOld();
	}

	public static function prolongation($key,$minutes)
	{
		return (new FileCache)->prolongation($key,$minutes);
	}
}
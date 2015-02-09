<?php 

/**
* Cache class
*/
class cache
{
	public static function put($value='')
	{
		return apc_store($key, $value, $seconds);
	}
}
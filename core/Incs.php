<?php 


/**
* Includes class
*/
class Inc
{
	public static function get($file)
	{
		include $file;
	}

	public static function once($file)
	{
		include_once $file;
	}
}
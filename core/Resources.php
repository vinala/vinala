<?php 

/**
* Resources class
*/
class Resources
{
	public static function get($name)
	{
		echo Root::$resource.$name;
	}

	public static function image($name,$link=false)
	{
		if($link)
			echo Root::$resource.$name;
		else 
			echo Root::$resource.$name;
	}
}
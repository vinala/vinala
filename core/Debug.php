<?php 

/**
* debug class
*/
class Debug
{
	public static function stop($name="User Debug",$array_vars=array())
	{
		if(is_array($name))
		{
			$array_vars=$name;
			$name="User Debug";
		}
		//
		$Handler=new Whoops\Handler\PrettyPageHandler();
		$Handler->handleUserDebug($name,$array_vars);
	}
}

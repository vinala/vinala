<?php


/**
* View mother class
*/
class View
{


	public static function make($value,$data=null)
	{
		Fiesta\MVC\View\Views::make($value,$data);
	}

	public static function get($value,$data=null)
	{
		return Fiesta\MVC\View\Views::get($value,$data);
	}


}

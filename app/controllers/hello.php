<?php

 use Fiesta\Kernel\MVC\Controller\Controller;

/**
* class de controller hello
*/

class Home extends Controller
{
	public static function hello()
	{
		return View::make('hello.hello');
	}
}
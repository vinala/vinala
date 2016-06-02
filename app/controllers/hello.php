<?php

use Lighty\Kernel\MVC\Controller\Controller;
use Lighty\Kernel\Setup\Setup;

/**
* class de controller hello
*/

class Home extends Controller
{
	public static function hello()
	{
		// return View::make('hello.hello');
		if(!Config::get('panel.configured')) Setup::launch();
		else View::make("hello.hello");

	}
}
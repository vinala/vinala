<?php

use Vinala\Kernel\Setup\Setup;

class Home
{
	public static function hello()
	{
		if( ! Config::get('panel.setup')) return Setup::launch();
		else return View::make("hello.hello");

	}
}
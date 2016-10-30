<?php

use Vinala\Kernel\Setup\Setup;

class Home
{
	public static function hello()
	{
		if( ! Config::get('panel.setup')) Setup::launch();
		else View::make("hello.hello");

	}
}
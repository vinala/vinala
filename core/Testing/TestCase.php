<?php 

namespace Fiesta\Core\Testing;

use PHPUnit_Framework_TestCase;
use Fiesta\Core\Glob\App;


/**
* TestCase Class For testing
*/
class TestCase extends PHPUnit_Framework_TestCase
{
	
	public static function run()
	{
		self::call(__DIR__."/../");
		//
		return self::check();
	}

	public static function mock()
	{
		return $app = self::instance(__DIR__."/");
	}

	public static function call($path)
	{
		require_once $path.'core/Ini.php';
	}

	public static function instance($path)
	{
		return App::run("test",$path,false,false);
	}

	public static function check()
	{
		return self::mock();
	}
}


<?php 

namespace Fiesta\Core\Testing;

use PHPUnit_Framework_TestCase;
use Fiesta\Core\Glob\App;


/**
* TestCase Class For testing
*/
class TestCase extends PHPUnit_Framework_TestCase
{
	
	/**
	 * Run the test
	 */
	public static function run()
	{
		self::call(__DIR__."/../");
		//
		return self::check();
	}

	/**
	 * Call the Fiesta Framework
	 */
	public static function call($path)
	{
		require_once $path.'core/Ini.php';
	}

	/**
	 * Return instance the Framework App Class
	 */
	public static function instance($path)
	{
		return App::run("test",$path,false,false);
	}

	/**
	 * Check if App Class retruns true
	 */
	public static function check()
	{
		return self::instance(__DIR__."/");
	}
}


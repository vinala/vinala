<?php 

namespace Fiesta\Core\Testing;

use PHPUnit_Framework_TestCase;
use Fiesta\Core\Glob\App;


/**
* TestCase Class For testing
*/
class TestCase
{
	
	/**
	 * Run the test
	 */
	public static function run()
	{
		self::call();
		//
		return self::mock();
	}

	/**
	 * Call the Fiesta Framework
	 */
	public static function call()
	{
		// require_once self::path().'/Ini.php';
		require_once __DIR__.'/../../core/Ini.php';
	}

	/**
	 * Call the Fiesta Framework
	 */
	protected static function path()
	{
		$path =  __DIR__;
		$data = explode("\\", $path);
		$path = "";
		//
		for ($i=0; $i < count($data) - 1; $i++) $path = $data[$i]."\\";
		return $path;
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
	public static function mock()
	{
		return self::instance(__DIR__."/../");
	}

	public static function check($app)
	{
		return $this->assertTrue( $app );
	}
}


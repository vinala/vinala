<?php 

namespace Fiesta\Core\Testing;

use PHPUnit_Framework_TestCase;
use Fiesta\Core\Glob\App;


/**
* TestCase Class For testing
*/
class TestCase extends PHPUnit_Framework_TestCase
{
	
	public function run()
	{
		$this->call(__DIR__."/../");
		//
		return $this->check();
	}

	public function mock()
	{
		return $app = $this->instance(__DIR__."/");
	}

	public function call($path)
	{
		require_once $path.'core/Ini.php';
	}

	public function instance($path)
	{
		return App::run("test",$path,false,false);
	}

	public function check()
	{
		return $this->mock();
	}
}


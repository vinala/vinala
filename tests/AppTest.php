<?php 

/**
* 
*/
class AppTest extends PHPUnit_Framework_TestCase
{
	public function testIfRun()
	{
		require_once __DIR__.'/../core/Ini.php';
		
		$app = Fiesta\Core\Glob\App::runTest(__DIR__."/");
		
		$this->assertTrue( $app );
	}
}
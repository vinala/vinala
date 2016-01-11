<?php 


use Fiesta\Core\Testing\TestCase;

/**
* AppTestClass for testing
*/
class AppTest
{
	public function testIfRun()
	{
		$this->call();
		//
		$app = TestCase::run();
		
		$this->assertTrue( $app );
	}

	protected function call()
	{
		require_once __DIR__.'/../core/Testing/TestCase.php'; 
	}
}
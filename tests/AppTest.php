<?php 


use Fiesta\Core\Testing\TestCase;

/**
* AppTestClass for testing
*/
class AppTest
{

	/**
	 * Check if PHPUnit accept the Framework test 
	 */
	public function check()
	{
		$this->call();
		//
		$app = TestCase::run();
		
		$this->assertTrue( $app );
	}

	/**
	 * Calling the test class
	 */
	protected function call()
	{
		require_once __DIR__.'/../core/Testing/TestCase.php'; 
	}
}
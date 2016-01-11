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
	public function testIfRun()
	{
		require_once __DIR__.'/../core/Testing/TestCase.php'; 
		//
		$app = TestCase::run();
		
		$this->assertTrue( $app );
	}
}
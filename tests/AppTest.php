<?php 


use Lighty\Kernel\Testing\TestCase;

/**
* AppTestClass for testing
*/
class AppTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * Check if PHPUnit accept the Framework test 
	 */
	public function test()
	{
		require_once __DIR__.'/../vendor/lighty/kernel/src/Testing/TestCase.php';
		//
		$app = TestCase::run();
		
		return $this->assertTrue( $app );
	}
}
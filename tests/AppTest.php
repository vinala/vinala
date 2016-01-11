<?php 

require_once __DIR__.'/../core/Testing/TestCase.php'; 

/**
* AppTestClass for testing
*/
class AppTest extends Fiesta\Core\Testing\TestCase
{
	public function testIfRun()
	{
		
		$app = $this->run();
		
		$this->assertTrue( $app );
	}
}
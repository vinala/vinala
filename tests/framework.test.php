<?php 

use Vinala\Kernel\Testing\TestCase as BaseTestCase;
use Vinala\Kernel\Foundation\Application;
use Vinala\Kernel\Config\Config;

/**
* FrameworkTest to test if the frameworkcan run it self
*/
class FrameworkTest extends BaseTestCase
{
	/**
	* Check if owner name not empty
	*
	* @return bool
	* @test
	*/
	public function canRun()
	{
		$result = Application::getTestResult();

		return $this->assertFalse( $result , 'The Framework can\'t run' );
	}

	/**
	* Check Config params existenece
	*
	* @return bool
	* @test
	*/
	public function testConfigParams()
	{
		$params = Config::all();
		
		$this->assertArrayHasKey('error' ,$params);
		$this->assertArrayHasKey('database' ,$params);
		$this->assertArrayHasKey('app' ,$params);
		$this->assertArrayHasKey('maintenance' ,$params);
		$this->assertArrayHasKey('lang' ,$params);
		$this->assertArrayHasKey('security' ,$params);
		$this->assertArrayHasKey('auth' ,$params);
		$this->assertArrayHasKey('mail' ,$params);
		$this->assertArrayHasKey('view' ,$params);
		$this->assertArrayHasKey('loggin' ,$params);
		$this->assertArrayHasKey('storage' ,$params);
		$this->assertArrayHasKey('cache' ,$params);
		$this->assertArrayHasKey('alias' ,$params);
		$this->assertArrayHasKey('smiley' ,$params);
		$this->assertArrayHasKey('lumos' ,$params);
		$this->assertArrayHasKey('components' ,$params);

		//error
		$this->assertArrayHasKey('database' ,$params['error']);
		$this->assertArrayHasKey('404' ,$params['error']);
		$this->assertArrayHasKey('regular' ,$params['error']);

		//database
		$this->assertArrayHasKey('default' ,$params['database']);
		$this->assertArrayHasKey('connections' ,$params['database']);
		$this->assertArrayHasKey('migration' ,$params['database']);
		$this->assertArrayHasKey('prefixing' ,$params['database']);
		$this->assertArrayHasKey('prefixe' ,$params['database']);

		//app
		$this->assertArrayHasKey('project' ,$params['app']);
		$this->assertArrayHasKey('owner' ,$params['app']);
		$this->assertArrayHasKey('url' ,$params['app']);
		$this->assertArrayHasKey('title' ,$params['app']);
		$this->assertArrayHasKey('timezone' ,$params['app']);
		$this->assertArrayHasKey('charset' ,$params['app']);
		$this->assertArrayHasKey('setup' ,$params['app']);

		//maintenance
		$this->assertArrayHasKey('enabled' ,$params['maintenance']);
		$this->assertArrayHasKey('out' ,$params['maintenance']);
		$this->assertArrayHasKey('view' ,$params['maintenance']);

		//lang
		$this->assertArrayHasKey('default' ,$params['lang']);
		$this->assertArrayHasKey('cookie' ,$params['lang']);
		$this->assertArrayHasKey('lifetime' ,$params['lang']);

		//security
		$this->assertArrayHasKey('key1' ,$params['security']);
		$this->assertArrayHasKey('key2' ,$params['security']);
	}
}
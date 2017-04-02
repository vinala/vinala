<?php 

use Vinala\Kernel\Testing\TestCase as BaseTestCase;

/**
* ConfigTest a sample of tasting
*/
class ConfigTest extends BaseTestCase
{
	/**
	* Check if owner name not empty
	*
	* @return bool
	*/
	public function testOwner()
	{
		$owner = config('app.owner');

		return $this->true( ($owner != '') , 'Owner name in app config file is empty' );
	}
}
<?php 

namespace Fiesta\Router;

/**
* Route Exception
*/
class RouteNotFoundException extends \Exception
{
	protected $message;   // exception message

	function __construct($current) 
	{
		$this->message="There is no route call's ".$current." in your route file";
	}
}
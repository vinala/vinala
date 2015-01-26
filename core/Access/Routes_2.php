<?php 

/**
* Routes 2
*/
class Routes_2
{
	private static $requests=array();

	public function get($uri,$callback)
	{
		
	}

	public function addCallableGet($uri,$callback)
	{
		$r = array(
			'name' => "$uri" , 
			'url' => "/".$uri , 
			'callback' => $callback,
			'methode' => "get",
			);

		$r = array(
			'name' => "$uri"."/" , 
			'url' => "/".$uri."/" , 
			'callback' => $callback,
			'methode' => "get",
			);
	}
	
}
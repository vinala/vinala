<?php

namespace Fiesta\Objects\String;

/**
* String Out Index Exception
*/
class StringOutIndexException extends \Exception{

	function __construct() {
		$this->message = "The index is out of string ";
	}

}

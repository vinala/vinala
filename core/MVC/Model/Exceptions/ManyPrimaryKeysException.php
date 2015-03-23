<?php 

namespace Fiesta\MVC\Model;

/**
* Directory not fount exception
*/
class ManyPrimaryKeysException extends \Exception{

	protected $message = "Fiesta Framework doesn't support many primary keys in ine DataTable";   // exception message
	
}
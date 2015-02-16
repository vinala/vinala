<?php 

namespace Fiesta\Database;

/**
* Directory not fount exception
*/
class DatabaseArgumentsException extends \Exception{

	protected $message = "Database connection parametres is missing";
}
<?php 

namespace Fiesta\Core\Logging;


use Fiesta\Core\Glob\App;
use Fiesta\Core\Config\Config;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
* 
*/
class Log
{
	
	public static function ini()
	{
		ini_set("log_errors", 1);
		ini_set("error_log", Config::get("loggin.errors"));
	}
}
<?php 

namespace Fiesta\Core\Logging;


use Fiesta\Core\Glob\App;
use Fiesta\Core\Config\Config;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Fiesta\Core\Objects\Date_Time;
use Fiesta\Core\Objects\Date_Time as Time;

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

	protected static function setLogTarget($target)
	{
		// if( $target == "error") 
		// else if( $target == "exceptions") 
		// else return $target;
	}

	public static function log($message , $target = "error")
	{
		$myfile = fopen( Config::get('loggin.errors') , "a+");
		$txt = self::getTime( Date_Time::now() )." $message\n";
		fwrite($myfile, $txt);
		fclose($myfile);
	}

	protected static function getTime($timestamp)
	{
		return date( "[Y-m-d H:i:s" ,$timestamp)." ".Time::getTimezone()."]";
	}

	protected static function endLog($path)
	{
		$myfile = fopen($path, "a+");
		$txt = "";
		for ($i=0; $i < 20; $i++) $txt.="-";
		$txt.="\n";
		fwrite($myfile, $txt);
		fclose($myfile);
	}

	protected static function Trace($exception)
	{
		$i = 1; $txt="";
		$traces = $exception->getTrace();
		// die(var_dump($traces));
		//
		foreach ($traces as $trace) if(array_key_exists("file", $trace)) $txt .= "\t\t\t#$i / $trace[file]:$trace[line]\n";

		return $txt;
	}

	public static function setException($Exception)
	{
		$path = Config::get("loggin.exceptions");
		$log = new Logger('');
		$log->pushHandler(new StreamHandler($path));
		$log->addWarning("Message : ".$Exception->getMessage());
		$log->addWarning("Location : ".$Exception->getFile()." in line ".$Exception->getLine());
		$log->addWarning("Class : ".get_class($Exception));
		$log->addWarning("Trace : ".self::Trace($Exception));
		self::endLog($path);
	}
}
<?php 

namespace Fiesta\Core\Logging;


use Fiesta\Core\Glob\App;
use Fiesta\Core\Config\Config;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Fiesta\Core\Objects\Date_Time;
use Fiesta\Core\Objects\Date_Time as Time;
use Fiesta\Core\Objects\String;
use Fiesta\Core\Objects\Table;

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

	public static function log($message , $time = true)
	{
		error_log($message);
	}

	protected static function getTime($timestamp)
	{
		return date( "[Y-m-d H:i:s" ,$timestamp)." ".Time::getTimezone()."]";
	}

	protected static function endLog($path)
	{
		$txt = "";
		for ($i=0; $i < 50; $i++) $txt.="-";
		self::log($txt."\n" , false);
	}

	protected static function tabulation()
	{
		$lenght= 21+2+(String::lenght(Date_Time::getTimezone()));
		$txt = "";
		for ($i=0; $i < $lenght; $i++) $txt .= " ";
		return $txt." ";
	}

	protected static function TraceTabulation()
	{
		$tab = self::getTime( Date_Time::now() )." Trace : ";
		$txt = "";
		for ($i=0; $i < String::lenght($tab); $i++) $txt .= " ";
		return $txt." ";
	}

	protected static function Trace($exception)
	{
		$i = 1; $txt="";
		$traces = $exception->getTrace();
		//
		foreach ($traces as $trace) if(array_key_exists("file", $trace)) { $txt .= "\n".self::TraceTabulation()."#$i / $trace[file]:$trace[line]"; $i++; }

		return $txt;
	}

	public static function exception($Exception)
	{
		$txt = "" ;
		$txt .= "Exception : ".$Exception->getMessage() . "\n";
		$txt .= self::tabulation()."Location : ".$Exception->getFile()." in line ".$Exception->getLine() . "\n";
		$txt .= self::tabulation()."Class : ".get_class($Exception) . "\n";
		$txt .= self::tabulation()."Trace : ".self::Trace($Exception) ;

		self::log($txt);
	}

	public static function error($message , $data = array())
	{
		self::log("Error : " . $message);
		if( ! empty($data) ) 
			self::log(self::tabulation(). Table::toString ($data),false);
		self::log("" , false);
	}

	public static function warning($message , $data = array())
	{
		self::log("Warning : " . $message);
		if( ! empty($data) ) self::log(self::tabulation(). Table::toString ($data),false);
		self::log("" , false);
	}

	public static function info($message , $data = array())
	{
		self::log("Info : " . $message);
		if( ! empty($data) ) self::log(self::tabulation(). Table::toString ($data),false);
		self::log("" , false);
	}

	public static function debug($message , $data = array())
	{
		self::log("Debug : " . $message);
		if( ! empty($data) ) self::log(self::tabulation(). Table::toString ($data),false);
		self::log("" , false);
	}

	public static function notice($message , $data = array())
	{
		self::log("Notice : " . $message);
		if( ! empty($data) ) self::log(self::tabulation(). Table::toString ($data),false);
		self::log("" , false);
	}

	public static function critical($message , $data = array())
	{
		self::log("Critical : " . $message);
		if( ! empty($data) ) self::log(self::tabulation(). Table::toString ($data),false);
		self::log("" , false);
	}

	public static function alert($message , $data = array())
	{
		self::log("Alert : " . $message);
		if( ! empty($data) ) self::log(self::tabulation(). Table::toString ($data),false);
		self::log("" , false);
	}
}
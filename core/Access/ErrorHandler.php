<?php 

/**
* Error Handler class
*/
class ErrorHandler
{
	private static $errors=array();
	private static $debug=true;
	private static $root="";
	private static $msg="";
	private static $log="";

	public static function ini($root="")
	{
		self::$root=$root;
		self::getParams();
		//echo "ooooo";
		error_reporting(0);
		set_error_handler("ErrorHandler::gestion_erreur");
		register_shutdown_function("ErrorHandler::shutdown");
		
	}
	//
	public static function getParams()
	{
		$tbl=(include self::$root.'app/config/loggin.php');
		//
		self::$debug=$tbl['debug'];
		self::$msg=$tbl['msg'];
		self::$log=$tbl['log'];
		//
		ini_set("log_errors", 1);
		ini_set("error_log", self::$log);

	}
	//
	public static function gestion_erreur($num, $str, $file, $line,$root="") 
	{
		$error = array(
			"type" => $num,
			"mesg" => $str,
			"file" => $file,
			"line" => $line
		);

		//self::$errors[]=$error;
		//self::$show($error);
		$str=str_replace("\n", " ", $str);
		$log="( Error $num) $str #bld(Fiesta report : $file in line $line)#/bld";
		error_log($log);
		
		ob_end_clean();
		//self::getParams();
		$log="( Error $num) $str ($file in line $line)";
		$login=self::$log;
		//echo $login."<br>";
		//echo "*$log*";
		//error_log($log);
		//error_log( "Hello, ekkkrrors!" );
		
		$ok=true;
		
		 $msg=self::$msg;
		 $ok=self::$debug;
		//self::$show();
		//echo "kkk";
		//ErrorHandler::$show();
		// if($ok) { echo "oui"; require_once 'ErrorDisplayer/index.php';}
		// else if(!$ok) { echo "non"; require_once 'ErrorDisplayer/hideden.php'; }
		
		include_once 'ErrorDisplayer/index.php';
		
		
		exit();
	}
	
	//
	public static function shutdown() 
	{
		$error=error_get_last();
		if(!empty($error['type'])) 
		{ 
			self::gestion_erreur($error["type"],$error["message"],$error["file"],$error["line"],null);
		}

	}

	public static function run()
	{
		// if(!empty(self::$errors))
		// {
		// 	foreach (self::$errors as $value) {
		// 		echo "<div style='border:1px solid green'>";
		// 		//
		// 		foreach ($value as $key2 => $value2) {
		// 			echo $key2."->".$value2."<br>";
		// 		}
		// 		//
		// 		echo "</div>";
		// 	}
		//     throw new Exception("Error Processing Request", 1);
		    
		// }
		
		// var_dump(self::$errors);
	}

	public static function show()
	{
		echo "error";
		// echo "<div style='border:1px solid red'>";
		// echo $error['type']."<br>";
		// echo $error['mesg']."<br>";
		// echo $error['file']."<br>";
		// echo $error['line']."<br>";
		// echo "</div>";
		//exit();
	}
	
}
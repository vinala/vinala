<?php 

/**
* 
*/
class Base
{
	
	public static function full($value)
	{
		return (isset($value) and !empty($value));
	}

	public static function table($table)
	{
		echo "<pre>";
		print_r($table);
		echo "</pre>";
	}

	
	public static function picture($width=100,$height=100)
	{
		echo "http://lorempixel.com/$width/$height";
	}

	public static function redirect($url)
	{
		header("location:".$url);
	}
}

/**
* datetime class
*/
class DTime
{
	public static function now()
	{
		return time();
	}

	public static function date($timestamp=null,$vars=false)
	{
		$o1 = array();
		$o2=null;
		//
		if($vars)
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o1["year"]=date("Y",$timestamp);
			$o1["month"]=date("n",$timestamp);
			$o1["day"]=date("j",$timestamp);
			//
			return $o1;
		}
		else
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o2=date("Y/n/j",$timestamp);
			//
			return $o2;

		}

	}

	public static function time($timestamp=null,$vars=false)
	{
		$o1 = array();
		$o2=null;
		//
		if($vars)
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o1["hours"]=date("G",$timestamp);
			$o1["minutes"]=date("i",$timestamp);
			$o1["second"]=date("s",$timestamp);
			//
			return $o1;
		}
		else
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o2=date("G:i:s",$timestamp);
			//
			return $o2;
		}
	}

	public static function both($timestamp=null,$vars=false)
	{
		$o1 = array();
		$o2=null;
		//
		if($vars)
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o1["year"]=date("Y",$timestamp);
			$o1["month"]=date("n",$timestamp);
			$o1["day"]=date("j",$timestamp);
			$o1["hours"]=date("G",$timestamp);
			$o1["minutes"]=date("i",$timestamp);
			$o1["second"]=date("s",$timestamp);
			//
			return $o1;
		}
		else
		{
			if(is_null($timestamp)) $timestamp=time();
			//
			$o2=date("Y/n/j G:i:s",$timestamp);
			//
			return $o2;
		}
	}
}
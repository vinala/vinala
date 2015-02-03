<?php

/**
* Session class
*/
class Session
{
	public static function start()
	{
		//ini_set('session.save_path', '/app/storage/seesion');
		session_save_path ('../app/storage/session');
		session_start();
	}

	public static function put($key,$value)
	{
		$_SESSION[$key]=$value;
		return $value;
	}

	public static function get($key)
	{
		if(self::existe($key))
		return $_SESSION[$key];
		//else return null;
	}

	public static function forget($key)
	{
		if(self::existe($key))
		unset($_SESSION[$key]);
	}

	public static function existe($key)
	{
		$ok=false;
		if(isset($_SESSION[$key]) && !empty($_SESSION[$key])) $ok=true;
		return $ok;
	}

	public static function all()
	{
		return $_SESSION;
	}

	public static function token()
	{
		$token_name="#eyuD#BR@w";
		$token="";
		//
		if(self::existe($token_name))
		{
			$token=self::get($token_name);
		}
		else
		{
			$token=Hash::token();
			//
			self::put($token_name,$token);
		}
		return $token;
	}
}
<?php 

/**
* Database Class
*/
class Database
{

	static $server=null;

	public static function ini()
	{
		switch (Config::get('database.default')) {
			case 'sqlite':
				# code...
				break;

			case 'mysql':
				self::set_mysql();
				break;

			case 'pgsql':
				# code...
				break;

			case 'sqlsrv':
				# code...
				break;
		}
	}
	

	static function set_mysql($red=false,$url=null)
	{
		if(Config::get("database.host")=="" and Config::get("database.username")=="" and Config::get("database.password")=="" and Config::get("database.database")=="")
		{

		}
		else
		{
		  	
		  	self::$server=mysqli_connect(Config::get("database.host"), Config::get("database.username"), Config::get("database.password"), Config::get("database.database"));
		  	//
		  	if (!self::$server)
	  		{ 
	  			if(!$red)
	  				die("error Database !"); 
	  			else if($red) 
	  				{
	  					if(empty($url)) Errors::r_db();
	  					else Base::redirect($url);
	  				}

	  		}
		  	
		  	//
		  	mysqli_query(self::$server,"SET NAMES ".Config::get("database.charset"));
		}
	}

	public static function exec($sql)
	{
		$msg=false;
		if(mysqli_query(self::$server,$sql)) $msg=true;
		//else $msg="mysql error :".mysql_error();
		return $msg;
	}

	public static function execErr()
	{
		$msg="";
		if(mysqli_error()!="")
		$msg="mysql error :".mysqli_error();
		return $msg;
	}

	public static function read($sql)
	{
		$vals = array();
		$res=@mysqli_query(self::$server,$sql);
		while ($row=@mysqli_fetch_array($res)) {
			
			$vals[]=$row;
		}
		return $vals;
	}

	public static function countR($res)
	{
		return @mysqli_num_rows($res);
	}

	public static function countS($sql)
	{
		$cnt=0;
		//
		if($res=mysqli_query(self::$server,$sql))$cnt=@mysqli_num_rows($res);
		else $cnt=-1;
		//
		return $cnt;
	}

	public static function res($sql)
	{
		return @mysqli_query(self::$server,$sql);
	}

}


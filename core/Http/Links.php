<?php 

/**
* Links class
*/
class Links
{
	static $bigOne = array();
	public static $ext;
	public static $social;
	public static $css;
	public static $js;
	public static $gen;

	public static function ini()
	{ 
		$files=glob("app/links/*.php");
		//
		foreach ($files as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				//self::$ext->$key=$value;
			}
		}

		// for ext links
		/*foreach (glob(Sys::$root."Fiesta/app/links/ext.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$ext->$key=$value;
			}
		}
		// for Social links
		foreach (glob(Sys::$root."Fiesta/app/links/social.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$social->$key=$value;
			}
		}
		// for css links
		foreach (glob(Sys::$root."Fiesta/app/links/css.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$css->$key=$value;
			}
		}
		// for javascript links
		foreach (glob(Sys::$root."Fiesta/app/links/javascript.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$js->$key=$value;
			}
		}
		// for general links
		foreach (glob(Sys::$root."Fiesta/app/links/main.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$gen->$key=$value;
			}
		}*/
	}

	/*public static function ini()
	{ 
		self::$ext = new self();
		self::$social = new self();
		self::$css = new self();
		self::$js = new self();
		self::$gen = new self();

		// for ext links
		foreach (glob(Sys::$root."Fiesta/app/links/ext.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$ext->$key=$value;
			}
		}
		// for Social links
		foreach (glob(Sys::$root."Fiesta/app/links/social.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$social->$key=$value;
			}
		}
		// for css links
		foreach (glob(Sys::$root."Fiesta/app/links/css.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$css->$key=$value;
			}
		}
		// for javascript links
		foreach (glob(Sys::$root."Fiesta/app/links/javascript.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$js->$key=$value;
			}
		}
		// for general links
		foreach (glob(Sys::$root."Fiesta/app/links/main.php") as $filename)
		{
			$tbl=(include $filename);
			foreach ($tbl as $key => $value)
			{
				self::$bigOne[$key]=$value;
				self::$gen->$key=$value;
			}
		}
	}*/

	public static function get($key)
	{
		return self::$bigOne[$key];
	}

	public static function popup($link='',$title="",$width=200,$height=100)
	{
		echo ('onclick="window.open(\''.$link.'\', \''.$title.'\', \'width='.$width.', height='.$height.',top=\'+top+\', left=\'+left+\')"') ;
	}
}
<?php 

/**
* Routes 2
*/
class Routes_2
{
	private static $requests=array();

	public static function get($uri,$callback)
	{
		if(is_callable($callback)) self::addCallableGet($uri,$callback);

	}

	public static function addCallableGet($uri,$callback)
	{
		$r = array(
			'name' => "$uri" , 
			'url' => "/".$uri , 
			'callback' => $callback,
			'methode' => "get",
			"filtre" => null
			);
		//
		self::$requests[]=$r;

		$r = array(
			'name' => "$uri"."/" , 
			'url' => "/".$uri."/" , 
			'callback' => $callback,
			'methode' => "get",
			"filtre" => null
			);
		//
		self::$requests[]=$r;
	}

	public static function addFiltredGet($uri,$callback)
	{
		$r = array(
			'name' => "$uri" , 
			'url' => "/".$uri , 
			'callback' => $callback[1],
			'methode' => "get",
			"filtre" => $callback[0]
			}

		//
		self::$requests[]=$r;

		$r = array(
			'name' => "$uri"."/" , 
			'url' => "/".$uri."/" , 
			'callback' => $callback[1],
			'methode' => "get",
			"filtre" => $callback[0]
			);
		//
		self::$requests[]=$r;
	}

	public static function run()
	{
		$url=self::CheckUrl();
		//
		if(self::CheckMaintenance($url))
		{
			self::Replace();
			//
			$ok=false;
			//
			foreach (self::$requests as $value) {
				
			}
		}
	}

	public static function CheckUrl()
	{
		return isset($_GET['url'])?'/'.$_GET['url']:'/';
	}

	public static function CheckMaintenance($url)
	{
		if(!Config::get("maintenance.activate") || in_array($url, Config::get("maintenance.outRoutes")))
			return true;
		else return false;
	}

	public static function Replace()
	{
		for ($i=0; $i < count(self::$requests); $i++) 
			if (strpos(self::$requests[$i]['uri'],'{}') !== false) 
					self::$requests[$i]['uri']=str_replace('{}', '(.*)?', self::$requests[$i]['uri']); 
	}
	
}
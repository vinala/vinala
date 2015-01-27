<?php 

/**
* Routes 2
*/
class Routes_2
{
	private static $requests=array();
	private static $filters=array();

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

	public static function newFilterString($route)
	{
		if(!empty($route["filtre"]))
		{
			$call=self::$_filters[self::$_request[$key]];
			$ok=call_user_func($call);
			if(!$ok) { $falseok=self::$_request[$key];  }
		}
	}

	public static function run()
	{
		$currentUrl=self::CheckUrl();
		//
		if(self::CheckMaintenance($currentUrl))
		{
			self::Replace();
			//
			$ok=false;
			//
			foreach (self::$requests as $value) {
				$requestsUrl=$value["url"];
				if(preg_match("#^$requestsUrl$#", $currentUrl,$params))
				{
					if($value["methode"]=="post" && Res::isPost())
					{
						array_shift($params);
						//
						self::callBefore();
						//
						//new filter
						$ok=true;
						$falseok=null;
						$oks=array();
						//
						$filter=$value["filtre"];
						if(is_string($filtre))
						{
							if(!empty($filtre))
							{
								self::callFilter($filtre,$ok,$falseok);
							}
						}
						// self::$_request[$key] => $filtre
						else if(is_array($filtre))
						{
							if(!empty($filtre))
							{
								self::callFilters($filtre,$ok,$falseok);
							}
						}

						// run the route callback
						if($ok) { self::runRoute($value,$params); }
					}

				}
			}
		}
	}

	public static function callBefore()
	{
		call_user_func(App::$Callbacks['before']);
	}

	public static function callAfter()
	{
		call_user_func(App::$Callbacks['after']);
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

	public static function addFilter($name,$callback,$falsecall=null)
	{
		$r = array(
			'name' => $name,
			'callback' => $callback,
			'falsecall' => $falsecall
			 );
		self::$filters[$name]=$r;
		//if(!is_null($falsecall)) self::$_falsecall[$filter]=$falsecall;
	}

	public static function filter($name,$callback,$falsecall=null)
	{
		addFilter($name,$callback,$falsecall);
	}

	public static function getFilterCallback($name)
	{
		return self::$filters[$name];
	}

	public static function callFilter($filtre,&$ok,&$falseok)
	{
		$call=self::$filters[$filtre];
		$ok=call_user_func($call);
		if(!$ok) { $falseok=$filtre;  }
	}

	public static function callFilters($filtre,&$ok,&$falseok)
	{
		foreach ($filtre as $key => $value) {
			$call=self::$filters[$value];
			$ok=call_user_func($call);
			if(!$ok) { $falseok=$value; break; }
		}
	}

	public static function runRoute($request,$params)
	{
		self::$current=$request["name"];
		return call_user_func_array($request["callback"], $params);
	}
	
}
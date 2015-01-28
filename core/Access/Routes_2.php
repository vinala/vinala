<?php 

/**
* Routes 2
*/
class Routes
{
	private static $requests=array();
	private static $filters=array();
	private static $current=null;

	public static function get($uri,$callback)
	{
		if(is_callable($callback)) self::addCallable($uri,$callback,"get");
		else if(is_array($callback)) self::addFiltred($uri,$callback,"get");
	}

	public static function post($uri,$callback)
	{
		if(is_callable($callback)) self::addCallable($uri,$callback,"post");
		else if(is_array($callback)) self::addFiltred($uri,$callback,"post");
	}

	protected static function convert(&$url)
	{
		if($url=="/") 
		{ 
			$value="project_home"; 
			$url="";
		}
		else  
		{
			$value=$url;
			$url="/".$url; 
		}
		return $value;
	}

	protected static function addCallable($url,$callback,$methode)
	{
		$name=self::convert($url);
		$r = array(
			'name' => $name ,
			'url' => $url , 
			'callback' => $callback,
			'methode' => $methode,
			"filtre" => null
			);
		//
		self::$requests[]=$r;

		$r = array(
			'name' => "$name"."/" , 
			'url' => $url."/" , 
			'callback' => $callback,
			'methode' => $methode,
			"filtre" => null
			);
		//
		self::$requests[]=$r;
	}

	protected static function addFiltred($uri,$callback,$methode)
	{
		$name=self::convert($url);
		$r = array(
			'name' => $name , 
			'url' => $url , 
			'callback' => $callback[1],
			'methode' => $methode,
			"filtre" => $callback[0]
			);

		//
		self::$requests[]=$r;

		$r = array(
			'name' => $name."/" , 
			'url' => $url."/" , 
			'callback' => $callback[1],
			'methode' => $methode,
			"filtre" => $callback[0]
			);
		//
		self::$requests[]=$r;
	}

	protected static function newFilterString($route)
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
				//
				if(preg_match("#^$requestsUrl$#", $currentUrl,$params))
				{
					if($value["methode"]=="post" && Res::isPost())
					{
						$ok=exec($params,$value);
						break;
					}
					else if($value["methode"]=="post" && !Res::isPost())
					{
						$ok=0;
					}
					else if($value["methode"]=="get")
					{
						$ok=self::exec($params,$value);
						break;
					}

				}
			}
			if($ok==0) 
				//Errors::r_404();
				echo "non";
		}
		else self::showMaintenance();
	}

	protected static function exec($params,&$one)
	{
		array_shift($params);
		//
		self::callBefore();
		//
		$ok=true;
		$falseok=null;
		$oks=array();
		//
		$filtre=$one["filtre"];
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
		if($ok) { self::runRoute($one,$params); }
		//if the filter is false
		else { $ok=self::falseFilter($falseok); }
		//
		self::callAfter();
		$ok=1;
		return $ok;
	}

	protected static function callBefore()
	{
		call_user_func(App::$Callbacks['before']);
	}

	protected static function callAfter()
	{
		call_user_func(App::$Callbacks['after']);
	}

	protected static function CheckUrl()
	{
		return isset($_GET['url'])?'/'.$_GET['url']:'/';
	}

	protected static function CheckMaintenance($url)
	{
		if(!Config::get("maintenance.activate") || in_array($url, Config::get("maintenance.outRoutes")))
			return true;
		else return false;
	}

	protected static function Replace()
	{
		for ($i=0; $i < count(self::$requests); $i++) 
			if (strpos(self::$requests[$i]['url'],'{}') !== false) 
					self::$requests[$i]['url']=str_replace('{}', '(.*)?', self::$requests[$i]['url']); 
	}

	protected static function addFilter($name,$callback,$falsecall=null)
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
		self::addFilter($name,$callback,$falsecall);
	}

	protected static function getFilterCallback($name)
	{
		return self::$filters[$name];
	}

	protected static function callFilter($filtre,&$ok,&$falseok)
	{
		$call=self::$filters[$filtre];
		$ok=call_user_func($call['callback']);
		if(!$ok) { $falseok=$filtre;  }
	}

	protected static function callFilters($filtre,&$ok,&$falseok)
	{
		foreach ($filtre as $key => $value) {
			$call=self::$filters[$value];
			$ok=call_user_func($call['callback']);
			if(!$ok) { $falseok=$value; break; }
		}
	}

	protected static function runRoute($request,$params)
	{
		self::$current=$request["name"];
		return call_user_func_array($request["callback"], $params);
	}

	protected static function falseFilter($key)
	{
		$call=self::$filters[$key]['falsecall'];
		if(isset($call) && !empty($call))
		{
			return call_user_func($call);
		}
	}

	protected static function showMaintenance()
	{
		if(Config::get("maintenance.maintenanceEvent")=="string") echo Config::get("maintenance.maintenanceResponse");
		else if(Config::get("maintenance.maintenanceEvent")=="link") Url::redirect(Config::get("maintenance.maintenanceResponse"));
	}
	
}
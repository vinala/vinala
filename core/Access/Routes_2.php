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
			"filtre" => null,
			'controller' => null
			);
		//
		self::$requests[]=$r;

		$r = array(
			'name' => "$name"."/" , 
			'url' => $url."/" , 
			'callback' => $callback,
			'methode' => $methode,
			"filtre" => null,
			'controller' => null
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
			"filtre" => $callback[0],
			'controller' => null
			);

		//
		self::$requests[]=$r;

		$r = array(
			'name' => $name."/" , 
			'url' => $url."/" , 
			'callback' => $callback[1],
			'methode' => $methode,
			"filtre" => $callback[0],
			'controller' => null
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
						$ok=self::exec($params,$value);
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
					else if($value["methode"]=="resource")
					{
						$ok=self::exec($params,$value);
						break;
					}
					else if($value["methode"]=="object")
					{
						$ok=self::exec($params,$value);
						//var_dump($value);
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

	public static function resource($uri,$controller,$data=null)
	{
		$only=(isset($data['only']) && !empty($data['only']))?$data['only']:null;
		$except=(isset($data['except']) && !empty($data['except']))?$data['except']:null;
		$names=(isset($data['names']) && !empty($data['names']))?$data['names']:null;
		//
		$routes=self::diffResource($only,$except);
		//
		$index=isset($names['index'])?(!empty($names['index'])?$names['index']:"index"):"index";
		$show=isset($names['show'])?(!empty($names['show'])?$names['show']:"show"):"show";
		$add=isset($names['add'])?(!empty($names['add'])?$names['add']:"add"):"add";
		$insert=isset($names['insert'])?(!empty($names['insert'])?$names['insert']:"insert"):"insert";
		$edit=isset($names['edit'])?(!empty($names['edit'])?$names['edit']:"edit"):"edit";
		$update=isset($names['update'])?(!empty($names['update'])?$names['update']:"update"):"update";
		$delete=isset($names['delete'])?(!empty($names['delete'])?$names['delete']:"delete"):"delete";
		//
		if(Table::contains($routes,"index"))
		{
			self::addController($uri."",                  $controller,"index");
			self::addController($uri."/",                 $controller,"index");
			self::addController($uri."/".$index."",       $controller,"index");
			self::addController($uri."/".$index."/",      $controller,"index");
		}
		//
		if(Table::contains($routes,"show"))
		{
			self::addController($uri."/$show/{}",         $controller,"show");
			self::addController($uri."/$show/{}/",        $controller,"show");
		}
		//
		if(Table::contains($routes,"add"))
		{
			self::addController($uri."/$add",             $controller,"add");
			self::addController($uri."/$add/",            $controller,"add");
		}
		//
		if(Table::contains($routes,"insert"))
		{
			self::addController($uri."/$insert",          $controller,"insert");
			self::addController($uri."/$insert/",         $controller,"insert");
		}
		//
		if(Table::contains($routes,"edit"))
		{
			self::addController($uri."/$edit/{}",         $controller,"edit");
			self::addController($uri."/$edit/{}/",        $controller,"edit");
		}
		//
		if(Table::contains($routes,"update"))
		{
			self::addController($uri."/$update",          $controller,"update");
			self::addController($uri."/$update/",         $controller,"update");
			self::addController($uri."/$update/{}",       $controller,"update",true);
			self::addController($uri."/$update/{}/",      $controller,"update",true);
		}
		//
		if(Table::contains($routes,"delete"))
		{
			self::addController($uri."/$delete/{}",       $controller,"delete");
			self::addController($uri."/$delete/{}/",      $controller,"delete");
		}
	}

	protected static function addController($url,$controller,$methode,$params=false)
	{
		if($methode=="show" || $methode=="edit" || $methode=="delete")
			$callback=function($id) use ($controller,$methode){ $controller::$methode($id); };
		else if($methode=="update")
		{
			if($params) $callback=function($id) use ($controller,$methode){ $controller::$methode($id); };
			else $callback=function() use ($controller,$methode){ $controller::$methode(); };
		}
		else
			$callback=function() use ($controller,$methode){ $controller::$methode(); };
			

		$name=self::convert($url);
		$r = array(
			'name' => $name ,
			'url' => $url , 
			'callback' => $callback,
			'methode' => "resource",
			"filtre" => null,
			'controller' => $controller
			);
		//
		self::$requests[]=$r;

		$r = array(
			'name' => "$name"."/" , 
			'url' => $url."/" , 
			'callback' => $callback,
			'methode' => "resource",
			"filtre" => null,
			'controller' => $controller
			);
		self::$requests[]=$r;
		//
	}

	protected static function diffResource($only,$except)
	{
		$all = array('index','show','add','insert','edit','update','delete');
		//
		if(isset($except))
		{
			$i=0;
			foreach ($all as  $value) 
			{
				if(Table::contains($except,$value)) unset($all[$i]);
				$i++;
			}
		}
		// 
		if(isset($only))
		{
			foreach ($all as $key =>$value) 
			{
				$ext=false;
				foreach ($only as  $value2) {
					if($value==$value2) { $ext=true; break;}
				}
				if(!$ext) unset($all[$key]);
			}
		}
		return $all;
	}

	
}
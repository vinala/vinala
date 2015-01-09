<?php  

/**
* 
*/
class Routes
{
	private static $_uri=array();
	private static $_callback=array();
	private static $_controller=array();
	private static $_type=array();
	private static $_request=array(); //fih les demande dial filtrage b7al auth
	private static $_filters=array(); //fih les filtre ya3ni callable
	private static $_falsecall=array(); //fih les function dial false dial les filters
	//
	private static $_call_auth=null;

	private static $s_uri='';
	private static $s_callback='';

	public static function get($uri='',$callback="")
	{
		if(is_callable($callback))
		{
			//
			self::$_uri[]=$uri;
			self::$_callback[]=$callback;
			self::$_controller[]="";
			self::$_type[]="get";
			self::$_request[]="";
			//
			self::$_uri[]=$uri."/";
			self::$_callback[]=$callback;
			self::$_controller[]="";
			self::$_type[]="get";
			self::$_request[]="";
		}
		else if(is_array($callback))
		{
			self::$_uri[]=$uri;
			self::$_callback[]=$callback[1];
			self::$_controller[]="";
			self::$_type[]="get";
			if(is_string($callback[0]))
			{
				self::$_request[]=$callback[0];
			}
			else if(is_array($callback[0]))
			{
				self::$_request[]=$callback[0];
			}

			//********

			self::$_uri[]=$uri."/";
			self::$_callback[]=$callback[1];
			self::$_controller[]="";
			self::$_type[]="get";
			if(is_string($callback[0]))
			{
				self::$_request[]=$callback[0];
			}
			else if(is_array($callback[0]))
			{
				self::$_request[]=$callback[0];
			}
		}
	}

	public static function post($uri='',$callback="")
	{
		if(is_callable($callback))
		{
			//
			self::$_uri[]=$uri;
			self::$_callback[]=$callback;
			self::$_controller[]="";
			self::$_type[]="post";
			self::$_request[]="";
			//
			self::$_uri[]=$uri."/";
			self::$_callback[]=$callback;
			self::$_controller[]="";
			self::$_type[]="post";
			self::$_request[]="";
		}
		else if(is_array($callback))
		{
			self::$_uri[]=$uri;
			self::$_callback[]=$callback[1];
			self::$_controller[]="";
			self::$_type[]="post";
			if(is_string($callback[0]))
			{
				self::$_request[]=$callback[0];
			}
			else if(is_array($callback[0]))
			{
				self::$_request[]=$callback[0];
			}

			//********

			self::$_uri[]=$uri."/";
			self::$_callback[]=$callback[1];
			self::$_controller[]="";
			self::$_type[]="post";
			if(is_string($callback[0]))
			{
				self::$_request[]=$callback[0];
			}
			else if(is_array($callback[0]))
			{
				self::$_request[]=$callback[0];
			}
		}
	}





	// public static function post($uri='',$callback="")
	// {
	// 	self::$_uri[]=$uri;
	// 	self::$_callback[]=$callback;
	// 	self::$_controller[]="";
	// 	self::$_type[]="post";
	// 	self::$_request[]="none";
	// 	//
	// 	self::$_uri[]=$uri."/";
	// 	self::$_callback[]=$callback;
	// 	self::$_controller[]="";
	// 	self::$_type[]="post";
	// 	self::$_request[]="none";
	// }


	public static function run()
	{
		//
		$url=isset($_GET['url'])?'/'.$_GET['url']:'/';
		//echo $url;

		if(!Config::get("maintenance.activate") || in_array($url, Config::get("maintenance.outRoutes")))
		{
		for ($i=0; $i < count(self::$_uri); $i++) 
			if (strpos(self::$_uri[$i],'{}') !== false) 
					self::$_uri[$i]=str_replace('{}', '(.*)?', self::$_uri[$i]); 
		//
		$ok=0;
		
			foreach (self::$_uri as $key => $value) {
				if(preg_match("#^$value$#", $url,$params))
				{

					if(self::$_type[$key]=="post" && Res::isPost())
					{

						array_shift($params);

						//
						//before filter
						//
						call_user_func(App::$Callbacks['before']);
						//
						//new filter
						//
						$ok=true;
						$falseok=null;
						$oks=array();
						//
						if(is_string(self::$_request[$key]))
						{
							if(!empty(self::$_request[$key]))
							{
								$call=self::$_filters[self::$_request[$key]];
								$ok=call_user_func($call);
								if(!$ok) { $falseok=self::$_request[$key];  }
							}
						}
						else if(is_array(self::$_request[$key]))
						{
							if(!empty(self::$_request[$key]))
							{
								foreach (self::$_request[$key] as $key2 => $value2) {
									$call=self::$_filters[$value2];
									$ok=call_user_func($call);
									if(!$ok) { $falseok=$value2; break; }
								}
							}
						}

						// run the route callback
						if($ok)
						{
							call_user_func_array(self::$_callback[$key], $params);
						}

						// ila returna l filter false
						else
						{
							if(isset(self::$_falsecall[$falseok]) && !empty(self::$_falsecall[$falseok]))
							{
								$call=self::$_falsecall[$falseok];
								$ok=call_user_func($call);
							}
	
						}

						//
						//after filter
						//
						call_user_func(App::$Callbacks['after']);
						$ok=1;
						break;


						
						//
						// old
						// array_shift($params);
						// call_user_func_array(self::$_callback[$key], $params);
						// $ok=1;
					}
					else if(self::$_type[$key]=="post" && !Res::isPost())
					{
						$ok=0;
					}
					else if(self::$_type[$key]=="get")
					{
						array_shift($params);

						//
						//before filter
						//
						call_user_func(App::$Callbacks['before']);
						//
						//new filter
						//
						$ok=true;
						$falseok=null;
						$oks=array();
						//
						if(is_string(self::$_request[$key]))
						{
							if(!empty(self::$_request[$key]))
							{
								$call=self::$_filters[self::$_request[$key]];
								$ok=call_user_func($call);
								if(!$ok) { $falseok=self::$_request[$key];  }
							}
						}
						else if(is_array(self::$_request[$key]))
						{
							if(!empty(self::$_request[$key]))
							{
								foreach (self::$_request[$key] as $key2 => $value2) {
									$call=self::$_filters[$value2];
									$ok=call_user_func($call);
									if(!$ok) { $falseok=$value2; break; }
								}
							}
						}

						// run the route callback
						if($ok)
						{
							call_user_func_array(self::$_callback[$key], $params);
						}

						// ila returna l filter false
						else
						{
							if(isset(self::$_falsecall[$falseok]) && !empty(self::$_falsecall[$falseok]))
							{
								$call=self::$_falsecall[$falseok];
								$ok=call_user_func($call);
							}
	
						}

						//
						//after filter
						//
						call_user_func(App::$Callbacks['after']);
						$ok=1;
						break;
					}
					
				}

			}
			if($ok==0) 
				{
					Errors::r_404();
				}
		}
		else
		{
			if(Config::get("maintenance.maintenanceEvent")=="string")
				echo Config::get("maintenance.maintenanceResponse");
			else if(Config::get("maintenance.maintenanceEvent")=="link")
				Url::redirect(Config::get("maintenance.maintenanceResponse"));
		}
	}

	

	public static function resource($uri,$controller)
	{
		//********************************
		self::$_uri[]="/".$uri."";
		self::$_callback[]=function() use ($controller){
			$controller::index();
		};
		self::$_controller[]="$controller.index";
		self::$_type[]="get";
		self::$_request[]="";
		//
		//
		self::$_uri[]="/".$uri."/";
		self::$_callback[]=function() use ($controller){
			$controller::index();
		};
		self::$_controller[]="$controller.index";
		self::$_type[]="get";
		self::$_request[]="";
		//
		//
		self::$_uri[]="/".$uri."/index";
		self::$_callback[]=function() use ($controller){
			$controller::index();
		};
		self::$_controller[]="$controller.index";
		self::$_type[]="get";
		self::$_request[]="";
		//
		//
		self::$_uri[]="/".$uri."/index/";
		self::$_callback[]=function() use ($controller){
			$controller::index();
		};
		self::$_controller[]="$controller.index";
		self::$_type[]="get";
		self::$_request[]="";
		//
		//******************************

		//******************************
		self::$_uri[]="/".$uri."/show/{}";
		self::$_callback[]=function($id) use ($controller){
			$controller::show($id);
		};
		self::$_controller[]="$controller.show";
		self::$_type[]="get";
		self::$_request[]="";
		//
		self::$_uri[]="/".$uri."/show/{}/";
		self::$_callback[]=function($id) use ($controller){
			$controller::show($id);
		};
		self::$_controller[]="$controller.show";
		self::$_type[]="get";
		self::$_request[]="";
		//******************************

		//******************************
		self::$_uri[]="/".$uri."/add";
		self::$_callback[]=function() use ($controller){
			$controller::add();
		};
		self::$_controller[]="$controller.add";
		self::$_type[]="get";
		self::$_request[]="";
		//
		self::$_uri[]="/".$uri."/add/";
		self::$_callback[]=function() use ($controller){
			$controller::add();
		};
		self::$_controller[]="$controller.add";
		self::$_type[]="get";
		self::$_request[]="";
		//******************************

		//******************************
		self::$_uri[]="/".$uri."/insert";
		self::$_callback[]=function() use ($controller){
			$controller::insert();
		};
		self::$_controller[]="$controller.insert";
		self::$_type[]="get";
		self::$_request[]="";
		//
		self::$_uri[]="/".$uri."/insert/";
		self::$_callback[]=function() use ($controller){
			$controller::insert();
		};
		self::$_controller[]="$controller.insert";
		self::$_type[]="get";
		self::$_request[]="";
		//******************************

		//******************************
		self::$_uri[]="/".$uri."/edit/{}";
		self::$_callback[]=function($id) use ($controller){
			$controller::edit($id);
		};
		self::$_controller[]="$controller.edit";
		self::$_type[]="get";
		self::$_request[]="";
		//
		self::$_uri[]="/".$uri."/edit/{}/";
		self::$_callback[]=function($id) use ($controller){
			$controller::edit($id);
		};
		self::$_controller[]="$controller.edit";
		self::$_type[]="get";
		self::$_request[]="";
		//******************************

		//******************************
		self::$_uri[]="/".$uri."/update";
		self::$_callback[]=function() use ($controller){
			$controller::update();
		};
		self::$_controller[]="$controller.update";
		self::$_type[]="get";
		self::$_request[]="";
		//
		self::$_uri[]="/".$uri."/update/";
		self::$_callback[]=function() use ($controller){
			$controller::update();
		};
		self::$_controller[]="$controller.update";
		self::$_type[]="get";
		self::$_request[]="";
		//
		self::$_uri[]="/".$uri."/update/{}";
		self::$_callback[]=function($id) use ($controller){
			$controller::update($id);
		};
		self::$_controller[]="$controller.update";
		self::$_type[]="get";
		self::$_request[]="";
		//
		self::$_uri[]="/".$uri."/update/{}/";
		self::$_callback[]=function($id) use ($controller){
			$controller::update($id);
		};
		self::$_controller[]="$controller.update";
		self::$_type[]="get";
		self::$_request[]="";
		//******************************

		//******************************
		self::$_uri[]="/".$uri."/delete/{}";
		self::$_callback[]=function($id) use ($controller){
			$controller::delete($id);
		};
		self::$_controller[]="$controller.delete";
		self::$_type[]="get";
		self::$_request[]="";
		//
		self::$_uri[]="/".$uri."/delete/{}/";
		self::$_callback[]=function($id) use ($controller){
			$controller::delete($id);
		};
		self::$_controller[]="$controller.delete";
		self::$_type[]="get";
		self::$_request[]="";
		//******************************
	}

	public static function url($url,$ret=false)
	{
		$r=explode(".", $url);
		$uri=null;
		$keye=null;
		//
		foreach (self::$_controller as $key => $value) {
			if($value==$url) {$keye=$key;break;}
		}
		if(!is_null(Config::get('app.projectFolder')))
		{
			if($ret) return "/".Config::get('app.projectFolder').self::$_uri[$keye];
			else echo "/".Config::get('app.projectFolder').self::$_uri[$keye];
		}
		else
		{
			if($ret) return self::$_uri[$keye];
			else echo self::$_uri[$keye];
		}
	}

	public static function ini()
	{
		include_once "app/Routes.php";
		Routes::run();
	}

	public static function filter($filter,$call,$falsecall=null)
	{
		//if($filter=="auth") self::$_call_auth=$call;
		//
		self::$_filters[$filter]=$call;
		if(!is_null($falsecall)) self::$_falsecall[$filter]=$falsecall;
	}

	
}
Routes::get(Config::get('panel.route'),function()
{
	Page::put('panel.index');
});




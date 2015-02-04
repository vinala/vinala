<?php 

//----------------------------------------
// Fiesta v1.3.0 (http://ipixa.net)
// Copyright 2014 Youssef Had, Inc.
// Licensed under Open Source
//----------------------------------------



class App
{
	static $page;
	public static $root;
	public static $Callbacks = array('before'=>null,'after'=>null);

	public static function run($p=null,$root=null,$routes=true,$session=true,$whoops=true)
	{
		ob_start();
		//
		self::$page=$p;
		self::$root=$root;
		//
		//session
		require __DIR__.'/../core/Storage/Session.php';
		if($session)Session::start(__DIR__.'/../app/storage/session');
		//
		require __DIR__.'/../core/Access/ErrorHandler.php';
		require __DIR__.'/../core/Config.php';
		require __DIR__.'/../core/Objects/Vars.php';
		//
		ini_set("log_errors", 1);
		//ini_set("error_log", Config::get("loggin.log"));
		ini_set("error_log", __DIR__.'/../app/storage/logs/fiesta.log');
		//
		if($whoops) ErrorHandler::ini(self::$root);
		//
		require __DIR__.'/../core/MVC/Templete.php';
		require __DIR__.'/../core/Objects/Exception.php';
		require __DIR__.'/../core/Faker.php';
		
		require __DIR__.'/../core/Storage/Cookie.php';
		//require 'Access/Routes.php';
		require __DIR__.'/../core/Access/Routes_2.php';
		require __DIR__.'/../core/Security/Auth.php';
		require __DIR__.'/../core/Objects/List.php';
		require __DIR__.'/../core/Database/Seeder.php';
		require __DIR__.'/../core/Access/Url.php';
		require __DIR__.'/../core/Hypertext/Pages.php';
		require __DIR__.'/../core/Database/Database.php';
		require __DIR__.'/../core/Objects/Sys.php';
		require __DIR__.'/../core/Http/Links.php';
		require __DIR__.'/../core/Objects/Base.php';
		require __DIR__.'/../core/Libs.php';
		require __DIR__.'/../core/Hypertext/Res.php';
		require __DIR__.'/../core/Hypertext/Input.php';
		require __DIR__.'/../core/License.php';
		require __DIR__.'/../core/Hypertext/Cookie.php';
		require __DIR__.'/../core/Lang.php';
		require __DIR__.'/../core/Hypertext/HTML.php';
		require __DIR__.'/../core/Database/Schema.php';
		require __DIR__.'/../core/Database/Migration.php';
		require __DIR__.'/../core/Security/Encrypt.php';
		require __DIR__.'/../core/Security.php';
		require __DIR__.'/../core/MVC/Model.php';
		require __DIR__.'/../core/MVC/View.php';
		require __DIR__.'/../core/Bootstrap.php';
		require __DIR__.'/../core/MVC/Controller.php';
		require __DIR__.'/../core/Http/Error.php';
		require __DIR__.'/../core/Hypertext/Script.php';
		require __DIR__.'/../core/Http/Root.php';
		require __DIR__.'/../core/Mail_2.php';
		require __DIR__.'/../core/Objects/DataCollection.php';

		//
		// Database files
		require __DIR__.'/../core/Database/DBTable.php';
		//
		// Associates
		//require 'Storage/Session.php';
		//
		//Config::ini($root);
		
			Sys::ini();
			Url::ini();
			Templete::ini(self::$root);
			//
			Faker::ini();
			Links::ini();
			Errors::ini($root);
			License::ini(self::$page);
			Lang::ini("fr");
			Database::ini();
			Auth::ini();
			//
			//include the models files
			//
			if($root!=null)
			{		
				foreach (glob($root."../app/models/*.php") as $file) { include_once $file; }
				//
				//include the controllers files
				foreach (glob($root."../app/controllers/*.php") as $file) { include_once $file; }
				//
				//include the variables files
				// foreach (glob($root."app/vars/*.php") as $file) { include_once $file; }
				//
				//include the link files
				foreach (glob($root."../app/paths/*.php") as $file) { include_once $file; }
				//
				//include the seeders files
				foreach (glob($root."../app/seeds/*.php") as $file) { include_once $file; }
				//
				include_once $root."../app/Filters.php";
				//include for routes
				//ErrorHandler::run();
				//
				if($routes)
				{
					include_once $root."../app/Routes.php";
					Routes::run();
				} 
			}
			else
			{		
				foreach (glob("../app/models/*.php") as $file) { include_once $file; }
				//
				//include the controllers files
				foreach (glob("../app/controllers/*.php") as $file) { include_once $file; }
				//
				//include the variables files
				// foreach (glob("app/vars/*.php") as $file) { include_once $file; }
				//
				//include the seeders files
				foreach (glob("../app/seeds/*.php") as $file) { include_once $file; }
				//
				include_once "../app/Filters.php";
				//
				//include for routes
				//ErrorHandler::run();
				//
				if($routes)
				{
					include_once "../app/Routes.php";
					Routes::run();
				} 
			}
		//ErrorHandler::run();
	
		
	}

	public static function before($fun)
	{
		self::$Callbacks['before']=$fun;
	}

	public static function after($fun)
	{
		self::$Callbacks['after']=$fun;
	}

	public static function root()
	{
		$sub=$_SERVER["PHP_SELF"];
		$r=explode("App.php", $sub);
		return $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"].$r[0];
	}
}




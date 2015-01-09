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

	public static function run($p=null,$root=null,$routes=true,$session=true)
	{

		//ini_set("log_errors", 1);
		//ini_set("error_log","app/storage/logs/fiesta_log");

		require 'Access/ErrorHandler.php';
		ErrorHandler::ini();

		//ini_set("log_errors", 1);
		/*ini_set("error_log","app/storage/logs/fiesta.log");
		error_log( "ini" );*/

		
		//
		self::$page=$p;
		self::$root=$root;
		if($session)session_start();
		//
		require 'Config.php';
		//
		//
		require 'MVC/Templete.php';
		require 'Objects/Exception.php';
		require 'Faker.php';
		require 'Storage/Session.php';
		require 'Storage/Cookie.php';
		require 'Access/Routes.php';
		require 'Security/Auth.php';
		require 'Objects/List.php';
		require 'Database/Seeder.php';
		require 'Access/Url.php';
		require 'Hypertext/Pages.php';
		require 'Database/Database.php';
		require 'Objects/Sys.php';
		require 'Http/Links.php';
		require 'Objects/Base.php';
		require 'Libs.php';
		require 'Hypertext/Res.php';
		require 'Hypertext/Input.php';
		require 'License.php';
		require 'Hypertext/Cookie.php';
		require 'Lang.php';
		require 'Hypertext/HTML.php';
		require 'Database/Schema.php';
		require 'Database/Migration.php';
		require 'Security/Encrypt.php';
		require 'Security.php';
		require 'MVC/Model.php';
		require 'MVC/View.php';
		require 'Bootstrap.php';
		require 'MVC/Controller.php';
		require 'Http/Error.php';
		require 'Hypertext/Script.php';
		require 'Http/Root.php';
		require 'Mail.php';
		require 'Objects/DataCollection.php';

		//
		// Database files
		require 'Database/DBTable.php';
		//
		// Associates
		//require 'Storage/Session.php';
		//
		//Config::ini($root);
		
			Sys::ini();
			Templete::ini();
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
				foreach (glob($root."app/models/*.php") as $file) { include_once $file; }
				//
				//include the controllers files
				foreach (glob($root."app/controllers/*.php") as $file) { include_once $file; }
				//
				//include the variables files
				foreach (glob($root."app/vars/*.php") as $file) { include_once $file; }
				//
				//include the link files
				foreach (glob($root."app/paths/*.php") as $file) { include_once $file; }
				//
				//include the seeders files
				foreach (glob($root."app/seeds/*.php") as $file) { include_once $file; }
				//
				include_once $root."app/Filters.php";
				//include for routes
				//ErrorHandler::run();
				//
				if($routes)
				{
					include_once $root."app/Routes.php";
					Routes::run();
				} 
			}
			else
			{		
				foreach (glob("app/models/*.php") as $file) { include_once $file; }
				//
				//include the controllers files
				foreach (glob("app/controllers/*.php") as $file) { include_once $file; }
				//
				//include the variables files
				foreach (glob("app/vars/*.php") as $file) { include_once $file; }
				//
				//include the seeders files
				foreach (glob("app/seeds/*.php") as $file) { include_once $file; }
				//
				include_once "app/Filters.php";
				//
				//include for routes
				//ErrorHandler::run();
				//
				if($routes)
				{
					include_once "app/Routes.php";
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
}




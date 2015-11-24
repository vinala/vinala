<?php

//----------------------------------------
// Fiesta (http://ipixa.net)
// Copyright 2014 - 2015 Youssef Had, Inc.
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
		
		//session
		require __DIR__.'/../core/Storage/Session.php';
		if($session)Session::start(__DIR__.'/../app/storage/session');
		//
		require __DIR__.'/../core/Access/ErrorHandler.php';

		// Config
		require __DIR__.'/../core/Config/Config.php';
		require __DIR__.'/../core/Config/Exceptions/ConfigException.php';

		//Maintenance
		require __DIR__.'/../core/Maintenance/Maintenance.php';

		//Objects
		require __DIR__.'/../core/Objects/Vars.php';
		require __DIR__.'/../core/Objects/String/String.php';
		require __DIR__.'/../core/Objects/String/Exceptions/StringOutIndexException.php';

		// Access
		require __DIR__.'/../core/Access/Path.php';

		// Set the error log
		ini_set("log_errors", 1);
		ini_set("error_log", __DIR__.'/../app/storage/logs/fiesta.log');

		// Set Whoops error handler
		if($whoops) ErrorHandler::ini(self::$root);

		//
		//require __DIR__.'/../core/MVC/Templete.php';
		require __DIR__.'/../core/Objects/Exception.php';
		require __DIR__.'/../core/Resources/Faker.php';

		require __DIR__.'/../core/Storage/Cookie.php';

		// Routes
		require __DIR__.'/../core/Router/Routes.php';
		require __DIR__.'/../core/Router/Route.php';
		require __DIR__.'/../core/Router/Exceptions/RouteNotFoundException.php';

		// Caches
		require __DIR__.'/../core/Caches/Caches.php';
		require __DIR__.'/../core/Caches/Cache.php';
		require __DIR__.'/../core/Caches/FileCache.php';
		require __DIR__.'/../core/Caches/DatabaseCache.php';
		require __DIR__.'/../core/Caches/Exceptions/DriverNotFoundException.php';


		require __DIR__.'/../core/Storage/Storage.php';
		require __DIR__.'/../core/Security/Auth.php';
		require __DIR__.'/../core/Objects/Table.php';

		// Database
		require __DIR__.'/../core/Database/Schema.php';
		require __DIR__.'/../core/Database/Migration.php';
		require __DIR__.'/../core/Database/Seeder.php';
		require __DIR__.'/../core/Database/Database.php';
		require __DIR__.'/../core/Database/Drivers/MySql.php';
		require __DIR__.'/../core/Database/Exceptions/DatabaseArgumentsException.php';
		require __DIR__.'/../core/Database/Exceptions/DatabaseConnectionException.php';


		require __DIR__.'/../core/Access/Url.php';
		require __DIR__.'/../core/Hypertext/Pages.php';

		require __DIR__.'/../core/Objects/DateTime.php';
		require __DIR__.'/../core/Objects/Sys.php';
		require __DIR__.'/../core/Http/Links.php';
		require __DIR__.'/../core/Objects/Base.php';
		require __DIR__.'/../core/Resources/Libs.php';
		require __DIR__.'/../core/Hypertext/Res.php';
		require __DIR__.'/../core/Hypertext/Input.php';
		require __DIR__.'/../core/Security/License.php';
		require __DIR__.'/../core/Hypertext/Cookie.php';

		//Languages
		require __DIR__.'/../core/Lang/Lang.php';
		require __DIR__.'/../core/Lang/Exceptions/LanguageKeyNotFoundException.php';

		// MVC - model
		require __DIR__.'/../core/MVC/Model/Model.php';
		require __DIR__.'/../core/MVC/Model/ModelArray.php';
		require __DIR__.'/../core/MVC/Model/Exceptions/ForeingKeyMethodException.php';
		require __DIR__.'/../core/MVC/Model/Exceptions/ColumnNotEmptyException.php';
		require __DIR__.'/../core/MVC/Model/Exceptions/ManyPrimaryKeysException.php';
		require __DIR__.'/../core/MVC/Model/Exceptions/PrimaryKeyNotFoundException.php';

		// MVC - View

		require __DIR__.'/../core/MVC/View/View.php';
		require __DIR__.'/../core/MVC/View/Libs/Template.php';
		require __DIR__.'/../core/MVC/View/Libs/Views.php';
		require __DIR__.'/../core/MVC/View/Exceptions/ViewNotFoundException.php';

		require __DIR__.'/../core/Hypertext/HTML.php';
		require __DIR__.'/../core/Security/Encrypt.php';
		require __DIR__.'/../core/Security/Security.php';
		require __DIR__.'/../core/MVC/Controller.php';
		require __DIR__.'/../core/Http/Error.php';
		require __DIR__.'/../core/Hypertext/Script.php';
		require __DIR__.'/../core/Http/Root.php';
		require __DIR__.'/../core/Mailing/Mail.php';
		require __DIR__.'/../core/Objects/DataCollection.php';
		require __DIR__.'/../core/Maintenance/Debug.php';

		// Filesystem
		require __DIR__.'/../core/Filesystem/Exceptions/FileNotFoundException.php';
		require __DIR__.'/../core/Filesystem/Exceptions/DirectoryNotFoundException.php';
		require __DIR__.'/../core/Filesystem/Filesystem.php';

		// Database files
		require __DIR__.'/../core/Database/DBTable.php';

		//


		Sys::ini();
		Url::ini();
		Path::ini();
		Fiesta\MVC\View\Template::ini(self::$root);
		//
		Faker::ini();
		Links::ini($root);
		Errors::ini($root);
		License::ini(self::$page);
		Lang::ini();
		Database::ini();
		Auth::ini();

		//

		if($root!=null)
		{
			// include models
			foreach (glob($root."../app/models/*.php") as $file) { include_once $file; }

			//include the controllers files
			foreach (glob($root."../app/controllers/*.php") as $file) { include_once $file; }

			//include the link files
			foreach (glob($root."../app/paths/*.php") as $file) { include_once $file; }

			//include the seeders files
			foreach (glob($root."../app/seeds/*.php") as $file) { include_once $file; }
			//
			//include filters
			include_once $root."../app/http/Filters.php";

			//include for routes
			if($routes)
			{
				include_once $root."../app/http/Routes.php";
				Fiesta\Router\Routes::run();
			}
		}
		else
		{
			// include models
			foreach (glob("../app/models/*.php") as $file) { include_once $file; }

			//include the controllers files
			foreach (glob("../app/controllers/*.php") as $file) { include_once $file; }

			//include the seeders files
			foreach (glob("../app/seeds/*.php") as $file) { include_once $file; }


			//include filters
			include_once "../app/http/Filters.php";

			//include for routes
			if($routes)
			{
				include_once "../app/http/Routes.php";
				Fiesta\Router\Routes::run();
			}
		}


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
		//echo "*".$_SERVER["REQUEST_SCHEME"];
		return "http://".$_SERVER["HTTP_HOST"].$r[0];
	}
}

<?php

//----------------------------------------
// Fiesta (http://ipixa.net)
// Copyright 2014 - 2015 Youssef Had, Inc.
// Licensed under Open Source
//----------------------------------------

namespace Fiesta\Core\Glob;

use Fiesta\Core\Storage\Session;
use Fiesta\Core\Access\ErrorHandler;
use Fiesta\Core\Config\Alias;
use Fiesta\Core\Objects\Sys;
use Fiesta\Core\Access\Url;
use Fiesta\Core\Access\Path;
use Fiesta\Core\MVC\View\Template;
use Fiesta\Core\Resources\Faker;
use Fiesta\Core\Http\Links;
use Fiesta\Core\Http\Errors;
use Fiesta\Core\Security\License;
use Fiesta\Core\Translator\Lang;
use Fiesta\Core\Database\Database;
use Fiesta\Core\Security\Auth;
use Fiesta\Core\Router\Routes;


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
		require self::$root.'../core/Access/ErrorHandler.php';

		// Config
		require self::$root.'../core/Config/Config.php';
		require self::$root.'../core/Config/Exceptions/ConfigException.php';

		// Set the error log
		ini_set("log_errors", 1);
		ini_set("error_log", self::$root.'../app/storage/logs/fiesta.log');

		// Set Whoops error handler
		if($whoops) ErrorHandler::ini(self::$root);

		//session
		require self::$root.'../core/Storage/Session.php';
		if($session)Session::start(self::$root.'../app/storage/session');

		//Maintenance
		require self::$root.'../core/Maintenance/Maintenance.php';

		//Objects
		require self::$root.'../core/Objects/Vars.php';
		require self::$root.'../core/Objects/String/String.php';
		require self::$root.'../core/Objects/String/Exceptions/StringOutIndexException.php';

		// Access
		require self::$root.'../core/Access/Path.php';

		//Alias
		require self::$root.'../core/Config/Alias.php';

		//
		//require self::$root.'../core/MVC/Templete.php';
		require self::$root.'../core/Objects/Exception.php';
		require self::$root.'../core/Resources/Faker.php';

		require self::$root.'../core/Storage/Cookie.php';

		// Routes
		require self::$root.'../core/Router/Routes.php';
		require self::$root.'../core/Router/Route.php';
		require self::$root.'../core/Router/Exceptions/RouteNotFoundException.php';

		// Caches
		require self::$root.'../core/Caches/Caches.php';
		require self::$root.'../core/Caches/Cache.php';
		require self::$root.'../core/Caches/FileCache.php';
		require self::$root.'../core/Caches/DatabaseCache.php';
		require self::$root.'../core/Caches/Exceptions/DriverNotFoundException.php';


		require self::$root.'../core/Storage/Storage.php';
		require self::$root.'../core/Security/Auth.php';
		require self::$root.'../core/Objects/Table.php';

		// Database
		require self::$root.'../core/Database/Schema.php';
		require self::$root.'../core/Database/Migration.php';
		require self::$root.'../core/Database/Seeder.php';
		require self::$root.'../core/Database/Database.php';
		require self::$root.'../core/Database/Drivers/MySql.php';
		require self::$root.'../core/Database/Exceptions/DatabaseArgumentsException.php';
		require self::$root.'../core/Database/Exceptions/DatabaseConnectionException.php';


		require self::$root.'../core/Access/Url.php';

		require self::$root.'../core/Objects/DateTime.php';
		require self::$root.'../core/Objects/Sys.php';
		require self::$root.'../core/Http/Links.php';
		require self::$root.'../core/Objects/Base.php';
		require self::$root.'../core/Resources/Libs.php';
		require self::$root.'../core/Hypertext/Res.php';
		require self::$root.'../core/Hypertext/Input.php';
		require self::$root.'../core/Security/License.php';

		//Languages
		require self::$root.'../core/Translator/Lang.php';
		require self::$root.'../core/Translator/Exceptions/LanguageKeyNotFoundException.php';
		require self::$root.'../core/Translator/Smiley.php';

		// MVC - model
		require self::$root.'../core/MVC/Model/Model.php';
		require self::$root.'../core/MVC/Model/ModelArray.php';
		require self::$root.'../core/MVC/Model/Exceptions/ForeingKeyMethodException.php';
		require self::$root.'../core/MVC/Model/Exceptions/ColumnNotEmptyException.php';
		require self::$root.'../core/MVC/Model/Exceptions/ManyPrimaryKeysException.php';
		require self::$root.'../core/MVC/Model/Exceptions/PrimaryKeyNotFoundException.php';

		// MVC - Relations
		require self::$root.'../core/MVC/Relations/OneToOne.php';
		require self::$root.'../core/MVC/Relations/OneToMany.php';
		require self::$root.'../core/MVC/Relations/Exceptions/ManyRelationException.php';

		// MVC - View

		require self::$root.'../core/MVC/View/View.php';
		require self::$root.'../core/MVC/View/Libs/Template.php';
		require self::$root.'../core/MVC/View/Libs/Views.php';
		require self::$root.'../core/MVC/View/Exceptions/ViewNotFoundException.php';

		require self::$root.'../core/Hypertext/HTML.php';
		require self::$root.'../core/Security/Encrypt.php';
		require self::$root.'../core/Security/Security.php';
		require self::$root.'../core/MVC/Controller.php';
		require self::$root.'../core/Http/Error.php';
		require self::$root.'../core/Http/Root.php';
		require self::$root.'../core/Mailing/Mail.php';
		require self::$root.'../core/Objects/DataCollection.php';
		require self::$root.'../core/Maintenance/Debug.php';

		// Filesystem
		require self::$root.'../core/Filesystem/Exceptions/FileNotFoundException.php';
		require self::$root.'../core/Filesystem/Exceptions/DirectoryNotFoundException.php';
		require self::$root.'../core/Filesystem/Filesystem.php';

		// Database files
		require self::$root.'../core/Database/DBTable.php';

		//


		Alias::ini(self::$root);
		Sys::ini();
		Url::ini();
		Path::ini();
		Template::ini(self::$root);
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
				Routes::run();
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
				Routes::run();
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

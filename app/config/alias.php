<?php 


	return array(

		/*
		|----------------------------------------------------------
		| Enable Aliases
		|----------------------------------------------------------
		| Here to activate classes aliases
		|
		**/

		'enable' => true ,


		/*
		|----------------------------------------------------------
		| Aliases
		|----------------------------------------------------------
		| this array is resposible for aliases of class
		| in the app, feel free to register as many as 
	    | you wish as the aliases are "lazy" loaded so 
		| they don't hinder performance.
		|
		**/

		'aliases' => array( 
			
			'Alias' => 			Fiesta\Kernel\Config\Alias::class,
			'App' => 			Fiesta\Kernel\Foundation\Application::class,
			'Auth' => 			Fiesta\Kernel\Security\Auth::class,
			'Base' => 			Fiesta\Kernel\Objects\Base::class,
			'Cache' => 			Fiesta\Kernel\Caches\Cache::class,
			'Config' => 		Fiesta\Kernel\Config\Config::class,
			'Cookie' => 		Fiesta\Kernel\Storage\Cookie::class,
			'Database' => 		Fiesta\Kernel\Database\Database::class,
			'DataCollection' =>	Fiesta\Kernel\Objects\DataCollection::class,
			'DBTable' => 		Fiesta\Kernel\Database\DBTable::class,
			'Debug' => 			Fiesta\Kernel\Log\Debug::class,
			'Errors' => 		Fiesta\Kernel\Http\Errors::class,
			'Faker' => 			Fiesta\Kernel\Resources\Faker::class,
			'Filesystem' => 	Fiesta\Kernel\Filesystem\Filesystem::class,
			'Hash' => 			Fiesta\Kernel\Security\Hash::class,
			'Html' => 			Fiesta\Kernel\HyperText\Html::class,
			'Http' => 			Fiesta\Kernel\Http\Http::class,
			'Input' => 			Fiesta\Kernel\HyperText\Input::class,
			'Libs' => 			Fiesta\Kernel\Resources\Libs::class,
			'License' => 		Fiesta\Kernel\Security\License::class,
			'Links' => 			Fiesta\Kernel\Http\Links::class,
			'Log' => 			Fiesta\Kernel\Logging\Log::class,
			'Mail' => 			Fiesta\Core\Mailing\Mail::class,
			'ModelArray' => 	Fiesta\Core\MVC\Model\ModelArray::class,
			'Path' => 			Fiesta\Core\Access\Path::class,
			'Res' => 			Fiesta\Kernel\HyperText\Res::class,
			'Root' => 			Fiesta\Kernel\Http\Root::class,
			'Route' => 			Fiesta\Kernel\Router\Route::class,
			'Schema' => 		Fiesta\Kernel\Database\Schema::class,
			'Security' => 		Fiesta\Kernel\Security\Security::class,
			'Session' => 		Fiesta\Kernel\Storage\Session::class,
			'Smile' => 			Fiesta\Core\Translator\Smiley::class,
			'Storage' => 		Fiesta\Kernel\Storage\Storage::class,
			'String' => 		Fiesta\Kernel\Objects\String::class,
			'Sys' => 			Fiesta\Kernel\Objects\Sys::class,
			'Table' => 			Fiesta\Kernel\Objects\Table::class,
			'Time' => 			Fiesta\Kernel\Objects\DateTime::class,
			'Translator' => 	Fiesta\Core\Translator\Lang::class,
			'Url' => 			Fiesta\Core\Access\Url::class,
			'Vars' => 			Fiesta\Kernel\Objects\Vars::class,
			'View' => 			Fiesta\Core\MVC\View\View::class,
		)
	);

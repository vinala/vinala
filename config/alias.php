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
			'Alias' => 			Lighty\Kernel\Config\Alias::class,
			'App' => 			Lighty\Kernel\Foundation\Application::class,
			'Auth' => 			Lighty\Kernel\Security\Auth::class,
			'Base' => 			Lighty\Kernel\Objects\Base::class,
			'Cache' => 			Lighty\Kernel\Caches\Cache::class,
			'Config' => 		Lighty\Kernel\Config\Config::class,
			'Cookie' => 		Lighty\Kernel\Storage\Cookie::class,
			'Database' => 		Lighty\Kernel\Database\Database::class,
			'DataCollection' =>	Lighty\Kernel\Objects\DataCollection::class,
			'DBTable' => 		Lighty\Kernel\Database\DBTable::class,
			'Debug' => 			Lighty\Kernel\Log\Debug::class,
			'Errors' => 		Lighty\Kernel\Http\Errors::class,
			'Faker' => 			Lighty\Kernel\Resources\Faker::class,
			'Filesystem' => 	Lighty\Kernel\Filesystem\Filesystem::class,
			'Hash' => 			Lighty\Kernel\Security\Hash::class,
			'Html' => 			Lighty\Kernel\HyperText\Html::class,
			'Http' => 			Lighty\Kernel\Http\Http::class,
			'Input' => 			Lighty\Kernel\HyperText\Input::class,
			'Libs' => 			Lighty\Kernel\Resources\Libs::class,
			'License' => 		Lighty\Kernel\Security\License::class,
			'Links' => 			Lighty\Kernel\Http\Links::class,
			'Log' => 			Lighty\Kernel\Logging\Log::class,
			'Mail' => 			Lighty\Kernel\Mailing\Mail::class,
			'ModelArray' => 	Lighty\Kernel\MVC\Model\ModelArray::class,
			'Query' => 			Lighty\Kernel\Database\Query::class,
			'Path' => 			Lighty\Kernel\Access\Path::class,
			'Res' => 			Lighty\Kernel\HyperText\Res::class,
			'Root' => 			Lighty\Kernel\Http\Root::class,
			'Route' => 			Lighty\Kernel\Router\Route::class,
			'Schema' => 		Lighty\Kernel\Database\Schema::class,
			'Security' => 		Lighty\Kernel\Security\Security::class,
			'Session' => 		Lighty\Kernel\Storage\Session::class,
			'Smile' => 			Lighty\Kernel\Translator\Smiley::class,
			'Storage' => 		Lighty\Kernel\Storage\Storage::class,
			'Strings' => 		Lighty\Kernel\Objects\Strings::class,
			'Sys' => 			Lighty\Kernel\Objects\Sys::class,
			'Table' => 			Lighty\Kernel\Objects\Table::class,
			'Time' => 			Lighty\Kernel\Objects\DateTime::class,
			'Translator' => 	Lighty\Kernel\Translator\Lang::class,
			'Url' => 			Lighty\Kernel\Access\Url::class,
			'Vars' => 			Lighty\Kernel\Objects\Vars::class,
			'View' => 			Lighty\Kernel\MVC\View\View::class,
		)
	);

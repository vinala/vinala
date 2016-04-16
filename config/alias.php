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
			
			'Alias' => 			Pikia\Kernel\Config\Alias::class,
			'App' => 			Pikia\Kernel\Foundation\Application::class,
			'Auth' => 			Pikia\Kernel\Security\Auth::class,
			'Base' => 			Pikia\Kernel\Objects\Base::class,
			'Cache' => 			Pikia\Kernel\Caches\Cache::class,
			'Config' => 		Pikia\Kernel\Config\Config::class,
			'Cookie' => 		Pikia\Kernel\Storage\Cookie::class,
			'Database' => 		Pikia\Kernel\Database\Database::class,
			'DataCollection' =>	Pikia\Kernel\Objects\DataCollection::class,
			'DBTable' => 		Pikia\Kernel\Database\DBTable::class,
			'Debug' => 			Pikia\Kernel\Log\Debug::class,
			'Errors' => 		Pikia\Kernel\Http\Errors::class,
			'Faker' => 			Pikia\Kernel\Resources\Faker::class,
			'Filesystem' => 	Pikia\Kernel\Filesystem\Filesystem::class,
			'Hash' => 			Pikia\Kernel\Security\Hash::class,
			'Html' => 			Pikia\Kernel\HyperText\Html::class,
			'Http' => 			Pikia\Kernel\Http\Http::class,
			'Input' => 			Pikia\Kernel\HyperText\Input::class,
			'Libs' => 			Pikia\Kernel\Resources\Libs::class,
			'License' => 		Pikia\Kernel\Security\License::class,
			'Links' => 			Pikia\Kernel\Http\Links::class,
			'Log' => 			Pikia\Kernel\Logging\Log::class,
			'Mail' => 			Pikia\Kernel\Mailing\Mail::class,
			'ModelArray' => 	Pikia\Kernel\MVC\Model\ModelArray::class,
			'Path' => 			Pikia\Kernel\Access\Path::class,
			'Res' => 			Pikia\Kernel\HyperText\Res::class,
			'Root' => 			Pikia\Kernel\Http\Root::class,
			'Route' => 			Pikia\Kernel\Router\Route::class,
			'Schema' => 		Pikia\Kernel\Database\Schema::class,
			'Security' => 		Pikia\Kernel\Security\Security::class,
			'Session' => 		Pikia\Kernel\Storage\Session::class,
			'Smile' => 			Pikia\Kernel\Translator\Smiley::class,
			'Storage' => 		Pikia\Kernel\Storage\Storage::class,
			'Strings' => 		Pikia\Kernel\Objects\Strings::class,
			'Sys' => 			Pikia\Kernel\Objects\Sys::class,
			'Table' => 			Pikia\Kernel\Objects\Table::class,
			'Time' => 			Pikia\Kernel\Objects\DateTime::class,
			'Translator' => 	Pikia\Kernel\Translator\Lang::class,
			'Url' => 			Pikia\Kernel\Access\Url::class,
			'Vars' => 			Pikia\Kernel\Objects\Vars::class,
			'View' => 			Pikia\Kernel\MVC\View\View::class,
		)
	);

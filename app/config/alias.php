<?php 

	/*
	|----------------------------------------------
	| Aliases
	|----------------------------------------------
	*/

	return array( 

		'Alias' => 			Fiesta\Core\Config\Alias::class,
		'App' => 			Fiesta\Core\Glob\App::class,
		'Auth' => 			Fiesta\Core\Security\Auth::class,
		'Base' => 			Fiesta\Core\Objects\Base::class,
		'Cache' => 			Fiesta\Core\Caches\Cache::class,
		'Config' => 		Fiesta\Core\Config\Config::class,
		// 'Controller' => 	Fiesta\Core\MVC\Controller\Controller::class,
		'Cookie' => 		Fiesta\Core\Storage\Cookie::class,
		'Database' => 		Fiesta\Core\Database\Database::class,
		// 'DatabaseCache' => 	Fiesta\Core\Caches\DatabaseCache::class,
		'DataCollection' => Fiesta\Core\Objects\DataCollection::class,
		'Time' => 			Fiesta\Core\Objects\Date_Time::class,
		'DBTable' => 		Fiesta\Core\Database\DBTable::class,
		'Debug' => 			Fiesta\Core\Log\Debug::class,
		'Errors' => 		Fiesta\Core\Http\Errors::class,
		'Faker' => 			Fiesta\Core\Resources\Faker::class,
		// 'FileCache' => 		Fiesta\Core\Caches\FileCache::class,
		'Filesystem' => 	Fiesta\Core\Filesystem\Filesystem::class,
		'Hash' => 			Fiesta\Core\Security\Hash::class,
		'Html' => 			Fiesta\Core\HyperText\Html::class,
		'Input' => 			Fiesta\Core\HyperText\Input::class,
		'Lang' => 			Fiesta\Core\Translator\Lang::class,
		'Libs' => 			Fiesta\Core\Resources\Libs::class,
		'License' => 		Fiesta\Core\Security\License::class,
		'Links' => 			Fiesta\Core\Http\Links::class,
		'Mail' => 			Fiesta\Core\Mailing\Mail::class,
		// 'Maintenance' => 	Fiesta\Core\Maintenance\Maintenance::class,
		// 'Migration' => 		Fiesta\Core\Database\Migration::class,
		// 'Model' => 			Fiesta\Core\MVC\Model\Model::class,
		'ModelArray' => 	Fiesta\Core\MVC\Model\ModelArray::class,
		'Path' => 			Fiesta\Core\Access\Path::class,
		'Res' => 			Fiesta\Core\HyperText\Res::class,
		'Root' => 			Fiesta\Core\Http\Root::class,
		'Route' => 			Fiesta\Core\Router\Route::class,
		'Schema' => 		Fiesta\Core\Database\Schema::class,
		'Security' => 		Fiesta\Core\Security\Security::class,
		// 'Seeder' => 		Fiesta\Core\Database\Seeder::class,
		'Session' => 		Fiesta\Core\Storage\Session::class,
		'Storage' => 		Fiesta\Core\Storage\Storage::class,
		'String' => 		Fiesta\Core\Objects\String::class,
		'Sys' => 			Fiesta\Core\Objects\Sys::class,
		'Table' => 			Fiesta\Core\Objects\Table::class,
		'Url' => 			Fiesta\Core\Access\Url::class,
		'Vars' => 			Fiesta\Core\Objects\Vars::class,
		'View' => 			Fiesta\Core\MVC\View\View::class,
	);

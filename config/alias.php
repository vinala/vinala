<?php


return [

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
	| Kernel Aliases
	|----------------------------------------------------------
	| this array is responsible for aliases of class
	| in the kernel.
	|
	**/
	'kernel' => [
		'Alias' => Vinala\Kernel\Config\Alias::class , 
		'App' => Vinala\Kernel\Foundation\Application::class , 
		'Auth' => Vinala\Kernel\Security\Auth::class , 
		'Base' => Vinala\Kernel\Objects\Base::class , 
		'Cache' => Vinala\Kernel\Caches\Cache::class , 
		'Config' => Vinala\Kernel\Config\Config::class , 
		'Cookie' => Vinala\Kernel\Storage\Cookie::class , 
		'Database' => Vinala\Kernel\Database\Database::class , 
		'DataCollection' => Vinala\Kernel\Objects\DataCollection::class , 
		'DBTable' => Vinala\Kernel\Database\DBTable::class , 
		'Event' => Vinala\Kernel\Events\Event::class , 
		'Faker' => Vinala\Kernel\Resources\Faker::class , 
		'File' => Vinala\Kernel\Filesystem\File::class , 
		'Form' => Vinala\Kernel\Html\Form::class , 
		'Hash' => Vinala\Kernel\Security\Hash::class , 
		'Html' => Vinala\Kernel\Html\Html::class , 
		'Http' => Vinala\Kernel\Http\Http::class , 
		'Input' => Vinala\Kernel\Http\Input::class , 
		'Json' => Vinala\Kernel\Collections\JSON::class , 
		'Libs' => Vinala\Kernel\Resources\Libs::class , 
		'License' => Vinala\Kernel\Security\License::class , 
		'Links' => Vinala\Kernel\Http\Links::class , 
		'Log' => Vinala\Kernel\Logging\Log::class , 
		'Mail' => Vinala\Kernel\Mailing\Mail::class , 
		'ModelArray' => Vinala\Kernel\MVC\Model\ModelArray::class , 
		'Query' => Vinala\Kernel\Database\Query::class , 
		'Path' => Vinala\Kernel\Access\Path::class , 
		'Redirect' => Vinala\Kernel\Http\Redirect\Redirect::class , 
		'Res' => Vinala\Kernel\HyperText\Res::class , 
		'Request' => Vinala\Kernel\Http\Request::class , 
		'Route' => Vinala\Kernel\Router\Route::class , 
		'Schema' => Vinala\Kernel\Database\Schema::class , 
		'Security' => Vinala\Kernel\Security\Security::class , 
		'Session' => Vinala\Kernel\Storage\Session::class , 
		'Smile' => Vinala\Kernel\Translator\Smiley::class , 
		'Storage' => Vinala\Kernel\Storage\Storage::class , 
		'Strings' => Vinala\Kernel\Objects\Strings::class , 
		'Sys' => Vinala\Kernel\Objects\Sys::class , 
		'Table' => Vinala\Kernel\Objects\Table::class , 
		'Time' => Vinala\Kernel\Objects\DateTime::class , 
		'Translator' => Vinala\Kernel\Translator\Lang::class , 
		'Url' => Vinala\Kernel\Access\Url::class , 
		'Validator' => Vinala\Kernel\Validation\Validator::class , 
		'Vars' => Vinala\Kernel\Objects\Vars::class , 
		'View' => Vinala\Kernel\MVC\View::class , 
	],


	/*
	|----------------------------------------------------------
	| Exceptions Aliases
	|----------------------------------------------------------
	| this array is responsible for aliases of exceptions class
	| classes
	|
	**/
	'exceptions' => [
		//
	],


	/*
	|----------------------------------------------------------
	| Controllers Aliases
	|----------------------------------------------------------
	| this array is responsible for aliases of controllers class
	| classes
	|
	**/
	'controllers' => [
		//
	],


	/*
	|----------------------------------------------------------
	| Models Aliases
	|----------------------------------------------------------
	| this array is responsible for aliases of models class
	| classes
	|
	**/
	'models' => [
		//
	],

];
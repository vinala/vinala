<?php 

return array(
	

	/*
	|----------------------------------------------------------
	| Panel Activation
	|----------------------------------------------------------
	|  To define if you wanna give access to the 
	|  panel or not , for your security if you 
	|  complete building your app, please turn 
	|  this off
	*/

	'enable'=> true,


	/*
	|----------------------------------------------------------
	| Panel Route
	|----------------------------------------------------------
	|  Route for panel, for your security please change it
	*/

	'route'=>'fiesta',


	/*
	|----------------------------------------------------------
	| Panel Passwords
	|----------------------------------------------------------
	|  Here are the passwords to access to the panel
	*/

	'password1'=>'1234',
	'password2'=>'5678',


	/*
	|----------------------------------------------------------
	| First Configuration
	|----------------------------------------------------------
	|  The framework will set true if you passed 
	|  the first configuration
	*/

	'configured' => false,


	/*
	|----------------------------------------------------------
	| Ajax Routes
	|----------------------------------------------------------
	|  This is links of ajax functions
	*/

	'ajax' => array(

		// for new seeds
			'new_seed' => Config::get("security.prefix").'new_seed',

		// to exec migrations
			'exec_migration' => Config::get("security.prefix").'exec_migration',

		// to rollback migrations
			'rollback_migration' => Config::get("security.prefix").'rollback_migration', 

		// for new migrations
			'new_migration' => Config::get("security.prefix").'new_migration',

		// for new controllers
			'new_controller' => Config::get("security.prefix").'new_controller',

		// for new language folder
			'new_dir_lang' => Config::get("security.prefix").'new_dir_lang',

		// for new language file
			'new_file_lang' => Config::get("security.prefix").'new_file_lang',

		// for new links file
			'new_link' => Config::get("security.prefix").'new_link',

		// for new models
			'new_model' => Config::get("security.prefix").'new_model',

		// for new views
			'new_view' => Config::get("security.prefix").'new_view',

		// to exec costume migrations
			'exec_cos_migration' => Config::get("security.prefix").'exec_cos_migration',

		// to rollback costume migrations
			'rollback_cos_migration' => Config::get("security.prefix").'rollback_cos_migration',
	),

);

<?php 


return array(

	/*
	|----------------------------------------------
	| Panel Activation
	|----------------------------------------------
	| hna true ila bghiti l panel tb9a kheda
	| meni tsali menha redha false...pour 
	| votre sécurité
	| 
	*/

	'enable'=> true,

	/*
	|----------------------------------------------
	| Panel Route
	|----------------------------------------------
	| hna route dial l panel
	| route khas ikon diffrent 3la had les valeurs:
	| 
	| 
	*/

	'route'=>'fiesta',

	/*
	|----------------------------------------------
	| Panel Path
	|----------------------------------------------
	| here the path of the panel index, you can 
	| search in the internet to change the panel, 
	| for your security you should change the panel
	| folder name
	| 
	*/

	'path'=>'vendor/fiesta/panel/index.php',


	/*
	|----------------------------------------------
	| Panel passwords
	|----------------------------------------------
	| hna katktb les mot de passe dial panel bach 
	| bihom t9der tdkhol l panel dialk par default
	| fihom 1234 o 5678 nta t9der tbdlhom
	*/

	'password1'=>'1234',
	'password2'=>'5678',

	/*
	|----------------------------------------------
	| First Configuration
	|----------------------------------------------
	| 
	*/

	'configured' => false,

	/*
	|----------------------------------------------
	| Ajax Routes
	|----------------------------------------------
	| this is links of ajax functions
	*/
	'ajax' => array(
		'new_seed' => 'new_seed', 				// for new seeds
		'exec_migration' => 'exec_migration', 			// to exec migrations
		'rollback_migration' => 'rollback_migration', 		// to rollback migrations
		'new_migration' => 'new_migration', 			// for new migrations
		'new_controller' => 'new_controller', 			// for new controllers
		'new_dir_lang' => 'new_dir_lang', 			// for new language folder
		'new_file_lang' => 'new_file_lang', 			// for new language file
		'new_link' => 'new_link', 				// for new links file
		'new_model' => 'new_model', 				// for new models
		'new_view' => 'new_view', 				// for new views
		'exec_cos_migration' => 'exec_cos_migration', 		// to exec costume migrations
		'rollback_cos_migration' => 'rollback_cos_migration', 	// to rollback costume migrations
	),	

);
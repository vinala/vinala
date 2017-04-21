<?php 

return [

	/*
	|----------------------------------------------------------
	| Terminal
	|----------------------------------------------------------
	| the terminal used in your OS
	| available : bash / cmd
	**/
	'terminal' => 'bash',

	/*
	|----------------------------------------------------------
	| Lumos tracking
	|----------------------------------------------------------
	| if true Lumos will set in any file the user and creation
	| date
	**/
	'tracking' => true,

	
	/*
	|----------------------------------------------------------
	| Commands
	|----------------------------------------------------------
	| List of kernel lumos commands
	**/
	'commands' => [

		/*
		|----------------------------------------------------------
		| Clear Controllers
		|----------------------------------------------------------
		| this Command to clear controllers folder
		**/
		'clear_controller' => 'clear:controller',

		/*
		|----------------------------------------------------------
		| Clear Exceptions
		|----------------------------------------------------------
		| this Command to clear exceptions folder
		|
		**/
		'clear_exception' => 'clear:exception',

		/*
		|----------------------------------------------------------
		| New Schema
		|----------------------------------------------------------
		| this Command to generate new schema in schema folder
		**/
		'new_schema' => 'make:schema',


		/*
		|----------------------------------------------------------
		| Execute Schema
		|----------------------------------------------------------
		| this Command to execute schema and create the data table in 
		| database
		**/	
		'exec_schema' => 'exec:schema',

		/*
		|----------------------------------------------------------
		| Rollback Schema
		|----------------------------------------------------------
		| this Command to rollback the execution of the schema 
		**/	
		'rollback_schema' => 'rollback:schema',


		/*
		|----------------------------------------------------------
		| New Translator File
		|----------------------------------------------------------
		| this Command to create new file inside folder in lang 
		| folder
		**/
		'new_lang' => 'make:lang',


		/*
		|----------------------------------------------------------
		| New Link File
		|----------------------------------------------------------
		| this Command to create new file inside links folder
		**/
		'new_link' => 'make:link',


		/*
		|----------------------------------------------------------
		| New Model
		|----------------------------------------------------------
		| this Command to create new model inside models folder
		**/
		'new_model' => 'make:model',
		

		/*
		|----------------------------------------------------------
		| New View
		|----------------------------------------------------------
		| this Command to create new view inside views folder
		**/
		'new_view' => 'make:view',
		

		/*
		|----------------------------------------------------------
		| New Controller
		|----------------------------------------------------------
		| this Command to create new controller inside controllers
		| folder
		**/
		'new_controller' => 'make:controller',


		/*
		|----------------------------------------------------------
		| New Seeder
		|----------------------------------------------------------
		| this Command to create new seeder inside seeds folder
		**/
		'new_seed' => 'make:seed',


		/*
		|----------------------------------------------------------
		| Execute Seeder
		|----------------------------------------------------------
		| this Command to executethe main seeder
		**/	
		'exec_seed' => 'exec:seed',


		/*
		|----------------------------------------------------------
		| Get Route
		|----------------------------------------------------------
		| this Command to add get route ro routes file
		**/	
		'get_route' => 'make:get',


		/*
		|----------------------------------------------------------
		| Post Route
		|----------------------------------------------------------
		| this Command to add post route ro routes file
		**/	
		'post_route' => 'make:post',

		/*
		|----------------------------------------------------------
		| Target Route
		|----------------------------------------------------------
		| this Command to add target route to routes file
		**/	
		'target_route' => 'make:target',


		/*
		|----------------------------------------------------------
		| User Command
		|----------------------------------------------------------
		| this Command to create new user Lumos command
		**/	
		'new_command' => 'make:command',

		/*
		|----------------------------------------------------------
		| User Atomium Tag
		|----------------------------------------------------------
		| this Command to create new user Atomium tag
		**/	
		'new_tag' => 'make:tag',

		/*
		|----------------------------------------------------------
		| User Event
		|----------------------------------------------------------
		| this Command to create new user event
		**/	
		'new_event' => 'make:event',

		/*
		|----------------------------------------------------------
		| Exception
		|----------------------------------------------------------
		| this Command to create new exception
		**/	
		'new_exception' => 'make:exception',

		/*
		|----------------------------------------------------------
		| Middleware
		|----------------------------------------------------------
		| this Command to create new middleware
		**/	
		'new_middleware' => 'make:middleware',

		/*
		|----------------------------------------------------------
		| New Helper
		|----------------------------------------------------------
		| this Command to create new helper
		**/	
		'new_helper' => 'make:helper',

		/*
		|----------------------------------------------------------
		| New Test class
		|----------------------------------------------------------
		| this Command to create new test class
		**/	
		'new_test' => 'make:test',

		/*
		|----------------------------------------------------------
		| Export database
		|----------------------------------------------------------
		| this Command to export database
		**/	
		'export_database' => 'save:database',

		//--------------------------------------------------------
		// Configuration commands
		//--------------------------------------------------------

		/*
		|----------------------------------------------------------
		| Config database
		|----------------------------------------------------------
		| this Command to config database
		**/	
		'config_database' => 'config:database',

		//--------------------------------------------------------
		// Config Switches commands
		//--------------------------------------------------------

		/*
		|----------------------------------------------------------
		| Enable or disable debug mode
		|----------------------------------------------------------
		| this Command to enable or disable debug mode
		**/	
		'switch_debug' => 'switch:debug',

		/*
		|----------------------------------------------------------
		| Enable or disable maintenance mode
		|----------------------------------------------------------
		| this Command to enable or disable maintenance mode
		**/	
		'switch_maintenance' => 'switch:maintenance',
	],
];
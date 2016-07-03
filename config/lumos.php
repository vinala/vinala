<?php 

return array(

	/*
	|----------------------------------------------------------
	| Terminal
	|----------------------------------------------------------
	| the terminal used in your OS
	| available : bash / cmd
	**/

	"terminal" => "cmd",

	/*
	|----------------------------------------------------------
	| New Schema
	|----------------------------------------------------------
	| this Command to generate new schema in schema folder
	**/

	"new_schema" => "make:schema",


	/*
	|----------------------------------------------------------
	| Execute Schema
	|----------------------------------------------------------
	| this Command to execute schema and create the data table in 
	| database
	**/

	"exec_schema" => "exec:schema",

	/*
	|----------------------------------------------------------
	| Rollback Schema
	|----------------------------------------------------------
	| this Command to rollback the execution of the schema 
	**/


	"rollback_schema" => "rollback:schema",


	/*
	|----------------------------------------------------------
	| New Translator File
	|----------------------------------------------------------
	| this Command to create new file inside folder in lang 
	| folder
	**/

	"new_lang" => "make:lang",


	/*
	|----------------------------------------------------------
	| New Link File
	|----------------------------------------------------------
	| this Command to create new file inside links folder
	**/

	"new_link" => "make:link",


	/*
	|----------------------------------------------------------
	| New Model
	|----------------------------------------------------------
	| this Command to create new model inside models folder
	**/

	"new_model" => "make:model",
	

	/*
	|----------------------------------------------------------
	| New View
	|----------------------------------------------------------
	| this Command to create new view inside views folder
	**/

	"new_view" => "make:view",
	

	/*
	|----------------------------------------------------------
	| New Controller
	|----------------------------------------------------------
	| this Command to create new controller inside controllers
	| folder
	**/

	"new_controller" => "make:controller",


	/*
	|----------------------------------------------------------
	| New Seeder
	|----------------------------------------------------------
	| this Command to create new seeder inside seeds folder
	**/

	"new_seed" => "make:seed",


	/*
	|----------------------------------------------------------
	| Execute Seeder
	|----------------------------------------------------------
	| this Command to executethe main seeder
	**/
	
	"exec_seed" => "exec:seed",


	/*
	|----------------------------------------------------------
	| Get Route
	|----------------------------------------------------------
	| this Command to add get route ro routes file
	**/
	
	"get_routes" => "make:get",


	/*
	|----------------------------------------------------------
	| User Command
	|----------------------------------------------------------
	| this Command to create new user Lumos command
	**/
	
	"new_command" => "make:command",

	/*
	|----------------------------------------------------------
	| User Atomium Tag
	|----------------------------------------------------------
	| this Command to create new user Atomium tag
	**/
	
	"new_tag" => "make:tag",

	/*
	|----------------------------------------------------------
	| Export database
	|----------------------------------------------------------
	| this Command to export database
	**/
	
	"export_database" => "save:database",
);

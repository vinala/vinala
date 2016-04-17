<?php 

return array(

	/*
	|----------------------------------------------------------
	| New Schema
	|----------------------------------------------------------
	| this Command to generate new schema in schema folder
	**/

	"new_schema" => "schema:new",


	/*
	|----------------------------------------------------------
	| Execute Schema
	|----------------------------------------------------------
	| this Command to execute schema and create the data table in 
	| database
	**/

	"exec_schema" => "schema:exec",

	/*
	|----------------------------------------------------------
	| Rollback Schema
	|----------------------------------------------------------
	| this Command to rollback the execution of the schema 
	**/


	"rollback_schema" => "schema:rollback",
	
	/*
	|----------------------------------------------------------
	| New Translator Directory
	|----------------------------------------------------------
	| this Command to create new folder in lang folder
	**/

	"dir_lang" => "lang:dir",


	/*
	|----------------------------------------------------------
	| New Translator File
	|----------------------------------------------------------
	| this Command to create new file inside folder in lang 
	| folder
	**/

	"file_lang" => "lang:file",


	/*
	|----------------------------------------------------------
	| New Link File
	|----------------------------------------------------------
	| this Command to create new file inside links folder
	**/

	"new_link" => "link:new",


	/*
	|----------------------------------------------------------
	| New Model
	|----------------------------------------------------------
	| this Command to create new model inside models folder
	**/

	"new_model" => "model:new",
	

	/*
	|----------------------------------------------------------
	| New View
	|----------------------------------------------------------
	| this Command to create new view inside views folder
	**/

	"new_view" => "view:new",
	

	/*
	|----------------------------------------------------------
	| New Controller
	|----------------------------------------------------------
	| this Command to create new controller inside controllers
	| folder
	**/

	"new_controller" => "controller:new",


	/*
	|----------------------------------------------------------
	| New Seeder
	|----------------------------------------------------------
	| this Command to create new seeder inside seeds folder
	**/

	"new_seed" => "seed:new",


	/*
	|----------------------------------------------------------
	| Execute Seeder
	|----------------------------------------------------------
	| this Command to executethe main seeder
	**/
	
	"exec_seed" => "seed:exec",


	/*
	|----------------------------------------------------------
	| Get Route
	|----------------------------------------------------------
	| this Command to add get route ro routes file
	**/
	
	"get_routes" => "routes:get"
);

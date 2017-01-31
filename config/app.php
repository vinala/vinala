<?php

return [

	/*
	|----------------------------------------------------------
	| Project name
	|----------------------------------------------------------
	|  Your project name
	|
	**/
	'project' => '' ,



	/*
	|----------------------------------------------------------
	| Owner name
	|----------------------------------------------------------
	|  Your name
	|
	**/
	'owner' => '' ,



	/*
	|----------------------------------------------------------
	| Project url
	|----------------------------------------------------------
	|  Your website root link, you should put your 
	| root link , by default we using Application::root 
	| function to get the root link even if you 
	| working on localhost
	|
	**/
	'url' => root() ,



	/*
	|----------------------------------------------------------
	| HTML Default title
	|----------------------------------------------------------
	|  Default HTML title
	|
	**/
	'title' => 'Vinala PHP Framework' , 



	/*
	|----------------------------------------------------------
	| Timezone
	|----------------------------------------------------------
	|  Here you should set your timezone after that 
	| whenever you wanna get time, Vinala will give
	| you exact time for the timezone.
	| To get all of timezones supported in php 
	| visite here : http://php.net/manual/en/timezones.php
	|
	**/
	'timezone' => 'UTC' ,



	/*
	|----------------------------------------------------------
	| Default Character Set
	|----------------------------------------------------------
	|  Default encodage when you using HTML::charset
	|
	**/
	'charset' => 'utf-8' , 


	/*
	|----------------------------------------------------------
	| Setup
	|----------------------------------------------------------
	|  The framework will set true if you passed 
	|  the setup
	*/

	'setup' => true,


];
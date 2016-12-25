<?php 


return [

	/*
	|----------------------------------------------------------
	| App maintenance
	|----------------------------------------------------------
	| To enabled maintenance
	|
	**/
	'enabled' => false, 


	/*
	|----------------------------------------------------------
	| Routes out of maintenance 
	|----------------------------------------------------------
	| List of routes that will not stopped by maintenance 
	| filter
	| 
	**/
	'out' => [
		//
	],


	/*
	|----------------------------------------------------------
	| Maintenance view
	|----------------------------------------------------------
	| The view that will be displayed if maintenance
	| is activated
	| 
	**/
	'view' => 'errors.maintenance',

];
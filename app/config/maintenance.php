<?php 


return array(

	/*
	|----------------------------------------------
	| App Maintenance
	|----------------------------------------------
	*/

	'activate' => false, 
	'maintenanceEvent' => "string", //string ou link

	// reaction dial l maintenance string ola lien
	'maintenanceResponse' => "the web site is under maintenance", 

	/*
	|----------------------------------------------
	| Out Maintenance Routes
	|----------------------------------------------
	*/

	'outRoutes' => array(
		Config::get('panel.route'),
	),


);
<?php 



return array(

	/*
	|---------------------------------------------
	| Default Cache Store
	|---------------------------------------------
	| Name of cache storage mode
	| available : file - database
	*/

	'default' => "file",


	/*
	|----------------------------------------------------------
	| Cache options
	|----------------------------------------------------------
	*/

	"options" => [ 

		"file" => [ 
			"driver" => "file",
			'location' => "storage/cache"
		],

		"database" => [ 
			"driver" => "database",
			"table" => "table_cache",
			"database" => null,

		],
	],


);
<?php 


return array(

	/*
	|----------------------------------------------
	| Project name
	|----------------------------------------------
	*/

	'project'=>"fiesta",

	/*
	|----------------------------------------------
	| Owner name
	|----------------------------------------------
	*/

	'owner'=>"",

	/*
	|----------------------------------------------
	| Project parent folder
	|----------------------------------------------
	| ila kenti khedm b local serveur ola kenti 7at 
	| l framework wset chi dossier khask tkteb smyt
	| hadak dossier hana
	*/

	'projectFolder'=>"", 

	/*
	|----------------------------------------------
	| Project url
	|----------------------------------------------
	| hena kteb lien dial site dilak ila kenti 
	| khedam f localhost kteb lien dial local host 
	| o men b3d smyt dossier li khedam fih
	*/

	'url'=>$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"],

	/*
	|----------------------------------------------
	| HTML Default title
	|----------------------------------------------
	| hena blast titlre par default dial site
	*/

	'title'=> 'Fiesta PHP Framework',

);
<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
| hna route dial l application dialk aya route 
| khask t7eto hena mais route khas ikon diffrent 
| 3la had les valeurs:
| /app - /core - /libs - /App.php - /readme.txt 
| - /robots.txt
*/


Routes::get("/",function()
{	
	return View::make('hello');
});






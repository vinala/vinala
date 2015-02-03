<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
| hna route dial l application dialk aya route 
| khask t7eto hena 
|
|
*/


Routes::get("/",function()
{	
	return View::make('hello');
});

Routes::get("a",function()
{	
	echo "a";
});
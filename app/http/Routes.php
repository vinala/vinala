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


Route::get("/",function()
{	//echo Config::get('app.hfgh');
	return View::make('hello');
});

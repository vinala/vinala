<?php 

/*
|----------------------------------------------
| App Routes
|----------------------------------------------
| hna route dial l application dialk aya route 
| khask t7eto hena 
|
*/


Route::get("/",function()
{
	return View::make('hello.hello');
});

Route::get("hello/{step}",function($step)
{
	return helloController::steps($step);
});

<?php 

/*
|----------------------------------------------------------------------------------
| App Routes
|----------------------------------------------------------------------------------
| here for framework routes , all http request should put it here with their events
| put it here with their events
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

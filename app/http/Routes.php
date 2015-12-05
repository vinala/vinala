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

Route::post("hello/1",function(){ helloController::firstStep(); });
Route::post("hello/2",function(){ helloController::secondStep(); });
Route::post("hello/3",function(){ helloController::thirdStep(); });
Route::post("hello/4",function(){ helloController::fourthStep(); });
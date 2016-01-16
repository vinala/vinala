<?php 

/*
|----------------------------------------------------------------------------------
| App Routes
|----------------------------------------------------------------------------------
| here for framework routes , all http request should put it here with their events
| put it here with their events
| 
**/

Route::call("/","helloController@hello");

Route::get("hello/{step}",function($step)
{
	return helloController::steps($step);
});
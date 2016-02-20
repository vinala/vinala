<?php 

/*
|----------------------------------------------------------------------------------
| App Routes
|----------------------------------------------------------------------------------
| here for framework routes , all http request should put it here with their events
| put it here with their events
| 
**/

call("/","helloController@hello");

get("hello/{step}",function($step)
{
	return Intro::steps($step);
});
<?php 

if ( ! function_exists("welcome")) 
{
	/**
	* return the welcome
	*
	* @return string
	*/
	function welcome()
	{
		return 'Welcome '.config('app.owner');
	}	
}
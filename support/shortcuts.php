<?php 

/*
* Vinala uses a variety of global functions calls shortcuts, 
* however, you are free to create your own helpers here.
* just create a simple function not public or static
*/



if( ! function_exists("owner"))
{
	/**
	* Get Owner Name
	*
	* @return string
	*/
	function owner()
	{
		return config("app.owner");
	}
	
}


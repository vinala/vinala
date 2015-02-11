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
{	
	//return View::make('hello');
	//Cache::put("hh");
	// $v=serialize("19893");
	// echo $v."<br>";
	//
	//echo unserialize($v);
	//echo "*".Cache::get('had')."*";
	//Cache::put('had','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',1);
	//echo time();
	if(Cache::has('had')) echo "oui";
	else echo "non";
});
?>

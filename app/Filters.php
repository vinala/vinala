<?php



App::before(function()
{
	//echo "<br>start<br>";
});


App::after(function()
{
	//echo "<br>end<br>";
});



Routes::filter('auth', function()
{
	if(Auth::guest())
	{
		Url::redirect("@login");
		return false;
	}
	else return true; 

});

Routes::filter('guest', function()
{
	if (Auth::guest()) Url::redirect('/');
});



Routes::filter('csrf', function()
{
	if (Session::token() != Res::post('_token')) { return false; }
	else { return true; }
});



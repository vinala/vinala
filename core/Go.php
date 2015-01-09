<?php 
include_once '../Ini.php';
Ini::set();
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	if(Base::full(Res::post('go_yes')) && Base::full(Res::post('token'))) 
	{
		if(Res::post('token')=="dfs16sd8e4ze6r54")
		{
			Shutdown::go();
			echo "Bye Bye";
		}
	}
	//
	if(Base::full(Res::post('go_login')) && Base::full(Res::post('go_pass'))) 
	{
		if(Res::post('go_login')=="fiesta" && Res::post('go_pass')=="dfs16sd8e4ze6r54")
		{
			viewTools::go_button();
		}
		else 
		{
			viewTools::go_login();
		}
	}
	else 
	{
		viewTools::go_login();
	}

?>
</body>
</html>
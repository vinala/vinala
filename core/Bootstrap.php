<?php 

/**
* Bootstarp class
*/
class Bootstrap
{
	public static function set()
	{
?>
<!--<link rel="stylesheet" type="text/css" href="<?php Sys::$root; ?>Fiesta/libs/bootstrap/css/bootstrap.min.css">-->
<link rel="stylesheet" type="text/css" href="<?php Sys::$root; ?>Fiesta/libs/bootstrap/css/bootstrap.css">



<?php
	}

	public static function top_fixed()
	{
		echo "navbar navbar-default navbar-fixed-top";
	}

	public static function navigation($type="tabs")
	{
		switch ($type) {
			case 'tabs': echo "nav nav-tabs";  break;
			case 'pills': echo "nav nav-pills";  break;
			
			default: echo "nav nav-tabs"; break;
		}
	}

	public static function navigation_tab($content="tab",$selected=0,$link="#")
	{
		echo "<li".($selected!=0?" class='active'":"")."><a href='$link'>$content</a></li>";
	}

	
}
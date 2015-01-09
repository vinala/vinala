<?php 


/**
* Url class
*/
class Url
{
	public static function redirect($url)
	{
		$link="";
		if ($url[0] == "@") {
		    $link=Config::get('app.url').substr($url, 1);;
		    echo $link."<br>";
		    echo $url;
		}
		else
		{
			$link=$url;
		    echo $link;
		}
		header("location:".$link);
	}
}
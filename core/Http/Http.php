<?php 

namespace Fiesta\Core\Http;

/**
* HTTP Class
*/
class Http
{
	public static function abort($string = "")
	{
		die($string);
	}
}
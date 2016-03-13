<?php 

namespace Fiesta\Plugins\Google;
/**
* 
*/
class QR
{
	public static function generate($text,$size=100)
	{
		\View::import("qr","code",array("text" => $text, "size" => $size));
	}
}
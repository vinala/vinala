<?php 

namespace Fiesta\Plugins\Google;
/**
* 
*/
class QR
{
	public static function generate($text,$size=100)
	{
		return "<img src='https://chart.googleapis.com/chart?chs=".$size."x".$size."&cht=qr&chl=$text&chld=H|0'/>";
	}
}
<?php 

/**
* 
*/
class Libs
{
	public static function css($file)
	{
		if (strpos($file,'http://') !== false) {
		    echo '<link rel="stylesheet" type="text/css" href="'.$file.'.css">';
		}
		else
		{
			$file=str_replace('.', '/', $file);
			//
			echo '<link rel="stylesheet" type="text/css" href="'.Sys::$app.'libs/css/'.$file.'.css">';
		}
	}

	public static function js($file)
	{
		if (strpos($file,'http://') !== false) {
		    echo '<script type="text/javascript"  src="'.$file.'"></script>';
		}
		else
		{
			$file=str_replace('.', '/', $file);
			//
			echo '<script type="text/javascript"  src="'.Sys::$app.'libs/js/'.$file.'"></script>';
		}
		
	}
}
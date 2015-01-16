<?php 

/**
* 
*/
class Libs
{
	public static function css($file,$default=true)
	{
		if (strpos($file,'http://') !== false) {
		    echo '<link rel="stylesheet" type="text/css" href="'.$file.'.css">';
		}
		else
		{
			if($default)
			{
				$file=str_replace('.', '/', $file);
				echo '<link rel="stylesheet" type="text/css" href="'.Sys::$app.'libs/css/'.$file.'.css">';
			}
			else
			{
				echo '<link rel="stylesheet" type="text/css" href="'.$file.'">';
			}
		}
	}

	public static function js($file)
	{
		if (strpos($file,'http://') !== false) {
		    echo '<script type="text/javascript"  src="'.$file.'"></script>';
		}
		else
		{
			
			if($default)
			{
				$file=str_replace('.', '/', $file);
				echo '<script type="text/javascript"  src="'.Sys::$app.'libs/js/'.$file.'"></script>';
			}
			else
			{
				echo '<link rel="stylesheet" type="text/css" href="'.$file.'">';
			}
		}
		
	}
}

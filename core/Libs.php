<?php 

/**
* 
*/
class Libs
{
	public static function css($file,$default=true)
	{
		if (strpos($file,'http://') !== false) {
		    echo '<link rel="stylesheet" type="text/css" href="'.$file.'.css">'."\n";
		}
		else
		{
			if($default)
			{
				$file=str_replace('.', '/', $file);
				echo '<link rel="stylesheet" type="text/css" href="../app/libs/css/'.$file.'.css">'."\n";
			}
			else
			{
				echo '<link rel="stylesheet" type="text/css" href="'.$file.'">'."\n";
			}
		}
	}

	public static function js($file,$default=true)
	{
		if (strpos($file,'http://') !== false) {
		    echo '<script type="text/javascript"  src="'.$file.'"></script>'."\n";
		}
		else
		{
			
			if($default)
			{
				$file=str_replace('.', '/', $file);
				echo '<script type="text/javascript"  src="'.Sys::$app.'libs/js/'.$file.'"></script>'."\n";
			}
			else
			{
				echo '<script type="text/javascript"  src="'.$file.'"></script>'."\n";
			}
		}
		
	}
}

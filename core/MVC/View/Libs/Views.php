<?php

namespace Fiesta\MVC\View;

/**
* View mother class
*/
class Views
{
	public static $showed;

	public static function make($value,$data=null)
	{
		if(!is_null($data))
		{
			foreach ($data as $key => $value2) {
				$$key=$value2;
			}
		}
		//getFile
		$name=str_replace('.', '/', $value);
		//
		$link1='../app/views/'.$name.'.php';
		$link2='../app/views/'.$name.'.tpl.php';
		//
		$tpl=false;
		//
		if(file_exists($link1)) { $link3=$link1; $tpl=false; }
		else if(file_exists($link2)) { $link3=$link2; $tpl=true; }
		else { throw new ViewNotFoundException($name); }

		if($tpl)
		{
			self::$showed="tpl";
			Template::show($link3,$data);


		}
		else
		{
			self::$showed="smpl";
			include($link3);

		}


	}

	public static function get($value_DGFSrtfg5,$data_kGdfgdf=null)
	{
		$name_fgdfgdf=str_replace('.', '/', $value_DGFSrtfg5);
		if(!is_null($data_kGdfgdf))
		{
			foreach ($data_kGdfgdf as $key => $value2) {
				$$key=$value2;
			}
		}
		//
		ob_start();    // start output buffering
		//get File
		//
		$name_fgdfgdf=str_replace('.', '/', $value_DGFSrtfg5);
		//
		$link1='../app/views/'.$name_fgdfgdf.'.php';
		$link2='../app/views/'.$name_fgdfgdf.'.tpl.php';
		$link3='';
		//
		$tpl=false;
		//
		if(file_exists($link1)) { $link3=$link1; $tpl=false; }
		else if(file_exists($link2)) { $link3=$link2; $tpl=true; }
		else { $link3=$name_fgdfgdf; $tpl=false; }
		//
		//Show the output
		if($tpl)
		{
			self::$showed="tpl";
			Template::show($link3,$data_kGdfgdf);
		}

		else
		{
			self::$showed="smpl";
			include($link3);
		}

		//
		$returned_value = ob_get_contents();    // get contents from the buffer
		ob_end_clean();
		//
		return $returned_value;
	}


}

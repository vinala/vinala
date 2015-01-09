<?php 

/**
* View mother class
*/
class View
{
	public static function make($value,$data=null)
	{
		
		if(!is_null($data))
		{
			foreach ($data as $key => $value2) {
				$$key=$value2;
			}
		}
		//echo clientC::$id;
		$name=str_replace('.', '/', $value);
		//include 'app/views/'.$name.'.php';
		$link='app/views/'.$name.'.php';
		Templete::show($link,$data);
		// } catch (Exception $e) {
		// 	ExceptionDisplay::show($e);
		// }
		
		//if(file_exists($link)) Templete::show($link,$data);
		//else throw new FiestaException("File inexiste", 1);
		
		
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
		/*$name_fgdfgdf=str_replace('.', '/', $value_DGFSrtfg5);
		//return (include ('app/views/'.$name_fgdfgdf.'.php'));*/
		//
		//
		ob_start();    // start output buffering
		$link='app/views/'.$name_fgdfgdf.'.php';
		//include('app/views/'.$name_fgdfgdf.'.php');
		Templete::show($link,$data_kGdfgdf);
		$returned_value = ob_get_contents();    // get contents from the buffer
		ob_end_clean(); 
		//
		return $returned_value;
	}

	
}
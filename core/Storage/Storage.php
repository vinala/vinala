<?php 

/**
* Storage class
*/
class Storage
{
	public $disk="uu";
	protected $storagePath;
	protected $basePath;

	function __construct($disk=null)
	{
		if(empty($disk)) 
		{
			if($this->checkDiskExiste(Config::get('storage.default'))) 
			{ 
				$this->disk=Config::get('storage.default'); 
				$this->basePath=Sys::$app."/storage/file";
				$this->storagePath=$this->basePath."/".Config::get('storage.default');
			}
			else throw new invalidArgumentException("There is no disk call's ".Config::get('storage.default'));
		}
		else 
		{
			if($this->checkDiskExiste($disk)) 
			{ 
				$this->disk=$disk;
				$this->basePath=Sys::$app."/storage/file";
				$this->storagePath=$this->basePath."/".$disk;
			}
			else throw new invalidArgumentException("There is no disk call's ".$disk);
		}
	}

	protected function checkDiskExiste($value)
	{
		return is_dir(Sys::$app."/storage/file/".$value);
	}

	public static function disk($name)
	{
		$self=new self($name);
		return $self;
	}

	public static function createDisk($name)
	{
		$self=new self();
		mkdir($self->basePath."/".$name, 0777, true);
		$self=new self($name);
		return $self;
	}

	protected function putNonStatic($name,$content)
	{
		$myfile = fopen($this->storagePath."/".$name, "w");
		fwrite($myfile, $content);
		fclose($myfile);
	}

	protected static function putStatic($name,$content)
	{
		$self=new self();
		$myfile = fopen($self->storagePath."/".$name, "w");
		fwrite($myfile, $content);
		fclose($myfile);
	}

	protected function existsNonStatic($name,$content)
	{
		$myfile = fopen($this->storagePath."/".$name, "w");
		fwrite($myfile, $content);
		fclose($myfile);
	}

	protected static function existsStatic($name,$content)
	{
		$self=new self();
		$myfile = fopen($self->storagePath."/".$name, "w");
		fwrite($myfile, $content);
		fclose($myfile);
	}



	public function __call($name, $args) {
	    switch ($name) {
	    	case 'put': return call_user_func_array(array($this, "putNonStatic"), $args); break;
	    	case 'exists': return call_user_func_array(array($this, "existsNonStatic"), $args); break;
	    }
	}

	public static function __callStatic($name, $args) {

	    switch ($name) {
	    	case 'put': return call_user_func_array(array("Storage", "putStatic"), $args); break;
	    	case 'exists': return call_user_func_array(array("Storage", "existsStatic"), $args); break;
	    }
	}
}
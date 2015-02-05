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
		if(!$self->checkDiskExiste($name)) mkdir($self->basePath."/".$name, 0777, true);
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

	protected function existsNonStatic($name)
	{
		return file_exists($this->storagePath."/".$name);
	}

	protected static function existsStatic($name,$content)
	{
		$self=new self();
		return file_exists($self->storagePath."/".$name);
	}

	protected function getNonStatic($name)
	{
		return file_get_contents($this->storagePath."/".$name);
	}

	protected static function getStatic($name)
	{
		$self=new self();
		return file_get_contents($self->storagePath."/".$name);
	}

	protected function prependNonStatic($name,$content)
	{
		if($this->exists($name))		
		{
			$oldContent=$this->get($name);	
			$this->put($name,($content.$oldContent));	
		}
		else throw new InvalidArgumentException("There is no file calls $name to prepend");
	}

	protected static function prependStatic($name,$content)
	{
		$self=new self();
		if($self->exists($name))
		{
			$oldContent=$self->get($name);
			$self->put($name,($content.$oldContent));	
		}
		else throw new InvalidArgumentException("There is no file calls $name to prepend");
	}

	protected function appendNonStatic($name,$content)
	{
		if($this->exists($name))		
		{
			$oldContent=$this->get($name);	
			$this->put($name,($oldContent.$content));	
		}
		else throw new InvalidArgumentException("There is no file calls $name to append");
	}

	protected static function appendStatic($name,$content)
	{
		$self=new self();
		if($self->exists($name))
		{
			$oldContent=$self->get($name);
			$self->put($name,($oldContent.$content));	
		}
		else throw new InvalidArgumentException("There is no file calls $name to append");
	}

	protected function sizeNonStatic($name,$content)
	{
		if($this->exists($name))		
		{
			$oldContent=$this->get($name)
			$this->put($name,($oldContent.$content));	
		}
		else throw new InvalidArgumentException("There is no file calls $name to append");
	}

	protected static function sizeStatic($name,$content)
	{
		$self=new self();
		if($self->exists($name))
		{
			$oldContent=$self->get($name);
			$self->put($name,($oldContent.$content));	
		}
		else throw new InvalidArgumentException("There is no file calls $name to append");
	}



	public function __call($name, $args) {
	    switch ($name) {
	    	case 'put': return call_user_func_array(array($this, "putNonStatic"), $args); break;
	    	case 'exists': return call_user_func_array(array($this, "existsNonStatic"), $args); break;
	    	case 'get': return call_user_func_array(array($this, "getNonStatic"), $args); break;
	    	case 'prepend': return call_user_func_array(array($this, "prependNonStatic"), $args); break;
	    	case 'append': return call_user_func_array(array($this, "appendNonStatic"), $args); break;
	    }
	}

	public static function __callStatic($name, $args) {

	    switch ($name) {
	    	case 'put': return call_user_func_array(array("Storage", "putStatic"), $args); break;
	    	case 'exists': return call_user_func_array(array("Storage", "existsStatic"), $args); break;
	    	case 'get': return call_user_func_array(array("Storage", "getStatic"), $args); break;
	    	case 'prepend': return call_user_func_array(array("Storage", "prependStatic"), $args); break;
	    	case 'append': return call_user_func_array(array("Storage", "appendStatic"), $args); break;
	    }
	}
}
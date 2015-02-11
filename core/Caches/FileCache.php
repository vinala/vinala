<?php 

namespace Fiesta\Caches;	

/**
* FileCache class
*/
class FileCache
{
	public function put($key, $value, $minutes)
	{
		$value = $this->packing($value,$minutes);
		//
		//$this->path($key);
		//$this->createCacheDirectory($path = $this->path($key));
		//
		(new \Fiesta\Filesystem\Filesystem)->put($this->path($key), $value);

	}

	public function get($key)
	{
		$path = $this->path($key);
		//
		try {
			$value=(new \Fiesta\Filesystem\Filesystem)->get($path);
		} catch (Exception $e) {
			
		}
		
		//
		$parts = $this->unpacking($value);
		//
		$time=$parts['time'];
		$value=$parts['value'];
		if(time()>$time)
		{
			$this->forget($key);
			//
			return false;
		}
		else
		{
			return $value;
		}

	}

	protected function expiration($minutes)
	{
		if ($minutes === 0) return 9999999999;

		return time() + ($minutes * 60);
	}

	protected function packing($value,$minutes)
	{
		return serialize($value)."*".$this->expiration($minutes);
	}

	protected function unpacking($value)
	{
		$parts=[];
		$p = explode("*", $value);
		$parts['value']=unserialize($p[0]);
		$parts['time']=$p[1];
		//
		return $parts;
	}

	protected function createCacheDirectory($path)
	{
		if( ! (new \Fiesta\Filesystem\Filesystem)->isDirectory(dirname($path)))
			(new \Fiesta\Filesystem\Filesystem)->makeDirectory(dirname($path), 0777, true, true);
		
	}

	protected function hash($value)
	{
		return md5($value."cache".md5($value));
	}

	protected function path($key)
	{
		$hash = $this->hash($key);
		$parts=str_split($hash, 2);
		return "../app/".\Config::get('cache.location').'/'.$hash;
	}

	protected function forget($key)
	{
		return (new \Fiesta\Filesystem\Filesystem)->delete($this->path($key));
	}

	public function existe($key)
	{
		if($this->get($key)) return true;
		else return false;
		//return (new \Fiesta\Filesystem\Filesystem)->isFile($this->path($key));
	}
}
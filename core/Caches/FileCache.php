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
		(new \Fiesta\Filesystem\Filesystem)->put($this->path($key), $value);

	}

	public function get($key)
	{
		$path = $this->path($key);
		//
		if($this->exists($key))
		{
			$value=(new \Fiesta\Filesystem\Filesystem)->get($path);
			$parts = $this->unpacking($value);
			//
			$time=$parts['time'];
			$value=$parts['value'];
			return $value;
		}
		else 
		{
			return false;
		}

	}

	protected function expiration($minutes)
	{
		if ($minutes === 0) return 9999999999;

		return time() + ($minutes * 60);
	}

	protected function packing($value,$minutes)
	{
		return serialize($value)."/**".$this->expiration($minutes);
	}

	protected function unpacking($value)
	{

		$parts=[];
		$p = explode("/**", $value);
		//
		$cont="";
		for ($i=0; $i < count($p)-1; $i++) 
			{
				if($i == count($p)-2)
					$cont.=$p[$i]; 
				else $cont.=$p[$i]."/**"; 
			}
		$parts['time']=$p[count($p)-1];
		
		$parts['value']=unserialize($cont);
		
		return $parts;
	}

	protected function createCacheDirectory($path)
	{
		if( ! (new \Fiesta\Filesystem\Filesystem)->isDirectory(dirname($path)))
			(new \Fiesta\Filesystem\Filesystem)->makeDirectory(dirname($path), 0777, true, true);
		
	}

	protected function hash($value)
	{
		return md5($value.\Config::get("security.key1").md5($value));
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

	public function exists($key)
	{
		if((new \Fiesta\Filesystem\Filesystem)->exists($this->path($key)))
		{
			if(time()>$this->getExpiration($key)) 
			{
				$this->forget($key);
				return false;
			}
			else return true;
		}
		else return false;
	}

	protected function getExpiration($key)
	{
		if(file_exists($path=$this->path($key)))
		{
			$content=file_get_contents($path);
			$parts=explode("*", $content);
			return $parts[count($parts)-1];
		}
		else return false;
	}

	public function forever($key,$value)
	{
		return $this->put($key,$value,0);
	}

	public function clearOld()
	{
		$all=(new \Fiesta\Filesystem\Filesystem)->files("../app/".\Config::get('cache.location'));
		//
		foreach ($all as $value) {
			//
			$cont=(new \Fiesta\Filesystem\Filesystem)->get($value);
			$parts = $this->unpacking($cont);
			//
			$time=$parts["time"];
			//
			if(time()>$time) (new \Fiesta\Filesystem\Filesystem)->delete($value);
		}
		return true;
	}

	public function prolongation($key,$minutes)
	{
		if($this->exists($key))
		{
			$cont=(new \Fiesta\Filesystem\Filesystem)->get($this->path($key));
			$parts = $this->unpacking($cont);
			//
			$this->put($key ,$parts["value"], $minutes);
		} else return false;
	}


}
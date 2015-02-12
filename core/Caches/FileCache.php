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
		//return $this->expiration($minutes)."/**".serialize($value);
		return serialize($value)."/**".$this->expiration($minutes);
	}

	protected function unpacking($value)
	{
		// $parts=[];
		// $p = explode("/**", $value);
		// var_dump($p);
		// $parts['time']=$p[0];
		// //
		// $cont="";
		// for ($i=1; $i < count($p); $i++) $cont.=$p[$i]; 
		// 	echo "<br>".$cont;
		// $parts['value']="";
		// unserialize($cont);

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
			//echo "<br>".$cont;
		//$parts['value']=$cont;
		//
		//var_dump($p);
		$parts['time']=$p[count($p)-1];
		//
		//echo "<br>".$cont;
		
		$parts['value']=unserialize($cont);
		
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
}
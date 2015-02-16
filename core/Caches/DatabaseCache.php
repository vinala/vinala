<?php 

namespace Fiesta\Caches;	

/**
* FileCache class
*/
class DatabaseCache
{

	private $old_server;

	private function establish()
	{
		if(!is_null(\Config::get("cache.options")['database']['database']))
		{
			$data=\Config::get("cache.options")['database']['database'];
			var_dump($data);
			$this->old_server=\Database::$serverData;
			\Database::setNewServer($data['host'],$data['username'],$data['password'],$data['database']);
		}
		else
		{
			$this->old_server=\Database::$serverData;
		}
	}

	private function createTable()
	{
		\Schema::create('FiestaCache',function($tab)
			{
				$tab->inc("id");
				$tab->string("name");
				$tab->string("val");
				$tab->int("life");
				$tab->unique("cacheunique",["name"]);
			});
	}

	private function back()
	{
		return \Database::setNewServer($this->old_server['host'],$this->old_server['username'],$this->old_server['password'],$this->old_server['database']);
	}

	public function put($key, $value, $minutes)
	{
		$value = $this->packing($value);
		$time = $this->expiration($minutes);
		//
		$this->establish();
		//
		if( ! \Schema::existe('FiestaCache',\Database::$serverData['database']))
		{
			$this->createTable();
		}
		$data=[["name" => $key ,"val" => $value ,"life" => $time ]];
		\Schema::table('FiestaCache')->insert($data);
		//
		$this->back();
	}

	public function get($key,$default=null)
	{
		$this->establish();
		//
		if($this->exists($key))
		{
			$value=$this->read($key);
			//
			$parts = $this->unpacking($value[0]['val']);
			//
			return $parts;
		}
		else 
		{
			if(is_null($default)) return false;
			else return $default;
		}
		//
		$this->back();
	}

	protected function expiration($minutes)
	{
		if ($minutes === 0) return 9999999999;

		return time() + ($minutes * 60);
	}

	protected function packing($value)
	{
		return serialize($value);
	}

	protected function unpacking($value)
	{
		return unserialize($value);
	}

	protected function unpacking2($value)
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
		return "../app/".\Config::get('cache.options')["file"]['location'].'/'.$hash;
		//return "../app/".\Config::get('cache.location').'/'.$hash;
	}

	protected function forget($key)
	{
		//$sql="delete from fiestacache where name='".$key."'";
		return \Database::exec("delete from fiestacache where name='".$key."'");
	}

	private function exist($key)
	{
		return (\Database::countS("select * from fiestacache where name='$key'")>0);
	}

	private function read($key)
	{
		return \Database::read("select * from fiestacache where name='$key'");
		// return (\Database::countS("select * from fiestacache where name='$key'")>0);
	}

	public function exists($key)
	{
		if($this->exist($key))
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
		if($this->exist($key))
		{
			$content=$this->read($key);
			$content=$content[0];
			return $content['life'];
		}
		else return false;
	}

	public function forever($key,$value)
	{
		return $this->put($key,$value,0);
	}

	public function clearOld()
	{
		$all=(new \Fiesta\Filesystem\Filesystem)->files("../app/".\Config::get('cache.options')["file"]['location']);
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

	public function pull($key)
	{
		if($this->exists($key))
		{
			$value=$this->get($key);
			$this->forget($key);
			return $value;
		}
		else return false;
	}

	public function getDatabase()
	{
		//if()
	}


}
<?php 

/**
* 
*/
 class EmptyClass
{
	
}

/**
* controler
*/
class Model
{
	public static $table="post";
	public static $columns = array();
	public static $keys = array();
	public $keys2 = array();

	function __construct($tbl=null)
	{
		//
		if(empty($tbl))self::$table=self::tbl();
		else self::$table=$tbl;
		//
		self::keys();
		//
		self::$columns=array();
		$u=Database::read("select COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '".Config::$database."' AND TABLE_NAME = '".self::$table."';");
		foreach ($u as $key => $value) {
			self::$columns[$value[0]]="";
		}
		//$p=(object)self::$columns;
		//
		//$o=new $this();
		foreach (self::$columns as $key => $value)
		{
		    $this->$key = $value;
		}
		//echo self::tbl();
	}

	/*static function keys()
	{
		self::$keys=array();
		$y=Database::read("SHOW INDEX FROM ".self::$table." WHERE `Key_name` = 'PRIMARY'");
		foreach ($y as $key => $value) {
			self::$keys[]=$y[$key]["Column_name"];
		}
		echo "SHOW INDEX FROM ".self::$table." WHERE `Key_name` = 'PRIMARY'<br><br><br>";
		print_r(self::$keys);
	}*/

	static function keys()
	{
		$k = array();
		//$this->$keys2=array();
		$y=Database::read("SHOW INDEX FROM ".self::$table." WHERE `Key_name` = 'PRIMARY'");
		foreach ($y as $key => $value) {
			$k[]=$y[$key]["Column_name"];
		}
		$this->$keys2=$k;
		echo "SHOW INDEX FROM ".self::$table." WHERE `Key_name` = 'PRIMARY'<br><br><br>";
		print_r($this->$keys2);
	}

	public static function find($id1=1,$id2=null,$id3=null)
	{
		self::$table=static::$reference;
		//echo self::$table;

		//self::keys();
		//print_r(self::$keys);
		//self::$keys=array(); 
		$o=new self(self::$table);
		//print_r(get_object_vars($o));
		//echo "<br>";
		//print_r(self::$keys);
		//
		$ids = array($id1,$id2,$id3);
		//
		$sql=null;
		$sql="select * from ".self::$table." ";
		if(count(self::$keys)<3)
		{
			$i=0;
			foreach (self::$keys as  $value) {
				if($i>0) $sql.=" and ";
				if($i==0) $sql.=" where ";
				$sql.=" ".self::$keys[$i]."='".$ids[$i]."' ";
				$i++;
			}
		}

		$r=Database::read($sql);
		//
		$nums = array();
		for ($i=0; $i < 201; $i++) $nums[]=$i; 
		
			$i=0;
		foreach ($r[0] as $key => $value)
		{
			if(($i%2)!=0)
		    $o->$key = $value;
		$i++;
		}
		//print_r(get_object_vars($o));
		//echo "<br><br>";

		
		return $o;
		
	}

	static function tbl()
	{
		return static::$reference;
		//self::$table=static::$reference;
		//echo self::$table;
	}

	public function add()
	{
		$sql="insert into ".self::$table." ";
		//
		$vars=get_object_vars($this);
		//
		$c="(";
		$v=" values(";
		//
		$i=0;
		foreach ($vars as $key => $value) {

			if($i==0) { $c.="".$key; $v.="'".$value."'"; }
			else { $c.=",".$key; $v.=",'".$value."'"; }
			$i++;
		}
		//
		$c.=")";
		$v.=")";
		//
		$sql.=$c.$v;
		//
		return Database::exec($sql);
	}

	public function edit($where=null)
	{

		//print_r(get_object_vars($this));

		$sql="update ".self::$table." set ";
		//
		$vars=get_object_vars($this);
		//
		$i=0;
		$c="";
		//
		foreach ($vars as $key => $value) {

		if($i==0) { $sql.="$key='$value'"; }
		else { $sql.=",$key='$value'"; }
		$i++;
		}


		//
		//
		if(!empty($where))
		{
			$sql.=" where ".$where;
		}
		else
		{
			$sql.=" where ";
			//
			$i=0;
			//
			print_r(self::$keys);
			//
			foreach (self::$keys as $key => $value) {
				if($i==0) { $sql.="$value='".$vars[$value]."'"; }
				else { $sql.=" && $value='".$vars[$value]."'"; }
				$i++;
			}
		}
		//
		//echo $sql;
		//echo Database::exec($sql)."*<br>$sql";
		return Database::exec($sql);


	}

	public function delete($where=null)
		{
			//print_r(self::$keys);
			$vars=get_object_vars($this);
			if(empty($where))
			{
				$sql="delete from ".self::$table." where ";
				//
				$i=0;
				//
				foreach (self::$keys as $key => $value) {
					if($i==0) { $sql.="$value='".$vars[$value]."'"; }
					else { $sql.=" && $value='".$vars[$value]."'"; }
					$i++;
				}

			}
			else
			{
				$sql="delete from ".self::$table." where ";
				$sql.=$where;
				//
			}
			//echo $sql;
			return Database::exec($sql);
		}
}
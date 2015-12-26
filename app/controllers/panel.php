<?php

namespace Fiesta\Core\Panel;
//
use Fiesta\Core\MVC\Controller\Controller;
use Fiesta\Core\Glob\App;
use Fiesta\Core\Database\Seeder;
use Fiesta\Core\Database\Migration;
use Fiesta\Core\Config\Config;
use Fiesta\Core\Database\Schema;
use Fiesta\Core\Database\Database;

/**
* class de controller PanelController
* This is system file, DON'T REMOVE IT !!
*/

class Panel
{

}

/**
* Seeds class
*/
class Seeds
{

	public static function add()
	{
		$nom=$_POST['seedname_name'];
		$Root="../";
		//
		if(!file_exists($Root."app/seeds/$nom.php"))
		{
		 	$myfile = fopen($Root."app/seeds/$nom.php", "w");
			$txt = self::set($nom);
			//
			fwrite($myfile, $txt);
			fclose($myfile);
			//
			echo "le seeder est créé";
		}
		else echo "Le fichier deja existe";
	}

	public static function set($nom)
	{
		$txt = "<?php\n\nuse Fiesta\Core\Database\Seeder;\n\n";
		$txt.="/**\n* class de seeder $nom\n*/\n\nclass $nom extends Seeder\n{\n";

		//datatable name
		$txt.="\t/*\n\t* Name of DataTable\n\t*/\n\tpublic ".'$table="tbl_user";'."\n\n";

			//run
		$txt.="\t/*\n\t* Run the Database Seeder\n\t*/\n\tpublic function run()\n\t{\n\t\t".'$dataTable = array();'."\n\t\t//\n\t\t".'$dataTable[] = array(/* Data Fields */);'."\n\t\t//\n\t\t".'Schema::table($this->table)->insert($dataTable);'."\n\t}\n}";

		return $txt;
	}
}


/**
* Migrations class
*/
class Migrations
{
	public static function exec()
	{
		$Root="../";
		$r=glob($Root."app/schemas/*.php");
		//
		$pieces=array();
		$pieces1=array();
		$pieces2=array();
		//
		$time="";
		$name="";
		//
		$f = array();
		foreach ($r as $key) {
			$pieces = explode("app/schemas/", $key);
			$pieces1 = explode("_", $pieces[1]);
			$time=$pieces1[0];
			$p=explode(".", $pieces1[1]);
			$name=$p[0];
			$f[]=$pieces1[0];
			$pieces2[]=$pieces[1];
			$full_name=$pieces1[0]."_".$name;
		}
		//
		$mx=max($f);
		//
		$ind=0;$i=0;
		//
		foreach ($pieces2 as $value) {
			
			if (strpos($value,$mx) !== false) $ind=$i;

			$i++;
		}
		$link=$r[$ind];
		//

		try {
			include_once $link;
			
			if(up())
			{
				$full_name=$time."_".$name;
				if(Schema::existe(Config::get('database.migration')))
				{
					Database::exec("update ".Config::get('database.migration')." set status_schema='executed' where name_schema='".$name."' and date_schema='".$time."'");

				}
				Migration::updateRegister($full_name,"exec",$Root);
				echo "Schéma executé";
				
			}
			else echo "Schema n'est pas executé".Database::execErr();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public static function set($name,$Unixtime,$Datetime)
	{
		$txt = "<?php\n\n";
		$txt.="/* Schema info\n* @date : ".$Datetime."(".$Unixtime.")\n* @name : ".$name."\n\n\n\n";
		$txt .= "\t/**\n\t * Run the schemas.\n\t*/\n";
		$txt .= "\tfunction up()\n\t{\n\t\treturn true;\n\n";
		$txt .= "\t\t/* Ex.\treturn Schema::create('$name',function(".'$tab'.")\n\t\t\t{\n\t\t\t\t".'$tab->string("name");'."\n\t\t\t});\n\t\t\t*/";
		$txt .= "\n\t}\n\n";
		$txt .= "\t/**\n\t * Reverse the schemas.\n\t*/\n";
		$txt .= "\tfunction down()\n\t{\n\t\treturn true;\n\n";
		$txt .= "\t\t// Ex.\t return Schema::drop('$name');\n\n";
		$txt .= "\t}\n\n";
		$txt .= "?>\n";
		return $txt;
	}

	public static function create()
	{
		Schema::create(Config::get('database.migration'),function($tab)
		{
			$tab->inc("pk_schema");
			$tab->string("name_schema");
			$tab->timestamp("date_schema");
			$tab->string("status_schema");
			$tab->string("type_schema");
		});
	}

	public static function insert($name,$time)
	{
		Database::exec("insert into ".Config::get('database.migration')."(name_schema,date_schema,status_schema,type_schema) values('".$name."','".$time."','init','table')");
	}

	public static function add()
	{
		$Datetime=date("Y/m/d H:i:s",time());
		$Unixtime=time();
		$name=$_POST['migname'];
		$Root="../";
		//
		$myfile = fopen($Root."app/schemas/".$Unixtime."_".$name.".php", "w");
		//
		fwrite($myfile, self::set($name,$Unixtime,$Datetime));
		fclose($myfile);
		//
		if(!Schema::existe(Config::get('database.migration'))) self::create();
		//
		self::insert($name,$Unixtime);
		//
		Migration::updateRegister($Unixtime."_".$name,"init",$Root);

		echo "la schema a été ajoutéé";
	}
}
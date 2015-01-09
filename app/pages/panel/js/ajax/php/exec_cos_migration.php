<?php 

include_once '../../../../../../core/Ini.php';
	App::run(null,'../../../../../../',false);

$r=glob("../../../../../schemas/*.php");

$r2=array();
$r2=array();
foreach ($r as $value) {

$temp1=explode("schemas/",$value);
$temp2=explode("_",$temp1[1]);
$temp3=explode(".",$temp2[1]);
$ex=$temp3[0];
//

if($ex==$_POST['exec_cos_migrate_select'])
	{
		$r2[]=$ex;
		$r3[]=$temp2[0];

	}
}
$v="";
//
if(count($r2)>1)
{
	for ($i=1; $i < count($r2); $i++) { 
		error_log($r3[$i].'*/*'.$r3[$i-1]);
		if($r3[$i]>=$r3[$i-1])
		{
			$v="../../../../../schemas/".$r3[$i]."_".$r2[$i].".php";
		}
	}
}
else
{
	$v="../../../../../schemas/".$r3[0]."_".$r2[0].".php";
}


try {
	include_once $v;
	if(up())
		echo "Schéma executé";
	else echo Database::execErr();
} catch (Exception $e) {
	echo $e->getMessage();
}



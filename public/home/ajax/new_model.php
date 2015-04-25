<?php 


$class=$_POST['new_models_class_name'];
$file=$_POST['new_models_file_name'];
$table=$_POST['new_models_table_name'];

$Root="../../";
if(!file_exists($Root."../app/models/$file.php"))
	{
		$myfile = fopen($Root."../app/models/$file.php", "w");
		$txt = "<?php\n\n";

		$txt.="class $class extends Model\n\t{\n\t\t//Name of the table in database\n\t\tprotected static ".'$table'."='$table';\n\t\tprotected static ".'$foreignKeys=array();'."\n\n\t}";

		fwrite($myfile, $txt);
		fclose($myfile);
		//
		echo "okey";
	}
	else
	{
		echo "Le fichier deja existe";
	}

 ?>
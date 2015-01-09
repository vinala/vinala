<?php 


$class=$_POST['new_models_class_name'];
$file=$_POST['new_models_file_name'];
$table=$_POST['new_models_table_name'];

if(!file_exists("../../../../../models/$file.php"))
	{
		$myfile = fopen("../../../../../models/$file.php", "w");
		$txt = "<?php\n\n";

		$txt.="class $class extends Model\n\t{\n\t\t//Name of the table in database\n\t\tprotected static ".'$reference'."='$table';\n\n\t}";

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
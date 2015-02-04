<?php 

$class=$_POST['new_view_class_name'];
$file=$_POST['new_view_file_name'];

if(!file_exists("../../../../../views/$file.php"))
	{
		$myfile = fopen("../../../../../views/$file.php", "w");
		$txt = "<?php\n\n";

		$txt.="/**\n* class de view $class\n*/\n\nclass $class\n{\n\t# Code...\n}";

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
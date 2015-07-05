<?php 

// $class=$_POST['new_view_class_name'];
$file=$_POST['new_view_file_name'];
//
$Root="../../";
if(!file_exists($Root."../app/views/$file.php"))
	{
		$myfile = fopen($Root."../app/views/$file.php", "w");
		$txt = "<?php\n\n";

		$txt.="/**\n* View file  : $file\n*/\n\n";

		fwrite($myfile, $txt);
		fclose($myfile);
		//
		echo "Le view a été creé";
	}
	else
	{
		echo "Le fichier deja existe";
	}

?>
<?php 

	$name=$_POST['lang_dir_name'];
	if(mkdir ("../../../../../lang/".$name))
		echo "okey";
	else echo "le dossier ne veut pas cree";
	

	

 ?>
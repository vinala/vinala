<?php 

	$name=$_POST['lang_dir_name'];

	$Root="../../";
	if(mkdir ($Root."../app/lang/".$name))
		echo "okey";
	else echo "le dossier ne veut pas cree";
	

	

 ?>
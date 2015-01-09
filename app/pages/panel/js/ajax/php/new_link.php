<?php 

	$time=time();
	$name=$_POST['link_name'];
	if(empty($name)) $name=$time;
	//
	if(!file_exists("../../../../../links/".$name.".php"))
	{
		$myfile = fopen("../../../../../links/".$name.".php", "w");
		$txt = "<?php\n\n";

		$txt.="/*\n\tlinks of ".$name."\n*/\n\n";

		$txt .= "return array(\n\t'link_name_1' => 'link_value_1',\n\t'link_name_2' => 'link_value_2'\n);";
		
		$txt .= "\n\n?>";
		fwrite($myfile, $txt);
		fclose($myfile);
		//
		echo "okey";
	}
	else echo "Le fichier deja existe";


	

 ?>
<?php 

	$sec_1=$_POST['sec_1'];
	$sec_2=$_POST['sec_2'];


$contect="
<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Encryption Keys
	|--------------------------------------------------------------------------
	| 
	| Hna cle lwla dial l cryptage dial les donnes.khas tkoon string 32 bit(car)
	| o cle taniya 7eta hiya dial l cryptage dial les donnes.khas tkoon au minimum string 10 bit(car)
	| had les cles important pour security dial site dialk
	|
	*/

	'key1' => '".$sec_1."',
	'key2' => '".$sec_2."',

);
";
//print_r($_POST);
file_put_contents("../../../config/security.php", $contect, 0);
//
echo "ok";
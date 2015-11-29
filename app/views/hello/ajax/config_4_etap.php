<?php 

	if(isset($_POST['state'])) $state="true";
	else $state="false";
	$route=empty($_POST['route']) ? "fiesta" : $_POST['route'];
	$pass_1=empty($_POST['pass_1']) ? "1234" : $_POST['pass_1'];
	$pass_2=empty($_POST['pass_2']) ? "5678" : $_POST['pass_2'];


$contect="<?php 


return array(

	/*
	|----------------------------------------------
	| Panel Activation
	|----------------------------------------------
	| hna true ila bghiti l panel tb9a kheda
	| meni tsali menha redha false...pour 
	| votre sécurité
	| 
	*/

	'enable'=> ".$state.",

	/*
	|----------------------------------------------
	| Panel Route
	|----------------------------------------------
	| hna route dial l panel
	| route khas ikon diffrent 3la had les valeurs:
	| 
	| 
	*/

	'route'=>'".$route."',

	/*
	|----------------------------------------------
	| Panel Folder
	|----------------------------------------------
	| pour la securité dial l app dialk
	| khask tbdel l nom dial dossier li fih l panel
	| li kayn f 'public/panel'
	| Le nom par défaut howa panel
	| 
	*/

	'folder'=>'home',


	/*
	|----------------------------------------------
	| Panel passwords
	|----------------------------------------------
	| hna katktb les mot de passe dial panel bach 
	| bihom t9der tdkhol l panel dialk par default
	| fihom 1234 o 5678 nta t9der tbdlhom
	*/

	'password1'=>'".$pass_1."',
	'password2'=>'".$pass_2."',

	/*
	|----------------------------------------------
	| First Configuration
	|----------------------------------------------
	| 
	*/

	'configurated' => true

	

);";
//print_r($_POST);
file_put_contents("../../../config/panel.php", $contect, 0);
//
echo "ok";

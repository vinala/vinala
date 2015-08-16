<?php 

	//$name=empty($_POST['dev_name']) ? "user" : $_POST['dev_name'];
	$name=$_POST['dev_name'];// ? "user" : $_POST['dev_name'];
	$langue=$_POST['langue'];


	$content_app="<?php
  
\treturn array( 
 
\t/*
\t|----------------------------------------------
\t| Project name
\t|----------------------------------------------
\t*/
 
\t'project'=>'fiesta', 
 
\t/* 
\t|---------------------------------------------- 
\t| Owner name 
\t|---------------------------------------------- 
\t*/ 
 
\t'owner'=>'".$name."', 
 
\t/* 
\t|---------------------------------------------- 
\t| Project parent folder 
\t|---------------------------------------------- 
\t| ila kenti khedm b local serveur ola kenti 7at 
\t| l framework wset chi dossier khask tkteb smyt 
\t| hadak dossier hana 
\t*/ 
 
\t'projectFolder'=>'fiesta', 
 
\t/* 
\t|---------------------------------------------- 
\t| Project url 
\t|---------------------------------------------- 
\t| hena kteb lien dial site dilak ila kenti 
\t| khedam f localhost kteb lien dial local host 
\t| o men b3d smyt dossier li khedam fih 
\t*/ 
 
\t'url'=>App::root(), 
 
\t/* 
\t|---------------------------------------------- 
\t| HTML Default title 
\t|---------------------------------------------- 
\t| hena blast titlre par default dial site 
\t*/ 
 
\t'title'=> 'Fiesta PHP Framework', 
 
\t/* 
\t|---------------------------------------------- 
\t| Routing inexists event 
\t|---------------------------------------------- 
\t| hena ila kan route makynch ,true bach 
\t| yafficher exception ,sinon false bach 
\t| ymchi l 404 
\t*/ 
 
\t'unrouted'=> true, 
 
\t/* 
\t|---------------------------------------------- 
\t| Default Character Set 
\t|---------------------------------------------- 
\t| hena encode dial l'application meni 
\t| tkhdem l methode HTML::charset() 
\t| 
\t*/ 
 
\t'charset'=> 'utf-8', 
 
);";

file_put_contents("../../../config/app.php", $content_app, 0);


//

$contect_lang="<?php 


return array(

\t/*
\t|----------------------------------------------
\t| Default lang
\t|----------------------------------------------
\t| hena kteb la langue par default dila l site 
\t| dialk o t9der tbdelo men be3d
\t*/

\t'default'=>'".$langue."',

\t/*
\t|----------------------------------------------
\t| Lang Cookie name
\t|----------------------------------------------
\t| hena smyt l cookie dial langue
\t*/

\t'cookie'=>'fiesta_lang',

);";

file_put_contents("../../../config/lang.php", $contect_lang, 0);

echo "ok";

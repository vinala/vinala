<?php

 use Fiesta\Core\MVC\Controller\Controller;

/**
* class de controller helloController
*/

class helloController extends Controller
{
	
	
	public static $id = null;
	public static $object = null;


	/**
	 * Display a listing of the resource.
	 *
	 * 
	 * @return Response
	 */
	public static function index()
	{
		//
	}


	/**
	 * Get the resource by id
	 *
	 * @param id(mixed) id of the object 
	 * @return Response
	 */
	public static function show($id)
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	  * @return Response
	 */
	public static function add()
	{
		//
	}


	/**
	 * Insert newly created resource in storage.
	 *
	  * @return Response
	 */
	public static function insert()
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param id(mixed) id of the object 
	 * @return Response
	 */
	public static function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param id(mixed) id of the object 
	 * @return Response
	 */
	public static function update($id=null)
	{
		//
	}


	/**
	 * Delete the specified resource in storage.
	 *
	 * @param id(mixed) id of the object 
	 * @return Response
	 */
	public static function delete($id)
	{
		//
	}

	public static function steps($step)
	{
		switch ($step) {
			case 1: self::firstStep(); break;
			case 2: self::secondStep(); break;
			case 3: self::thirdStep(); break;
			case 4: self::fourthStep(); break;
		}
	}
	
	public static function firstStep()
	{
		//$name=empty($_POST['dev_name']) ? "user" : $_POST['dev_name'];
		$name=$_POST['dev_name'];// ? "user" : $_POST['dev_name'];
		$langue=$_POST['langue'];

		if(isset($_POST['ckeck_loggin'])) $loggin="true";
		else $loggin="false";

		if(isset($_POST['ckeck_maintenance'])) $maintenance="true";
		else $maintenance="false";


		$content_app="<?php\n \n\treturn array(\n\n\t/*\n\t|----------------------------------------------\n\t| Project name\n\t|----------------------------------------------\n\t*/\n \n\t'project'=>'fiesta', \n \n\t/*\n\t|---------------------------------------------- \n\t| Owner name \n\t|---------------------------------------------- \n\t*/ \n \n\t'owner'=>'".$name."', \n \n\t/* \n\t|---------------------------------------------- \n\t| Project parent folder \n\t|---------------------------------------------- \n\t| ila kenti khedm b local serveur ola kenti 7at \n\t| l framework wset chi dossier khask tkteb smyt \n\t| hadak dossier hana \n\t*/ \n\t'projectFolder'=>'fiesta', \n \n\t/* \n\t|---------------------------------------------- \n\t| Project url \n\t|---------------------------------------------- \n\t| hena kteb lien dial site dilak ila kenti \n\t| khedam f localhost kteb lien dial local host \n\t| o men b3d smyt dossier li khedam fih \n\t*/ \n \n\t'url'=>App::root(), \n \n\t/* \n\t|---------------------------------------------- \n\t| HTML Default title \n\t|---------------------------------------------- \n\t| hena blast titlre par default dial site \n\t*/ \n \n\t'title'=> 'Fiesta PHP Framework', \n \n\t/* \n\t|---------------------------------------------- \n\t| Routing inexists event \n\t|---------------------------------------------- \n\t| hena ila kan route makynch ,true bach \n\t| yafficher exception ,sinon false bach \n\t| ymchi l 404 \n\t*/ \n \n\t'unrouted'=> true, \n \n\t/* \n\t|---------------------------------------------- \n\t| Default Character Set \n\t|---------------------------------------------- \n\t| hena encode dial l'application meni \n\t| tkhdem l methode HTML::charset() \n\t| \n\t*/ \n \n\t'charset'=> 'utf-8', \n \n);";

		file_put_contents("../app/config/app.php", $content_app, 0);

		//

		$contect_lang="<?php \n\n\nreturn array(\n\n\t/*\n\t|----------------------------------------------\n\t| Default lang\n\t|----------------------------------------------\n\t| hena kteb la langue par default dila l site \n\t| dialk o t9der tbdelo men be3d\n\t*/\n\n\t'default'=>'".$langue."',\n\n\t/*\n\t|----------------------------------------------\n\t| Lang Cookie name\n\t|----------------------------------------------\n\t| hena smyt l cookie dial langue\n\t*/\n\n\t'cookie'=>'fiesta_lang',\n\n);\n";

		file_put_contents("../app/config/lang.php", $contect_lang, 0);

		$contect_debug="<?php \n\nreturn array(\n\n\t/*\n\t|----------------------------------------------\n\t| Allow Debug\n\t|----------------------------------------------\n\t| hena bach tkheli l framework i debugger les \n\t| erreur o les exception dialo ila kan false \n\t| maghadich i affachier les erreur\n\t| \n\t| \n\t*/\n\n\t'debug' => ".$loggin.",\n\n\t/*\n\t|----------------------------------------------\n\t| Error Debug Message\n\t|----------------------------------------------\n\t| ila kan l parametre dial debug fih false\n\t| l framework ghadi y affichier had l msag\n\t| \n\t*/\n\t'msg' => \"Ohlala! il semble que quelque chose s'ait mal passé\",\n\n\t/*\n\t|----------------------------------------------\n\t| Error log\n\t|----------------------------------------------\n\t| hana ghadi t3tih l fichier li ghadi ydir fih \n\t| les error_log\n\t| par defaut kayn fichier f storage\n\t| \n\t*/\n\n\t'log' => __DIR__.'/../app/storage/logs/fiesta.log',\n\n\t/*\n\t|----------------------------------------------\n\t| Error simple page background color\n\t|----------------------------------------------\n\t| hana ghadi t3tih l couleur dial l background\n\t| dial la page simple dial l erreur ya3ni lpage \n\t| li katkhroj dial l erreur ila kan debug fiha \n\t| false\n\t| \n\t*/\n\n\t'bg' => '#a4003a', //\n\n\n);\n?>";

		file_put_contents("../app/config/loggin.php", $contect_debug, 0);

		$contect_maintenance="<?php \n\n\treturn array( \n\n\t/*\n\t|----------------------------------------------\n\t| App Maintenance\n\t|----------------------------------------------\n\t*/\n\n\t'activate' => ".$maintenance.", \n\n\t/*\n\t|----------------------------------------------\n\t| Maintenance Message\n\t|----------------------------------------------\n\t*/\n\t'msg' => 'Le site web est en cours de maintenance...',\n\n\t/*\n\t|----------------------------------------------\n\t| Maintenance background\n\t|----------------------------------------------\n\t*/\n\t'bg' => '#d6003e',\n\n\t/*\n\t|----------------------------------------------\n\t| Out Maintenance Routes\n\t|----------------------------------------------\n\t*/\n\n\t'outRoutes' => array(\n\t\t\tConfig::get('panel.route'),\n\t\t),\n\n);\n?>";

		file_put_contents("../app/config/maintenance.php", $contect_maintenance, 0);
		echo "ok";
	}

	public static function secondStep()
	{
		$host=empty($_POST['db_host']) ? "localhost" : $_POST['db_host'] ;
		$name=empty($_POST['db_name']) ? "test" : $_POST['db_name'];
		$usr=empty($_POST['db_usr']) ? "root" : $_POST['db_usr'];
		$pass=empty($_POST['db_pass']) ? "" : $_POST['db_pass'];
		$prefix=$_POST['db_prefix'];

		if(empty($prefix)) { $prefixing="false"; $prefix="ysf"; }
		else  { $prefixing="true";  }

		$contect="<?php \n\n\nreturn array(\n\n\t/*\n\t|----------------------------------------------\n\t| Default Database Connection\n\t|----------------------------------------------\n\t*/\n\n\t'default' => 'mysql', \n\n\t/*\n\t|----------------------------------------------\n\t| Database Connections\n\t|----------------------------------------------\n\t*/\n\n\t'connections' => array(\n\n\t\t'sqlite' => array(\n\t\t\t'driver'   => 'sqlite',\n\t\t\t'database' => __DIR__.'/../database/production.sqlite',\n\t\t),\n\n\t\t'mysql' => array(\n\t\t\t'driver'    => 'mysql',\n\t\t\t'host'      => '".$host."',\n\t\t\t'database'  => '".$name."',\n\t\t\t'username'  => '".$usr."',\n\t\t\t'password'  => '".$pass."',\n\t\t\t'charset'   => 'utf8',\n\t\t\t'collation' => 'utf8_unicode_ci',\n\t\t),\n\n\t\t'pgsql' => array(\n\t\t\t'driver'   => 'pgsql',\n\t\t\t'host'     => 'localhost',\n\t\t\t'database' => 'forge',\n\t\t\t'username' => 'forge',\n\t\t\t'password' => '',\n\t\t\t'charset'  => 'utf8',\n\t\t\t'schema'   => 'public',\n\t\t),\n\n\t\t'sqlsrv' => array(\n\t\t\t'driver'   => 'sqlsrv',\n\t\t\t'host'     => 'localhost',\n\t\t\t'database' => 'database',\n\t\t\t'username' => 'root',\n\t\t\t'password' => '',\n\t\t),\n\n\t),\n\n\t/*\n\t|----------------------------------------------\n\t| Schemas Table\n\t|----------------------------------------------\n\t*/\n\n\t'migration' => 'fiesta_migrations',\n\n\t/*\n\t|----------------------------------------------\n\t| Table prefixe \n\t|----------------------------------------------\n\t| for your security change the prefix value to\n\t| another value\n\t|\n\t*/\n\n\t'prefixing' => ".$prefixing.",\n\t'prefixe' => '".$prefix."_',\n\n);";

		file_put_contents("../app/config/database.php", $contect, 0);
		//
		echo "ok";
	}

	public static function thirdStep()
	{
		$sec_1=$_POST['sec_1'];
		$sec_2=$_POST['sec_2'];


		$contect="<?php \n\nreturn array(\n\n\t/*\n\t|--------------------------------------------------------------------------\n\t| Encryption Keys\n\t|--------------------------------------------------------------------------\n\t| \n\t| Hna cle lwla dial l cryptage dial les donnes.khas tkoon string 32 bit(car)\n\t| o cle taniya 7eta hiya dial l cryptage dial les donnes.khas tkoon au minimum string 10 bit(car)\n\t| had les cles important pour security dial site dialk\n\t|\n\t*/\n\n\t'key1' => '".$sec_1."',\n\t'key2' => '".$sec_2."',\n\n);";

		file_put_contents("../app/config/security.php", $contect, 0);
		
		echo "ok";
	}

	public static function fourthStep()
	{
		if(isset($_POST['stat'])) $state="true";
		else $state="false";
		//
		$route=empty($_POST['route']) ? "fiesta" : $_POST['route'];
		$pass_1=empty($_POST['pass_1']) ? "1234" : $_POST['pass_1'];
		$pass_2=empty($_POST['pass_2']) ? "5678" : $_POST['pass_2'];


		$contect="<?php \n\n\nreturn array(\n\n\t/*\n\t|----------------------------------------------\n\t| Panel Activation\n\t|----------------------------------------------\n\t| hna true ila bghiti l panel tb9a kheda\n\t| meni tsali menha redha false...pour \n\t| votre sécurité\n\t| \n\t*/\n\n\t'enable'=> ".$state.",\n\n\t/*\n\t|----------------------------------------------\n\t| Panel Route\n\t|----------------------------------------------\n\t| hna route dial l panel\n\t| route khas ikon diffrent 3la had les valeurs:\n\t| \n\t| \n\t*/\n\n\t'route'=>'".$route."',\n\n\t/*\n\t|----------------------------------------------\n\t| Panel Folder\n\t|----------------------------------------------\n\t| pour la securité dial l app dialk\n\t| khask tbdel l nom dial dossier li fih l panel\n\t| li kayn f 'public/panel'\n\t| Le nom par défaut howa panel\n\t| \n\t*/\n\n\t'folder'=>'home',\n\n\n\t/*\n\t|----------------------------------------------\n\t| Panel passwords\n\t|----------------------------------------------\n\t| hna katktb les mot de passe dial panel bach \n\t| bihom t9der tdkhol l panel dialk par default\n\t| fihom 1234 o 5678 nta t9der tbdlhom\n\t*/\n\n\t'password1'=>'".$pass_1."',\n\t'password2'=>'".$pass_2."',\n\n\t/*\n\t|----------------------------------------------\n\t| First Configuration\n\t|----------------------------------------------\n\t| \n\t*/\n\n\t'configurated' => true\n\n\t\n\n);";

		file_put_contents("../app/config/panel.php", $contect, 0);
	
		echo "ok";
	}

}
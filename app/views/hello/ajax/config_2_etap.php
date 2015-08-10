<?php 

	$host=empty($_POST['db_host']) ? "localhost" : $_POST['db_host'] ;
	$name=empty($_POST['db_name']) ? "test" : $_POST['db_name'];
	$usr=empty($_POST['db_usr']) ? "root" : $_POST['db_usr'];
	$pass=empty($_POST['db_pass']) ? "" : $_POST['db_pass'];
	$prefix=$_POST['db_prefix'];

if(empty($prefix)) { $prefixing="false"; $prefix="ysf"; }
else  { $prefixing="true";  }

$contect="
<?php 


return array(

	/*
	|----------------------------------------------
	| Default Database Connection
	|----------------------------------------------
	*/

	'default' => 'mysql', 

	/*
	|----------------------------------------------
	| Database Connections
	|----------------------------------------------
	*/

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => __DIR__.'/../database/production.sqlite',
		),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => '".$host."',
			'database'  => '".$name."',
			'username'  => '".$usr."',
			'password'  => '".$pass."',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
		),

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'forge',
			'username' => 'forge',
			'password' => '',
			'charset'  => 'utf8',
			'schema'   => 'public',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
		),

	),

	/*
	|----------------------------------------------
	| Schemas Table
	|----------------------------------------------
	*/

	'migration' => 'fiesta_migrations',

	/*
	|----------------------------------------------
	| Table prefixe 
	|----------------------------------------------
	| for your security change the prefix value to
	| another value
	|
	*/

	'prefixing' => ".$prefixing.",
	'prefixe' => '".$prefix."_',




);

";
//print_r($_POST);
file_put_contents("../../../config/database.php", $contect, 0);
//
echo "ok";
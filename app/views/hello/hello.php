<head>
<?php 
	use Fiesta\Kernel\Resources\Libs;
	use Fiesta\Kernel\HyperText\Html;
	use Fiesta\Kernel\Access\Path;
	use Fiesta\Kernel\Config\Config;
	use Fiesta\Kernel\Translator\Lang;
	//
	Libs::css("app/library/bootstrap-3.3.1.min.css",false);
	Libs::css("app/library/bootstrap-theme-3.3.1.min.css",false);
	Libs::js("app/library/jquery-1.11.3.min.js",false);
	Html::charset("utf-8"); 
	Html::title();
	Html::favicon(Path::$public."/favicon.ico");
	Libs::css("hello");
	Libs::js("hello");
?>
</head>




<body>
<?php 

	if(!Config::get('panel.configured')) View::make("hello.setup");
	else View::make("hello.welcome");
	
 ?>
</body>


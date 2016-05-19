<head>
<?php 
	use Lighty\Kernel\Resources\Libs;
	use Lighty\Kernel\HyperText\Html;
	use Lighty\Kernel\Access\Path;
	use Lighty\Kernel\Config\Config;
	use Lighty\Kernel\Translator\Lang;
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


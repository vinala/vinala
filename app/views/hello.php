<head>

	<link rel="stylesheet" href="app/library/bootstrap-3.3.1.min.css">
	<link rel="stylesheet" href="app/library/bootstrap-theme-3.3.1.min.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

	<?php 
		Html::charset("utf-8"); 
		Html::title();
		Html::favicon(Path::$public."/favicon.ico");
		Libs::css("hello");
		Libs::js("hello");
	?>

	

	<style type="text/css">
		
		
	</style>

</head>




<body style="">
	<img src="<?php echo "app/resources/images/fiesta_logo.png" ?>" class="img">
	<div id="welcom">
		<div class="text">
			<?php 
				echo Lang::get('welcome');
				//
				if(Base::full(Config::get('app.owner'))) 
					echo " ".Config::get('app.owner');
			?>
		</div>
	</div>
	<div class="bottom_panel" id="bottom_panel">
		<a href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Fiesta Panel</div></a>
	</div>
</body>


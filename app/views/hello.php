<head>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
	<?php 
		Html::charset("utf-8"); 
		Html::title();
		Html::favicon(Path::$public."/favicon.ico");
	?>

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
	$( document ).ready(function() {
	  // setTimeout(fade (), 6000);
	  var myVar = setInterval(function(){ fade() }, 1000);

	  function fade () {
		$( "#welcom" ).fadeTo( "slow", 1 );
		clearInterval(myVar);
		}
	});
	</script>

	<style type="text/css">
		body
		{
			padding:0px;
			margin:0px;
			background:#5b1d79
		}

		.img
		{
			width:260px;
			margin:0pt auto;
			display:block;
			margin-top: 30px;
		}

		#welcom
		{
			opacity:0;
			color:white;
			text-align: center;
			font-family: 'Lato', sans-serif;
			width:185px;
			margin: 0px auto;
		}

		.f_line
		{
			background: white;
			width: 20px;
			height: 2px;
			margin-top: 8px;
			float: left;
		}
		.l_line
		{
			background: white;
			width: 185px;
			width: 20px;
			height: 2px;
			margin-top: 8px;
			display: inline-block;
			float: right;
		}
		.text
		{
			background: #5b1d79;
			display: inline-block;
			z-index: 3;
			width: 145px;
		}
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
</body>


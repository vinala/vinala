<?php 
	use Fiesta\Kernel\Resources\Libs;
	use Fiesta\Kernel\HyperText\Html;
	use Fiesta\Kernel\Access\Path;
	use Fiesta\Kernel\Config\Config;
	use Fiesta\Kernel\Translator\Lang;
?>

<script type="text/javascript">
	var Timer3 = setInterval(function(){ fade3() }, 400);
	var Timer1 = setInterval(function(){ fade1() }, 500);
	var Timer2 = setInterval(function(){ fade2() }, 1000);

	function fade1 () 
	{
		$( "#welcom" ).fadeTo( "slow", 1 );
		clearInterval(Timer1);
	}

	function fade2 () 
	{
		$( "#bottom_panel" ).fadeTo( "slow", 1 );
		$( "#bottom_panel_2" ).fadeTo( "slow", 1 );
		clearInterval(Timer2);
	}

	function fade3 () 
	{
		$( "#hello_logo" ).fadeTo( "slow", 1 );
		clearInterval(Timer3);
	}
</script>

<img src="<?php echo "app/resources/images/fiesta_logo.png" ?>" class="img" id="hello_logo" style="display:none">

<div id="welcom" style="display:none">

	<div class="text">
		<?php 
			echo Lang::get('welcome');
			//
			if(Base::full(Config::get('app.owner'))) 
				if(Config::get('app.owner') != "user")
					echo " <span id='dev_nom'>".Config::get('app.owner')."</span>";
		?>
	</div>
</div>

<div class="bottom_panel bottom_panel_2" id="bottom_panel_2" style="display:none">
<?php echo "v ".App::fullVersion(); ?>
</div>
<div class="bottom_panel" id="bottom_panel" style="display:none">
	<a id="fst_panel" href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Fiesta Panel</div></a>
</div>
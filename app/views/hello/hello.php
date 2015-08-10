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
<?php if(!Config::get('panel.configurated')): ?>
	<img src="<?php echo "app/resources/images/logo_mini.png" ?>" class="img config_logo" id="config_logo">

	<div id="etap_1">
	<h1 class="conf_title">Général</h1>
		<div class="progres"><div class="progres_1"></div></div>
		<form class="config_form" id="form_1">
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Nom de développeur</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="dev_name" name="dev_name" placeholder="Votre nom">
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="sel1">Langue</label>
				</div>
				<div class="conf_input">
					<select class="form-control" id="sel1" name="langue">
					    <option value="fr" selected>Français</option>
						<option value="ar">العربية</option>
						<option value="en">English</option>
			        </select>
				</div>
			</div>
			<!-- <div class="bottom" id="bottom_panel">
				<a href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Fiesta Panel</div></a>
			</div> -->
			<div style="margin-top:20px">
				<input type="submit" class="btn hello_button" value="Suivant" name="nxt" id="nxt"   />
			</div>
		
			
		</form>
	</div>

	<!-- <div id="welcom" style="display:none">
		<div class="text">
			<?php 
				echo Lang::get('welcome');
				//
				if(Base::full(Config::get('app.owner'))) 
					echo " ".Config::get('app.owner');
			?>
		</div>
	</div> -->
	<!-- <div class="bottom_panel" id="bottom_panel">
		<a href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Fiesta Panel</div></a>
	</div> -->

	<div id="etap_2" style="display:none">
	<h1 class="conf_title">Base de données</h1>
	<div class="progres"><div class="progres_2"></div></div>
		<form class="config_form" id="form_2">
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Serveur Database</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_host" placeholder="Server" value="">
					<p class="conf_input_note">Par défaut : localhost</p>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Nom de Database</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_name" placeholder="Database" value="">
					<p class="conf_input_note">Par défaut : test</p>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Nom de Database User</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_usr" placeholder="Database User" value="">
					<p class="conf_input_note">Par défaut : root</p>
				</div>
			</div>

			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Mot de passe</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_pass" placeholder="Mot de passe" value="">
				</div>
			</div>

			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Prefixe de Tables</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_prefix" placeholder="Prefixe" value="<?php $str=str_shuffle("azertyuiopqsdfghjklmwxcvbn");echo substr($str, 0, 3); ?>">
					<p class="conf_input_note">Si vous gardez ce champ vide , le préfixage sera désactivé</p>
				</div>
			</div>
			<!-- <div class="control_c_row">
				<div class="conf_lab">
					<label for="sel1">Langue</label>
				</div>
				<div class="conf_input">
					<select class="form-control" id="sel1" name="langue">
					    <option value="fr" selected>Français</option>
						<option value="ar">العربية</option>
						<option value="en">English</option>
			        </select>
				</div>
			</div> -->
			<!-- <div class="bottom" id="bottom_panel">
				<a href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Fiesta Panel</div></a>
			</div> -->
			<div style="margin-top:20px">
				<input type="submit" class="btn hello_button" value="Suivant" name="nxt" id="nxt"   />
			</div>
		
			
		</form>
	</div>

	<div id="etap_3" style="display:none">
	<h1 class="conf_title">Sécurité</h1>
		<div class="progres"><div class="progres_3"></div></div>
		<form class="config_form" id="form_3">
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">clé de sécurité 1</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="sec_1" placeholder="Server" value="<?php echo md5(uniqid(rand(), TRUE)) ?>" readonly>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">clé de sécurité 2</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="sec_2" placeholder="Database" value="<?php echo md5(uniqid(rand(), TRUE)) ?>" readonly>
				</div>
			</div>
			<div style="margin-top:20px">
				<input type="submit" class="btn hello_button" value="Suivant" name="nxt" id="nxt"   />
			</div>
		
			
		</form>
	</div>

	<div id="etap_4" style="display:none">
	<h1 class="conf_title">Panel</h1>
		<div class="progres"><div class="progres_4"></div></div>
		<form class="config_form" id="form_4">
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="sel1">Etat</label>
				</div>
				<div class="conf_input">
					<select class="form-control" id="sel1" name="state">
					    <option value="true" selected>Activé</option>
						<option value="false">Désactivé</option>
			        </select>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Route</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="pnl_route" name="route" placeholder="Route" value="" >
					<p class="conf_input_note">Par défaut : fiesta</p>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Mot de passe 1</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="pass_1" placeholder="Mot de passe 1" value="">
					<p class="conf_input_note">Par défaut : 1234</p>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Mot de passe 2</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="pass_2" placeholder="Mot de passe 2" value="">
					<p class="conf_input_note">Par défaut : 5678</p>
				</div>
			</div>
			<div style="margin-top:20px">
				<input type="submit" class="btn hello_button" value="Terminer"   />
			</div>
		
			
		</form>
	</div>

	<img src="<?php echo "app/resources/images/fiesta_logo.png" ?>" class="img" id="hello_logo" style="display:none">

	<div id="welcom" style="display:none">
	
		<div class="text">
			<?php 
				echo Lang::get('welcome');
				//
				//if(Base::full(Config::get('app.owner'))) 
						echo " <span id='dev_nom'>".Config::get('app.owner')."</span>";
			?>
		</div>
	</div>
	
	<div class="bottom_panel" id="bottom_panel" style="display:none">
		<a id="fst_panel" href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Fiesta Panel</div></a>
	</div>

<?php else : ?>

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
	
	<div class="bottom_panel" id="bottom_panel" style="display:none">
		<a id="fst_panel" href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Fiesta Panel</div></a>
	</div>

<?php endif; ?>
</body>


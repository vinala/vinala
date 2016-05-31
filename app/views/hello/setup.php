<?php 
	use Lighty\Kernel\Translator\Lang;
?>

<div class="bg" id="bg"></div>
<div class="content" id="content">

	<div style="height:110px"></div>

	<div id="etap_0">
		<h1 class="conf_title">General</h1>
		<div class="progres"><div class="progres_1"></div></div>
		<div>
			Bienvenue dans Lighty. Avant de nous lancer, nous avons besoin de certaines informations sur votre base de données. Il va vous falloir réunir les informations suivantes pour continuer.
		</div>
		<div>
			Nom de la base de données
			Nom d’utilisateur MySQL
			Mot de passe de l’utilisateur
			Adresse de la base de données
		</div>
		<div>
			Vous devriez normalement avoir reçu ces informations de la part de votre hébergeur. Si vous ne les avez pas, il vous faudra contacter votre hébergeur afin de continuer. Si vous êtes prêt(e)…
		</div>
	</div>
	<div id="etap_1"  style="display:none">
		<h1 class="conf_title">General</h1>
		<div class="progres"><div class="progres_1"></div></div>
		<form class="config_form" id="form_1">
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Developer Name</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="dev_name" name="dev_name" placeholder="Your name">
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="sel1">Language</label>
				</div>
				<div class="conf_input">
					<select class="form-control" id="sel1" name="langue">
					    <option value="fr">Français</option>
						<option value="ar">العربية</option>
						<option value="en" selected>English</option>
			        </select>
				</div>
			</div>

			<div class="control_c_row">
				<div class="conf_lab">
					<label for="sel1">Debugging</label>
				</div>
				<div class="conf_input">
			        <div class="switch">
					    <input type="checkbox" name="ckeck_loggin" class="switch-checkbox" id="chechBox1" >
					    <label class="switch-label switch-label-violet" for="chechBox1"></label>
					</div>
				</div>
			</div>

			<div class="control_c_row">
				<div class="conf_lab">
					<label for="sel1">Maintenance</label>
				</div>
				<div class="conf_input">
			        <div class="switch">
					    <input type="checkbox" name="ckeck_maintenance" class="switch-checkbox" id="chechBox2" >
					    <label class="switch-label switch-label-violet" for="chechBox2"></label>
					</div>
					<p class="conf_input_note">
					You can change the error message and maintenance later in the configuration files</p>
				</div>
			</div>

			<!-- <div class="bottom" id="bottom_panel">
				<a href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Lighty Panel</div></a>
			</div> -->
			<div style="margin-top:20px">
				<input type="submit" class="btn hello_button" value="Next" name="nxt" id="nxt"   />
			</div>
		
			
		</form>
	</div>

	

	<div id="etap_2" style="display:none">
		<h1 class="conf_title">Database</h1>
		<div class="progres"><div class="progres_2"></div></div>
		<form class="config_form" id="form_2">
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Database server</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_host" placeholder="Server" value="">
					<p class="conf_input_note">By default : localhost</p>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Database Name</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_name" placeholder="Database" value="">
					<p class="conf_input_note">By default : test</p>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Database User</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_usr" placeholder="User" value="">
					<p class="conf_input_note">By default : root</p>
				</div>
			</div>

			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Database password</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_pass" placeholder="Password" value="">
				</div>
			</div>

			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Tables prefix</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="db_prefix" placeholder="Prefixe" value="<?php $str=str_shuffle("azertyuiopqsdfghjklmwxcvbn");echo substr($str, 0, 3); ?>">
					<p class="conf_input_note">If you keep it blank, prefixing will be disabled</p>
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
				<a href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Lighty Panel</div></a>
			</div> -->
			<div style="margin-top:20px">
				<input type="submit" class="btn hello_button" value="Next" name="nxt" id="nxt"   />
			</div>
		
			
		</form>
	</div>

	<div id="etap_3" style="display:none">
		<h1 class="conf_title">Security</h1>
		<div class="progres"><div class="progres_3"></div></div>
		<form class="config_form" id="form_3">
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Security key 1</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="sec_1" placeholder="Server" value="<?php echo md5(uniqid(rand(), TRUE)) ?>" readonly>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Security key 2</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="sec_2" placeholder="Database" value="<?php echo md5(uniqid(rand(), TRUE)) ?>" readonly>
				</div>
			</div>
			<div style="margin-top:20px">
				<input type="submit" class="btn hello_button" value="Next" name="nxt" id="nxt"   />
			</div>
		
			
		</form>
	</div>

	<div id="etap_4" style="display:none">
		<h1 class="conf_title">Panel</h1>
		<div class="progres"><div class="progres_4"></div></div>
		<form class="config_form" id="form_4">
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="sel1">Activation</label>
				</div>
				<div class="conf_input">
					<!-- <select class="form-control" id="sel1" name="state">
					    <option value="true" selected>Activé</option>
						<option value="false">Désactivé</option>
			        </select> -->
			        <div class="switch">
					    <input type="checkbox" name="stat" class="switch-checkbox" id="myswitch-violet" checked>
					    <label class="switch-label switch-label-violet" for="myswitch-violet"></label>
					</div>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Route</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="pnl_route" name="route" placeholder="Route" value="" >
					<p class="conf_input_note">By default : Lighty</p>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Password 1</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="pass_1" placeholder="Password 1" value="">
					<p class="conf_input_note">By default : 1234</p>
				</div>
			</div>
			<div class="control_c_row">
				<div class="conf_lab">
					<label for="">Password 2</label>
				</div>
				<div class="conf_input">
					<input type="text" class="form-control" id="migname" name="pass_2" placeholder="Password 2" value="">
					<p class="conf_input_note">By default : 5678</p>
				</div>
			</div>
			<div style="margin-top:20px">
				<input type="submit" class="btn hello_button" value="Finish"   />
			</div>
		
			
		</form>
	</div>

	<img src="<?php echo "app/resources/images/lighty_logo.png" ?>" class="img" id="hello_logo" style="display:none">

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
	
	<div class="bottom_panel bottom_panel_2" id="bottom_panel_2" style="display:none">
		<?php echo "v ".App::fullVersion(); ?>
	</div>
	<div class="bottom_panel" id="bottom_panel" style="display:none">
		<a id="fst_panel" href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Lighty Panel</div></a>
	</div>
</div>
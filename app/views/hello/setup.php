<?php 
	use Pikia\Kernel\Translator\Lang;
?>

<div class="bg" id="bg"></div>
<div class="content" id="content">

	<div style="height:110px"></div>
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
					Vous pouvez modifier le message d'erreur et de maintenance plus tard dans les fichiers de configuration</p>
				</div>
			</div>

			<!-- <div class="bottom" id="bottom_panel">
				<a href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Pikia Panel</div></a>
			</div> -->
			<div style="margin-top:20px">
				<input type="submit" class="btn hello_button" value="Suivant" name="nxt" id="nxt"   />
			</div>
		
			
		</form>
	</div>

	

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
				<a href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Pikia Panel</div></a>
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
					<p class="conf_input_note">Par défaut : pikia</p>
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

	<img src="<?php echo "app/resources/images/pikia_logo.png" ?>" class="img" id="hello_logo" style="display:none">

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
		<a id="fst_panel" href="<?php echo Config::get("panel.route") ?>"><div class="btn hello_button" id="login">Pikia Panel</div></a>
	</div>
</div>
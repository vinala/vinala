<?php 
$rot="app/pages/panel";
$root="./app/pages/panel";
$rooot=$root;


$path="public/".Config::get('panel.folder')."/";
$appPath="../app/";


//
if(isset($_POST['password_1']) && isset($_POST['password_2']) && !empty($_POST['password_1']) && !empty($_POST['password_1']))
{
	if($_POST['password_1']==Config::get('panel.password1') && $_POST['password_2']==Config::get('panel.password2')) $_SESSION['fiesta_pnl_fst_pass']=$_POST['password_1'];
}

if(isset($_GET['logout']) && $_GET['logout']="1") { 
	$_SESSION['fiesta_pnl_fst_pass']="";unset($_SESSION['fiesta_pnl_fst_pass']);}

//
//$root=Config::get("app.url")."app/pages/panel/";
if(!isset($_SESSION['fiesta_pnl_fst_pass']) || empty($_SESSION['fiesta_pnl_fst_pass']))
{
?>
<html>
<head>
	<?php Html::charset(); ?>
	<title>Fiesta | Panel</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<?php 
		Libs::js($path."js/me.js",false);
		Libs::css($path."css/me.css",false);
	?>
	<link rel="icon" type="image/png" href="<?php echo $path; ?>images/fiesta_ico.ico">
	<script type="text/javascript">
		
	</script>
	<style type="text/css">
		body {
        background-color: #40a9e0;
        
    }
    .form-signin input[type="text"] {
        margin-bottom: 5px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    .form-signin .form-control {
        position: relative;
        font-size: 16px;
        font-family: 'Open Sans', Arial, Helvetica, sans-serif;
        height: auto;
        padding: 10px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    .vertical-offset-100 {
        padding-top: 100px;
    }
    .img-responsive {
    display: block;
    max-width: 100%;
    height: auto;
    margin: auto;
    }
    .panel {
    margin-bottom: 20px;
    background-color: transparent !important;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }
	</style>

</head>

<body>
	
	<div class="main_back"></div>
	<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <div class="container">
          <div class="row vertical-offset-100">
             <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                   <div class="panel-heading" style="background:none;border:none">                                
                      <div class="row-fluid user-row header_pnl">
	                     <img src="<?php echo $path; ?>images/fiesta_logo_absolute.png" class="img-responsive" alt="Conxole Admin" style="display:inline-block;width:100px;margin-right:10px"/>
	                     <div class="sep_titl"></div>
	                     <span class="titl">Fiesta</span>
	                  </div>
                   </div>
                   <div class="panel-body">
                     <form accept-charset="UTF-8" role="form" class="form-signin" method="post" action="?login">
                        <fieldset>
                            <label class="panel-login">
                                <div class="login_result"></div>
                            </label>
                            <input class="form-control" placeholder="Mot de pass 1" name="password_1" id="password_1" type="password">
                            <input class="form-control" placeholder="Mot de pass 2" name="password_2" id="password_2" type="password">
                            <input class="btn btn-lg btn-success btn-block btn_log" type="submit" id="login" value="Connexion">
                        </fieldset>
                     </form>
                   </div>
                </div>
             </div>
          </div>
        </div>
</body>
</html>

<?php
}
else if($_SESSION['fiesta_pnl_fst_pass']==Config::get('panel.password1'))
{
?>

<html>
<head>
	<?php Html::charset(); ?>
	<title>Fiesta | Panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	<?php 
		Libs::js($path."js/me.js",false);
		Libs::css($path."css/me2.css",false);
	 ?>

	<link rel="icon" type="image/png" href="<?php echo $path; ?>images/fiesta_ico.ico">

</head>

<body>
<div class="alert_bg" id="alert_unit">
	<div class="alert_main" id="alert_main">
	<div class="alert_close" id="alert_close"><span class="glyphicon glyphicon-remove"></span></div>
	<span id="alert_msg">Lorem ipsum dolor sit amet.</span></div>
	
</div>
<nav class="navbar navbar-default" role="navigation" style='border-radius:0px;background: <?php echo Config::get('panel.mainColor') ?>;'>
  <div class="container-fluid">
    
      <div class="container">

    <div id="content">
      <a class="navbar-brand" href="#" style="padding: 5px;color: white;">
        <img alt="Brand" src="<?php echo $path; ?>images/fiesta_logo_full.png" style="width: 42px;display: inline-block;">
        <span style="margin-left:10px;display: inline-block;color:white">Fiesta</span>
      </a>
      	<a href="?logout=1" class="btn btn-default navbar-btn" style="float:right">Déconnexion</a>
      </div>
      </div>
    
  </div>
</nav>

<div class="container">


<!-------->
<div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#schema" data-toggle="tab" style="color:<?php echo Config::get('panel.tabsColor') ?>"><span class="glyphicon glyphicon-transfer"></span> Schemas</a></li>
        <li><a href="#links" data-toggle="tab" style="color:<?php echo Config::get('panel.tabsColor') ?>"><span class="glyphicon glyphicon-link"></span> Liens</a></li>
        <li><a href="#lang" data-toggle="tab" style="color:<?php echo Config::get('panel.tabsColor') ?>"><span class="glyphicon glyphicon-flag"></span> Langues</a></li>
        <li><a href="#mvc" data-toggle="tab" style="color:<?php echo Config::get('panel.tabsColor') ?>"><span class="glyphicon glyphicon-cloud-upload"></span> MVC</a></li>
        <li><a href="#seeds" data-toggle="tab" style="color:<?php echo Config::get('panel.tabsColor') ?>"><span class="glyphicon glyphicon-leaf"></span> Graines</a></li>
        <li><a href="#config" data-toggle="tab" style="color:<?php echo Config::get('panel.tabsColor') ?>"><span class="glyphicon glyphicon-bookmark"></span> Configuration</a></li>
        <li><a href="#bloc" data-toggle="tab" style="color:<?php echo Config::get('panel.tabsColor') ?>"><span class="glyphicon glyphicon-eye-close"></span> Blocage</a></li>
        <li><a href="#blue" data-toggle="tab" style="color:<?php echo Config::get('panel.tabsColor') ?>"><span class="glyphicon glyphicon-cog"></span> Général</a></li>

    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="schema">
            <h1>Schemas</h1>
            <div class="col-md-5" >
	            <div class="col-md-10">
	            	<h3>Nouvelle schema</h3>
		            <form id="new_migrate" method="post" name="new_migrate">

						<div class="form-group col-md-7">
						    <label for="">Nom de schema</label>
						    <input type="text" class="form-control" id="migname" name="migname" placeholder="Nom de schema">
						</div>

						<div class="form-group col-md-7" style="display:block">
						    <label for="">Type de schema</label>
						    <select class="form-control" id="sel1" name="object">
							    <option value="table" selected>Table</option>
								<option value="vue">Vue</option>
					        </select>
						</div>

						<div class="form-group col-md-7">
							<input type="submit" value="Créé"  class="btn btn-primary">
						</div>
					</form>
				</div>
				<div class="col-md-10">
					<h3 style="margin-bottom:20px">Exécution de dernier schema</h3>
					<form id="exec_last_migrate" method="post" name="exec_last_migrate" class="col-md-5" style="padding: 0px;">
						<input type="submit" value="Exécuter schéma" class="btn btn-primary">
					</form>
					<form id="rollback_last_migrate" method="post" name="rollback_last_migrate" class="col-md-5" style="padding: 0px;">
						<input type="submit" value="Annuler schéma" class="btn btn-primary">
					</form>
				</div>
				<div class="col-md-10">
				<h3 style="margin-bottom:20px">Personnaliser l'exécution</h3>
					<form id="exec_cos_migrate" method="post" name="exec_cos_migrate">
					<?php Migration::getAll('exec_cos_migrate_select'); ?>
						<input type="submit" value="Exécuter" class="btn btn-primary">
					</form>
					<form id="rollback_cos_migrate" method="post" name="rolback_cos_migrate">
					<?php Migration::getAll('ggg'); ?>
						<input type="submit" value="Annuler" class="btn btn-primary">
					</form>
				</div>
			</div>
			<div class="col-md-7" >
				<table class="table table-hover">
					<tr class="info">
					  <th>Nom de object</th>
					  
					  <th>Date de creation</th>
					</tr>
					  
					  <?php 
					  foreach (glob($appPath."schemas/*.php") as $value) {
					  	$r=explode('schemas/',$value);
					  	echo "<tr><td>".$r[1]."</td><td>".date("Y/m/d H:i:s",filemtime($value))."</td></tr>";
					  } 
					  
					  ?>


					  
					</table>
			</div>
        </div>
        <div class="tab-pane" id="links">
            <h1>Liens</h1>
            <div class="col-md-6" >
            <h3>Nouveau Fichier link</h3>
	            <form id="new_link" method="post" name="new_link">
	            	 <div class="form-group col-md-6">
					    <label for="">Nom de fichier liens</label>
					    <input type="text" class="form-control" id="" name="link_name" placeholder="Nom de fichier liens">
					    <small style="color:#a9a5a4">* Si vous laissez ce champ vide le nom de nouveau ficher sera le timestamp</small>
					  </div>
					<input type="submit" value="Créé" class="btn btn-primary" style="margin-top: 25px;">
				</form>
			</div>
			<div class="col-md-6">
				<table class="table table-hover">
				<tr class="info">
				  <th>Nom de fichiers</th>
				  <th>Date de creation</th>
				</tr>
				  <?php foreach (glob($appPath."links/*.php") as $value) {
				  	$r=explode('links/',$value);
				  	echo "<tr><td>".$r[1]."</td><td>".date("Y/m/d H:i:s",filemtime($value))."</td></tr>";
				  } ?>
				  
				</table>
			</div>
        </div>
        <div class="tab-pane" id="seeds">
            <h1>Graines</h1>
            <div class="col-md-6" >
            	<h3>Nouveau graine (seed)</h3>
	            <form id="new_seed" method="post" name="new_seed">
	            	 <div class="form-group col-md-6">
					    <label for="">Nom de seed</label>
					    <input type="text" class="form-control" id="" name="seedname_name" placeholder="Nom de seed">
					  </div>
					<input type="submit" value="Créé" class="btn btn-primary" style="margin-top: 25px;">
				</form>

				<h3>Lancer Seeders</h3>
				<p>Lancer tous les seeders dans la class SeedsCaller</p>
	            <form id="run_seed" method="post" name="run_seed">
					<input type="submit" value="Lancer" class="btn btn-primary" style="margin-top: 25px;">
				</form>
			</div>
			<div class="col-md-6">
				<table class="table table-hover">
				<tr class="info">
				  <th>Nom de fichiers</th>
				  <th>Date de creation</th>
				</tr>
				  <?php foreach (glob($appPath."seeds/*.php") as $value) {
				  	$r=explode('seeds/',$value);
				  	echo "<tr><td>".$r[1]."</td><td>".date("Y/m/d H:i:s",filemtime($value))."</td></tr>";
				  } ?>
				  
				</table>
			</div>
        </div>
        <div class="tab-pane" id="lang">
            <h1 style="margin-bottom:40px">Langues</h1>
            <div class="col-md-6" >
            	<div>
		            <h3>Nouveau dossier de lang</h3>
		            <form id="new_lang_dir" method="post" name="new_lang_dir">
		            	 <div class="form-group col-md-6">
						    <label for="">Nom de dossier</label>
						    <input type="text" class="form-control" id="" name="lang_dir_name" placeholder="Nom de dossier lang">
						  </div>
						<input type="submit" value="Créé" class="btn btn-primary" style="margin-top: 25px;">
					</form>
				</div>

				<div style="margin-top:30px">
		            <h3>Nouveau fichier de lang</h3>
		            <form id="new_lang_file" method="post" name="new_lang_file">
		            	<div class="form-group col-md-7" style="display:block">
						    <label for="">Nom de dossier</label>
						    <!--<input type="text" class="form-lang_dir_name_2" id="" name="lang_dir_name_2" placeholder="Nom de dossier lang">-->
						    <select class="form-control" id="sel1" name="lang_dir_name_2">
						    <?php 
						    //
						    $r=glob($appPath."lang/*");
						    foreach ($r as $dir) {
						    	$r2=explode('lang/', $dir);
						    	echo "<option value='".$r2[1]."'>".$r2[1]."</option>";
						    } ?>
					        </select>
						</div>
		            	<div class="form-group col-md-7" style="display:block">
						    <label for="">Nom de fichier</label>
						    <input type="text" class="form-control" id="lang_file_name" name="lang_file_name" placeholder="Nom de fichier">
						</div>
						<div class="col-md-7">
							<input type="submit" value="Créé" class="btn btn-primary" style="display:block">
						</div>
					</form>
				</div>
			</div>
        </div>
        <div class="tab-pane" id="config">
            <h1 style="margin-bottom:30px">Configuration</h1>
            <div class="col-md-6">
            	<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Connection de base de donnees</h3>
				  </div>
				  <div class="panel-body">
				    <div class="form-group col-md-8">
					    <label for="" class="col-md-6">Nom de database</label>
					    <input type="text" class="form-control col-md-6" id="" name="lang_dir_name" placeholder="Nom de dossier lang">
					</div>
				  </div>
				</div>
            	
			</div>
        </div>
        <div class="tab-pane" id="mvc">
            <h1>MVC</h1>
            <div class="panel panel-default">
			  <div class="panel-heading">
			    <h2 class="panel-title">Models</h2>
			  </div>
			  <div class="panel-body">
			    <div class="col-md-3">
			    	<h3>Nouveau model</h3>
			    	<form id="new_models" method="post" name="new_models">
		            	<div class="form-group">
						    <label for="">Nom de fichier</label>
						    <input type="text" class="form-control" id="new_models_file_name" name="new_models_file_name" placeholder="Nom de fichier">
						</div>
						<div class="form-group">
						    <label for="">Nom de class</label>
						    <input type="text" class="form-control" id="new_models_class_name" name="new_models_class_name" placeholder="Nom de class">
						</div>
						<div class="form-group">
						    <label for="">Nom de table dans BD</label>
						    <input type="text" class="form-control" id="new_models_table_name" name="new_models_table_name" placeholder="Nom de table dans BD">
						</div>
						<input type="submit" value="Créé" class="btn btn-primary" style="margin-top: 25px;">
					</form>
			    </div>
			    <div class="col-md-9">
			    	<table class="table table-hover">
					<tr class="info">
					  <th>Nom de fichiers</th>
					  <th>Nom de class</th>
					  <th>nom de table</th>
					  <th>Date de creation</th>
					</tr>
					  <?php foreach (glob($appPath."models/*.php") as $value) {
					  	$r=explode('models/',$value);
					  	echo "<tr><td>".$r[1]."</td><td></td><td></td><td>".date("Y/m/d H:i:s",filemtime($value))."</td></tr>";
					  } ?>
					  
					</table>
			    </div>
			  </div>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h2 class="panel-title">Views</h2>
			  </div>
			  <div class="panel-body">
			  	<div class="col-md-3">
				    <div class="form-group">
					    <h3>Nouveau view</h3>
					    <form id="new_view" method="post" name="new_view">
			            	<div class="form-group">
							    <label for="">Nom de fichier</label>
							    <input type="text" class="form-control" id="new_view_file_name" name="new_view_file_name" placeholder="Nom de fichier">
							</div>
							<div class="form-group">
							    <label for="">Nom de class</label>
							    <input type="text" class="form-control" id="new_view_class_name" name="new_view_class_name" placeholder="Nom de class">
							</div>
							<input type="submit" value="Créé" class="btn btn-primary" style="margin-top: 25px;">
						</form>
					</div>
				</div>
				<div class="col-md-9">
					<table class="table table-hover">
					<tr class="info">
					  <th>Nom de fichiers</th>
					  <th>Nom de class</th>
					  <th>Date de creation</th>
					</tr>
					  <?php foreach (glob($appPath."views/*.php") as $value) {
					  	$r=explode('views/',$value);
					  	echo "<tr><td>".$r[1]."</td><td></td><td>".date("Y/m/d H:i:s",filemtime($value))."</td></tr>";
					  } ?>
					  
					</table>
				</div>
			  </div>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h2 class="panel-title">Controles</h2>
			  </div>
			  <div class="panel-body">
			    <div class="col-md-3">
				    <div class="form-group">
					    <h3>Nouveau controller</h3>
					    <form id="new_controller" method="post" name="new_controller">
			            	<div class="form-group">
							    <label for="">Nom de fichier</label>
							    <input type="text" class="form-control" id="new_controller_file_name" name="new_controller_file_name" placeholder="Nom de fichier">
							</div>
							<div class="form-group">
							    <label for="">Nom de class</label>
							    <input type="text" class="form-control" id="new_controller_class_name" name="new_controller_class_name" placeholder="Nom de class">
							</div>
							<input type="submit" value="Créé" class="btn btn-primary" style="margin-top: 25px;">
						</form>
				    </div>
				</div>
				<div class="col-md-9">
					<table class="table table-hover">
					<tr class="info">
					  <th>Nom de fichiers</th>
					  <th>Nom de class</th>
					  <th>Date de creation</th>
					</tr>
					  <?php foreach (glob($appPath."controllers/*.php") as $value) {
					  	$r=explode('controllers/',$value);
					  	echo "<tr><td>".$r[1]."</td><td></td><td>".date("Y/m/d H:i:s",filemtime($value))."</td></tr>";
					  } ?>
					  
					</table>
				</div>
			  </div>
			</div>
            
        </div>
        <div class="tab-pane" id="blue">
            <h1>Blue</h1>
            <p>blue blue blue blue blue</p>
        </div>
    </div>
</div>

<script type="text/javascript">
	var panelFolder="<?php echo Config::get('panel.folder'); ?>";
</script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>    
</div> <!-- container -->
<div class="footer navbar-fixed-bottom" style="background:<?php echo Config::get('panel.mainColor') ?>">
   <center><p style="color:white;padding-top: 5px;">Youssef Had (c) 2014</p></center>
 </div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php } ?>


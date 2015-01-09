<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">	
<?php 


	foreach ($users->all() as  $user) 
	{
		?>
		<div>
			<h1><?php echo $user->nom; ?></h1>
			<p><?php echo $user->mail; ?></p>
		</div>
		<?php
	}

	$users->links(5,true);

 ?>
</div>
</body>
</html>
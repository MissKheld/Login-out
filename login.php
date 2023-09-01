<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> CRUD </title>
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>

<body>
	<div id="container">
		<!--zone de connexion-->
		<form action = "verification.php" method="POST">
			<h1>Connexion</h1>

			<label><b>Nom d'utilisateur</b></label>
			<input type="text" placeholder="Entrer le mot de passe" name="username" required>
			
			<br/>

			<label><b>Mot de passe</b></label>
			<input type="password" placeholder="Entrer le mot de passe" name="password" required>

			<input type="submit" id="submit" value="LOGIN">

			<?php 
				if(isset($_GET['erreur'])) {
				$err = $_GET['erreur']; 
				if($err==1 || $err==2)
				echo "<p style='color:red'> utilisateur ou mot de passe inconrrect </p>";
				}
			?>
		</form>
	</div>
</body>
</html>
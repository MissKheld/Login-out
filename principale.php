<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" media="screen" type="text/css" />

</head>

<body style="enable-background: white;">
	<div id="content">

	<! -- tester si l'utilisateur est connecté -->

	<?php 
	session_start();
	if($_SESSION['username'] !== ""){
		$user = $_SESSION['username'];
		// afficher un message
	echo "bonjour $user, vous êtes connecté";
	}
	?>
	</div>
</body>
</html>
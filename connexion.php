<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>webcourses</title>
	<link rel="stylesheet" type="text/css" href="title.css">
	<link rel="stylesheet" type="text/css" href="connexion.css">
	<link rel="stylesheet" type="text/css" href="cookie.css">
</head>
<body>
	<h1 id="title"><u><i><b>Site Webcourses</b></i></u></h1>

	<!-- appel pour le menu du site -->
	<?php echo include("menu.php"); ?>

	<?php echo include("utilisateur.php"); ?>
	<br></br>
	<?php echo include("membre.php"); ?>
	<p>Vous n'avez pas de compte? <a href="first_connexion.php">créer un compte!</a></p>

	<!-- appel des coockies-->
	<?php echo include("coockie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php echo include("pied_de_page.php"); ?>

<script type="text/javascript" src="cookie.js"></script>
<script type="text/javascript" src="connexion.js"></script>
</body>
</html>
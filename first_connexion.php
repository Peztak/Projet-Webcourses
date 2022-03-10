<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>webcourses</title>
	<link rel="stylesheet" type="text/css" href="title.css">
	<link rel="stylesheet" type="text/css" href="first_connexion.css">
	<link rel="stylesheet" type="text/css" href="cookie.css">
</head>
<body>
	<h1 id="title"><u><i><b>Site Webcourses</b></i></u></h1>

	<!-- appel pour le menu du site -->
	<?php echo include("menu.php"); ?>

	<?php echo include("first_utilisateur.php"); ?>
	<br></br>
	<?php echo include("first_membre.php"); ?>

	<!-- appel des coockies-->
	<?php echo include("coockie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php echo include("pied_de_page.php"); ?>

<script type="text/javascript" src="cookie.js"></script>
<script type="text/javascript" src="first_connexion.js"></script>
</body>
</html>
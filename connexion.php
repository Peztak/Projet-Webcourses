<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>webcourses</title>
	<link rel="stylesheet" type="text/css" href="./ressources/css/style.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/title.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/header.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/connexion.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/cookie.css">
</head>
<body>
<header>
	<div class="contenant">
		<img src="./ressources/images/bannière.jpg">
		<div class="texte"><u><b><i>Se connecter</i></b></u></div>
	</div>
</header>

	<!-- appel pour le menu du site -->
	<?php include("./ressources/menu.php"); ?>

	<?php include("./ressources/utilisateur.php"); ?>
	<br></br>
	<?php include("./ressources/membre.php"); ?>
	<p>Vous n'avez pas de compte? <a href="first_connexion.php">créer un compte!</a></p>

	<!-- appel des coockies-->
	<?php include("./ressources/cookie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php include("./ressources/pied_de_page.php"); ?>

<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
<script type="text/javascript" src="./ressources/javascript/connexion.js"></script>
</body>
</html>
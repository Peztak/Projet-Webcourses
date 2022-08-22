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
	<br/>
	<br/>
	<!-- appel pour le slider de la connexion -->
	<?php include("./ressources/slider_2.php"); ?>
<h1><u><b>Connexion à votre profil</b></u></h1>
<div id="corps">
	<p>Afin de vous d'acceder à votre compte et aux fonctionnalités de notre site, Veuillez choisir le format avec lequel vous vous êtes inscrit.
	<br/>
	Pour chaque format d'inscription, vous devez entrer les informations saisies lors de la création de votre compte.
	</p>
</div>
<br/>
<br/>
	<?php include("./ressources/utilisateur.php"); ?>
	<br/>
	<br/>
	<?php include("./ressources/membre.php"); ?>
<div id="corps">
	<p>Vous n'avez pas de compte? <a href="first_connexion.php">créer le votre dès maintenant!</a></p>
</div>
<br/>
<br/>
	<!-- appel des coockies-->
	<?php include("./ressources/cookie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php include("./ressources/pied_de_page.php"); ?>

<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
<script type="text/javascript" src="./ressources/javascript/connexion.js"></script>
</body>
</html>
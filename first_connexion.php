<DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<title>webcourses</title>
	<link rel="stylesheet" type="text/css" href="./ressources/css/style.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/title.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/header.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/first_connexion.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/cookie.css">
</head>
<body>

<header>
	<div class="contenant">
		<img src="./ressources/images/bannière.jpg">
		<div class="texte"><u><b><i>Création de Compte</i></b></u></div>
	</div>
</header>
	<!-- appel pour le menu du site -->
	<?php include("./ressources/menu.php"); ?>
<h1><u><b>Créer son propre compte</b></u></h1>
<div id="corps">
	<p>Pour créer votre compte vous avez le choix entre utilisateur et membre.
	<br/>
	Les deux formats vous offre les mêmes avantages, le format membre est juste là si vous êtes déjà inscrits dans un de <a href="info_club.php">nos clubs partenaires</a> mais ne possédez pas de compte sur notre site.
	<br/>
	ATTENTION! Notre site propose la création de comptes utilisateurs ou membres au mineurs, cependant un accord parental vous sera demandé après avoir créer le compte pour ces derniers.
	</p>
</div>
<br/>
<br/>
	<?php include("./ressources/first_utilisateur.php"); ?>
	<br/>
	<?php include("./ressources/first_membre.php"); ?>
<br/>
<br/>

	<!-- appel des coockies-->
	<?php include("./ressources/cookie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php include("./ressources/pied_de_page.php"); ?>

<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
<script type="text/javascript" src="./ressources/javascript/first_connexion.js"></script>
</body>
</html>
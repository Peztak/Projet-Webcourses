<DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./ressources/css/style.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/title.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/header.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/cookie.css">
	<title>webcourses</title>
</head>
<body>
<header>
	<div class="contenant">
		<img src="./ressources/images/bannière.jpg">
		<div class="texte"><u><b><i>Le site des courses pour amateurs et professionnels</i></b></u></div>
	</div>
</header>
	<!-- appel pour le menu du site -->
	<?php include("./ressources/menu.php"); ?>
	<br/>
	<br/>
	<!-- appel pour le slider de l'accueil -->
	<?php include("./ressources/slider.php"); ?>
	<h1><b><u>Bienvenue sur le site de l'association sportive Webcourses!</u></b></h1>
	<div id="corps">
		<p>Ce site est dédié aux sportifs amateurs et professionnels
		qui souhaitent participer à différents événements au niveau national.
		<br/>
		Pour voir ces évènements, la page "Calendrier évènements" vous présentera les courses en fonction des régions.
		<br/>
		Vous y trouverez également des informations concernant la date et le lieu de ces courses.
		<br/>
		La page "Clubs partenaires" vous présentera les clubs avec lesquelles nous travaillons, ainsi que des informations respectives (nombre d'adhérents, classement, lieu, etc...).
		<br/>
		Si vous souhaitez participer aux évènements, la création d'un compte est nécessaire.
		<br/>
		Cependant, si vous êtes membres d'un des clubs partenaires de notre association, vous pouvez saisir vos informations membres et participer aux courses proposées.
		<br/>
		ATTENTION! notre site accepte la création de compte pour les mineurs, cependant un accord parental sera demandé.
		<br/>
		Un fois votre compte créé, vous pouvez accéder à votre espace personnel avec recapitulatif des vos courses effectués, statistiques, classements, etc...
		<br/>
		Pour nous envoyez un message, la page "Nous-Contactez" est à votre disposition ou alors vous pouvez utiliser d'autre moyens communiqués dans la page "À propos".
		<br/>
		<p id="fin">Bonne visite à tous et à toutes!</p></p>
	</div>

	<!-- appel des cookies-->
	<?php include("./ressources/cookie.php"); ?>
	<br/>
	<br/>
	<!-- pied de page du site (footer)-->
	<?php include("./ressources/pied_de_page.php"); ?>
	<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
</body>
</html>
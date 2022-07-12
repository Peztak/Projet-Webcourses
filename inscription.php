<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./ressources/css/style.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/header.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/inscription.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/cookie.css">
	<title>webcourses</title>
</head>
<body>
<header>
	<div class="contenant">
		<img src="./ressources/images/bannière.jpg">
		<div class="texte"><u><b><i>S'incrire au sein de l'association</i></b></u></div>
	</div>
</header>

	<!-- appel pour le menu du site -->
	<?php include("./ressources/menu.php"); ?>

	<br />
	<h2><b><u>CONFIRMATION DE VOTRE INSCRIPTION</u></b></h2>
	<br />
	<p>Merci de votre inscription, votre n° est le ID.
		<br />
		<u>Veuillez trouver votre récapitulatif ci-joint:</u>
		<ul>
			<li>Date d'inscription</li>
			<li>Nom / Prénom</li>
			<li>Date de naissance</li>
			<li>Sexe</li>
			<li>Catégorie d'âge choisie</li>
			<li>Epreuve choisie</li>
			<li>Date et heure de l'épreuve</li>
			<li>Nom du type de l'épreuve</li>
			<li>Distance de l'épreuve</li>
			<li>Taille du maillot choisi</li>
			<li>Temps annoncé pour la course</li>
			<li>N° du dossard affecté</li>
		</ul>
		<br />
		<u>Pièces à fournir le jour de l'épreuve:</u>
		<ul>
			<li>Votre carte de licencier</li>
			<li>Le N° du dossard attribué</li>
			<li>Votre certificat médical à jour</li>
			<li>Un moyen de paiement (le montant de votre inscription sera à régler sur place le jour de l'épreuve</li>
		</ul>
	</p>
	<!-- appel des coockies-->
    <?php include("./ressources/cookie.php"); ?>

<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
</body>
</html>
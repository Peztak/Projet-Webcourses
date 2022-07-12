<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./ressources/css/style.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/title.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/header.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/table.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/cookie.css">
	<title>webcourses</title>
</head>
<body>
<header>
	<div class="contenant">
		<img src="./ressources/images/bannière.jpg">
		<div class="texte"><u><b><i>Votre Compte</i></b></u></div>
	</div>
</header>

	<!-- appel pour le menu du site -->
	<?php include("./ressources/menu.php"); ?>

	<br />
	<h2><u><b>Visuel de votre compte.</b></u></h2>
	<br />
	<p>Bonjour Nom, Prénom, vous êtes membre de l'association Nom de l'association.
		<br />
		Içi vous pouvez visualiser les courses auxquelles vous êtes incrits ainsi que votre classement respectif.
	</p>
	<table>
		<tr>
			<th><b>Tableau de vos courses auxquelles vous participé.</b></th>
		</tr>
		<tr>
			<th><b>Nom Prénom</b></th>
			<th><b>Date</b></th>
			<th><b>Catégorie d'épreuve</b></th>
			<th><b>Type d'épreuve</b></th>
			<th><b>Temps réalisé</b></th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<br />
	<table>
		<tr>
			<th><b>Tableau de votre classement</b></th>
		</tr>
		<tr>
			<th><b>Année</b></th>
			<th><b>Rang</b></th>
			<th><b>Points Obtenus</b></th>
			<th><b>Nombre de Victoire (en %)</b></th>
			<th><b>Nombre de Défaite (en %)</b></th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	
	<!-- appel des coockies-->
	<?php include("./ressources/cookie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php include("./ressources/pied_de_page.php"); ?>

<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
</body>
</html>
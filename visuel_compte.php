<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="compte.css">
	<title>webcourses</title>
</head>
<body>
	<h1 id="title"><u><i><b>Site Webcourses</b></i></u></h1>

	<!-- appel pour le menu du site -->
	<?php echo include("menu.php"); ?>

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
</body>
</html>
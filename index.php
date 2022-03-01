<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="title.css">
		<title>webcourses</title>
	</head>
	<body>
		<h1 id="title"><u><i><b>Le site des courses pour amateurs et professionnels</b></i></u></h1>
		
		<!-- appel pour entête du site -->
		<?php echo include("entete.php"); ?>

		<!-- appel pour le menu du site -->
		<?php echo include("menu.php"); ?>

		<!-- appel pour le menu du site -->
		<?php echo include("slider.php"); ?>

		<div id="corps">
			<p>Ce site est dédié aux coureurs amateurs et professionnels
			cherchant à participer à différentes courses au niveau national.
			<br />
			Pour vous aidez, un calendrier évènementiel présentant les courses par 
			régions, dates et lieux est à votre disposition.
			<br />
			Des informations par club vous sont présentés (nombre d’adhérents, classement)
			Dans votre espace personnel, vous trouverez le bulletin d’inscription pour la 
			participation à un évènement, vos statistiques de courses, vos classements.
			<br />
			Pour nous contacter, vous pouvez utiliser l’onglet contact ou bien nous 
			joindre par email à evenementiel_sio@sitewebdescourses.fr
			</p>
		</div>
		<!-- pied de page du site (footer)-->
		<?php echo include("pied_de_page.php"); ?>
	</body>
</html>
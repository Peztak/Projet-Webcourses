<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>webcourses</title>
	</head>

	<body>
		<h1><u><i><b>Le site des courses pour amateurs et professionnels</b></i></u></h1>
		
		<!-- appel pour entête du site -->
		<?php echo include("entete.php"); ?>

		<!-- appel pour le menu du site -->
		<?php echo include("menu.php"); ?>

		<div id="corps">

			<p>Ce site est dédié aux coureurs amateurs et professionnels
				\ncherchant à participer à différentes courses au niveau national.
				<br />
				\nPour vous aidez, un calendrier évènementiel présentant les courses par 
				\nrégions, dates et lieux est à votre disposition.
				\nDes informations par club vous sont présentés (nombre d’adhérents, classement)
				\nDans votre espace personnel, vous trouverez le bulletin d’inscription pour la 
				\nparticipation à un évènement, vos statistiques de courses, vos classements.
				<br />
				\nPour nous contacter, vous pouvez utiliser l’onglet contact ou bien nous 
				\njoindre par email à evenementiel_sio@sitewebdescourses.fr
			</p>
		</div>
		<!-- pied de page du site -->
		<?php echo include("pied_de_page.php"); ?>
	</body>
</html>
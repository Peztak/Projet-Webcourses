<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>webcourses</title>
	<link rel="stylesheet" type="text/css" href="title.css">
	<link rel="stylesheet" type="text/css" href="newsletter.css">
</head>
<body>
	<h1 id="title"><u><i><b>Site Webcourses</b></i></u></h1>

	<h2><b><u>Concernant Webcourses</u></b></h2>

	<!-- appel pour le menu du site -->
	<?php echo include("menu.php"); ?>

	<p>L'association Webcourses a pour mission de fournir des espaces et des services aux différentes associations sportives régionales et à d'autres structures hébergées</p>
	<!-- appel du bouton pour la newsletter -->
	<?php echo include("newsletter.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php echo include("pied_de_page.php"); ?>

<script type="text/javascript" src="newsletter.js"></script>
</body>
</html>
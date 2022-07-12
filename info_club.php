<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>webcourses</title>
	<link rel="stylesheet" type="text/css" href="./ressources/css/style.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/title.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/header.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/cookie.css">
</head>
<body>
<header>
	<div class="contenant">
		<img src="./ressources/images/bannière.jpg">
		<div class="texte"><u><b><i>Clubs partenaires</i></b></u></div>
	</div>
</header>
	
	<!-- appel pour le menu du site -->
	<?php include("./ressources/menu.php"); ?>

	<h2><b><u>Nos clubs partenaires:</u></b></h2>
	<ul>
		<li>La foulée bordelaise</li>
		<li>UA du Médoc</li>
		<li>La foulée Arcachon</li>
		<li>Les coureurs du bassin</li>
		<li>Les scientifiques du sport</li>
		<li>Les coureurs de la dune</li>
		<li>Les galopins de Guyane</li>
		<li>Les petits pas</li>
	</ul>

	<!-- appel des coockies-->
	<?php include("./ressources/cookie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php include("./ressources/pied_de_page.php"); ?>

<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
</body>
</html>
<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>webcourses</title>
	<link rel="stylesheet" type="text/css" href="./ressources/css/style.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/title.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/header.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/newsletter.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/cookie.css">
</head>
<body>
<header>
	<div class="contenant">
		<img src="./ressources/images/bannière.jpg">
		<div class="texte"><u><b><i>À propos de nous</i></b></u></div>
	</div>
</header>

	<!-- appel pour le menu du site -->
	<?php include("./ressources/menu.php"); ?>

	<h1><u><b>L'histoire de notre association</b></u></h1>
	<div id="corps">
		<p>Notre association fut créée en 1960, par deux frères, les frères CASTELLANOS, passionés de courses avec pour ambition de rassembler amateurs et professsionnels afin de faire partager les plaisir du sport au plus grand nombre.
		<br/>
		Au début, l'association profita d'une visibilité grâce à laquelle plusieurs centaines de membres étaient recensés.
		<br/>
		Puis, c'est en 2013 des suites d'un changement de nom (en Webcourses) que tout a commencé, avec la création de notre propre site web l'association a acquis une meilleure visibilité et notoriété qui permis de considérablement augmenté nos membres et le lancement d'un processus de partenariat avec d'autres clubs venant des quatre coins de la France.
		<br/>
		Aujourd'hui, notre association compte plus d'un millions de membres, dont dix milles professionnels répartis dans diverses catégories comme la courses à pied, le vélo, la natation, et parmis
		lesquels nous retrouvons des champions tel que ... qui participent toujours activement à nos événements et ouverts à de nouvelles rencontres.
		<br/>
		<p id="fin">Tel est l'histoire de notre association, rejoingnez-nous afin d'écrire la suite ensemble et dans la bonne humeur!</p></p>
	</div>

	<h2><u><b>Informations concernant l'association :</b></u></h2>
	<div id="corps">
		<p><u><b>Adresse :</b></u> 45 rue des mathurins, Paris, 75008
		<br/>
		<u><b>Adresse mail :</b></u> évènements@webcourses.fr
		<br/>
		<u><b>N° téléphone :</b></u> 01-45-45-45-13</p>
	</div>
	<br/>
	<div id="corps">
		<p>Notre site est équipé d'une newsletter!
		<br/>
		Renseigné votre adresse mail afin d'être informer sur les évènements futurs de l'association!</p>
	</div>
	<br/>
	<br/>
	<br/>
	<!-- appel du bouton pour la newsletter -->
	<?php include("./ressources/newsletter.php"); ?>

	<!-- appel des coockies-->
	<?php include("./ressources/cookie.php"); ?>
	<br/>
	<br/>
	<br/>
	<!-- pied de page du site (footer)-->
	<?php include("./ressources/pied_de_page.php"); ?>

<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
<script type="text/javascript" src="./ressources/javascript/newsletter.js"></script>
</body>
</html>
<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./ressources/css/style.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/title.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/header.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/contact.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/cookie.css">
	<link rel="stylesheet" type="text/css" href="./ressources/css/menu.css">
	<title>webcourses</title>
</head>
<body>
<header>
	<div class="contenant">
		<img src="./ressources/images/bannière.jpg">
		<div class="texte"><u><b><i>Nous contacter</i></b></u></div>
	</div>
</header>
	<!-- appel pour le menu du site -->
	<?php include("./ressources/menu.php"); ?>
	<br/>
	<div class="container">

    	<label for="fname"><b>Nom</b></label>
    	<input type="text" id="fname" name="firstname" placeholder="Entrer votre nom.">

    <label for="lname"><b>Prénom</b></label>
    <input type="text" id="lname" name="lastname" placeholder="Entrer votre prénom.">

    	<label for="country"><b>Sélectionnez votre Pays</b></label>
    	<select id="country" name="country">
      	<option value="france">France</option>
      	<option value="england">Angleterre</option>
      	<option value="usa">USA</option>
      	<option value="canada">Canada</option>
      	<option value="quebec">Quebec</option>
    	</select>

    	<label for="subject"><b>Sujet</b></label>
    	<textarea id="subject" name="subject" placeholder="Ecrivez votre message" style="height:200px"></textarea>

    	<input type="submit" value="Envoyez">
    	<br/>
    	<br/>
	</div>

	<!-- appel des coockies-->
	<?php include("./ressources/cookie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php include("./ressources/pied_de_page.php"); ?>

<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="title.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" type="text/css" href="cookie.css">
	<title>webcourses</title>
</head>
<body>
	<h1 id="title"><u><i><b>Site Webcourses</b></i></u></h1>

	<!-- appel pour le menu du site -->
	<?php echo include("menu.php"); ?>

	<div class="container">

    	<label for="fname">First Name</label>
    	<input type="text" id="fname" name="firstname" placeholder="Entrer votre nom.">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Entrer votre prénom.">

    	<label for="country">Pays</label>
    	<select id="country" name="country">
      	<option value="france">France</option>
      	<option value="england">Angleterre</option>
      	<option value="usa">USA</option>
      	<option value="canada">Canada</option>
      	<option value="quebec">Quebec</option>
    	</select>

    	<label for="subject">Sujet</label>
    	<textarea id="subject" name="subject" placeholder="Ecrivez votre problème." style="height:200px"></textarea>

    	<input type="submit" value="Envoyez">

      <a href="index.php">Cliquez içi pour revenir à la page d'acceuil</a>
	</div>

	<!-- appel des coockies-->
	<?php echo include("coockie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php echo include("pied_de_page.php"); ?>

<script type="text/javascript" src="cookie.js"></script>
</body>
</html>
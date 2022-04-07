<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="title.css">
	<link rel="stylesheet" type="text/css" href="table.css">
	<link rel="stylesheet" type="text/css" href="cookie.css">
	<title>webcourses</title>
</head>
<body>
	<h1 id="title"><u><i><b>Site Webcourses</b></i></u></h1>
	
	<!-- appel pour le menu du site -->
	<?php include("menu.php"); ?>

	<?php

	try
	{
		//connexion à la base de données
		$bdd = new pdo('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', 'root');
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		echo 'connexion réussie';
	}
	catch (Exception $e)
	{
		echo 'erreur';
		die('Erreur de connexion : ' . $e->getMessage());
	}
	echo '<h2><b><u>Partie Sélection</u></b></h2>
	<p>Içi vous pouvez sélectionner les informations présente dans chaque liste<br/>
		afin de vous aider à chercher l\'événement que vous souhaitez.<p> ';

	echo '<label for="championnat">Championnat: </label>
	<select id="championnat" name="championnat">';

	//lecture de toutes les données de la table championnat
	$reponse = $bdd->query("select * from championnat");

	//boucle while afin de lire toutes les données de la colonne ch_nom présentes dans la table championnat
	while($donnees = $reponse->fetch())
	{
		echo '<option>'.$donnees['ch_nom'].'</option>';
	}
	echo '</select>';

	echo '<br /><label for="manifestation">Manifestation: </label>
	<select id="manifestation" name="manifestation">';

	//lecture de toutes les données de la table manifestation
	$reponse = $bdd->query("select * from manifestation");

	//boucle while afin de lire toutes les données de la colonne ma_nom présentes dans la table manifestation
	while($donnees = $reponse->fetch())
	{
		echo '<option>'.$donnees['ma_nom'].'</option>';
	}
	echo '</select>';

	echo '<br /><label for="cat_epreuve">Catégorie d\'épreuve: </label>
	<select id="cat_epreuve" name="cat_epreuve">';

	//lecture de toutes les données de la table type_epreuve
	$reponse = $bdd->query("select * from type_epreuve");

	//boucle while afin de lire toutes les données de la colonne typep_nom présentes dans la table type_epreuve
	while($donnees = $reponse->fetch())
	{
		echo '<option>'.$donnees['typep_nom'].'</option>';
	}
	echo '</select>';

	echo '<br /><label for="epreuve">épreuve: </label>
	<select id="epreuve" name="epreuve">';

	//lecture de toutes les données de la table epreuve
	$reponse = $bdd->query("select * from epreuve");

	//boucle while afin de lire toutes les données de la colonne ep_nom présentes dans la table epreuve
	while($donnees = $reponse->fetch())
	{
		echo '<option>'.$donnees['ep_nom'].'</option>';
	}
	echo '</select>';

	echo '<br /><label for="parcours">Parcours : </label>
	<select id="parcours" name="parcours">';

	//lecture de toutes les données de la table parcours
	$reponse = $bdd->query("select * from parcours");

	//boucle while afin de lire toutes les données de la colonne pa_nom_parcours présentes dans la table parcours
	while($donnees = $reponse->fetch())
	{
		echo '<option>'.$donnees['pa_nom_parcours'].'</option>';
	}
	echo '</select>';

	echo '<br /><label for="cat_age">Catégorie d\'âge: </label>
	<select id="cat_age" name="cat_age">';

	//lecture de toutes les données de la table categorie
	$reponse = $bdd->query("select * from categorie");

	//boucle while afin de lire toutes les données de la colonne cat_nom_parcours présentes dans la table categorie
	while($donnees = $reponse->fetch())
	{
		echo '<option>'.$donnees['cat_nom'].'</option>';
	}
	echo '</select>';

	echo '<br /><label for="maillot">Taille du maillot: </label>
	<select id="maillot" name="maillot">';

	//lecture de toutes les données de la table maillot
	$reponse = $bdd->query("select * from maillot");

	//boucle while afin de lire toutes les données de la colonne taille_maillot présentes dans la table maillot
	while($donnees = $reponse->fetch())
	{
		echo '<option>'.$donnees['taille_maillot'].'</option>';
	}
	echo '</select>';

	echo '<br /><label for="temps">Temps annoncé pour votre course: </label>
	<select id="temps" name="temps">';

	//lecture de toutes les données de la table temps
	$reponse = $bdd->query("select * from temps");

	//boucle while afin de lire toutes les données de la colonne t_annonce présentes dans la table temps
	while($donnees = $reponse->fetch())
	{
		echo '<option>'.$donnees['t_annonce'].'</option>';
	}
	echo '</select>';

	$reponse->closeCursor();
?>
	<br />
	<p><u>Présence du certificat médical:</u></p>
	<input type="radio" name="certificat" value="oui" id="oui" checkek="checkek"/>
	<label for="oui">Oui</label>
	<input type="radio" name="certificat" value="non" id="non" checkek="checkek"/>
	<label for="non">Non</label>
	<br />
	<h2><b><u>Notre calendrier événementiel</u></b></h2>
	<table>
		<tr>
			<th>Date</th>
			<th>Lieu</th>
			<th>N° Parcours</th>
			<th>Distance du parcours</th>
			<th>Montant de l'inscription</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
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
	<button><a href="inscription.php">S'inscrire</a></button>

	<!-- appel des coockies-->
	<?php include("cookie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php include("pied_de_page.php"); ?>

	<script type="text/javascript" src="cookie.js"></script>
</body>
</html>
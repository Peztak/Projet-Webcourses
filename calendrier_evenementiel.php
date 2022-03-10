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
	<?php echo include("menu.php"); ?>

	<h2><b><u>Partie Sélection</u></b></h2>
	<p>Içi vous pouvez sélectionner les informations présente dans chaque liste<br/>
		afin de vous aider à chercher l'événement que vous souhaitez.<p>
	<label for="championnat">Championnat: </label>
	<select id="championnat" name="championnat">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>
	<br/>
	<label for="manifestation">Manifestation: </label>
	<select id="manifestation" name="manifestation">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>
	<br/>
	<label for="cat_epreuve">Catégorie d'épreuve: </label>
	<select id="cat_epreuve" name="cat_epreuve">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>
	<br/>
	<label for="epreuve">épreuve: </label>
	<select id="epreuve" name="epreuve">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>
	<br/>
	<label for="parcours">Parcours : </label>
	<select id="parcours" name="parcours">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>
	<br/>
	<label for="cat_age">Catégorie d'âge: </label>
	<select id="cat_age" name="cat_age">
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>
	<br/>
	<label for="maillot">Taille du maillot: </label>
	<select id="maillot" name="maillot">
		<option>XS</option>
		<option>S</option>
		<option>M</option>
		<option>L</option>
		<option>XL</option>
		<option>2XL</option>
		<option>3XL</option>
	</select>
	<br />
	<label for="temps">Temps annoncé pour votre course: </label>
	<select id="temps" name="temps">
		<option>20 minutes</option>
		<option>30 minutes</option>
		<option>40 minutes</option>
		<option>50 minutes</option>
		<option>1 heure</option>
		<option>1 heure 15 minutes</option>
		<option>1 heure 30 minutes</option>
		<option>1 heure 45 minutes</option>
		<option>2 heures</option>
	</select>
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
	<?php echo include("cookie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php echo include("pied_de_page.php"); ?>

	<script type="text/javascript" src="cookie.js"></script>
</body>
</html>
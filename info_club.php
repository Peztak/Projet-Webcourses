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
	
	<?php

	try
	{
		//connexion à la base de données
		$bdd = new pdo('mysql:host=localhost;dbname=webcourses;charset=utf8', 'root', 'root');
		array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	}
	catch (Exception $e)
	{
		die('Erreur de connexion : ' . $e->getMessage());
	}
	echo '<h1><b><u>Nos clubs partenaires:</u></b></h2>
	<br/>
	<br/>';

	echo '<div class="ligne">
		<div class="colonne">
			<div class="carte">
				<img src="./ressources/images/asso1.jpg">
				<div class="boite">';

					$reponse = $bdd->query("select * from club where cl_id=1");

					while ($donnees = $reponse->fetch())
					{
						echo'<h2>'.$donnees['cl_nom'].'</h2>';
					}

					$reponse = $bdd->query("select * from club where cl_id=1");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Adresse :</u> '.$donnees['cl_adresse'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=1");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>N° téléphone :</u> '.$donnees['cl_numtel'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=1");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Mail :</u> '.$donnees['cl_email'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=1");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Total membre :</u> '.$donnees['cl_membre'].'</p>';
					}

					echo '<p id="classement">Classement du club :</p>
					<table>
						<tr>
							<th>Année</th>
							<th>Position</th>
						</tr>
						<tr>
							<td>2016</td>
							<td>5ème</td>
						</tr>
						<tr>
							<td>2017</td>
							<td>9ème</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>2ème</td>
						</tr>
						<tr>
							<td>2019</td>
							<td>1er</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>10ème</td>
						</tr>
						<tr>
							<td>2021</td>
							<td>3ème</td>
						</tr>
						<tr>
							<td>2022</td>
							<td>2ème</td>
						</tr>
					</table>
					<p><a href="https://foulees.com/-bordeaux-"><button class="button">Visiter le site</button></a></p>
				</div>
			</div>
		</div>';

		echo'<div class="colonne">
			<div class="carte">
				<img src="./ressources/images/asso2.png">
				<div class="boite">';
					
					$reponse = $bdd->query("select * from club where cl_id=2");

					while ($donnees = $reponse->fetch())
					{
						echo'<h2>'.$donnees['cl_nom'].'</h2>';
					}

					$reponse = $bdd->query("select * from club where cl_id=2");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Adresse :</u> '.$donnees['cl_adresse'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=2");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>N° téléphone :</u> '.$donnees['cl_numtel'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=2");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Mail :</u> '.$donnees['cl_email'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=2");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Total membre :</u> '.$donnees['cl_membre'].'</p>';
					}
					echo '<p id="classement">Classement du club :</p>
					<table>
						<tr>
							<th>Année</th>
							<th>Position</th>
						</tr>
						<tr>
							<td>2016</td>
							<td>10ème</td>
						</tr>
						<tr>
							<td>2017</td>
							<td>15ème</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>1er</td>
						</tr>
						<tr>
							<td>2019</td>
							<td>2ème</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>4ème</td>
						</tr>
						<tr>
							<td>2021</td>
							<td>2ème</td>
						</tr>
						<tr>
							<td>2022</td>
							<td>5ème</td>
						</tr>
					</table>
					<p><a href="https://www.assam-omnisports.org/"><button class="button">Visiter le site</button></a></p>
				</div>
			</div>
		</div>';

		echo '<div class="colonne">
			<div class="carte">
				<img src="./ressources/images/asso3.png">
				<div class="boite">';
					
					$reponse = $bdd->query("select * from club where cl_id=3");

					while ($donnees = $reponse->fetch())
					{
						echo'<h2>'.$donnees['cl_nom'].'</h2>';
					}

					$reponse = $bdd->query("select * from club where cl_id=3");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Adresse :</u> '.$donnees['cl_adresse'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=3");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>N° téléphone :</u> '.$donnees['cl_numtel'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=3");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Mail :</u> '.$donnees['cl_email'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=3");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Total membre :</u> '.$donnees['cl_membre'].'</p>';
					}

					echo '<p id="classement">Classement du club :</p>
					<table>
						<tr>
							<th>Année</th>
							<th>Position</th>
						</tr>
						<tr>
							<td>2016</td>
							<td>2ème</td>
						</tr>
						<tr>
							<td>2017</td>
							<td>10ème</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>4ème</td>
						</tr>
						<tr>
							<td>2019</td>
							<td>4ème</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>3ème</td>
						</tr>
						<tr>
							<td>2021</td>
							<td>6ème</td>
						</tr>
						<tr>
							<td>2022</td>
							<td>7ème</td>
						</tr>
					</table>
					<p><a href="https://www.aviron-arcachonnais.fr/page/1358402-presentation"><button class="button">Visiter le site</button></a></p>
				</div>
			</div>
		</div>
	</div>
	<br/>';

	echo '<div class="ligne">
		<div class="colonne">
			<div class="carte">
				<img src="https://static.wixstatic.com/media/81e577_4aadb210853c46e0926d20e1bafe5d3b~mv2.png/v1/fill/w_486,h_486,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Logo-ArmoForme-RVB.png">
				<div class="boite">';
					
					$reponse = $bdd->query("select * from club where cl_id=4");

					while ($donnees = $reponse->fetch())
					{
						echo'<h2>'.$donnees['cl_nom'].'</h2>';
					}

					$reponse = $bdd->query("select * from club where cl_id=4");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Adresse :</u> '.$donnees['cl_adresse'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=4");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>N° téléphone :</u> '.$donnees['cl_numtel'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=4");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Mail :</u> '.$donnees['cl_email'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=4");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Total membre :</u> '.$donnees['cl_membre'].'</p>';
					}

					echo '<p id="classement">Classement du club :</p>
					<table>
						<tr>
							<th>Année</th>
							<th>Position</th>
						</tr>
						<tr>
							<td>2016</td>
							<td>13ème</td>
						</tr>
						<tr>
							<td>2017</td>
							<td>1er</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>3ème</td>
						</tr>
						<tr>
							<td>2019</td>
							<td>5ème</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>2ème</td>
						</tr>
						<tr>
							<td>2021</td>
							<td>8ème</td>
						</tr>
						<tr>
							<td>2022</td>
							<td>12ème</td>
						</tr>
					</table>
					<p><a href="https://www.armo-sports.fr/"><button class="button">Visiter le site</button></a></p>
				</div>
			</div>
		</div>';

		echo '<div class="colonne">
			<div class="carte">
				<img src="./ressources/images/asso5.png">
				<div class="boite">';
					
					$reponse = $bdd->query("select * from club where cl_id=5");

					while ($donnees = $reponse->fetch())
					{
						echo'<h2>'.$donnees['cl_nom'].'</h2>';
					}

					$reponse = $bdd->query("select * from club where cl_id=5");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Adresse :</u> '.$donnees['cl_adresse'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=5");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>N° téléphone :</u> '.$donnees['cl_numtel'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=5");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Mail :</u> '.$donnees['cl_email'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=5");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Total membre :</u> '.$donnees['cl_membre'].'</p>';
					}

					echo '<p id="classement">Classement du club :</p>
					<table>
						<tr>
							<th>Année</th>
							<th>Position</th>
						</tr>
						<tr>
							<td>2016</td>
							<td>4ème</td>
						</tr>
						<tr>
							<td>2017</td>
							<td>2ème</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>8ème</td>
						</tr>
						<tr>
							<td>2019</td>
							<td>3ème</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>5ème</td>
						</tr>
						<tr>
							<td>2021</td>
							<td>16ème</td>
						</tr>
						<tr>
							<td>2022</td>
							<td>8ème</td>
						</tr>
					</table>
					<p><a href="https://lillemetropole.asptt.com/les-activites/"><button class="button">Visiter le site</button></a></p>
				</div>
			</div>
		</div>';

		echo '<div class="colonne">
			<div class="carte">
				<img src="./ressources/images/asso6.png">
				<div class="boite">';
					
					$reponse = $bdd->query("select * from club where cl_id=6");

					while ($donnees = $reponse->fetch())
					{
						echo'<h2>'.$donnees['cl_nom'].'</h2>';
					}

					$reponse = $bdd->query("select * from club where cl_id=6");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Adresse :</u> '.$donnees['cl_adresse'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=6");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>N° téléphone :</u> '.$donnees['cl_numtel'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=6");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Mail :</u> '.$donnees['cl_email'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=6");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Total membre :</u> '.$donnees['cl_membre'].'</p>';
					}

					echo '<p id="classement">Classement du club :</p>
					<table>
						<tr>
							<th>Année</th>
							<th>Position</th>
						</tr>
						<tr>
							<td>2016</td>
							<td>8ème</td>
						</tr>
						<tr>
							<td>2017</td>
							<td>4ème</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>5ème</td>
						</tr>
						<tr>
							<td>2019</td>
							<td>6ème</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>9ème</td>
						</tr>
						<tr>
							<td>2021</td>
							<td>12ème</td>
						</tr>
						<tr>
							<td>2022</td>
							<td>6ème</td>
						</tr>
					</table>
					<p><a href="https://www.saint-bruno.org/"><button class="button">Visiter le site</button></a></p>
				</div>
			</div>
		</div>
	</div>
	<br/>';
	
	echo '<div class="ligne">
		<div class="colonne">
			<div class="carte">
				<img src="./ressources/images/asso1.jpg">
				<div class="boite">';
					
					$reponse = $bdd->query("select * from club where cl_id=7");

					while ($donnees = $reponse->fetch())
					{
						echo'<h2>'.$donnees['cl_nom'].'</h2>';
					}

					$reponse = $bdd->query("select * from club where cl_id=7");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Adresse :</u> '.$donnees['cl_adresse'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=7");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>N° téléphone :</u> '.$donnees['cl_numtel'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=7");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Mail :</u> '.$donnees['cl_email'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=7");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Total membre :</u> '.$donnees['cl_membre'].'</p>';
					}

					echo '<p id="classement">Classement du club :</p>
					<table>
						<tr>
							<th>Année</th>
							<th>Position</th>
						</tr>
						<tr>
							<td>2016</td>
							<td>3ème</td>
						</tr>
						<tr>
							<td>2017</td>
							<td>7ème</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>10ème</td>
						</tr>
						<tr>
							<td>2019</td>
							<td>7ème</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>8ème</td>
						</tr>
						<tr>
							<td>2021</td>
							<td>4ème</td>
						</tr>
						<tr>
							<td>2022</td>
							<td>5ème</td>
						</tr>
					</table>
					<p><a href="https://foulees.com/-bordeaux-"><button class="button">Visiter le site</button></a></p>
				</div>
			</div>
		</div>';

		echo '<div class="colonne">
			<div class="carte">
				<img src="https://spartaklillois59.files.wordpress.com/2013/12/spartak-logo.jpg?w=300&h=300">
				<div class="boite">';
					
					$reponse = $bdd->query("select * from club where cl_id=8");

					while ($donnees = $reponse->fetch())
					{
						echo'<h2>'.$donnees['cl_nom'].'</h2>';
					}

					$reponse = $bdd->query("select * from club where cl_id=8");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Adresse :</u> '.$donnees['cl_adresse'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=8");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>N° téléphone :</u> '.$donnees['cl_numtel'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=8");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Mail :</u> '.$donnees['cl_email'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=8");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Total membre :</u> '.$donnees['cl_membre'].'</p>';
					}

					echo '<p id="classement">Classement du club :</p>
					<table>
						<tr>
							<th>Année</th>
							<th>Position</th>
						</tr>
						<tr>
							<td>2016</td>
							<td>7ème</td>
						</tr>
						<tr>
							<td>2017</td>
							<td>8ème</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>6ème</td>
						</tr>
						<tr>
							<td>2019</td>
							<td>11ème</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>5ème</td>
						</tr>
						<tr>
							<td>2021</td>
							<td>5ème</td>
						</tr>
						<tr>
							<td>2022</td>
							<td>1er</td>
						</tr>
					</table>
					<p><a href="https://spartaklillois.org/"><button class="button">Visiter le site</button></a></p>
				</div>
			</div>
		</div>';

		echo '<div class="colonne">
			<div class="carte">
				<img src="https://static.wixstatic.com/media/971c49_695bf0e4dc9a4dbcb436421d87dd1ead~mv2.png/v1/fill/w_256,h_220,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/971c49_695bf0e4dc9a4dbcb436421d87dd1ead~mv2.png">
				<div class="boite">';
					
					$reponse = $bdd->query("select * from club where cl_id=9");

					while ($donnees = $reponse->fetch())
					{
						echo'<h2>'.$donnees['cl_nom'].'</h2>';
					}

					$reponse = $bdd->query("select * from club where cl_id=9");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Adresse :</u> '.$donnees['cl_adresse'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=9");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>N° téléphone :</u> '.$donnees['cl_numtel'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=9");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Mail :</u> '.$donnees['cl_email'].'</p>';
					}

					$reponse = $bdd->query("select * from club where cl_id=9");
					while ($donnees = $reponse->fetch())
					{
						echo'<p><u>Total membre :</u> '.$donnees['cl_membre'].'</p>';
					}

					echo '<p id="classement">Classement du club :</p>
					<table>
						<tr>
							<th>Année</th>
							<th>Position</th>
						</tr>
						<tr>
							<td>2016</td>
							<td>1er</td>
						</tr>
						<tr>
							<td>2017</td>
							<td>11ème</td>
						</tr>
						<tr>
							<td>2018</td>
							<td>4ème</td>
						</tr>
						<tr>
							<td>2019</td>
							<td>8ème</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>1er</td>
						</tr>
						<tr>
							<td>2021</td>
							<td>1er</td>
						</tr>
						<tr>
							<td>2022</td>
							<td>3ème</td>
						</tr>
					</table>
					<p><a href="https://www.caprandeau.com/"><button class="button">Visiter le site</button></a></p>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<br/>';
	$reponse->closeCursor();
	?>
	<!-- appel des coockies-->
	<?php include("./ressources/cookie.php"); ?>

	<!-- pied de page du site (footer)-->
	<?php include("./ressources/pied_de_page.php"); ?>

<script type="text/javascript" src="./ressources/javascript/cookie.js"></script>
</body>
</html>
<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PSW = 'root';
$DATABASE_NAME = 'webcourses';
try {
  $conn = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USER, $DATABASE_PSW);
  // définir le mode exception d'erreur PDO 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO `utilisateur` ( `utilisateur_nom`, `utilisateur_prenom`, `utilisateur_mail`, `utilisateur_mdp`, `utilisateur_mdp_rep`)
VALUES( '$_POST[nom]','$_POST[prenom]','$_POST[email]','$_POST[psw]','$_POST[psw_repeat]')";
  // utiliser la fonction exec() car aucun résultat n'est renvoyé
  $conn->exec($sql);
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;

?>
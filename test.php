<?php
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$requete = $bdd->query('SELECT LENGTH(nom) AS longueur, console, prix FROM jeux_video WHERE console=$_GET["console"');

while($donnees = $requete->fetch())
{
	echo '<p>' . $donnees['console'] . ' - ' . $donnees['longueur'] . ' ('. $donnees['prix'] . '€)</p>';
}

?>
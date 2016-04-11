<?php
session_start();
include('connexion.php');
$pseudo = $_POST['pseudo'];
$_SESSION['pseudo'] = $pseudo;
$_SESSION['verif'] = false;
$mdp = $_POST['mdp'];
$sql = "select pseudoMembre, mdpMembre from membre where pseudoMembre = '".$pseudo."'";
$result = $monPdo->query($sql);
$ligne = $result->fetch();
if($ligne['mdpMembre'] == $mdp && $mdp != "")
{
	echo "Connexion réussi ! Bienvenu ". $pseudo.".";
	$_SESSION['verif'] = true;
	header("Location: index.php");
}
else
{
	echo "Connexion refusé.";
	header("Location: index.php");
}
?>
<?php
include('connexion.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$date = $_POST['dateNaiss'];
$sql= $monPdo->exec("insert into membre(pseudoMembre, mdpMembre, email, datenaiss) values('".$login."', '".$pass."', '" .$email."', '".$date."')");
echo "Bienvenu ". $login . "</br>Vous êtes maintenant incrit !</br><a href='index.php'>Retour Accueil</a>";
header("Location: index.php");
?>
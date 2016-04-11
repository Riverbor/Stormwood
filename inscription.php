<?php

if(isset($_SESSION['pseudo']) && $_SESSION['verif']==true)
{
	echo"Vous etes deja connecté ";
}

else
{
	

		?>
		<!doctype html>
		<html lang="fr">
		<head>
		<meta charset="utf-8">
		<title>Bienvenue sur Carabouille</title>
		<link rel="Stylesheet" type="text/css" href="style.css">
		</head>
		<body>
		<form method="post" action="traitementI.php">
		<label for="pseudo">Pseudo* : </label><input type="text" name="login" id="pseudo" required/><br />
		<label for="mdp">Mot de passe* : </label><input type="password" name="pass" id="mdp" required/><br />
		<label for="email">Email* : </label><input type="text" name="email" id="email" required/><br />
		<label for="dateNaiss">Date de naissance* :</label><input type="date" name="dateNaiss" id="dateNaiss" required/><br />
		<input type="submit" value="S'inscrire"></br><input type="reset" value="Reset">
		</form>
		</body>
		</html>
		<?php
}
		?>
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
	<form method="post" action="traitementC.php">
	<label for="pseudo">Pseudo :</label><input type="text" name="pseudo" id="pseudo" /><br />
	<label for="mdp">Mot de passe :</label><input type="text" name="mdp" id="mdp" /><br />
	<input type="submit" value="Connexion">
	</form>
	</body>
	</html>
	<?php
}


?>

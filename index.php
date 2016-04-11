<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Bienvenue sur Carabouille</title>
  <link rel="Stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="bandetop">
<a href="connect.php">Connexion</a><a href="inscription.php">S'inscrire</a>
</div>

<div id="conteneur">
	
	
	<div id="menu_horizontal">
		<ul>
			<li><a href="index.php" class="current">Accueil</a></li>
			<li><a href="index.php?par=1">Forum</a></li>
			<li><a href="index.php?par=2">Tournois</a></li>
			<li><a href="index.php?par=3">Classement</a></li>
			<li><a href="apilol.php">Test Api</a></li>
		</ul>
	</div>
	
	<div id="contenu">
	<?php
	if(isset($_GET['par']))
	{
		if($_GET['par'] == "1")
		{
			include('forum.php');
		}
	}

	if(isset($_GET['par']))
	{
		if($_GET['par'] == "2")
		{
			include('tournois.php');
		}
	}
	
	if(isset($_GET['par']))
	{
		if($_GET['par'] == "3")
		{
			include('classement.php');
		}
	}
	
	?>
	</div>

</div>

<div id="footer">
</div>

</body>
</html>
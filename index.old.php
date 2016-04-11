<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Bienvenue sur Carabouille</title>
  <link rel="Stylesheet" type="text/css" href="style.css">
</head>
<body>


<div id="entete">

	<h2>Tournois de League of Legend</h2>
	<?php if(isset($_SESSION['pseudo']) && $_SESSION['verif']==true){ ?>
	<span class="deco">Bonjour <?php echo $_SESSION['pseudo']."</br><a href='deconnexion.php'>Déconnexion</a>"; ?></span><?php } ?>
	<h3>Seras-tu à la hauteur ?</h3>

</div>
<fieldset id="bordure" border="1" align="center">




<div id="tabs25">

	<ul>
	<li><a href="index.php" class="current">Accueil</a></li>
	<li><a href="index.php?par=1">Forum</a></li>
	<li><a href="index.php?par=2">Tournois</a></li>
	<li><a href="index.php?par=3">Classement</a></li>
	<li><a href="index.php?par=4">Connexion</a></li>
	<li><a href="index.php?par=5">Inscription</a></li>
	</ul>

</div>



<div id="corp" align="center">
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
		include('apilol.php');
	}
}

if(isset($_GET['par']))
{
	if($_GET['par'] == "4")
	{
		include('connect.php');
	}
}

if(isset($_GET['par']))
{
	if($_GET['par'] == "5")
	{
		include('inscription.php');
	}
}
else
{
	echo "<p>Bienvenue sur StormWood</p><p>Ici vous pourrez vous inscrire à des tournois amateur de différents jeux sans pour autant être tres bon.</p><p>Et le tout dans une ambiance conviviale !!!</p>";
}


?>
</div>

<div id="pied" align="center">
<iframe width="500" height="300" src="https://www.youtube.com/embed/00n9eyjEklc" frameborder="0" allowfullscreen></iframe>
<p><?php include('ipman.php'); ?> </p>
</div>
</fieldset>
</body>
</html>
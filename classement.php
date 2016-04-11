<?php include('connexion.php');
if(isset($_SESSION['pseudo']))
{
	$sql = "select distinct pseudo, score from classement join membre on(pseudo = pseudoMembre) order by score";
	$result = $monPdo->query($sql); 
	?>
	<table border="1">
	<tr>
	<th>Pseudo</th><th>Score</th>
	</tr>
	<tr>
	<?php
	while($ligne = $result->fetch())
	{
		echo "<td>" . $ligne['pseudo'] . "</td><td>" . $ligne['score'] . "</td>";
	}
	if(empty($ligne))
	{
		echo "<p>Aucun classement n'a été effectué.</p>";
	}
	?>
	</tr>
	</table><?php
}

else
{
	echo "Vous devez être inscrit pour voir ce contenu.";
} ?>
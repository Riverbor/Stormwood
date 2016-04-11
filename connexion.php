<!DOCTYPE html>
 <meta charset="UTF-8" />
 
 
<?php

$hostnom='host=localhost';
$usernom='root';
$password='';

try
 {
	$monPdo = new PDO("mysql:$hostnom;dbname=carabouille;charset=utf8",$usernom,$password);
	//echo 'Connexion effectuée ' ;
 }
 
catch (PDOException $e)
 {
	echo $e->getMessage ();
 }
 
?>
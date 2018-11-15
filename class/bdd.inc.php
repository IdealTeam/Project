<?php
	header('Content-Type: text/html; charset=ISO-8859-1');

	ini_set( 'default_charset', 'ISO-8859-1' );

	$host="127.0.0.1";
	$dbname="viabahuet";
	$user="root";
	$pass="";
	try
	{
		$conn = new PDO (
			"mysql:host=$host;dbname=$dbname",
			"$user",
			"$pass"
		);
		$conn->exec('SET NAMES utf8');
	}
	catch (Exception $e)
	{
		die('erreur'.$e->getmessage());
		error_log("Echec connexion bdd ".date('D d M Y H:i:s')."\n", 3, "erreur.log");
	}

?>
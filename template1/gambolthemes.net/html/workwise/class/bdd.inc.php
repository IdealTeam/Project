<?php
	// header('Content-Type: text/html; charset=ISO-8859-1');

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

	// INCLUDES CLASSES

	include('class_adresse.php');
	include('class_categorie.php');
	include('class_commune.php');
	include('class_diplome.php');
	include('class_diplomer.php');
 	include('class_user.php');
	include('class_entreprise.php');
	include('class_utilisateur.php');
	include('class_offre.php');
	include('class_stage.php');
	include('class_suivre.php');
	include('class_login.php');

?>

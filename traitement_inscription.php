<?php
// echo "page traitement_inscription";
  include ('.\class\bdd.inc.php');
 	$nom = $_POST['nom'];
 	$prenom = $_POST['prenom']; // si utilisateur
 	$tel = $_POST['tel'];
 	$mail = $_POST['mail'];
 	$raisonS = $_POST['rs']; // si entreprise
 	$contactE = $_POST['ce']; // si entreprise
 	$id_conn = $_POST['id_conn'];
 	$pw1 = $_POST['pw1'];
 	$pw2 = $_POST['pw2'];

  if (isset($_GET['etudiant']))
  {

  }
  if (isset($_GET['entreprise']))
  {

  }



?>

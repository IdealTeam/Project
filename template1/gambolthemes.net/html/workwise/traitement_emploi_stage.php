<?php

session_start();

include('function.inc.php');

//Ajout d'un emploi
include ('.\class\bdd.inc.php');
$titre_offre = $_POST['titre_offre'];
$libelle_offre = $_POST['libelle_offre'];
$date_publication = $_POST['date_publication_offre'];
$date_debut_offre = convert_date_US($_POST['date_debut_offre']);
$id_user = $_SESSION['IDENTIFIANT'];

if (isset($_GET['emploi']))
{
  $offre = new offre('','','','','','','','','','','');
  $offre->ajout_emploi($libelle_offre,$date_publication,$date_debut_offre,$date_fin_offre,$id_user);
  var_dump($offre);
}

//Ajout d'un stage

if (isset($_GET['stage']))
{
  $date_fin_offre = convert_date_US($_POST['date_fin_offre']);
  $offre = new offre('','','','','','','','','','','');
  $offre->ajout_stage($libelle_offre,$date_publication,$date_debut_offre,$date_fin_offre,$commentaire_stage,$note_stage,$id_user);
  var_dump($offre);
}

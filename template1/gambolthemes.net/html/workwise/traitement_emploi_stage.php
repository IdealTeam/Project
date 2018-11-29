<?php

session_start();

include ('function.inc.php');
include ('.\class\bdd.inc.php');

//AJOUT EMPLOI

if (isset($_POST['envoi_emploi']))
{
  if (isset($_GET['emploi']))
  {
    $titre_offre = $_POST['titre_emploi'];
    $commune = $_POST['commune_emploi'];
    $libelle_offre = $_POST['libelle_offre_emploi'];
    $date_publication = $_POST['date_publication_offre_emploi']; //format US already
    $idu = $_SESSION['UTILISATEUR'];

    $date_debut_offre = convert_date_US($_POST['date_debut_offre_emploi']);
    $offre = new offre('','','','','','','','','','','');
    $offre->ajout_emploi($titre_offre,$libelle_offre,$date_publication,$date_debut_offre,$idu,$commune,$conn);
    header('Location:index-2.php');
  }
}

//AJOUT STAGE

if (isset($_GET['stage']) && isset($_POST['envoi_stage']))
{
  $titre_offre = $_POST['titre_stage'];
  $libelle_offre = $_POST['libelle_offre_stage'];
  $commune = $_POST['commune_stage'];
  $date_debut_offre = convert_date_US($_POST['date_debut_offre_stage']);
  $date_publication = $_POST['date_publication_stage'];
  $date_fin_offre = convert_date_US($_POST['date_fin_offre_stage']);
  $idu = $_SESSION['UTILISATEUR'];
  $offre = new stage('','','','','','','','','','','');

  $offre->ajout_stage($titre_offre,$libelle_offre,$date_publication,$date_debut_offre,$date_fin_offre,$idu,$commune,$conn);
  // var_dump($offre);
  header('Location:index-2.php');
}

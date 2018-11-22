<?php

session_start();

include ('function.inc.php');
include ('.\class\bdd.inc.php');

//AJOUT EMPLOI

$login = $_SESSION['IDENTIFIANT'];
$sql = "SELECT id_user,login_user FROM user WHERE login_user = '$login';";
$req = $conn->query($sql);
$data = $req->fetch();
// $user = new user ('','','','','','','','');
// $user_ = $user->affiche_user("SELECT id_user,login_user FROM user WHERE login_user = '$login';",1,$conn);
// // $id_user = $data['id_user'];
$_SESSION['UTILISATEUR'] = $data['id_user'];
$id_user = $_SESSION['UTILISATEUR'];

if (isset($_POST['envoi_emploi']))
{
  if (isset($_GET['emploi']))
  {
    $titre_offre = $_POST['titre_emploi'];
    $libelle_offre = $_POST['libelle_offre_emploi'];
    $date_publication = $_POST['date_publication_offre_emploi']; //format US already
    echo "date=",$date_publication;
    // die();

    $date_debut_offre = convert_date_US($_POST['date_debut_offre_emploi']);
    $offre = new offre('','','','','','','','','','','');
    $offre->ajout_emploi($titre_offre,$libelle_offre,$date_publication,$date_debut_offre,$id_user,$conn);
  }
}

//AJOUT STAGE

if (isset($_GET['stage']) && isset($_POST['envoi_stage']))
{
  $titre_offre = $_POST['titre_stage'];
  $libelle_offre = $_POST['libelle_offre_stage'];
  $date_debut_offre = $_POST['date_debut_offre_stage'];
  $date_publication = $_POST['date_publication_stage'];
  $date_fin_offre = convert_date_US($_POST['date_fin_offre_stage']);
  $offre = new stage('','','','','','','','','','','');
  $offre->ajout_stage($titre_offre,$libelle_offre,$date_publication,$date_debut_offre,$date_fin_offre,$id_user,$conn);
  var_dump($offre);
}

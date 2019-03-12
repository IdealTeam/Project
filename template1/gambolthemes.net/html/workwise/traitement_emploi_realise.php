<?php

session_start();

include ('function.inc.php');
include ('.\class\bdd.inc.php');

//AJOUT EMPLOI REALISE

  if (isset($_POST['envoi_emploi_realise']))
  {
    if (isset($_GET['emploi']))
    {
      $titre_offre = $_POST['titre_emploi'];
      $commune = $_POST['commune_emploi'];
      $libelle_offre = $_POST['libelle_offre_emploi'];
      $date_publication = $_POST['date_publication_offre_emploi']; //format US already
      $idu = $_SESSION['UTILISATEUR'];

      $ville = new commune ('','','','','');
      $sqlville = "SELECT id_commune FROM vue_commune WHERE nom_commune = '$commune';";
      $reqville = $ville->sql_commune($sqlville,$conn);
      $data_ville = $reqville->fetch();

      $commune_selectionne = $data_ville['id_commune'];
      $date_debut_offre = convert_date_US($_POST['date_debut_offre_emploi']);
      $offre = new offre('','','','','','','','','','','');
      $offre->ajout_emploi_realise($titre_offre,$libelle_offre,$date_publication,$date_debut_offre,$idu,$commune_selectionne,$conn);
       header('Location:my-profile-feed.php');
    }
  }
?>

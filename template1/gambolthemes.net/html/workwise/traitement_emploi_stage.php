<?php

session_start();

include ('function.inc.php');
include ('.\class\bdd.inc.php');

//AJOUT EMPLOI
      echo "test";
if (isset($_POST['envoi_emploi']))
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
    $offre->ajout_emploi($titre_offre,$libelle_offre,$date_publication,$date_debut_offre,$idu,$commune_selectionne,$conn);
    header('Location:index-2.php');
  }
}

//AJOUT STAGE

if (isset($_POST['envoi_stage']))
{
  if (isset($_GET['stage']))
  {
    $titre_offre = $_POST['titre_stage'];
    $libelle_offre = $_POST['libelle_offre_stage'];
    $commune = $_POST['commune_stage'];
    $date_debut_offre = convert_date_US($_POST['date_debut_offre_stage']);
    $date_publication = $_POST['date_publication_stage'];
    $date_fin_offre = convert_date_US($_POST['date_fin_offre_stage']);
    $idu = $_SESSION['UTILISATEUR'];

    $ville = new commune ('','','','','');
    $sqlville = "SELECT id_commune FROM vue_commune WHERE nom_commune = '$commune';";
    $reqville = $ville->sql_commune($sqlville,$conn);
    $data_ville2 = $reqville->fetch();
    $commune_selectionne = $data_ville2['id_commune'];

    $offre = new stage('','','','','','','','','','','');
    $offre->ajout_stage($titre_offre,$libelle_offre,$date_publication,$date_debut_offre,$date_fin_offre,$idu,$commune_selectionne,$conn);
    // var_dump($offre);
    header('Location:index-2.php');
  }

  //MODIFICATION D'UN POST DANS PROFIL

     if (isset($_POST['modif_offre']))
     {
       echo "ok submit";
       if (isset($_GET['modifoffre']) && isset($_GET['ido']))
       {
         $id_offre_a_modifier = intval($_GET['ido']);
         echo $id_offre_a_modifier;
         // MODIFICATIONS DES DONNEES DE L'UTILISATEUR
         $titre = $_POST['titre_modif_offre'];
         $ville = $_POST['commune_modif_offre'];
         $dp = $_POST['date_publication_modif_offre'];
         $db = convert_date_US($_POST['date_debut_offre']);
         $df = $_POST['date_fin_modif_offre'];
         $lib = $_POST['libelle_modif_offre'];

         $ville = new commune ('','','','','');
         $sqlville = "SELECT id_commune FROM vue_commune WHERE nom_commune = '$ville';";
         $reqville = $ville->sql_commune($sqlville,$conn);
         $data_ville2 = $reqville->fetch();
         $commune_selectionne = $data_ville2['id_commune'];
         /*if ($Stage alors )
         {
           $df = $_POST['date_fin_modif_offre'];
         }*/
         $userlog = new offre('','','','','','');
         $sqlmo = "UPDATE offre
         SET titre_offre = '$titre',
          libelle_offre = '$lib',
          date_debut_offre = '$db',
          date_publication_offre = '$dp',
          id_commune = '$commune_selectionne'
         WHERE etat_offre = 1
         AND id_user = '$user'
         AND id_offre = '$id_offre_a_modifier';";
         $req = $userlog->sql_offre($sqlmo,$conn) or die('erreur modifier post '.$sqlmo);
       ?>
             <script type="text/javascript">
               document.location.href="my-profile-feed.php";
             </script>
       <?php
        }
     }
}

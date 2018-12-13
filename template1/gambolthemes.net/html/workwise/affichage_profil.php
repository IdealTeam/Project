<?php
  //PARTIE ENTREPRISE
  if (isset($_GET['id_e']))
  {
    //RECUPERATION DANS URL DE L'ID DE L'ENTREPRISE
    $id_entreprise = intval($_GET['id_e']);
    // echo $id_entreprise;

    $entreprise = new entreprise('','','','','','','','','','');
    $sql_affiche_entreprise = "SELECT nom_user,photo_profil_user,photo_user,titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,nom_commune FROM user,offre,vue_commune WHERE user.id_user = '$id_entreprise' AND offre.id_user = user.id_user AND offre.id_commune = vue_commune.id_commune AND offre.etat_offre = 1;";
    // echo $sql_affiche_entreprise;
    $req_affiche_entre = $entreprise->sql_entreprise($sql_affiche_entreprise,$conn);
    $data_affiche_entre = $req_affiche_entre->fetch();

  }

  //PARTIE ETUDIANT
  if (isset($_GET['id_u']))
  {
    //RECUPERATION DANS URL DE L'ID DE L'ETUDIANT
    $id_etudiant = intval($_GET['id_u']);
    // echo $id_etudiant;

    $etudiant = new utilisateur('','','','','','','','','');
    $sql_affiche_etudiant = "SELECT nom_user,prenom_utilisateur,photo_profil_user,photo_user,titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,nom_commune FROM user,offre,vue_commune WHERE user.id_user = '$id_etudiant' AND offre.id_user = user.id_user AND offre.id_commune = vue_commune.id_commune AND offre.etat_offre = 1;";
    $req_affiche_etudiant = $etudiant->sql_utilisateur($sql_affiche_etudiant,$conn);
    $data_affiche_etudiant= $req_affiche_etudiant->fetch();
  }
 ?>

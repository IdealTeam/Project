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

    //COMPTER LE NOMBRE D'AMI QUE L'ENTREPRISE SUIT
    	$sqlCE = "SELECT COUNT(id_user_suivre) AS NbAmiSuivi FROM suivre WHERE id_user = '$id_entreprise';";
    	$oCompteSuivreCE = new suivre();
    	$reqCE = $oCompteSuivreCE->sql_ami($sqlCE,$conn);
    	$dataCE = $reqCE->fetch();

    //COMPTER LE NOMBRE D'AMI QUI SUIVENT L'ENTREPRISE
    	$sqlCEnt = "SELECT COUNT(id_user_suivre) AS NbAmiQuiSuivent FROM suivre WHERE id_user_suivre = '$id_entreprise';";
    	$oCompteSuivreCEnt = new suivre();
    	$reqCEnt = $oCompteSuivreCEnt->sql_ami($sqlCEnt,$conn);
    	$dataCEnt = $reqCEnt->fetch();
  }

  //PARTIE ETUDIANT
  if (isset($_GET['id_u']))
  {
    //RECUPERATION DANS URL DE L'ID DE L'ETUDIANT
    $id_etudiant = intval($_GET['id_u']);
    // echo $id_etudiant;

    $etudiant = new utilisateur('','','','','','','','','');
    $sql_affiche_etudiant = "SELECT nom_user,prenom_utilisateur,photo_profil_user,photo_user,titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,nom_commune,note_stage,commentaire_stage FROM user,offre,vue_commune WHERE user.id_user = '$id_etudiant' AND offre.id_user = user.id_user AND offre.id_commune = vue_commune.id_commune AND offre.etat_offre = 1;";
    $req_affiche_etudiant = $etudiant->sql_utilisateur($sql_affiche_etudiant,$conn);
    $data_affiche_etudiant= $req_affiche_etudiant->fetch();


//################################################################ Nb PERSONNE SUIVI A FAIRE AVEC LES ETUDUIANTS
    //COMPTER LE NOMBRE D'AMI QUE L'ENTREPRISE SUIT
    	$sqlCEt = "SELECT COUNT(id_user_suivre) AS NbAmiSuivi FROM suivre WHERE id_user = '$id_etudiant';";
    	$oCompteSuivreCEt = new suivre();
    	$reqCEt = $oCompteSuivreCEt->sql_ami($sqlCEt,$conn);
    	$dataCEt = $reqCEt->fetch();

    //COMPTER LE NOMBRE D'AMI QUI SUIVENT L'ENTREPRISE
    	$sqlCEtu = "SELECT COUNT(id_user_suivre) AS NbAmiQuiSuivent FROM suivre WHERE id_user_suivre = '$id_etudiant';";
    	$oCompteSuivreCEtu = new suivre();
    	$reqCEtu = $oCompteSuivreCEtu->sql_ami($sqlCEtu,$conn);
    	$dataCEtu = $reqCEtu->fetch();
  }
 ?>

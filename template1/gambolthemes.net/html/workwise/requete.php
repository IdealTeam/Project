<?php

// AFFICHAGE DES DONNEES DE L'UTILISATEUR

	$user = $_SESSION['UTILISATEUR']; //ID DE L'USER
  // echo $user; OK
  // die();
  $userlog = new user('','','','','','','','');
  $sql = "SELECT nom_user,prenom_utilisateur,tel_user,email_user,photo_user,photo_profil_user FROM user WHERE id_user =". $user;
  $req = $userlog->sql_user($sql,$conn);
  $data = $req->fetch();

// AFFICHAGE DES DONNEES DES STAGES

  $stage = new stage('','','','','','','','','','','');
  $sql_stage = "SELECT titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,commentaire_stage,note_stage,nom_commune FROM offre,commune WHERE id_user =".$user." AND offre.id_commune = commune.code_commune_INSEE;";
  $req_stage = $stage->sql_stage($sql_stage,$conn);
  // $data_stage = $req_stage->fetch();

// AFFICHAGE DES COMMUNES AUTOCOMPLETION

	$commune = new commune('','','','','');
	$sql_commune = "SELECT * FROM commune order by code_commune_INSEE;";
	$req_commune = $commune->sql_commune($sql_commune,$conn);
	$tab = "[";
		while($data_commune = $req_commune->fetch())
		{
			$tab = $tab.'"'.$data_commune['nom_commune'].' '.$data_commune['code_postal'].'",';
		}
		$tab = rtrim($tab,',');
		$tab = $tab.']';

//AFFICHAGE ENTREPRISE
		$userlog = new user('','','','','','','','');
	  $sql_entreprise = "SELECT nom_user,raison_sociale_entreprise FROM user WHERE statut_user ='e';";
	  $req_entreprise = $userlog->sql_user($sql_entreprise,$conn);

 ?>

<?php

// AFFICHAGE DES DONNEES DE L'UTILISATEUR

	$user = $_SESSION['UTILISATEUR']; //ID DE L'USER
  // echo $user; OK
  // die();
  $userlog = new user('','','','','','','','');
  $sql = "SELECT nom_user,prenom_utilisateur,tel_user,email_user,photo_user,photo_profil_user FROM user WHERE id_user =". $user;
  $req = $userlog->sql_user($sql,$conn) or die("erreur requete.php l.10".$sql);
  $data = $req->fetch();

// // AFFICHAGE DES DONNEES DES STAGES
//
//   $stage = new stage('','','','','','','','','','','');
//   $sql_stage = "SELECT titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,commentaire_stage,note_stage,nom_commune FROM offre,commune WHERE id_user =".$user." AND offre.id_commune = commune.code_commune_INSEE;";
//   $req_stage = $stage->sql_stage($sql_stage,$conn);
  // $data_stage = $req_stage->fetch();

	// AFFICHAGE DES DONNEES DES OFFRES PROFIL

	  $offreAffiche = new offre('','','','','','');
	  $sql_offreAffiche = "SELECT nom_user,prenom_utilisateur, titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,commentaire_stage,note_stage,nom_commune,photo_profil_user FROM offre,user,commune WHERE user.id_user = '$user' AND user.id_user = offre.id_user AND offre.id_commune = commune.code_commune_INSEE ;";
	  $req_offreAffiche = $offreAffiche->sql_offre($sql_offreAffiche,$conn) or die("erreur requete.php l.24".$sql_offreAffiche);

// AFFICHAGE DES COMMUNES AUTOCOMPLETION

	$commune = new commune('','','','','');
	$sql_commune = "SELECT * FROM commune order by code_commune_INSEE;";
	$req_commune = $commune->sql_commune($sql_commune,$conn);
	$tab = "[";
		while($data_commune = $req_commune->fetch())
		{
			$tab = $tab.'"'.$data_commune['nom_commune'].'",';
		}
		$tab = rtrim($tab,',');
		$tab = $tab.']';

//AFFICHAGE ENTREPRISE
		$userlog = new user('','','','','','','','');
	  $sql_entreprise = "SELECT nom_user,raison_sociale_entreprise FROM user WHERE statut_user ='e';";
	  $req_entreprise = $userlog->sql_user($sql_entreprise,$conn) or die("erreur requete.php l.42".$sql_entreprise);

//AFFICHAGE EMPLOIS ET STAGES FIL D'ACTUALITE
		$offre = new offre('','','','','','');
	  $sql_offre = "SELECT titre_offre,libelle_offre,date_publication_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune
		FROM offre,user,commune
		WHERE offre.id_user = user.id_user
		 AND offre.id_commune = commune.code_commune_INSEE
		 AND offre.etat_offre = 1 ORDER BY offre.date_publication_offre DESC;";
	  $req_offre = $offre->sql_offre($sql_offre,$conn) or die("erreur requete.php l.47".$sql_offre);

 ?>

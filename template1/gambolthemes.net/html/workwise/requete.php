<?php

// AFFICHAGE DES DONNEES DE L'UTILISATEUR

	$user = $_SESSION['UTILISATEUR']; //ID DE L'USER
  // echo $user; OK
  // die();
  $userlog = new user('','','','','','','','');
  $sql = "SELECT nom_user,prenom_utilisateur,tel_user,email_user,photo_user,photo_profil_user,rue_user FROM user WHERE id_user =". $user;
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
	  $sql_offreAffiche = "SELECT id_offre,nom_user,prenom_utilisateur, titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,commentaire_stage,note_stage,nom_commune,photo_profil_user FROM offre,user,vue_commune WHERE user.id_user = '$user' AND user.id_user = offre.id_user AND offre.id_commune = vue_commune.code_commune_INSEE AND offre.etat_offre = 1;";
	  $req_offreAffiche = $offreAffiche->sql_offre($sql_offreAffiche,$conn) or die("erreur requete.php l.24".$sql_offreAffiche);

// AFFICHAGE DES COMMUNES AUTOCOMPLETION

	$commune = new commune('','','','','');
	$sql_commune = "SELECT * FROM vue_commune order by code_commune_INSEE;";
	$req_commune = $commune->sql_commune($sql_commune,$conn);
	$tab = "[";
		while($data_commune = $req_commune->fetch())
		{
			$tab = $tab.'"'.$data_commune['nom_commune'].'",';
		}
		$tab = rtrim($tab,',');
		$tab = $tab.']';

//AFFICHAGE ENTREPRISE DANS ENTREPRISE
		$userlog = new user('','','','','','','','');
	  $sql_entreprise = "SELECT id_user,nom_user,raison_sociale_entreprise,photo_profil_user FROM user WHERE statut_user ='e';";
	  $req_entreprise = $userlog->sql_user($sql_entreprise,$conn) or die("erreur requete.php l.42".$sql_entreprise);

//AFFICHAGE EMPLOIS ET STAGES FIL D'ACTUALITE
		$offre = new offre('','','','','','');
	  $sql_offre = "SELECT titre_offre,libelle_offre,date_publication_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune
		FROM offre,user,vue_commune
		WHERE offre.id_user = user.id_user
		 AND offre.id_commune = vue_commune.code_commune_INSEE
		 AND offre.etat_offre = 1 ORDER BY offre.date_publication_offre DESC;";
	  $req_offre = $offre->sql_offre($sql_offre,$conn) or die("erreur requete.php l.47".$sql_offre);

//SUPPRESSION COMPTE
	if (isset ($_GET['del_user']))
	{
	  $user = $_SESSION['UTILISATEUR']; //ID DE L'USER
	  // MODIFICATIONS DES DONNEES DE L'UTILISATEUR
	  $userlog = new user('','','','','','','','');
	  $sql = "UPDATE user
	  SET etat_user = 0
	  WHERE id_user =".$user;
	  $req = $userlog->sql_user($sql,$conn);
		session_unset();
	  ?>
	      <script type="text/javascript">
	        document.location.href="http://localhost/PPE3/index.php";
	      </script>
	      <?php
	      // $data = $req->fetch();
	}

	//AFFICHAGE ETUDIANT
			$userlog = new user('','','','','','','','');
		  $sql_etudiant = "SELECT id_user,nom_user,prenom_utilisateur,tel_user,email_user,photo_profil_user FROM user WHERE statut_user ='u';";
		  $req_etudiant = $userlog->sql_user($sql_etudiant,$conn) or die("erreur requete.php l.42".$sql_etudiant);

//SUPRRESION D'UN POST
			if (isset($_GET['del_post']) && isset($_GET['ido']))
			{
				$id_offre_a_supprimer = $_GET['ido'];
				// echo $id_offre_a_supprimer;
				// die();
			  // MODIFICATIONS DES DONNEES DE L'UTILISATEUR
			  $userlog = new offre('','','','','','');
			  $sql = "UPDATE offre
			  SET etat_offre = 0
			  WHERE id_user = '$user' AND id_offre = '$id_offre_a_supprimer';";
			  $req = $userlog->sql_offre($sql,$conn) or die('erreur del post '.$sql);
				// die();
			  ?>
			      <script type="text/javascript">
			        document.location.href="my-profile-feed.php";
			      </script>
			<?php
			      // $data = $req->fetch();
			}
 ?>

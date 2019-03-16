<?php

// AFFICHAGE DES DONNEES DE L'UTILISATEUR

	$user = $_SESSION['UTILISATEUR']; //ID DE L'USER
  // echo $user; OK
  // die();
  $userlog = new user('','','','','','','','');
  $sql = "SELECT nom_user,prenom_utilisateur,tel_user,email_user,photo_user,photo_profil_user,rue_user,statut_user FROM user WHERE id_user =". $user;
  $req = $userlog->sql_user($sql,$conn) or die ("erreur requete.php l.10".$sql);
  $data = $req->fetch();

// // AFFICHAGE DES DONNEES DES STAGES
//
//   $stage = new stage('','','','','','','','','','','');
//   $sql_stage = "SELECT titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,commentaire_stage,note_stage,nom_commune FROM offre,commune WHERE id_user =".$user." AND offre.id_commune = commune.id_commune;";
//   $req_stage = $stage->sql_stage($sql_stage,$conn);
  // $data_stage = $req_stage->fetch();

	// AFFICHAGE DES DONNEES DES OFFRES PROFIL

	  $offreAffiche = new offre('','','','','','');
	  $sql_offreAffiche = "SELECT id_offre,nom_user,prenom_utilisateur, titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,commentaire_stage,note_stage,nom_commune,photo_profil_user,type_offre FROM offre,user,vue_commune WHERE user.id_user = '$user' AND user.id_user = offre.id_user AND offre.id_commune = vue_commune.id_commune AND offre.emploi_realise = 0 AND offre.etat_offre = 1 ORDER BY date_publication_offre DESC;";
	  $req_offreAffiche = $offreAffiche->sql_offre($sql_offreAffiche,$conn) or die("erreur requete.php l.24".$sql_offreAffiche);

// AFFICHAGE DES COMMUNES AUTOCOMPLETION

		$commune = new commune('','','','','');
		$sql_commune = "SELECT * FROM vue_commune order by id_commune;";
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
	  $sql_entreprise = "SELECT id_user,nom_user,raison_sociale_entreprise,photo_profil_user,email_user,nom_commune FROM user,commune WHERE statut_user ='e' AND user.id_commune = commune.id_commune AND etat_user = 1;";
	  $req_entreprise = $userlog->sql_user($sql_entreprise,$conn) or die("erreur requete.php l.42".$sql_entreprise);
		//Ajout ami
		if(isset($_GET['follow']) AND isset($_GET['ami']))
		{
			$amiAsuivre = intval($_GET['ami']);
			$ami = new suivre();
			$reqami = $ami->ajout_ami($user,$amiAsuivre,$conn);
			?>
				<script type="text/javascript">
					document.location.href="companies.php";
				</script>
			<?php
		}

//AFFICHAGE EMPLOIS ET STAGES FIL D'ACTUALITE
		$offre = new offre('','','','','','');
	  $sql_offre = "SELECT titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune
		FROM offre,user,vue_commune
		WHERE offre.id_user = user.id_user
		AND offre.id_commune = vue_commune.id_commune
		AND offre.etat_offre = 1
		AND etat_user = 1
		AND offre.emploi_realise = 0
		ORDER BY offre.date_publication_offre DESC;";
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

//SUPRRESION D'UN POST
			if (isset($_GET['del_post']) && isset($_GET['ido']) OR isset($_GET['del_se']))
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

// AFFICHAGE DES DIPLOMES D'UN UTILISATEUR
			$diplomer = new diplomer();
			$sql_diplomer = "SELECT diplomer.id_diplome,libelle_diplome,annee_diplome FROM user,diplome,diplomer WHERE user.id_user = '$user' AND user.id_user = diplomer.id_user AND diplomer.id_diplome = diplome.id_diplome ORDER BY diplomer.annee_diplome DESC;";
			$req_diplomer = $diplomer->sql_diplomer($sql_diplomer,$conn);

// AFFICHAGE DE L'ID D'UN DIPLOME
			$diplome = new diplome('','');
			$sql_diplome = "SELECT id_diplome,libelle_diplome FROM diplome ORDER BY libelle_diplome ASC;";
			$req_diplome = $diplome->sql_diplome($sql_diplome,$conn);

//SUPRESSION D'UN DIPLOME SELON L'UTILISATEUR

	if (isset($_GET['del_diplome']))
	{
		$diplomeAsupprimer = intval($_GET['iddi']);
		$deldiplome = new diplomer();
		$sqldeldiplome ="DELETE FROM diplomer WHERE id_diplome = '$diplomeAsupprimer' AND id_user = '$user';";
		$reqdeldiplome = $deldiplome->sql_diplomer($sqldeldiplome,$conn);
		?>
			<script type="text/javascript">
				document.location.href="my-profile-feed.php";
			</script>
		<?php
	}

//AFFICHAGE STAGE REALISEE DANS STAGE EFFECTUE

	$stage_r = new stage('','','','','','','','');
	$sql_s_r = "SELECT offre.id_offre,titre_offre,libelle_offre,date_debut_offre,date_fin_offre,commentaire_stage,note_stage,nom_commune FROM offre,vue_commune WHERE offre.id_user = '$user' AND offre.id_commune = vue_commune.id_commune AND offre.etat_offre = 1 AND offre.note_stage <> '' ORDER BY date_debut_offre DESC;";
	//selectionner uniquement les ligne qui ont le champs etoile de rempli
	$req_s_r = $stage_r->sql_stage($sql_s_r,$conn);

//AFFICHAGE EMPLOI REALISEE DANS A TRAVAILLE
	$emp_r = new offre('','','','','','');
	$sql_emp_r = "SELECT offre.id_offre,titre_offre,libelle_offre,date_debut_offre,date_fin_offre,nom_commune FROM offre,vue_commune WHERE offre.id_user = '$user' AND offre.id_commune = vue_commune.id_commune AND offre.etat_offre = 1 AND offre.emploi_realise = 1 ORDER BY date_debut_offre DESC;";
	$req_emp_r = $emp_r->sql_offre($sql_emp_r,$conn);

//SUPRESSION D'UN EMPLOI REALISE

		if (isset($_GET['del_empRealise']) && isset($_GET['idempE']))
		{
			$emploiRealise = intval($_GET['idempE']);
			$delemploiRealise = new offre('','','','','','');
			$sqldelEmp ="DELETE FROM offre WHERE id_offre = '$emploiRealise' AND id_user = '$user';";
			$reqdelEmp = $delemploiRealise->sql_offre($sqldelEmp,$conn);
			?>
				<script type="text/javascript">
					document.location.href="my-profile-feed.php";
				</script>
			<?php
		}

//COMPTER LE NOMBRE D'AMI QUE L'ON SUIT
	$sqlCA = "SELECT COUNT(id_user_suivre) AS NbAmiSuivi FROM suivre WHERE id_user = '$user';";
	$oCompteSuivreCA = new suivre();
	$reqCA = $oCompteSuivreCA->sql_ami($sqlCA,$conn);
	$dataCA = $reqCA->fetch();

//COMPTER LE NOMBRE D'AMI QUI ME SUIVENT
	$sqlCAmi = "SELECT COUNT(id_user_suivre) AS NbAmiQuiSuivent FROM suivre WHERE id_user_suivre = '$user';";
	$oCompteSuivreCAmi = new suivre();
	$reqCAmi = $oCompteSuivreCAmi->sql_ami($sqlCAmi,$conn);
	$dataCAmi = $reqCAmi->fetch();

//AFFICHAGE DES AMIS DANS LE PROFIL UTILISATEUR
	$sqlAfficheAmi = "SELECT id_user_suivre,nom_user,prenom_utilisateur,photo_profil_user
										FROM user AS u,suivre AS s
										WHERE u.id_user = s.id_user_suivre
										AND s.id_user = '$user';";
	$oAfficheAmi = new suivre();
	$reqAfficheAmi = $oAfficheAmi->sql_ami($sqlAfficheAmi,$conn);

//SUPPRESSION DES AMI DANS PROFIL UTILISATEUR
	if (isset($_GET['idAmiASupprimer']))
	{
		$amiASupprimer = intval($_GET['idAmiASupprimer']);
		$sqlDeleteAmi = "DELETE FROM suivre WHERE id_user = '$user' AND id_user_suivre = '$amiASupprimer';";
		$oDel = new suivre();
		$reqDel = $oDel->sql_ami($sqlDeleteAmi,$conn);
		?>
		<script type="text/javascript">
			document.location.href="my-profile-feed.php";
		</script>
		<?php
	}
?>

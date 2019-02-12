<?php
  //AFICHAGE DE TOUT LES STAGES DANS STAGES
	if (isset($_GET['stage']) OR isset($_GET['delFiltre']))
	{
		$stage = new stage('','','','','','','','');
		$sql_stage = "SELECT titre_offre,libelle_offre,date_publication_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune, date_debut_offre,date_fin_offre
		FROM offre,user,vue_commune
		WHERE offre.id_user = user.id_user
		AND offre.id_commune = vue_commune.id_commune
		AND offre.etat_offre = 1
		AND offre.type_offre = 's'
		ORDER BY offre.date_publication_offre DESC;";
		$req_stage = $stage->sql_stage($sql_stage,$conn) or die("erreur requete_stage_emploi".$sql_stage);
		unset($_SESSION['FILTRE_RECHERCHE_STAGE']);
		unset($_SESSION['FILTRE_RECHERCHE_VILLE_STAGE']);
	}

  //AFICHAGE DE TOUT LES EMPLOIS DANS EMPLOIS

	if (isset($_GET['emploi']) OR isset($_GET['delEmp']))
	{
		$offre = new offre('','','','','','');
	  $sql_offre = "SELECT titre_offre,libelle_offre,date_publication_offre,date_debut_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune
		FROM offre,user,vue_commune
		WHERE offre.id_user = user.id_user
	  AND offre.id_commune = vue_commune.id_commune
	  AND offre.etat_offre = 1
	  AND offre.type_offre = 'e'
	  ORDER BY offre.date_publication_offre DESC;";
	  $req_offre = $offre->sql_offre($sql_offre,$conn) or die("erreur requete_stage_emploi".$sql_offre);
		unset($_SESSION['FILTRE_RECHERCHE']);
		unset($_SESSION['FILTRE_RECHERCHE_VILLE']);
	}

// REQUETE FILTRE OFFRE EMPLOI

	if (isset($_GET['search']) && (isset($_SESSION['FILTRE_RECHERCHE']) OR isset($_SESSION['FILTRE_RECHERCHE_VILLE'])))
  {
		if (!isset($_SESSION['FILTRE_RECHERCHE']))
		{
			$_SESSION['FILTRE_RECHERCHE'] = '';
			$recherche = $_SESSION['FILTRE_RECHERCHE'];
		}
		else
		{
			$recherche = $_SESSION['FILTRE_RECHERCHE'];
		}
		if (!isset($_SESSION['FILTRE_RECHERCHE_VILLE']))
		{
			$_SESSION['FILTRE_RECHERCHE_VILLE'] = '';
			$ville = $_SESSION['FILTRE_RECHERCHE_VILLE'];
		}
		else
		{
			$ville = $_SESSION['FILTRE_RECHERCHE_VILLE'];
		}
    // echo $recherche;
    $offresearch = new offre('','','','','','');
    $sql_offre_search = "SELECT titre_offre,libelle_offre,date_publication_offre,date_debut_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune
    FROM offre,user,vue_commune
    WHERE offre.id_user = user.id_user
    AND offre.id_commune = vue_commune.id_commune
    AND offre.etat_offre = 1
    AND offre.type_offre = 'e'
    AND titre_offre LIKE '%$recherche%'
		AND nom_commune LIKE '%$ville%'
    ORDER BY offre.date_publication_offre DESC";
    $req_offre = $offresearch->sql_offre($sql_offre_search,$conn) or die("erreur requete_filtre_search".$sql_offre_search);
  }

	// REQUETE FILTRE STAGE

	if (isset($_GET['searchS']) && (isset($_SESSION['FILTRE_RECHERCHE_STAGE']) OR isset($_SESSION['FILTRE_RECHERCHE_VILLE_STAGE'])))
  {
		// echo "stage";
		if (!isset($_SESSION['FILTRE_RECHERCHE_STAGE']))
		{
			$_SESSION['FILTRE_RECHERCHE_STAGE'] = '';
			$rechercheS = $_SESSION['FILTRE_RECHERCHE_STAGE'];
		}
		else
		{
			$rechercheS = $_SESSION['FILTRE_RECHERCHE_STAGE'];
		}
		if (!isset($_SESSION['FILTRE_RECHERCHE_VILLE_STAGE']))
		{
			$_SESSION['FILTRE_RECHERCHE_VILLE_STAGE'] = '';
			$villeS = $_SESSION['FILTRE_RECHERCHE_VILLE_STAGE'];
		}
		else
		{
			$villeS = $_SESSION['FILTRE_RECHERCHE_VILLE_STAGE'];
		}
    // echo $recherche;
    $offresearch = new offre('','','','','','');
    $sql_offre_search = "SELECT titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune
    FROM offre,user,vue_commune
    WHERE offre.id_user = user.id_user
    AND offre.id_commune = vue_commune.id_commune
    AND offre.etat_offre = 1
    AND offre.type_offre = 's'
    AND titre_offre LIKE '%$rechercheS%'
		AND nom_commune LIKE '%$villeS%'
    ORDER BY offre.date_publication_offre DESC";
    $req_stage = $offresearch->sql_offre($sql_offre_search,$conn) or die("erreur requete_filtre_search_stage".$sql_offre_search);
  }

?>

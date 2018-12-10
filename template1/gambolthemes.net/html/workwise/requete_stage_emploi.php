<?php
  //AFICHAGE DE TOUT LES STAGES DANS STAGES
	$stage = new stage('','','','','','','','');
  $sql_stage = "SELECT titre_offre,libelle_offre,date_publication_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune
	FROM offre,user,vue_commune
	WHERE offre.id_user = user.id_user
  AND offre.id_commune = vue_commune.id_commune
  AND offre.etat_offre = 1
  AND offre.type_offre = 's'
  ORDER BY offre.date_publication_offre DESC;";
  $req_stage = $stage->sql_stage($sql_stage,$conn) or die("erreur requete_stage_emploi".$sql_stage);

  //AFICHAGE DE TOUT LES EMPLOIS DANS EMPLOIS
	$offre = new offre('','','','','','');
  $sql_offre = "SELECT titre_offre,libelle_offre,date_publication_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune
	FROM offre,user,vue_commune
	WHERE offre.id_user = user.id_user
  AND offre.id_commune = vue_commune.id_commune
  AND offre.etat_offre = 1
  AND offre.type_offre = 'e'
  ORDER BY offre.date_publication_offre DESC;";
  $req_offre = $offre->sql_offre($sql_offre,$conn) or die("erreur requete_stage_emploi".$sql_stage);

?>

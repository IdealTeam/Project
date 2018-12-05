<?php
  //AFICHAGE DE TOUT LES STAGES
	$stage = new stage('','','','','','','','');
  $sql_stage = "SELECT titre_offre,libelle_offre,date_publication_offre,photo_profil_user,nom_user,prenom_utilisateur,nom_commune
	FROM offre,user,commune
	WHERE offre.id_user = user.id_user
  AND offre.id_commune = commune.code_commune_INSEE
  AND offre.etat_offre = 1
  AND offre.type_offre = 's'
  ORDER BY offre.date_publication_offre DESC;";
  $req_stage = $stage->sql_offre($sql_stage,$conn) or die("erreur requete_stage_emploi".$sql_stage);

?>

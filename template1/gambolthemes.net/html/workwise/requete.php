<?php
	$user = $_SESSION['UTILISATEUR']; //ID DE L'USER
  // echo $user; OK
  // die();
  $userlog = new user('','','','','','','','');
  $sql = "SELECT nom_user,prenom_utilisateur,tel_user,email_user FROM user WHERE id_user =". $user;
  $req = $userlog->sql_user($sql,$conn);
  $data = $req->fetch();

  $stage = new stage('','','','','','','','','','','');
  $sql_stage = "SELECT titre_offre,libelle_offre,date_publication_offre,date_debut_offre,date_fin_offre,commentaire_stage,note_stage FROM offre WHERE id_user =".$user;
  $req_stage = $stage->sql_stage($sql_stage,$conn);
  // $data_stage = $req_stage->fetch();
 ?>

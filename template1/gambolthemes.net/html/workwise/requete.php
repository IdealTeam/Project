<?php
	$user = $_SESSION['UTILISATEUR']; //ID DE L'USER
  // echo $user; OK
  // die();
  $userlog = new user('','','','','','','','');
  $sql = "SELECT nom_user,prenom_utilisateur,tel_user,email_user FROM user WHERE id_user =". $user;
  $req = $userlog->sql_user($sql,$conn);
  $data = $req->fetch();
 ?>

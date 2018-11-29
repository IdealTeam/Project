<?php

session_start();

include ('function.inc.php');
include ('.\class\bdd.inc.php');

//MODIFICATION USER DANS PROFIL

if (isset($_POST['modif_user']))
{
    $nom_user = $_POST['nom_user'];
    $prenom_utilisateur = $_POST['prenom_utilisateur'];
    $tel_user = $_POST['tel_user'];
    $email_user = $_POST['email_user'];
    $user = $_SESSION['UTILISATEUR']; //ID DE L'USER
    // MODIFICATIONS DES DONNEES DE L'UTILISATEUR

    // echo $user; OK
    // die();
    $userlog = new user('','','','','','','','');
    $sql = "UPDATE user
    SET nom_user = '$nom_user',prenom_utilisateur = '$prenom_utilisateur',tel_user = '$tel_user',email_user = '$email_user'
    WHERE id_user =".$user;
    $req = $userlog->sql_user($sql,$conn);
    header('Location:my-profile-feed.php');
    // $data = $req->fetch();
}

  //MODIFICATION DE L'IMAGE DE PROFIL
  if (isset($_POST['upload_img_cover']))
  {
    $user = $_SESSION['UTILISATEUR'];
    $img = $_FILES['img_couverture'];
    // $taille = $_POST['MAX_FILE_SIZE'];
    $user_picture = new user('','','','','','','','');
    $upload = $user_picture->ajout_image ($user,$_FILES['img_couverture']['error'],$_FILES['img_couverture']['size'],$_FILES['img_couverture']['name'],$_FILES['img_couverture']['tmp_name'],$conn);
    header("Location:my-profile-feed.php");
  }

?>

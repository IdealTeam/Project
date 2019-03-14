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
    $rue_user = $_POST['rue_user'];
    $user = $_SESSION['UTILISATEUR']; //ID DE L'USER
    // MODIFICATIONS DES DONNEES DE L'UTILISATEUR

    // echo $user; OK
    // die();
    $userlog = new user('','','','','','','','');
    $sql = "UPDATE user
    SET nom_user = '$nom_user',prenom_utilisateur = '$prenom_utilisateur',tel_user = '$tel_user',email_user = '$email_user',rue_user = '$rue_user'
    WHERE id_user =".$user;
    $req = $userlog->sql_user($sql,$conn);
    header('Location:my-profile-feed.php#info');
    // $data = $req->fetch();
}

  //MODIFICATION DE L'IMAGE DE PROFIL
  if (isset($_POST['upload_img_cover']))
  {
    $user = $_SESSION['UTILISATEUR'];
    $img = $_FILES['img_couverture'];
    // $taille = $_POST['MAX_FILE_SIZE'];
    $user_picture = new user('','','','','','','','');
    $upload = $user_picture->ajout_image ($user,$_FILES['img_couverture']['error'],$_FILES['img_couverture']['size'],$_FILES['img_couverture']['name'],$_FILES['img_couverture']['tmp_name'],'couverture',$conn);
    header("Location:my-profile-feed.php");
  }

  if (isset($_POST['upload_img_profil']))
  {
    $user = $_SESSION['UTILISATEUR'];
    $user_profil = new user('','','','','','','','');
    $upload1 = $user_profil->ajout_image ($user,$_FILES['img_profil']['error'],$_FILES['img_profil']['size'],$_FILES['img_profil']['name'],$_FILES['img_profil']['tmp_name'],'profil',$conn);
    header("Location:my-profile-feed.php");
  }

  //MODIFICATION DIPLOME
  if (isset($_POST['modif_diplome']))
  {
      $libelle_diplome = $_POST['libelle_diplome'];
      $annee = $_POST['date_diplome'];
      $user = $_SESSION['UTILISATEUR']; //ID DE L'USER

      $userdiplome = new diplomer();
      $req = $userdiplome->ajout_diplomer($user,$libelle_diplome,$annee,$conn);
      header("Location:my-profile-feed.php");
      // $data = $req->fetch();
  }

  //AJOUT D'UN STAGE REALISE
  if (isset($_POST['ajout_stage_realise']))
  {
    $titre = $_POST['titre_stage_r'];
    $commune = $_POST['commune_stage_r'];
    $dateD = convert_date_US($_POST['date_debut_offre_stage_r']);
    $dateF = convert_date_US($_POST['date_fin_offre_stage_r']);
    $lib = $_POST['libelle_offre_stage_r'];
    $comment = $_POST['commentaire_stage_r'];
    $note = $_POST['note_stage_r'];

    $idu = $_SESSION['UTILISATEUR'];

    $ville = new commune ('','','','','');
    $sqlville = "SELECT id_commune FROM vue_commune WHERE nom_commune = '$commune';";
    $reqville = $ville->sql_commune($sqlville,$conn);
    $data_ville2 = $reqville->fetch();
    $commune_selectionne = $data_ville2['id_commune'];

    $offre = new stage('','','','','','','','','','','');
    $offre->ajout_stage_realise($titre,$lib,$dateD,$dateF,$comment,$note,$idu,$commune_selectionne,$conn);
    // var_dump($offre);
    header('Location:index-2.php');

  }

  if (isset($_POST['change_pw']))
  {
    $user = $_SESSION['UTILISATEUR'];
    $pw = new user('','','','','','','','');
    $sqlpw = "SELECT pw_user FROM user WHERE id_user = '$user';";
    $req = $pw->sql_user($sqlpw,$conn);
    $datapw = $req->fetch();

    //Récupération ancien mot de passe et comparaison des mots de passe

    $pw_ancien = $_POST['pw_user'];
    $pwbdd = $datapw['pw_user'];

    if ($pw_ancien == $pwbdd)
    {
      $new_password = $_POST['new_pw'];
      $pw2 = new user('','','','','','','','');
      $sqlmodifpw = "UPDATE user SET pw_user = '$new_password' WHERE id_user = '$user' AND etat_user = 1;";
  	  $req = $pw2->sql_user($sqlmodifpw,$conn);
      ?>
      <script type="text/javascript">
        alert("Mot de passe modifié");
        document.location.href="my-profile-feed.php";
      </script>
      <?php
    }
    elseif ($pw_ancien != $pwbdd)
    {
      ?>
      <script type="text/javascript">
        alert("Ancien mot de passe incorrect")
      </script>
      <?php
    }
    //header("Location:my-profile-feed.php");

  }


?>
<!-- <script type="text/javascript">
  function refresh() {
  $.ajax({
    url: "my-profile-feed.php", // Ton fichier ou se trouve ton chat
    success:
        function(retour){
        $('ancre_diplome').html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
    }
  });

  }

  setInterval(refresh(), 1) // Répète la fonction toutes les 10 sec
</script> -->

<?php
// OUVERTURE DE SESSION
session_start();

// RECUPERATION DES VALEURS DU FORMULAIRE D'INSCRIPTION

  include ('template1\gambolthemes.net\html\workwise\class\bdd.inc.php');
  $nom = /*securite::FE(*/$_POST['nom']/*)*/;
 	$tel = $_POST['tel'];
 	$mail = $_POST['mail'];
 	$id_conn = $_POST['id_conn'];
 	$pw1 = $_POST['pw1'];
 	$pw2 = $_POST['pw2'];

// RECUPERATION DES CHAMPS SPECIAUX SELON ENTREPRISE OU UTILISATEUR
// AJOUT DANS BDD USER LES DONNEES SAISIENT DANS LE FORMULAIRE
// OUVERTURE DE LA SESSION APRES ENREGISTREMENT DANS BDD
// die("STOP");
  if (isset($_GET['entreprise']))
  {
    if (isset($_POST['b_inscription']))
    {
      //AJOUT D'UNE ENTREPRISE
      $raisonS = $_POST['rs'];

     	$contactE = $_POST['ce'];
      // echo $nom,'',$tel,'',$mail,'',$id_conn,'',$pw1,'',$raisonS,'',$contactE;
      // die();
      $entreprise = new entreprise('','','','','','','','','','','');
      $entreprise->ajout_entreprise($nom,$raisonS,$contactE,$tel,$mail,$id_conn,$pw1,$conn);
      // var_dump($entreprise);

      //CREATION DE SA SESSION DE CONNEXION
      $sqlforsession = "SELECT id_user FROM user ORDER BY id_user DESC;";
      $reqforsession = $entreprise->sql_entreprise($sqlforsession,$conn);
      $dataforsession = $reqforsession->fetch();
      $_SESSION['UTILISATEUR'] = $dataforsession['id_user'];
      // echo $_SESSION['UTILISATEUR'];
      // die();
      ?>
        <script type="text/javascript">
          document.location.href="template1/gambolthemes.net/html/workwise/index-2.php";
        </script>
      <?php
    }
  }
  elseif (isset($_GET['etudiant']))
  {
    if (isset($_POST['b_inscription']))
    {
      $prenom = $_POST['prenom'];
      // echo $nom,'',$tel,'',$mail,'',$id_conn,'',$pw1,'',$raisonS,'',$contactE;
      // die();

      //AJOUT UTILISATEUR
      $utilisateur = new utilisateur('','','','','','','','','');
      $utilisateur->ajout_utilisateur($nom,$prenom,$tel,$mail,$id_conn,$pw1,$conn);

      //CREATION DE SA SESSION DE CONNEXION
      // $sqlforsession = "SELECT id_user FROM user WHERE email_user = '$mail';";
      $sqlforsession = "SELECT id_user FROM user ORDER BY id_user DESC;";
      $reqforsession = $utilisateur->sql_utilisateur($sqlforsession,$conn);
      $dataforsession = $reqforsession->fetch();
      $_SESSION['UTILISATEUR'] = $dataforsession['id_user'];
      // echo $_SESSION['UTILISATEUR'];
      // die();
      ?>
        <script type="text/javascript">
          document.location.href="template1/gambolthemes.net/html/workwise/index-2.php";
        </script>
      <?php
      // var_dump($utilisateur);
    }
  }
?>

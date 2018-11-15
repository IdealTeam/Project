<?php
// echo "page traitement_inscription";
  include ('.\class\bdd.inc.php');
  $nom = $_POST['nom'];
 	$tel = $_POST['tel'];
 	$mail = $_POST['mail'];
 	$id_conn = $_POST['id_conn'];
 	$pw1 = $_POST['pw1'];
 	$pw2 = $_POST['pw2'];


  if (isset($_GET['entreprise']))
  {
    if (isset($_POST['b_inscription']))
    {
      $raisonS = $_POST['rs'];
     	$contactE = $_POST['ce'];
      // echo $nom,'',$tel,'',$mail,'',$id_conn,'',$pw1,'',$raisonS,'',$contactE;
      // die();
      $entreprise = new entreprise('','','','','','','','','','','');
      $entreprise->ajout_entreprise($nom,'',$raisonS,$contactE,$tel,$mail,'',$id_conn, $pw1,$conn);
      var_dump($entreprise);
    }
  }
  elseif (isset($_GET['etudiant']))
  {
    if (isset($_POST['b_inscription']))
    {
      $prenom = $_POST['prenom'];
      // echo $nom,'',$tel,'',$mail,'',$id_conn,'',$pw1,'',$raisonS,'',$contactE;
      // die();
      $utilisateur = new utilisateur('','','','','','','','','');
      $utilisateur->ajout_utilisateur($nom,$prenom,$tel,$mail,$id_conn,$pw1,$conn);
      var_dump($utilisateur);
    }
  }
?>

<?php
// OUVERTURE DE SESSION
session_start();

// RECUPERATION DES VALEURS DU FORMULAIRE D'INSCRIPTION

  include ('template1\gambolthemes.net\html\workwise\class\bdd.inc.php');
  $nom = $_POST['nom'];
 	$tel = $_POST['tel'];
 	$mail = $_POST['mail'];
 	$id_conn = $_POST['id_conn'];
 	$pw1 = $_POST['pw1'];
 	$pw2 = $_POST['pw2'];

// RECUPERATION DES CHAMPS SPECIAUX SELON ENTREPRISE OU UTILISATEUR
// AJOUT DANS BDD USER LES DONNEES SAISIENT DANS LE FORMULAIRE
// OUVERTURE DE LA SESSION APRES ENREGISTREMENT DANS BDD

  if (isset($_GET['entreprise']))
  {
    if (isset($_POST['b_inscription']))
    {
      $raisonS = $_POST['rs'];
     	$contactE = $_POST['ce'];
      // echo $nom,'',$tel,'',$mail,'',$id_conn,'',$pw1,'',$raisonS,'',$contactE;
      // die();
      $entreprise = new entreprise('','','','','','','','','','','');
      $entreprise->ajout_entreprise($nom,$raisonS,$contactE,$tel,$mail,$id_conn, $pw1,$conn);
      var_dump($entreprise);
      // $_SESSION['IDENTIFIANT'] = 'id_user à definir avec requete de la methode plus haut';
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

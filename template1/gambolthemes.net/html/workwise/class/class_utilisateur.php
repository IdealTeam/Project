<?php

class utilisateur EXTENDS user
{
    private $prenom_utilisateur;

    public function utilisateur($prenomutilisateur,$iduser,$nomuser,$teluser,$emailuser,$photouser,$loginuser,$pwuser,$etatuser)
    {
        user::user($iduser,$nomuser,$teluser,$emailuser,$photouser,$loginuser,$pwuser,$etatuser);
        $this->prenom_utilisateur = $prenomutilisateur;
    }

    public function get_prenom_utilisateur()
    {
        return $this->prenom_utilisateur;
    }

    public function set_prenom_utilisateur($prenomutilisateur)
    {
        $this->prenom_utilisateur = $prenomutilisateur;
    }

    // METHODES AJOUT D'UTILISATEUR

    public function ajout_utilisateur($nomuser,$prenomuser,$teluser,$emailuser,$loginuser,$pwuser,$conn)
    {
        $sql = "INSERT INTO user VALUES (NULL,'$nomuser','$prenomuser','','','$teluser','$emailuser','','','$loginuser','$pwuser','',1,'u',39202);";
        $req = $conn->query($sql) or die("erreur ajout utilisateur".$sql);
    }

    public function sql_utilisateur ($requete,$conn)
    {
      $sql_affiche = $requete;
      // echo $sql_affiche;
      // die();
      $req = $conn->query($sql_affiche) or die ('erreur_affiche_utilisateur'.$sql_affiche);
      return $req;
    }
}

//$utilisateur1 = new utilisateur('huhh', 2, 'hhhh', '000', 'dddd@hhh.com', 'ddd', 'dd1', '***', 1);
//var_dump($utilisateur1);
?>

<?php
//include ('class_user.php');
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
        $sql = "INSERT INTO user VALUES (NULL,'$nomuser','$prenomuser','','','$teluser','$emailuser','','$loginuser','$pwuser',1,'u');";
        $req = $conn->query($sql);
    }
    public function affiche_utilisateur($requete,$retour)
    {
      $sql = "$requete";
      $req = $conn->query($sql);
      $data = $req->fetch();
      if ($retour == 1)
      {
        return $data;
      }
      elseif ($retour == 0)
      {
        echo '';
      }
    }

}

//$utilisateur1 = new utilisateur('huhh', 2, 'hhhh', '000', 'dddd@hhh.com', 'ddd', 'dd1', '***', 1);
//var_dump($utilisateur1);
?>

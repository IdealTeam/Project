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

    // METHODES

    public function ajout_utilisateur($nomuser,$prenomuser,$teluser,$emailuser,$loginuser,$pwuser,$conn)
    {
        $sql = "INSERT INTO user VALUES (NULL,'$nomuser','$prenomuser','','','$teluser','$emailuser','','$loginuser','$pwuser',1);";
        $req = $conn->query($sql);
    }
}

//$utilisateur1 = new utilisateur('huhh', 2, 'hhhh', '000', 'dddd@hhh.com', 'ddd', 'dd1', '***', 1);
//var_dump($utilisateur1);
?>
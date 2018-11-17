<?php
// include ('class_user.php');
class entreprise EXTENDS user
{
    private $raison_sociale_entreprise;
    private $contact_entreprise;

    public function entreprise($raisonsocialeentreprise,$contactentreprise,$iduser,$nomuser,$teluser,$emailuser,$photouser,$loginuser,$pwuser,$etatuser)
    {
        user::user($iduser,$nomuser,$teluser,$emailuser,$photouser,$loginuser,$pwuser,$etatuser);
        $this->raison_sociale_entreprise = $raisonsocialeentreprise;
        $this->contact_entreprise = $contactentreprise;
    }

    //GETTER ENTREPRISE

    public function get_raison_sociale_entreprise()
    {
        return $this->raison_sociale_entreprise;
    }

    public function get_contact_entreprise()
    {
        return $this->contact_entreprise;
    }

    //SETTER ENTREPRISE

    public function set_raison_sociale_entreprise($raisonsocialeentreprise)
    {
        $this->raison_sociale_entreprise = $raisonsocialeentreprise;
    }

    public function set_contact_entreprise($contactentreprise)
    {
        $this->contact_entreprise = $contactentreprise;
    }

    //METHODES

    public function ajout_entreprise($nomuser,$raisonsocialeentreprise,$contactentreprise ,$teluser,$emailuser,$loginuser,$pwuser,$conn)
    {
        $sql = "INSERT INTO user VALUES (NULL,'$nomuser','','$raisonsocialeentreprise', '$contactentreprise','$teluser','$emailuser','','$loginuser','$pwuser',1);";
        $req = $conn->query($sql);
    }

    public function affiche_entreprise($requete)
    {
      $sql = "$requete";
      $req = $conn->query($sql);
      $data = $req->fetch();
      return $data;
    }
}

//$heritage = new entreprise('pme', 'dupond', 4, 'toto', '01222', 'caramba@lol', 'djjhd/', 'xxx', '***',1);
//var_dump($heritage);

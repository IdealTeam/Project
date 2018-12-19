<?php

  class suivre
  {
    private $id_user;
    private $id_user_suivre;

    public function diplomer($iduser = '',$iusersuivre = '')
    {
      $this->id_user = $iduser;
      $this->id_user_suivre = $idusersuivre;
    }

    //GETTERS

    public function get_id_user()
    {
        return $this-> id_user;
    }

    public function get_id_user_suivre()
    {
        return $this-> id_user_suivre;
    }

    //METHODES

    public function ajout_ami($iduser,$idami,$conn)
    {
        $sql = "INSERT INTO suivre VALUES ('$iduser','$idami');";
        $req = $conn->query($sql);
    }

    public function sql_ami ($requete,$conn)
    {
      $sql_affiche_ami = $requete;
      // echo $sql_affiche;
      // die();
      $req = $conn->query($sql_affiche_ami) or die ('erreur suivre'.$sql_affiche_diplome);
      return $req;
    }
  }

?>

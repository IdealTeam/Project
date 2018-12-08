<?php

  class diplomer
  {
    private $id_user;
    private $id_diplome;

    public function diplomer($iduser = '',$iddiplome = '')
    {
      $this->id_user = $iduser;
      $this->id_diplome = $iddiplome;
    }

    //GETTERS

    public function get_id_user()
    {
        return $this-> id_user;
    }

    public function get_id_diplome()
    {
        return $this-> id_diplome;
    }

    //METHODES

    public function ajout_diplomer($iduser,$iddiplome)
    {
        $sql = "INSERT INTO diplomer VALUES ($iduser,$iddiplome');";
        $req = $conn->query($sql);
    }

    public function sql_diplomer ($requete,$conn)
    {
      $sql_affiche_diplome = $requete;
      // echo $sql_affiche;
      // die();
      $req = $conn->query($sql_affiche_diplome) or die ('erreur diplomer'.$sql_affiche_diplome);
      return $req;
    }
  }








?>

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

    public function ajout_diplomer($iduser,$iddiplome,$annee_diplome,$conn)
    {
        $sql = "INSERT INTO diplomer VALUES ('$iduser','$iddiplome',$annee_diplome);";
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

    // AFFICHAGE DES DIPLOMES D'UN ETUDIANT
    public function sql_etudiant_diplome ($requete,$conn)
    {
      $sql_affiche_etudiant_diplome = "SELECT diplomer.id_diplome,libelle_diplome FROM user,diplome,diplomer WHERE user.id_user = '$user' AND user.id_user = diplomer.id_user AND id_diplome";
      $req = $conn->query($sql_affiche_diplome) or die ('erreur diplomer'.$sql_affiche_diplome);
      return $req;
    }
  }

?>

<?php

class diplome
{
    private $id_diplome;
    private $libelle_diplome;


    public function diplome($iddiplome,$libellediplome)
    {
        $this-> id_diplome = $iddiplome;
        $this-> libelle_diplome = $libellediplome;
    }

    public function get_id_diplome()
    {
        return $this-> id_diplome;
    }

    public function get_libelle_diplome()
    {
        return $this-> libelle_diplome;
    }

    public function set_libelle_diplome($libellediplome)
    {
        $this-> libelle_diplome = $libellediplome;
    }
    //METHODES AJOUT D'UN DIPLOME

          public function ajout_diplome($libellediplome,$anneediplome)
          {
              $sql = "INSERT INTO diplome VALUES (NULL,'$libellediplome','$anneediplome');";
              $req = $conn->query($sql);
          }

          public function sql_diplome ($requete,$conn)
          {
            $sql_affiche_diplome = $requete;
            // echo $sql_affiche;
            // die();
            $req = $conn->query($sql_affiche_diplome) or die ('erreur'.$sql_affiche_diplome);
            return $req;
          }
}

// $objetdiplome = new diplome(4030,'bla bla bla');
// var_dump($objetdiplome);


?>

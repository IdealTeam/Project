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
}

$objetdiplome = new diplome(4030,'bla bla bla');
var_dump($objetdiplome);

//METHODES Ajout d'un diplome

      public function ajout_diplome($libellediplome)
      {
          $sql = "INSERT INTO user VALUES (NULL,'$libellediplome');";
          $req = $conn->query($sql);
      }

      public function affiche_diplome($requete,$retour)
      {
        $sql = "$requete";
        $req = $conn->query($sql);
        $data = $req->fetch();
        $retour = 1;
        return $data;
        }

      }

?>

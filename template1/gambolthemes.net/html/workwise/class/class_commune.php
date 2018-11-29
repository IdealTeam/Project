<?php

class commune
{
    private $Code_commune;
    private $Nom_commune;
    private $Code_postal;
    private $Libelle_acheminement;
    private $Coordonnes_gps;

    public function commune($Codecommune,$Nomcommune,$Codepostal,$Libelleacheminement,$Coordonnesgps)
    {
        $this->Code_commune = $Codecommune;
        $this->Nom_commune = $Nomcommune;
        $this->Code_postal = $Codepostal;
        $this->Libelle_acheminement = $Libelleacheminement;
        $this->Coordonnes_gps = $Coordonnesgps;
    }

    public function get_Code_commune()
    {
        return $this-> Code_commune;
    }

    public function get_Nom_commune()
    {
        return $this-> Nom_commune;
    }

    public function get_Code_postal()
    {
        return $this-> $Code_postal;
    }

    public function get_Libelle_acheminement()
    {
        return $this-> libelle_diplome;
    }

    public function get_Coordonnes_gps()
    {
        return $this-> Coordonnes_gps;
    }

    public function set_Nom_commune($Nomcommune)
    {
        $this-> Nom_commune = $Nomcommune;
    }

    public function set_Code_postal($Code_postal)
    {
        $this-> Code_postal = $Codepostal;
    }

    public function set_Libelle_acheminement($Libelle_acheminement)
    {
        $this-> Libelle_acheminement = $Libelleacheminement;
    }

    public function set_Coordonnes_gps($Coordonnesgps)
    {
        $this-> Coordonnes_gps = $Coordonnesgps;
    }

    //METHODES

    public function sql_commune ($requete,$conn)
    {
      $sql_commune = $requete;
      // echo $sql_affiche;
      // die();
      $req = $conn->query($sql_commune) or die ('erreur affichage commune '.$sql_commune);
      return $req;
    }
}

// $objetcommune = new commune(4030,'bla bla bla','20','11','geege','grhr');
// var_dump($objetcommune);

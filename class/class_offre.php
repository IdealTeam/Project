<?php

class offre
{
    private $id_offre;
    private $titre_offre;
    private $libelle_offre;
    private $date_publication_offre;
    private $date_debut_offre;
    private $date_fin_offre;

    public function offre($idoffre,$titreoffre,$libelleoffre,$datepublicationoffre,$datedebutoffre,$datefinoffre)
    {
        $this->id_offre = $idoffre;
        $this->titre_offre = $titreoffre;
        $this->libelle_offre = $libelleoffre;
        $this->date_publication_offre = $datepublicationoffre;
        $this->date_debut_offre = $datedebutoffre;
        $this->date_fin_offre = $datefinoffre;
    }

    //GETTER OFFRE

    public function get_id_offre()
    {
        return $this->id_offre;
    }

    public function get_titre_offre()
    {
        return $this->titre_offre;
    }

    public function get_libelle_offre()
    {
        return $this->libelle_offre;
    }

    public function get_date_publication_offre()
    {
        return $this->date_publication_offre;
    }

    public function get_date_debut_offre()
    {
        return $this->date_debut_offre;
    }

    public function get_date_fin_offre()
    {
        return $this->date_fin_offre;
    }

    //SETTER OFFRE

    public function set_titre_offre($titreoffre)
    {
        $this->libelle_offre = $libelle;
    }

    public function set_libelle_offre($libelleoffre)
    {
        $this->libelle_offre = $libelleoffre;
    }

    public function set_date_publication_offre($datepublicationoffre)
    {
        $this->date_publication_offre = $datepublicationoffre;
    }

    public function set_date_debut_offre($datedebutoffre)
    {
        $this->date_debut_offre = $datedebutoffre;
    }

    public function set_date_fin_offre($datefinoffre)
    {
        $this->date_fin_offre = $datefinoffre;
    }

    //METHODES
    //AJOUT D UN EMPLOI (offre en réalité)

    public function ajout_emploi($titreoffre,$libelleoffre,$datepublicationoffre,$datedebutoffre,$datefinoffre,$iduser,$conn)
    {
        $sql = "INSERT INTO offre VALUES('','$titreoffre','$libelleoffre','$datepublicationoffre','$datedebutoffre','$date_fin_offre','','','e',1,'$iduser');";
        $req = $conn->query($sql);
    }
    public function affiche_emploi($requete,$retour)
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

// $offre = new offre(4,'hgghgg','55415','5555','515155');
// var_dump($offre);
?>

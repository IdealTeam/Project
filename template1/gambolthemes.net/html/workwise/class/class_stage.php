<?php
// include ('class_offre.php');
class stage EXTENDS offre
{
    private $commentaire_stage;
    private $note_stage;

    public function stage($idoffre,$titreoffre,$libelleoffre,$datepublicationoffre,$datedebutoffre,$datefinoffre,$commentairestage,$notestage)
    {
        offre::offre($idoffre,$titreoffre,$libelleoffre,$datepublicationoffre,$datedebutoffre,$datefinoffre);
        $this->commentaire_stage = $commentairestage;
        $this->note_stage = $notestage;

    }

    //GETTER STAGE

    public function get_commentaire_stage()
    {
        return $this->commentairestage;
    }

    public function get_note_stage()
    {
        return $this->notestage;
    }

    //SETTER STAGE

    public function set_commentaire_stage($commentairestage)
    {
        $this->commentaire_stage = $commentairestage;
    }

    public function set_note_stage($notestage)
    {
        $this->note_stage = $notestage;
    }

    //METHODES
    // AJOUT STAGE

    public function ajout_stage($titreoffre,$libelleoffre,$datepublicationoffre,$datedebutoffre,$datefinoffre,$iduser,$conn)
    {
        $sql = "INSERT INTO offre VALUES (NULL,'$titreoffre','$libelleoffre','$datepublicationoffre','$datedebutoffre','$datefinoffre','','','s',1,$iduser);";
        // echo $sql;
        // // die();
        $req = $conn->query($sql) or die($sql);
    }

    public function sql_stage ($requete,$conn)
    {
      $sql_affiche = $requete;
      // echo $sql_affiche;
      // die();
      $req = $conn->query($sql_affiche) or die ('erreur'.$sql_affiche);
      return $req;
    }
}

// $heritage2 = new stage(1,'ll','2222','22222','22222','jjgghgh',5);
// var_dump($heritage2);

?>

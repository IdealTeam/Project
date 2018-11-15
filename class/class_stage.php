<?php
// include ('class_offre.php');
class stage EXTENDS offre
{
    private $commentaire_stage;
    private $note_stage;

    public function stage($idoffre,$libelleoffre,$datepublicationoffre,$datedebutoffre,$datefinoffre,$commentairestage,$notestage)
    {
        offre::offre($idoffre,$libelleoffre,$datepublicationoffre,$datedebutoffre,$datefinoffre);
        $this->commentaire_stage = $commentairestage;
        $this->note_stage = $notestage;

    }

    //GETTER OFFRE

    public function get_commentaire_stage()
    {
        return $this->commentairestage;
    }

    public function get_note_stage()
    {
        return $this->notestage;
    }

    //SETTER OFFRE

    public function set_commentaire_stage($commentairestage)
    {
        $this->commentaire_stage = $commentairestage;
    }

    public function set_note_stage($notestage)
    {
        $this->note_stage = $notestage;
    }

    //Fonction ajout stage

    public function ajout_stage($idoffre,$libelle_offre,$date_publication_offre,$date_debut_offre,$date_fin_offre,$commentairestage,$notestage)
    {
        $sql = "INSERT INTO entreprise values ('$libelleoffre','$datepublicationoffre','$date_debut_offre','$date_fin_offre')";
        $conn -> Query($sql);
    }

    //Fin de la fonction ajout stage

}

$heritage2 = new stage(1,'ll','2222','22222','22222','jjgghgh',5);
var_dump($heritage2);

?>

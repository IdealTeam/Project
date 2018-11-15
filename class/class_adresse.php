<?php

class adresse

{
    private $id_adresse;
    private $rue_adresse;


    public function adresse($idadresse,$rueadresse)
    {
        $this-> id_adresse = $rueadresse;
        $this-> rue_adresse = $idadresse;
    }

    //GETTER ADRESSE

    public function get_id_adresse()
    {
        return $this-> id_adresse;
    }

    public function get_rue_adresse()
    {
        return $this-> rue_adresse;
    }

    //SETTER ADRESSE

    public function set_rue_adresse($rueadresse)
    {
        $this-> rue_adresse = $rueadresse;
    }
}

$objetadresse = new adresse(4030,'bla bla bla');
var_dump($objetadresse);

?>

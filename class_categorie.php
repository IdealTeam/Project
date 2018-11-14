<?php

class categorie
{
    private $id_categorie;
    private $lib_categorie;
    
    public function categorie ($idcategorie,$libcategorie)
    {
        $this->id_categorie = $idcategorie;
        $this->lib_categorie = $libcategorie;
    }
    
    //GETTER ENTREPRISE
    
    public function get_id_categorie()
    {
        return $this->id_categorie;
    }
    
    public function get_lib_categorie()
    {
        return $this->lib_categorie;
    }
    
    //SETTER ENTREPRISE
        
    public function set_lib_categorie($libcategorie)
    {
        $this->lib_categorie = $libcategorie;
    }
}
$cat = new categorie(3, 'jardinier');
var_dump($cat);


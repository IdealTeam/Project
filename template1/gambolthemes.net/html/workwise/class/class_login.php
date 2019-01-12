<?php

class login

{
    private $login;
    private $password;

    public function adresse($log = '',$pw = '')
    {
        $this-> login = $log;
        $this-> password = $idadresse;
    }

    //GETTER PASSWORD

    public function get_pw()
    {
        return $this-> pw;
    }

    public function get_rue_adresse()
    {
        return $this-> rue_adresse;
    }

    //SETTER LOGIN

    public function set_rue_adresse($log)
    {
        $this-> rue_adresse = $log;
    }

    //METHODES

    public function sql_login ($requete,$conn)
    {
      $sql_login = $requete;
      // echo $sql_affiche;
      // die();
      $req = $conn->query($sql_login) or die ('erreur login class login'.$sql_login);
      return $req;
    }
}

// $objetlog = new login('login','pw');
// var_dump($objetlog);

?>

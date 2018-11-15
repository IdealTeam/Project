<?php
class user
{
    private $id_user;
    private $nom_user;
    private $tel_user;
    private $email_user;
    private $photo_user;
    private $login_user;
    private $pw_user;
    private $etat_user = 1;

    public function user ($iduser,$nomuser,$teluser,$emailuser,$photouser,$loginuser,$pwuser,$etatuser)
    {
        $this->id_user = $iduser;
        $this->nom_user = $nomuser;
        $this->tel_user = $teluser;
        $this->email_user = $emailuser;
        $this->photo_user = $photouser;
        $this->login_user = $loginuser;
        $this->pw_user = $pwuser;
        $this->etat_user = $etatuser;
    }

    //GETTER USER

    public function get_id_user()
    {
        return $this->id_user;
    }

    public function get_nom_user()
    {
        return $this->nom_user;
    }

    public function get_tel_user()
    {
        return $this->tel_user;
    }

    public function get_email_user()
    {
        return $this->email_user;
    }

    public function get_photo_user()
    {
        return $this->photo_user;
    }

    public function get_pw_user()
    {
        return $this->pw_user;
    }

    public function get_etat_user()
    {
        return $this->etat_user;
    }

    //SETTER USER

    public function set_nom_user($nomuser)
    {
        $this->nom_user = $nomuser;
    }

    public function set_tel_user($teluser)
    {
        $this->tel_user = $teluser;
    }

    public function set_email_user($emailuser)
    {
        $this->email_user = $emailuser;
    }

    public function set_photo_user($photouser)
    {
        $this->photo_user = $photouser;
    }

    public function set_login_user($loginuser)
    {
        $this->login_user = $loginuser;
    }

    public function set_pw_user($pwuser)
    {
        $this->pw_user = $pwuser;
    }

    public function set_etat_user($etatuser)
    {
        $this->etat_user = $etatuser;
    }

    public function crypt_pw()
    {
        $pw = $this->pw_user = password_hash($string);
        return $pw;
    }
}

//$objetuser = new user(1,'toto','05500000','toto@gmail.com','photo.jpg','t','***',1);
//var_dump($objetuser);

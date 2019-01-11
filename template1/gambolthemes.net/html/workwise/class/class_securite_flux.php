<?php
  class securite
  {
    //FLUX DE DONNEES ENTRANT
    public static function FE($chaine)
    {
      if(ctype_digit($chaine))
      {
        $chaine = intval($chaine);
      }
      else
      {
        // $chaine = mysqli_escape_string($chaine);
        $chaine = addcslashes($chaine, '%_');
      }
      return $chaine;
    }

    //FLUX DE DONNES SORTANT
    public static function FS($chaine)
    {
      return htmlentities($chaine);
    }

    //MOTS DE PASSE
    // public function crypt_pw($password)
    // {
    //     $crypt = password_hash($password);
    //     return $crypt;
    // }
    public function crypt_pw($password)
    {
        $grain = 'jsgvFuG539K';
        $sel = '55sjRON63pM';
        $PWcrypte = sha1($grain.$password.$sel);
        // $crypt = password_hash($password);
        return $PWcrypte;
    }
  }

  // $p = new securite();
  // $pw = $p->crypt_pw('toto');
  // var_dump($pw);
?>

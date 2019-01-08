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
        $chaine = mysql_real_escape_string($chaine);
        $chaine = addcslashes($chaine, '%_');
      }
      return $chaine;
    }

    //FLUX DE DONNES SORTANT
    public static function FS($chaine)
    {
      return htmlentities($chaine);
    }

  }







?>

<?php
//AFFICHAGE ETUDIANT
      $userlog = new user('','','','','','','','');
      $sql_etudiant = "SELECT id_user,nom_user,prenom_utilisateur,tel_user,email_user,photo_profil_user FROM user WHERE statut_user ='u';";
      $req_etudiant = $userlog->sql_user($sql_etudiant,$conn) or die("erreur requete.php l.42".$sql_etudiant);

      $diplomeexistant = new diplome('','');
      $sqlDE = "SELECT libelle_diplome FROM diplome;";
      $req_DE = $diplomeexistant->sql_diplome($sqlDE,$conn);

?>

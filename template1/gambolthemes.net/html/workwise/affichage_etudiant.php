<?php
//AFFICHAGE ETUDIANT
      $userlog = new user('','','','','','','','');
      $sql_etudiant = "SELECT id_user,nom_user,prenom_utilisateur,tel_user,email_user,photo_profil_user FROM user WHERE statut_user ='u';";
      $req_etudiant = $userlog->sql_user($sql_etudiant,$conn) or die("erreur affichage_etudiant".$sql_etudiant);

      $diplomeexistant = new diplome('','');
      $sqlDE = "SELECT id_diplome,libelle_diplome FROM diplome;";
      $req_DE = $diplomeexistant->sql_diplome($sqlDE,$conn);

//AJOUT DES AMIS
      if (isset($_GET['follow']) AND isset($_GET['ami']))
      {
        $amiAsuivre = intval($_GET['ami']);
  			$ami = new suivre();
  			$reqami = $ami->ajout_ami($user,$amiAsuivre,$conn);
  			?>
  				<script type="text/javascript">
  					document.location.href="etudiant.php";
  				</script>
  			<?php
      }
      elseif (isset($_GET['delfollow']) && isset($_GET['ami']))
      {
        $amiASupprimer = intval($_GET['ami']);
        $sqlDelAmi = "DELETE FROM suivre WHERE id_user = '$user' AND id_user_suivre = '$amiASupprimer';";
        $amiDel = new suivre();
        $reqDelAmi = $amiDel->sql_ami($sqlDelAmi,$conn);
        ?>
  				<script type="text/javascript">
  					document.location.href="etudiant.php";
  				</script>
  			<?php
      }

?>

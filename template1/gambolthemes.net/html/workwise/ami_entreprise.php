<?php
//AJOUT DES AMIS
      if (isset($_GET['Efollow']) AND isset($_GET['ami']))
      {
        $amiAsuivre = intval($_GET['ami']);
  			$ami = new suivre();
  			$reqami = $ami->ajout_ami($user,$amiAsuivre,$conn);
  			?>
  				<script type="text/javascript">
  					document.location.href="companies.php";
  				</script>
  			<?php
      }
      elseif (isset($_GET['delEfollow']) && isset($_GET['ami']))
      {
        $amiASupprimer = intval($_GET['ami']);
        $sqlDelAmi = "DELETE FROM suivre WHERE id_user = '$user' AND id_user_suivre = '$amiASupprimer';";
        $amiDel = new suivre();
        $reqDelAmi = $amiDel->sql_ami($sqlDelAmi,$conn);
        ?>
        <script type="text/javascript">
          document.location.href="companies.php";
        </script>
        <?php
      
      }
?>

<?php
  session_start();
  if (isset($_GET['search']))
  {
    if (!empty($_POST['search_input']))
    {
      $search = $_POST['search_input'];
      $_SESSION['FILTRE_RECHERCHE'] = $search;
    }
    if (!empty($_POST['search_ville_input']))
    {
      $ville = $_POST['search_ville_input'];
      $_SESSION['FILTRE_RECHERCHE_VILLE'] = $ville;
    }    
    ?>
    <script type="text/javascript">
      document.location.href="jobs.php?search";
    </script>
    <?php
  }
?>

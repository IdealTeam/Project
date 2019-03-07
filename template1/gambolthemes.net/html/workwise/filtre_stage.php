<?php
  session_start();
  if (isset($_GET['searchS']))
  {
    if (!empty($_POST['input_search_stage']))
    {
      $searchS = $_POST['input_search_stage'];
      $_SESSION['FILTRE_RECHERCHE_STAGE'] = $searchS;
    }
    if (!empty($_POST['input_search_ville_stage']))
    {
      $villeS = $_POST['input_search_ville_stage'];
      $_SESSION['FILTRE_RECHERCHE_VILLE_STAGE'] = $villeS;
    }
    ?>
    <script type="text/javascript">
      document.location.href="projects.php?searchS";
    </script>
    <?php
  }
?>

<?php session_start();
if (!isset($_SESSION['IDENTIFIANT']))
{
   // header ("Location:index.php");
?>
   <script type="text/javascript">
     document.location.href="index.php";
   </script>
<?php
   exit();
}
if (isset($_GET['logout']))
{
	session_unset();
  ?>
     <script type="text/javascript">
       document.location.href="index.php";
     </script>
  <?php
	// header("Location:index.php");
}
?>

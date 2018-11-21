<?php session_start();
if (!isset($_SESSION['IDENTIFIANT']))
{
   header ("Location:index.php");
   exit();
}
if (isset($_GET['logout']))
{
	session_unset();
	header("Location:index.php");
}
?>

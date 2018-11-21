<?php session_start();
if (!isset($_SESSION['IDENTIFIANT']))
{
   header ("Location:index-2.php");
   exit();
}
if (isset($_GET['logout']))
{
	session_unset();
	header("Location:index-2.php");
}
?>

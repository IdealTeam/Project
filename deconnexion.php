<?php
if (isset ($_GET['logout']))
{
	session_destroy(); //On détruit le cookie de l'identifiant.
	?>
	<script type="text/javascript">
		document.location.href="xampp/htdocs/programmes/PPE3/index.php";
	</script>
	<?php
}
?>

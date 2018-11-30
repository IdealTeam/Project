<?php
if (isset ($_GET['logout']))
{
	// session_unset(); A DECOMMANTER LORS DE RESOLUTION DU CHEMIN
	echo 'Chemin à definire vers PPE3/index.php';
	die()
	?>
	<script type="text/javascript">
		document.location.href="/index.php";
	</script>
	<?php
}
?>

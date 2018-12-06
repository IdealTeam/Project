<?php
if (isset ($_GET['logout']))
{
	session_unset(); //A DECOMMANTER LORS DE RESOLUTION DU CHEMIN

	?>
	<script type="text/javascript">
		document.location.href="http://localhost/PPE3/"; //Probleme lorqu'on va mettre le site en ligne / Changer le lien!!
	</script>
	<?php
}
?>

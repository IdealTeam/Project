<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, maximum-scale=5.0"/>
	<meta charset="utf-8">
	<title>Inscription</title>
	<link rel="icon" type="image/png" href="./img/favincon.png" />
	<link rel="stylesheet" type="text/css" href=".\bootstrap\css\bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script type="text/javascript" src=".\bootstrap\js\bootstrap.js"></script>
</head>
<body>
	<?php defined('CONSTANT') or define('URL_INS', 'PPE3/inscription.php'); ?>

	<div id="div_logo">
		<img src="./img/favincon.png" width="100" height="100">
	</div>

	<div class="container choix">
		<div class="row">
			<div class="col-md-6 choixbis" id="un">
				<a href="<?php URL_INS ?>?entreprise" title="Je suis une entreprise">
					<i class="fas fa-user-tie"></i>
					<p>
						Entreprise
					</p>
				</a>
			</div>
			<div class="col-md-6 choixbis" id="deux">
				<a href="<?php URL_INS ?>?etudiant" title="Je suis un étudiant">
					<i class="fas fa-user-graduate"></i>
					<p style="color:trans">
						Etudiant
					</p>
				</a>
			</div>
		</div>
	</div>
	<?php
		if (isset($_GET['entreprise']))
		{
	?>
			<style type="text/css">
				#un
				{
					background-color: rgb(189, 189, 189,0.6);
				}
			</style>
	<?php
		}
		elseif (isset($_GET['etudiant']))
		{
			?>
					<style type="text/css">
						#deux
						{
							background-color: rgb(189, 189, 189,0.6);
						}
					</style>
			<?php
		}
	if (isset($_GET['entreprise']) OR isset($_GET['etudiant']))
	{
	?>
		<div id="div_formulaire">
			<form method="POST" action="traitement_inscription.php" onSubmit="return verif_pw();">
				<div class="div_ins_table">
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Nom</label>
							<br>
							<input type="text" name="nom" placeholder="">
						</div>
					</div>
					<?php
					if (isset($_GET['etudiant']))
					{
					?>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Prénom</label>
							<br>
							<input type="text" name="prenom" placeholder="">
						</div>
					</div>
					<?php
					}
					?>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Téléphone</label>
							<br>
							<input type="text" name="tel" placeholder="">
						</div>
					</div>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Email</label>
							<br>
							<input type="mail" name="mail" placeholder="">
						</div>
					</div>
					<?php
					if (isset($_GET['entreprise']))
					{
					?>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Raison sociale</label>
							<br>
							<input type="text" name="rs" placeholder="">
						</div>
					</div>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Contact entreprise</label>
							<br>
							<input type="text" name="ce" placeholder="">
						</div>
					</div>
					<?php
					}
					?>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Identifiant de connexion</label>
							<br>
							<input type="text" name="id_conn" placeholder="login" required>
						</div>
					</div>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Mot de passe</label>
							<br>
							<input type="password" name="pw1" id="pw1" placeholder="">
						</div>
					</div>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Vérification du mot du passe</label>
							<br>
							<input type="password" name="pw2" value="" id="pw2" placeholder="">
						</div>
					</div>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<input type="checkbox" name="condition" id="input_condition" value="oui" placeholder="">
							<label for="input_condition">Accepter les conditions d'utilisation</label>
						</div>
					</div>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<input type="submit"></input>
							<a href="index.php" title="Retour connexion"><i class="fas fa-arrow-left"></i></a>
						</div>
					</div>
				</div>
			</form>
		</div>
	<?php
	}
	?>
	<script type="text/javascript">
		function verif_pw()
		{
			var pw1 = document.getElementById('pw1').value;
			var pw2 = document.getElementById('pw2').value;
			if (pw1 != pw2)
			{
				alert("Les mots de passes ne sont pas identiques");
				return false;
			}
			else if (pw1 == pw2)
			{
				alert("ok");
				return true;
			}
		}
	</script>
</body>
</html>

<style type="text/css">
	body
	{
		background-image: url(./img/604.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		font-family: arial,cursive;
		/*background-color: white;*/
	}
	input
	{
		margin: 4px;
	}
	label
	{
		margin-left: 4px;
		margin-top: 4px;
	}
	a
	{
		cursor: pointer;
		font-style: none;
		color: pointer;
	}
	i
	{
		font-size: 90px;
	}
	.fa, .fas
	{
		margin-top: 5px;
	}
	.div_ins_table
	{
		display: table;
	}
	.div_ins_tr
	{
		display: table-row;
	}
	.div_ins_td
	{
		display: table-cell;
	}
	#div_logo
	{
		position: relative;
		text-align: left;
		margin: 6px 6px 0px 6px;
	}
	.choix
	{
		background-color: rgba(255,255,255,0.8);
		width: 50%;
		margin: 0 auto 6px;
		vertical-align: middle;
	}
	.choixbis
	{
		text-align: center;
		vertical-align: middle;
		height: 120px;
	}
	#div_formulaire
	{
		background-color: rgba(255,255,255,0.8);
		padding: 4px;
		width: 50%;
		height: 100%;
		margin: 0 auto;
	}
</style>

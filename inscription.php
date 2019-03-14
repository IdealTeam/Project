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

<!-- CONSTANTES -->

	<?php defined('CONSTANT') or define('URL_INS', 'PPE3/inscription.php'); ?>

<!-- LOGO BAHUET SUR LA PAGE INSCRIPTION -->

	<div id="div_logo">
		<a href="index.php" title="Page de connexion">
			<img src="./img/favincon.png" width="100" height="100">
		</a>
	</div>

<!-- CHOIX FORMULAIRE ENTRE ENTREPRISE OU ETUDIANT -->

	<div class="container choix">
		<div class="row">
			<div class="col-md-6 choixbis" id="un">
				<a href="<?php URL_INS; ?>?entreprise" title="Je suis une entreprise">
					<i class="fas fa-user-tie" style="font-size: 90px;"></i>
					<p>
						Entreprise
					</p>
				</a>
			</div>
			<div class="col-md-6 choixbis" id="deux">
				<a href="<?php URL_INS; ?>?etudiant" title="Je suis un étudiant">
					<i class="fas fa-user-graduate" style="font-size: 90px;"></i>
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
		$link = 'entreprise';
		?>
		<style type="text/css">
			#un
			{
				background-color: rgba(189, 189, 189, 0.6);
				border-top: 1px solid rgb(164, 164, 164);
			}
			#deux
			{
				border-top: 1px solid rgb(164, 164, 164);
				border-right: 1px solid rgb(164, 164, 164);
			}
		</style>
	<?php
	}
	elseif (isset($_GET['etudiant']))
	{
		$link = 'etudiant';
		?>
		<style type="text/css">
			#deux
			{
				background-color: rgba(189, 189, 189,0.6);
				border-top: 1px solid rgb(164, 164, 164);
				border-right: 1px solid rgb(164, 164, 164);
			}
		</style>

<!-- FORMULAIRE EN FONCTION DU TYPE CHOISI (ENTREPRISE OU ETUDIANT) -->

	<?php
	}

	if (isset($_GET['entreprise']) OR isset($_GET['etudiant']))
	{
	?>
		<div id="div_formulaire">
			<form method="POST" action="traitement_inscription.php?<?php echo $link ;?>" onSubmit="return verif_pw();">
				<div class="div_ins_table">
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Nom</label>
							<br>
							<input type="text" name="nom" placeholder="">
						</div>
					<!-- </div> -->
					<?php
					if (isset($_GET['etudiant']))
					{
					?>
					<!-- <div class="div_ins_tr"> -->
						<div class="div_ins_td">
							<label>Prénom</label>
							<br>
							<input type="text" name="prenom" placeholder="">
						</div>
					<!-- </div> -->
					<?php
					}
					if (isset($_GET['entreprise']))
					{
					?>
					<!-- <div class="div_ins_tr"> -->
						<div class="div_ins_td">
							<label>Contact entreprise</label>
							<br>
							<input type="text" name="ce" placeholder="">
						</div>
					<!-- </div> -->
					<!-- <div class="div_ins_tr"> -->
						<div class="div_ins_td">
							<label>Raison sociale</label>
							<br>
							<input type="text" name="rs" placeholder="">
						</div>
					<?php
					}
					?>
					</div>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Email</label>
							<br>
							<input type="email" name="mail" id="email" placeholder="">
						</div>
					<!-- </div> -->
					<!-- <div class="div_ins_tr"> -->
						<div class="div_ins_td">
							<label>Téléphone</label>
							<br>
							<input type="text" name="tel" placeholder="" maxlength="10">
						</div>
					</div>
					<div class="div_ins_tr">
						<div class="div_ins_td">
							<label>Identifiant de connexion</label>
							<br>
							<input type="text" name="id_conn" placeholder="login" required>
						</div>
					<!-- </div> -->
					<!-- <div class="div_ins_tr"> -->
						<div class="div_ins_td">
							<label>Mot de passe</label>
							<br>
							<input type="password" name="pw1" id="pw1" placeholder="">
						</div>
					<!-- </div> -->
					<!-- <div class="div_ins_tr"> -->
						<div class="div_ins_td">
							<label>Vérification du mot du passe</label>
							<br>
							<input type="password" name="pw2" value="" id="pw2" placeholder="">
						</div>
					</div>
				</div>
					<!-- <div class="div_ins_tr"> -->
						<!-- <div class="div_ins_td"> -->
							<input type="checkbox" name="condition" id="input_condition" value="oui" required>
							<label for="input_condition"><a href="pdf/condition_utilisation.pdf" target="_blank">Accepter les conditions d'utilisation</a></label>
						<!-- </div> -->
					<!-- </div> -->
					<!-- <div class="div_ins_tr"> -->
						<!-- <div class="div_ins_td"> -->
						<br>
						<div class="div_enregistrement">
							<a href="index.php" title="Retour page connexion">
								<i class="fas fa-arrow-left" style="font-size:22px; text-decoration:none;"></i>
							</a>
							<button type="submit" name="b_inscription">Valider</button>
						</div>
						<!-- </div> -->
					<!-- </div> -->
				<!-- </div> -->
			</form>
		</div>
	<?php
	}
	?>

<!-- VERIFICATION QUE LES DEUX MOT DE PASSE CORRESPONDENT -->

	<script type="text/javascript">
		function verif_pw()
		{
			var pw1 = document.getElementById('pw1').value;
			var pw2 = document.getElementById('pw2').value;
			// var mail = document.getElementById('email').value;
			// var reg = new RegExp('[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
			if (pw1 != pw2)
			{
				alert("Les mots de passes ne correspondent pas");
				return false;
			}
			else if (pw1 == pw2)
			{
				// alert("ok");
				return true;
			}
			// if (reg.test(mail))
			// {
			// 	return true;
			// }
			// else
			// {
			// 	alert("Adresse email invalide !")
			// 	return false;
			// }
		}
	</script>
</body>
</html>

<!-- STYLE CSS DE LA PAGE -->

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
  .div_enregistrement
	{
		margin:0 auto;
		text-align: center;
		vertical-align: middle;
	}
	.fa, .fas
	{
		margin-top: 5px;
	}
	.div_ins_table
	{
		display: table;
		width: 100%;
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
		border-right: 1px solid rgb(164, 164, 164);
		border-bottom: 1px solid rgb(164, 164, 164);
		box-shadow: 0px 5px 10px black;
	}
</style>

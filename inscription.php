<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, maximum-scale=5.0"/>
	<meta charset="utf-8">
	<title>Inscription</title>
	<link rel="icon" type="image/png" href="./img/favincon.png" />
</head>
<body>
	<div id="div_logo">
		<img src="./img/favincon.png" width="100" height="100">
	</div>
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
				<div class="div_ins_tr">
					<div class="div_ins_td">
						<label>Prénom</label>
						<br>
						<input type="text" name="prenom" placeholder="">
					</div>
				</div>
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
				<div class="div_ins_tr">
					<div class="div_ins_td">
						<label>Photo</label>
						<br>
						<input type="text" name="photo" placeholder="">
					</div>
				</div>
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
					</div>
				</div>
			</div>
		</form>
	</div>

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
	#div_formulaire
	{
		background-color: rgba(255,255,255,0.8);
		padding: 4px;
		width: 50%;
		height: 100%;
		margin: 0 auto;
		background-color: 
	}
</style>
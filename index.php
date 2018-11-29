<?php session_start();?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- <meta charset="ISO-8859-1"> -->
	<!-- <meta charset="ANSI"> -->
	<meta name="viewport" content="width=device-width, maximum-scale=5.0"/>
	<meta charset="utf-8">
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
	<link rel="icon" type="image/png" href="./img/favincon.png" />
	<link rel="apple-touch-icon" href="./img/favincon.png" />
	<link rel="stylesheet" type="text/css" href="#">
    <link rel="stylesheet" type="text/css" href=".\bootstrap\css\bootstrap.css">
		<script type="text/javascript" src=".\bootstrap\js\bootstrap.js"></script>
	<title>Connexion</title>
</head>
<body>
	<div id="div_logo">
		<img src="./img/favincon.png" width="100" height="100">
	</div>
	<div id="fenetre_connexion">
		<!-- <h1 id="titre_login">Connectez-vous pour continuer !</h1> -->
<!-- 		<br>
		<br>
        <br> -->
		<form method="POST" action="#" class="form-group" accept-charset=utf-8>
			<div class="d_table">
				<div class="d_tr">
					<div class="d_td">
						<div><label for="login">Identifiant</label></div>
						<div><input type="text" name="login" placeholder="Login" required class="form-control" ></div>
					</div>
				</div>
				<div class="d_tr">
					<div class="d_td">
						<div><label for="password">Mot de passe</label></div>
						<div><input type="password" name="password" placeholder="Password" required class="form-control"></div>
					</div>
				</div>
				<div class="d_tr">
					<div class="d_td">
						<div id="div_souvenir">
							<div style="width: 100%;">
								<div style="display: block;float: left;vertical-align: middle; width: 10%;">
									<input type="checkbox"  name="souvenir" id="souvenir">
								</div>
								<div style="display: block; float: right;vertical-align: middle;width: 90%;">
									<label for="souvenir">Se souvenir de moi</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d_bouton">
					<button type="submit" name="connexion" id="log" class="btn btn-primary btn-sm">Se connecter</button>
				</div>
				<div id="div_inscrire">
					<span title="S'inscrire à ViaBahuet">Pas de compte ?<a href="inscription.php"> S'inscrire </a></span>
				</div>
			</div>
		</form>
	</div>
	<div id="error_connex">

<!------------------------------------------------------------->
<!---TRAITEMENT DE LA CONNEXION AVEC LA BDD------------>
<!------------------------------------------------------------->

	<?php
		if (isset($_POST['connexion']))
		{
			include ('template1\gambolthemes.net\html\workwise\class\bdd.inc.php'); // inclure la bdd 
			$id_log = $_POST['login'];
			$pw = $_POST['password'];
		    /* Récupère le nombre de lignes qui correspond à la requête SELECT */

		    $SQL = "SELECT COUNT(*) FROM user WHERE login_user = '$id_log' AND pw_user = '$pw' AND etat_user = 1;";

		    if ($req = $conn->query($SQL))
		    {
			    if ($req->fetchColumn() > 0)
			    {
			        $sql2 = "SELECT id_user,login_user,pw_user FROM user WHERE login_user = '$id_log' AND pw_user = '$pw' ;";
			        foreach ($conn->query($sql2) as $row)
			        {
				        $_SESSION['IDENTIFIANT'] = $id_log;
								//RECUPERATION ID UTILISATEUR

								$login = $_SESSION['IDENTIFIANT'];
								$sql = "SELECT id_user,login_user FROM user WHERE login_user = '$login';";
								$req = $conn->query($sql);
								$data = $req->fetch();
								// $user = new user ('','','','','','','','');
								// $user_ = $user->affiche_user("SELECT id_user,login_user FROM user WHERE login_user = '$login';",1,$conn);
								// // $id_user = $data['id_user'];
								// A GARDER OU PAS
								$_SESSION['UTILISATEUR'] = $data['id_user'];
								$id_user = $_SESSION['UTILISATEUR'];
				        ?>
				        <script type="text/javascript">
				        	document.location.href="template1/gambolthemes.net/html/workwise/index-2.php";
				        </script>
				        <?php
				        exit();
							}
							// $error = '';
			    }
			   	else
			    {
			        // $error = "Identifiant ou mot de passe incorrect";
							?>
								<script type="text/javascript">
									alert('Identifiant ou mot de passe incorrect');
								</script>
							<?php
			    }
			}
		}

	?>

	</div>
</body>
</html>
<style type="text/css">
body
{
	width: 100%;
	/*background-image: url("./img/414.jpg");*/
	background-repeat:repeat;
	/*background-color: rgba(0,0,0,0.8);*/
	background:linear-gradient(0deg, rgba(0,0,0,0.3), rgba(0, 0, 0, 0.3)),url(./img/604.jpg);
	background-size: auto,cover;
}
@media all and (min-width: 300px) and (max-width: 420px)
{
	body
	{
		width: 100%;
		font-family: arial, cursive;
		background:linear-gradient(0deg, rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(./img/604.jpg);
		background-size: contain;
		background-repeat:repeat;
	}
}
.d_table
{
	display: table;
	/*border: 1px solid #808080;*/
	padding: 10px 40px 20px 40px;
	margin: 0 auto;
	border-radius: 0px;
	border-color: #ff5a3a;
	background-color: rgba(255,255,255,0.8);
}
.d_tr
{
	display: table-row;
}
.d_td
{
	display: table-cell;
	padding-top: 10px;
}
#log
{
	display: block;
	margin: 0 auto;
}
.d_bouton
{
	margin-top: 6px;
}
#div_logo
{
	position: relative;
	text-align: left;
	margin: 6px 6px 6px 6px;
}
#fenetre_connexion
{
	margin: 100px auto;
}
#div_inscrire
{
	margin-top: 14px;
	margin-bottom: 0px;
	font-size: 12px;
	text-align: center;
	vertical-align: middle;
}
#error_connex
{
	margin-top: 10px;
	text-align: center;
	color: #ff0000;
	font-size: 12px;
}
#titre_login
{
  text-align: center;
  color: /*#52b9d8*/ #90caf8;
  margin-top: 50px;
}
.btn-primary
{
	background-color: #42a5f6;
	border-color: #42a5f6;
	border-radius: 0px;
}
</style>

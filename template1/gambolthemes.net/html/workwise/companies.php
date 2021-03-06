<?php
	session_start();
	//LOADER
	include('loader.php');
	include('.\class\bdd.inc.php');
	include('menu.inc.php');
	include('requete.php');
	include('ami_entreprise.php');
	include('function.inc.php');
	//include('sessioncondition.inc.php');
?>
<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<title>PPE3</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<header>

</header>
<body oncontextmenu="return false;">

	<div class="wrapper">

	<div class="wrapper">
		<section class="companies-info">
			<div class="container">
				<div class="company-title">
					<h3>Liste des entreprises </h3>
				</div><!--company-title end-->
				<div class="companies-list">
					<div class="row">

						<!-- une entreprise-->
						<?php
							//affiche des stage
							while ($data_entreprise = $req_entreprise->fetch())
							{
								$id_entreprise = $data_entreprise['id_user'];
						?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<a href="company-profile.php?id_e=<?php echo $id_entreprise;?>" title="Profil entreprise">
										<img src="<?php if(empty($data_entreprise['photo_profil_user']))
															{
																echo "images/profil.jpg";
															}
															elseif (isset($data_entreprise['photo_profil_user']))
															{
																echo $data_entreprise['photo_profil_user'];
															}?>" width="90" height="90" alt="">
										</a>
									<h3>
										<?php
											echo $data_entreprise['nom_user'];
										?>
									</h3>
									<h4>
										<?php
											echo $data_entreprise['email_user'];
										?>
									</h4>
									<h4>
										<?php
											echo $data_entreprise['nom_commune'];
										?>
									</h4>
									<ul>
										<!-- <li>
											<a href="companies.php?follow&ami=<?php echo $id_entreprise; ?>" title="Suivre" class="follow">Nous suivre</a>
										</li> -->
										<li>
											<?php
											//Requete de selection de la table Suivre
												$user = $_SESSION['UTILISATEUR'];
												$osuivre = new suivre();
												$sqlsuivre = "SELECT * FROM suivre WHERE id_user = '$user';";
												$reqsuivre = $osuivre->sql_ami($sqlsuivre,$conn);

												//On parcours les résultat de la requête et les rentre dans un tableau
												$tableauAmi = Array();
												while ($datasuivre = $reqsuivre->fetch())
												{
													$iduser = intval($datasuivre['id_user']);
													$idusersuivi = intval($datasuivre['id_user_suivre']);
													// echo $user;
													$tableauAmi[] = $idusersuivi;
													// echo $idusersuivi."<br />";
												}
												//On va chercher le resultat corespondant à l'Id de l'entreprise cliquée
												foreach ($tableauAmi as $key)
												{
													if ($key == $id_entreprise)
													{
														$idusersuivi = $key;
													}
												}
												//On compare ce résultat pour gérer un affichage

												//CAS OU C'EST LE PROFIL UTILISATEUR EN COURS
												if ($user == $id_entreprise)
												{
													$CMoi = 1;
													?>
														<h2>Vous</h2>
													<?php
												}
												else //CAS OU L'UTILISATEUR AJOUTE UN AMI
												{
													$CMoi = 0;
													if (!empty($iduser) AND $user == $iduser AND $idusersuivi == $id_entreprise)
													{
														// echo $user."<br />";
														// echo $iduser."<br />";
														// echo $idusersuivi."<br />";
														// echo $id_entreprise;
														?>
														<a href="companies.php?delEfollow&ami=<?php echo $id_entreprise; ?>" title="Ami ajouté" class="follow">Ami</a>
														<?php
													}
													else //CAS OU L'UTILISATEUR SE DESABONNE D'UN PROFIL
													{
														// echo $user."<br />";
														// echo $iduser."<br />";
														// echo $idusersuivi."<br />";
														// echo $id_entreprise;
												?>
														<a href="companies.php?Efollow&ami=<?php echo $id_entreprise; ?>" title="Ajouter en ami" class="follow">Suivre</a>
													<?php
													}
												}
												?>
										</li>
										<li>
											<?php
												if ($CMoi == 0)
												{
											?>
												<a href="mailto:<?php echo $data_entreprise['email_user']; ?>?Subject=Hello%20again" target="_top" title="" class="message-us">
													<i class="fa fa-envelope"></i>
												</a>
											<?php
												}
												elseif ($CMoi == 1)
												{
													echo '';
												}
											?>
										</li>
									</ul>
								</div>
								<!--<a href="#" title="" class="view-more-pro">Profil</a>-->
							</div><!--company_profile_info end-->
						</div>
						<?php
					}
					 ?>
				<!-- <div class="process-comm">
					<div class="spinner">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>
				</div> -->
				<!--process-comm end-->
			</div>
		</section><!--companies-info end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/disabled.js"></script>

<!-- LOADER -->
<script type="text/javascript">
  jQuery(window).load(function(){ jQuery(".loader").fadeOut("200");});
</script>

</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
</html>

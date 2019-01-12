<?php
	session_start();
	include('.\class\bdd.inc.php');
	include('menu.inc.php');
	include('affichage_etudiant.php');
	//include('sessioncondition.inc.php');
?>
<!DOCTYPE html>
<html>

<!-- Mirrored from gambolthemes.net/html/workwise/companies.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 09:11:14 GMT -->
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
					<h3>Liste des etudiants</h3>
				</div><!--company-title end-->

				<?php
				while ($data_DE = $req_DE->fetch())
				{
					?>
	        <div class="company-title">
	         <h3><?php echo $data_DE['libelle_diplome']; ?></h3>
	       </div><!--company-title end-->

				<div class="companies-list">
					<div class="row">

						<!-- un etudiant-->
						<?php
						$id_diplome = $data_DE['id_diplome'];
						$oetudiant = new user ('','','','','','','','');
						$req_etudiant = $oetudiant->afficheetudiant($id_diplome,$conn);

						while ($data_etudiant = $req_etudiant->fetch())
						{
						$id_etudiant = $data_etudiant['id_user'];
						?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<a href="etudiant_profil.php?id_u=<?php echo $id_etudiant;?>">
									<!--<img src="images/resources/cmp-icon.png" alt="">-->
										<img src="<?php if(empty($data_etudiant['photo_profil_user']))
															{
																echo "images/profil.jpg";
															}
															elseif (isset($data_etudiant['photo_profil_user']))
															{
																echo $data_etudiant['photo_profil_user'];
															}?>" width="90" height="90" alt="photo profil">
									</a>
									<h3>
										<?php
											echo $data_etudiant['prenom_utilisateur'].' '.$data_etudiant['nom_user'];
										?>
									</h3>
                  <h4>
										<?php
											echo $data_etudiant['tel_user'];
										?>
									</h4>
                  <h4>
										<?php
											echo $data_etudiant['email_user'];
										?>
									</h4>
									<ul>
										<li>
											<?php
												$user = $_SESSION['UTILISATEUR'];
												$osuivre = new suivre();
												$sqlsuivre = "SELECT * FROM suivre WHERE id_user = '$user';";
												$reqsuivre = $osuivre->sql_ami($sqlsuivre,$conn);
												$datasuivre = $reqsuivre->fetch();
												$iduser = intval($datasuivre['id_user']);
												$idusersuivi = intval($datasuivre['id_user_suivre']);
												// echo $user;
												if ($user == $iduser AND $idusersuivi == $id_etudiant)
												{
													?>
													<a href="etudiant.php?delfollow&ami=<?php echo $id_etudiant; ?>" title="Ami ajouté" class="follow">Ami</a>
													<?php
												}
												else
												{
											?>
													<a href="etudiant.php?follow&ami=<?php echo $id_etudiant; ?>" title="Ajouter en ami" class="follow">Nous suivre</a>
												<?php
												}
												?>
										</li>
										<li>
											<a href="mailto:someone@example.com?Subject=Hello%20again" target="_top" title="" class="message-us">
												<i class="fa fa-envelope"></i>
											</a>
										</li>
									</ul>
								</div>
								<!--<a href="#" title="" class="view-more-pro">Profil</a>-->
							</div><!--company_profile_info end-->
						</div>
						<?php
						}
					  ?>

					 <?php
  			 		}
  			 ?>

				<div class="process-comm">
					<div class="spinner">
						<div class="bounce1"></div>
						<div class="bounce2"></div>
						<div class="bounce3"></div>
					</div>
				</div><!--process-comm end-->
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
</body>

</html>

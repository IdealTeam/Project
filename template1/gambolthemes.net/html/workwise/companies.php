<?php
	session_start();
	include('.\class\bdd.inc.php');
	include('menu.inc.php');
	include('requete.php');
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
											echo $data_entreprise['raison_sociale_entreprise'];
										?>
									</h4>
									<ul>
										<li><a href="#" title="" class="follow">Nous suivre</a></li>
										<li><a href="mailto:someone@example.com?Subject=Hello%20again" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
								<!--<a href="#" title="" class="view-more-pro">Profil</a>-->
							</div><!--company_profile_info end-->
						</div>
						<?php
					}
					 ?>

					<!--	<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="images/resources/cmp-icon.png" alt="">
									<h3>Google Inc.</h3>
									<h4>Establish Feb, 2004</h4>
									<ul>
										<li><a href="#" title="" class="follow">Nous suivre</a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
								<a href="#" title="" class="view-more-pro">Voir profil</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="images/resources/cmp-icon.png" alt="">
									<h3>Pinterest</h3>
									<h4>Establish Feb, 2004</h4>
									<ul>
										<li><a href="#" title="" class="follow">Nous suivre</a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
								<a href="#" title="" class="view-more-pro">Voir profil</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="images/resources/cmp-icon.png" alt="">
									<h3>Microsoft Inc.</h3>
									<h4>Establish Feb, 2004</h4>
									<ul>
										<li><a href="#" title="" class="follow">Nous suivre</a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
								<a href="#" title="" class="view-more-pro">Voir profil</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="company_profile_info">
								<div class="company-up-info">
									<img src="images/resources/cmp-icon.png" alt="">
									<h3>Line Inc.</h3>
									<h4>Establish Feb, 2004</h4>
									<ul>
										<li><a href="#" title="" class="follow">Nous suivre</a></li>
										<li><a href="#" title="" class="message-us"><i class="fa fa-envelope"></i></a></li>
									</ul>
								</div>
								<a href="#" title="" class="view-more-pro">Voir profil</a>
							</div>
						</div>
					</div>
				</div>-->
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
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
<<<<<<< HEAD:template1/gambolthemes.net/html/workwise/companies.php
<!-- Mirrored from gambolthemes.net/html/workwise/companies.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 09:11:15 GMT -->
=======
<!-- Mirrored from gambolthemes.net/html/workwise/companies.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 09:11:15 GMT -->
>>>>>>> 481319d9d20f71301faf9e4c32e56a928e1a6414:template1/gambolthemes.net/html/workwise/companies.html
</html>

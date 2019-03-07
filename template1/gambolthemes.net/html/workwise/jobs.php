<?php
	session_start();
	include('.\class\bdd.inc.php');
	include('function.inc.php');
	include('menu.inc.php');
	//include('sessioncondition.inc.php');
	include('requete_stage_emploi.php');


?>
<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from gambolthemes.net/html/workwise/jobs.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 09:11:46 GMT -->
<head>
<meta charset="UTF-8">
<title>PPE3</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.range.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>


<body oncontextmenu="return false;">

	<div class="wrapper">

	<div class="wrapper">
		<div class="search-sec">
			<div class="container">
				<div class="search-box">
					<form>
						<input type="text" name="search" placeholder="Recherche">
						<button type="submit">Recherche</button>
					</form>
				</div><!--search-box end-->
			</div>
		</div><!--search-sec end-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="filter-secs">
									<div class="filter-heading">
										<h3>Filtres</h3>
										<a href="jobs.php?emploi&delEmp" title="">Supprimer tous les filtres</a>
									</div><!--filter-heading end-->
									<div class="paddy">
										<div class="filter-dd">
											<!-- <div class="filter-ttl">
												<h3>Compétences</h3>
												<a href="#" title="">Supprimer</a>
											</div> -->
											<form method="POST" action="filtre_emploi.php?search">
												<input type="text" placeholder="Recherche" name="search_input" maxlength="30">
												<button type="submit" name="button_recherche_filtre">Rechercher</button>
											</form>
										</div>

										<div class="filter-dd">
											<div class="filter-ttl">
												<h3>Ville</h3>
												<!-- <a href="#" title="">Clear</a> -->
											</div>
											<form method="POST" action="filtre_emploi.php?search">

												<input type="text" name="search_ville_input" maxlength="30" placeholder="Rechercher par ville"/>
												<button type="submit" name="button _search_ville">Rechercher</button>
												<!-- <i class="fa fa-ellipsis-v" aria-hidden="true"></i> -->
											</form>
										</div>
									</div>
								</div><!--filter-secs end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="posts-section">
									<?php
										while ($data_offre = $req_offre->fetch())
										{
									?>
										<div class="post-bar">
											<div class="post_topbar">
												<div class="usy-dt">
													<img src="<?php if(empty($data_offre['photo_profil_user']))
		                											{
		                												echo "images/profil.jpg";
		                											}
		                											elseif (isset($data_offre['photo_profil_user']))
		                											{
		                												echo $data_offre['photo_profil_user'];
		                											}?>" alt="photo_profil" width="50" height="50">
													<div class="usy-name">
														<h3><?php echo $data_offre['nom_user']; ?></h3>
														<span>
															<img src="images/clock.png" alt=""><?php echo "Publie le ".$data_offre['date_publication_offre'] ?>
														</span>
													</div>
												</div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
													<!-- <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li> -->
													<li>
														<img src="images/icon9.png" alt="">
														<span>
															<?php echo $data_offre['nom_commune']; ?>
														</span>
													</li>
													<li>
														<span>
															<i class="fas fa-calendar-alt"></i>
															<?php echo "A promouvoir a partir du  ".convert_date_FR($data_offre['date_debut_offre'])."<br>";?>
														</span>
													</li>
												</ul>
											</div>
											<div class="job_descp">
												<h3><?php echo $data_offre['titre_offre']; ?></h3>
												<!-- <ul class="job-dt">
													<li><a href="#" title="">Full Time</a></li>
													<li><span>$30 / hr</span></li>
												</ul> -->
												<p>
													<?php echo $data_offre['libelle_offre']; ?>
												</p>
											</div>
										</div><!--post-bar end-->
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
									</div><!--posts-section end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">

									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Top Jobs</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Product Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior UI / UX Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Junior Seo Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior PHP Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Developer Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
									<div class="widget widget-jobs">
										<div class="sd-title">
											<h3>Most Viewed This Week</h3>
											<i class="la la-ellipsis-v"></i>
										</div>
										<div class="jobs-list">
											<div class="job-info">
												<div class="job-details">
													<h3>Senior Product Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Senior UI / UX Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
											<div class="job-info">
												<div class="job-details">
													<h3>Junior Seo Designer</h3>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
												</div>
												<div class="hr-rate">
													<span>$25/hr</span>
												</div>
											</div><!--job-info end-->
										</div><!--jobs-list end-->
									</div><!--widget-jobs end-->
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>




		<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Post a project</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-12">
								<div class="price-sec">
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
									<span>To</span>
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Post a job</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-6">
								<div class="price-br">
									<input type="text" name="price1" placeholder="Price">
									<i class="la la-dollar"></i>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="inp-field">
									<select>
										<option>Full Time</option>
										<option>Half time</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->


	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.range-min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/disabled.js"></script>
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
</html>

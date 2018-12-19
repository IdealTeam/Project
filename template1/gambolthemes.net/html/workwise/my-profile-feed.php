<?php
	session_start();
	include('.\class\bdd.inc.php');
	include('menu.inc.php');
	include('requete.php');
	include('function.inc.php');
	//include('sessioncondition.inc.php');
?>
<!DOCTYPE html>
<html>
<!-- Mirrored from gambolthemes.net/html/workwise/my-profile-feed.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 09:11:42 GMT -->
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

<!-- Link datepicker -->

<link rel="stylesheet" type="text/css" href="./jquery/jquery-ui.css">
</head>


<body oncontextmenu="return false;">
<?php defined('CONSTANT') or define('URL_PROFIL', 'my-profile-feed.php'); ?>

	<div class="wrapper">
		<section class="cover-sec">
			<img src="<?php if(empty($data['photo_user']))
											{
												echo "images/couverture.jpg";
											}
											elseif (isset($data['photo_user']))
											{
												echo $data['photo_user'];
											}?>" width="1600" height="400"alt="photo couverture">
			<?php //echo $data['photo_user']; ?>
			<a href="#" title="Changer la photo de couverture">
				<i class="fa fa-camera"></i>
			<form method="POST" action="traitement_profil.php" enctype="multipart/form-data">
				<input type="file" name="img_couverture" id="imgcover">
				<button type="submit" class="btn btn-primary" name="upload_img_cover">Modifier</button>
			</form>
			</a>
		</section>


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
											<img src="<?php if(empty($data['photo_profil_user']))
																			{
																				echo "images/profil.jpg";
																			}
																			elseif (isset($data['photo_profil_user']))
																			{
																				echo $data['photo_profil_user'];
																			}?>" width="170" height="170" alt="photo profil">
											<!-- <a href="#" title=""><i class="fa fa-camera"></i></a> -->
										</div><!--user-pro-img end-->
										<form method="POST" action="traitement_profil.php" enctype="multipart/form-data">
											<input type="file" name="img_profil">
											<button type="submit" class="btn btn-primary" name="upload_img_profil">Modifier</button>
										</form>
										<div class="user_pro_status">

<!-- A AFFICHER LORS DU PROFIL DES AUTRES USERS -->

											<!-- <ul class="flw-hr">
												<li><a href="#" title="" class="flww"><i class="la la-plus"></i>Suivre</a></li>
												<li><a href="#" title="" class="hre">Hire</a></li>
											</ul> -->
											<ul class="flw-status">
												<li>
													<span>Suit</span>
													<b>34</b>
												</li>
												<li>
													<span>Me suivent</span>
													<b>155</b>
												</li>
											</ul>
										</div><!--user_pro_status end-->
										<!-- <ul class="social_links">
											<li><a href="#" title=""><i class="la la-globe"></i> www.example.com</a></li>
											<li><a href="#" title=""><i class="fa fa-facebook-square"></i> Http://www.facebook.com/john...</a></li>
											<li><a href="#" title=""><i class="fa fa-twitter"></i> Http://www.Twitter.com/john...</a></li>
											<li><a href="#" title=""><i class="fa fa-google-plus-square"></i> Http://www.googleplus.com/john...</a></li>
											<li><a href="#" title=""><i class="fa fa-behance-square"></i> Http://www.behance.com/john...</a></li>
											<li><a href="#" title=""><i class="fa fa-pinterest"></i> Http://www.pinterest.com/john...</a></li>
											<li><a href="#" title=""><i class="fa fa-instagram"></i> Http://www.instagram.com/john...</a></li>
											<li><a href="#" title=""><i class="fa fa-youtube"></i> Http://www.youtube.com/john...</a></li>
										</ul> -->
									</div><!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>People Viewed Profile</h3>
											<i class="la la-ellipsis-v"></i>
										</div><!--sd-title end-->
										<div class="suggestions-list">
											<div class="suggestion-usd">
												<img src="images/resources/s1.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s2.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s3.png" alt="">
												<div class="sgt-text">
													<h4>Poonam</h4>
													<span>Wordpress Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s4.png" alt="">
												<div class="sgt-text">
													<h4>Bill Gates</h4>
													<span>C & C++ Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s5.png" alt="">
												<div class="sgt-text">
													<h4>Jessica William</h4>
													<span>Graphic Designer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="suggestion-usd">
												<img src="images/resources/s6.png" alt="">
												<div class="sgt-text">
													<h4>John Doe</h4>
													<span>PHP Developer</span>
												</div>
												<span><i class="la la-plus"></i></span>
											</div>
											<div class="view-more">
												<a href="#" title="">View More</a>
											</div>
										</div><!--suggestions-list end-->
									</div><!--suggestions end-->
								</div><!--main-left-sidebar end-->
							</div>
							<div class="col-lg-6">
								<div class="main-ws-sec">
									<div class="user-tab-sec">
										<h3>
											<?php
												echo $data['prenom_utilisateur'].' '.$data['nom_user'];
											 ?>
										</h3>
										<br>
										<!-- <div class="star-descp">
											<span></span>
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-o"></i></li>
											</ul>
											<a href="#" title="">Status</a>
										</div>--><!--star-descp end-->
										<div class="tab-feed st2">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<img src="images/ic1.png" alt="">
														<span>Feed</span>
													</a>
												</li>
												<li data-tab="info-dd">
													<a href="#" title="">
														<img src="images/ic2.png" alt="">
														<span>Info</span>
													</a>
												</li>
												<li data-tab="saved-jobs">
													<a href="#" title="">
														<img src="images/ic4.png" alt="">
														<span>Saved Jobs</span>
													</a>
												</li>
												<li data-tab="my-bids">
													<a href="#" title="">
														<img src="images/ic5.png" alt="">
														<span>Expérience Pro</span>
													</a>
												</li>
												<li data-tab="portfolio-dd">
													<a href="#" title="">
														<img src="images/ic3.png" alt="">
														<span>Portfolio</span>
													</a>
												</li>
												<!--<li data-tab="payment-dd">
													<a href="#" title="">
														<img src="images/ic6.png" alt="">
														<span>Payment</span>
													</a>
												</li> -->
											</ul>
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->

									<div class="post-topbar">
										<div class="post-st">
											<ul>
												<li><a class="post_project" href="#" title="">Emploi réalisé</a></li>
												<li><a class="post-jb active" href="#" title="">Stage réalisé </a></li>
											</ul>
										</div><!--post-st end-->
									</div><!--post-topbar end-->

									<!-- FORMULAIRE AJOUT D'UN EMPLOI' -->

											<div class="post-popup pst-pj">
												<div class="post-project">
													<h3>Nouvel emploi</h3>
													<div class="post-project-fields">
														<form method="POST" action="traitement_emploi_stage.php?emploi">
															<div class="row">
																<div class="col-lg-12">
																	<input type="text" name="titre_emploi" placeholder="Titre de l'emploi">
																</div>
							                  <div class="col-lg-12">
							    								<input type="text" name="commune_emploi" id="AC_commune" value="<?php if (empty($data_ville['id_commune']))
							                    {
							                      $data_ville['id_commune'] = '';
							                    }
							                    elseif (isset($data_ville['id_commune']))
							                    {
							                      echo $data_ville['id_commune'];
							                    } ?>" placeholder="Commune du lieu d'emploi">
							                    <!-- SCRIPT AUTOCOMPLET -->
							                    <!-- SCRIPT AUTOCOMPLET EMPLOI -->
							    							</div>
																<div class="col-lg-12">
																	<input type="hidden" name="date_publication_offre_emploi" value="<?php echo date('Y-m-d');?>" required>
																	<!-- <div class="inp-field">
																		<select>
																			<option>Category</option>
																			<option>Category 1</option>
																			<option>Category 2</option>
																			<option>Category 3</option>
																		</select>
																	</div> -->
																</div>
																<div class="col-lg-6">
																	<!-- <label>Date de début</label> -->
																	<input type="text" id="date" name="date_debut_offre_emploi" placeholder="Date d'embauche" required>
																</div>
																<div class="col-lg-12">
																	<textarea name="libelle_offre_emploi" placeholder="Détail de l'emploi"></textarea>
																</div>
																<!-- <div class="col-lg-6">
																	<div class="price-br">
																		<input type="text" name="price1" placeholder="Price">
																		<i class="la la-dollar"></i>
																	</div>
																</div> -->
																<div class="col-lg-12">
																	<ul>
																		<!-- value="post" -->
																		<li><button class="active" type="submit" name="envoi_emploi">Publier</button></li>
																		<!-- <li><a href="#" title="Retour à l'accueil">Retour</a></li> -->
																	</ul>
																</div>
															</div>
							              </form>
													</div><!--post-project-fields end-->
													<a href="#" title=""><i class="la la-times-circle-o"></i></a>
												</div><!--post-project end-->
											</div><!--post-project-popup end-->

							<!-- FORMULAIRE AJOUT DE STAGE ETOILE -->

									<div class="post-popup job_post">
										<div class="post-project">
											<h3>Nouveau stage</h3>
											<div class="post-project-fields">
												<form method="POST" action="traitement_profil.php?stage">
													<div class="row">
														<div class="col-lg-6">
															<input type="text" name="titre_stage_r" placeholder="Titre du stage">
														</div>
							              <div class="col-lg-6">
															<input type="text" name="commune_stage_r" id="AC_commune_stage_r" value="<?php if (empty($data_ville2['id_commune']))
							                {
							                  $data_ville2['id_commune'] = '';
							                }
							                elseif (isset($data_ville2['id_commune']))
							                {
							                  echo $data_ville2['id_commune'];
							                } ?>"placeholder="Commune du lieu de stage">
							              </div>
														<!-- <div class="col-lg-12">-->
															<!-- <div class="inp-field">
																<select>
																	<option>Category</option>
																	<option>Category 1</option>
																	<option>Category 2</option>
																	<option>Category 3</option>
																</select>
															</div> -->
														<!--</div>-->
														<div class="col-lg-6">
															<input type="text" name="date_debut_offre_stage_r" id="date_stage_realise_1" placeholder="Date de début du stage" required>
														</div>
														<div class="col-lg-6">
															<input type="text" name="date_fin_offre_stage_r" id="date_stage_realise_2" placeholder="Date de fin du stage" required>
							              </div>
														<div class="col-lg-12">
															<textarea name="libelle_offre_stage_r" placeholder="Contenu du stage"></textarea>
														</div>
														<div class="col-lg-12">
															<textarea name="commentaire_stage_r" placeholder="Commentaire stage"></textarea>
														</div>
														<div class="col-lg-6">
															<div class="price-br">
																<select name="note_stage_r" required>
																	<option value="0" >Note du stage sur 5</option>
																	<option value="1" >1</option>
																	<option value="2" >2</option>
																	<option value="3" >3</option>
																	<option value="4" >4</option>
																	<option value="5" >5</option>
																</select>
																<i class="fas fa-star"></i>
															</div>
														</div>
														<div class="col-lg-6">
															<ul>
																<!-- value="post" -->
																<li>
																	<button class="active" type="submit" name="ajout_stage_realise">Enregistrer</button>
																</li>
																<!-- <li><a href="#" title="Retour à l'accueil">Retour</a></li> -->
															</ul>
														</div>
													</div>
							          </form>
											</div><!--post-project-fields end-->
											<a href="#" title=""><i class="la la-times-circle-o"></i></a>
										</div><!--post-project end-->
									</div><!--post-project-popup end-->

<!-- PUBLICATIONS -->
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">
										<?php
											//affiche des stage
											while ($data_Affiche_offre = $req_offreAffiche->fetch())
											{
										?>
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="<?php if(empty($data_Affiche_offre['photo_profil_user']))
																				{
																					echo "images/profil.jpg";
																				}
																				elseif (isset($data_Affiche_offre['photo_profil_user']))
																				{
																					echo $data_Affiche_offre['photo_profil_user'];
																				}?>" width="50" height="50" alt="">
														<div class="usy-name">
															<h3>
																<?php
																	echo $data_Affiche_offre['prenom_utilisateur'].' '.$data_Affiche_offre['nom_user'];
																?>
															</h3>
															<span>
																<img src="images/clock.png" alt="">
																	<?php
																		echo convert_date_FR($data_Affiche_offre['date_publication_offre']);
																	?>
															</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="my-profile-feed.php?del_post&ido=<?php echo $data_Affiche_offre['id_offre']; ?>" onclick="return confirm('Voulez-vous supprimez ce post ?')"; title= "Supprimer le post">Supprimer</a></li>
															<!-- <li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li> -->
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<!-- <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li> -->
														<li><img src="images/icon9.png" alt=""><span><?php echo $data_Affiche_offre['nom_commune']; ?></span>
														</li>
														<li>
															<span><i class="fas fa-calendar-alt"></i>
																<?php if(empty($data_Affiche_offre['date_fin_offre']))
																			{
																				echo " Début du poste : ".convert_date_FR($data_Affiche_offre['date_debut_offre']);
																			}
																			elseif (!empty($data_Affiche_offre['date_fin_offre']))
																			{
																				echo " Du ".convert_date_FR($data_Affiche_offre['date_debut_offre'])." au ".convert_date_FR($data_Affiche_offre['date_fin_offre']);
																			}
																?></span>
														</li>
													</ul>
													<!-- <ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul> -->
												</div>
												<div class="job_descp">
													<h3>
														<?php
															echo $data_Affiche_offre['titre_offre'];
														?>
													</h3>
													<!-- <ul class="job-dt">
														<li><a href="#" title="">Full Time</a></li>
														<li><span>$30 / hr</span></li>
													</ul> -->
													<p>
														<?php
															echo $data_Affiche_offre['libelle_offre'];
														?>
														<!-- <a href="#" title="">view more</a></p> -->
													<!-- <ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
													</ul> -->
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<!-- <li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li> -->
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->
									<?php
									}
									?>
<!-- EXEMPLE DE PUBLICATIONS -->

											<!-- <div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Front End Developer</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Simple Classified Site</h3>
													<ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>--><!--post-bar end-->
											<!-- <div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pc2.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Senior UI / UX designer</h3>
													<ul class="job-dt">
														<li><a href="#" title="">Par Time</a></li>
														<li><span>$10 / hr</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>--><!--post-bar end-->
											<!-- <div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Ios Shopping mobile app</h3>
													<ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>--><!--post-bar end-->

											<div class="process-comm">
												<div class="spinner">
													<div class="bounce1"></div>
													<div class="bounce2"></div>
													<div class="bounce3"></div>
												</div>
											</div><!--process-comm end-->
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="info-dd">
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="overview-open">Overview</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov st2">
											<h3><a href="#" title="" class="exp-bx-open">Informations personelles</a><a href="#" title="" class="exp-bx-open"><i class="fa fa-pencil"></i></a> </h3>
											<h4> Nom prénom <a href="#" title=""></a></h4>
											<p>
												<?php
													echo $data['prenom_utilisateur'].' '.$data['nom_user'];
												?>
											</p>
											<h4>Numéro de téléphone <a href="#" title=""></a></h4>
												<p>
													<?php
														echo $data['tel_user'];
													?>
												</p>
											<h4>Adresse email<a href="#" title=""></a></h4>
											<p>
												<?php
													echo $data['email_user'];
												?>
											</p>
											<h4>Adresse <a href="#" title=""></a></h4>
											<p>
												<?php
												if (empty($data['rue_user']))
												{
													echo '';
												}
												elseif (isset($data['rue_user']))
												{
													echo $data['rue_user'];
												}
											?>
										</div><!--user-profile-ov end-->
										<div class="user-profile-ov">
											<h3 id="ancre_diplome"><a href="#" title="" class="ed-box-open">Mes diplômes<i class="fas fa-plus"></i></a></h3>
											<p>
												<?php
													while ($data_diplomer = $req_diplomer->fetch())
													{
														echo $data_diplomer['libelle_diplome']." obtenue le ".convert_date_FR($data_diplomer['annee_diplome']);
														?>
															<a href="my-profile-feed.php?del_diplome&iddi=<?php echo $data_diplomer['id_diplome'] ?>" onclick="return confirm('Supprimer le diplôme ?');"><i class="fas fa-times"></i></a>
															<br>
														<?php
													}
												?>
											</p>
										</div><!--user-profile-ov end-->

										<div class="user-profile-ov">
											<h4>Changement de mot de passe</h4>
											<form method="POST" action="traitement_profil.php" onSubmit="return verif_pw()">
												<div class="cp-field">
													<h5>Ancien mot de passe</h5>
													<div class="cpp-fiel">
														<input type="text" name="pw_user" placeholder="Ancien mot de passe">
														<i class="fa fa-lock"></i>
													</div>
												</div>
												<div class="cp-field">
													<h5>Nouveau mot de passe</h5>
													<div class="cpp-fiel">
														<input type="text" name="new_pw" id="newpw" placeholder="Nouveau mot de passe">
														<i class="fa fa-lock"></i>
													</div>
												</div>
												<div class="cp-field">
													<h5>Confirmation du mot de passe</h5>
													<div class="cpp-fiel">
														<input type="text" name="repeat-password" id="confirmpw" placeholder="Confirmation du mot de passe">
														<i class="fa fa-lock"></i>
													</div>
												</div>
												<!--<div class="cp-field">
													<h5><a href="#" title="">Forgot Password?</a></h5>
												</div> -->
												<div class="save-stngs pd2">
													<ul>
														<li><button type="submit" name="change_pw">Save Setting</button></li>
													</ul>
												</div><!--save-stngs end-->
											</form>
										</div><!--user-profile-ov end-->

										<!-- <div class="user-profile-ov">
											<h3><a href="#" title="" class="lct-box-open">Location</a> <a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></a> </h3>
											<p>
										</p>
										</div>
										<div class="user-profile-ov">
											<h3><a href="#" title="" class="skills-open">Skills</a> <a href="#" title="" class="skills-open"><i class="fa fa-pencil"></i></a> <a href="#"><i class="fa fa-plus-square"></i></a></h3>
											<ul>
												<li><a href="#" title="">HTML</a></li>
												<li><a href="#" title="">PHP</a></li>
												<li><a href="#" title="">CSS</a></li>
												<li><a href="#" title="">Javascript</a></li>
												<li><a href="#" title="">Wordpress</a></li>
												<li><a href="#" title="">Photoshop</a></li>
												<li><a href="#" title="">Illustrator</a></li>
												<li><a href="#" title="">Corel Draw</a></li>
											</ul>
										</div> -->
									</div><!--product-feed-tab end-->

									<div class="product-feed-tab" id="saved-jobs">
										<div class="posts-section">
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt=""></span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>dfd</h3>
													<ul class="job-dt">
														<li><a href="#" title="">Full Time</a></li>
														<li><span>$30 / hr</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Senior Wordpress Developer</h3>
													<ul class="job-dt">
														<li><a href="#" title="">Full Time</a></li>
														<li><span>$30 / hr</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pc2.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Senior Wordpress Developer</h3>
													<ul class="job-dt">
														<li><a href="#" title="">Full Time</a></li>
														<li><span>$30 / hr</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Senior Wordpress Developer</h3>
													<ul class="job-dt">
														<li><a href="#" title="">Full Time</a></li>
														<li><span>$30 / hr</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->
											<div class="process-comm">
												<a href="#" title=""><img src="images/process-icon.png" alt=""></a>
											</div><!--process-comm end-->
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->

<!-- EXPERIENCE PROFESSIONNEL -->

									<div class="product-feed-tab" id="my-bids">
										<div class="posts-section">
											<?php
												while ($data_s_r = $req_s_r->fetch())
												{
											?>
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="<?php if(empty($data['photo_profil_user']))
																						{
																							echo "images/profil.jpg";
																						}
																						elseif (isset($data['photo_profil_user']))
																						{
																							echo $data['photo_profil_user'];
																						}?>" width="50" height="50" alt="photo profil">
														<div class="usy-name">
															<h3>
																<?php if (!empty($data['prenom_utilisateur']))
																{
																	echo $data['prenom_utilisateur'].$data['nom_user'];
																}
																else
																{
																	echo $data['nom_user'];
																}
																?>
														</h3>
															<!-- <span><img src="images/clock.png" alt="">3 min ago</span> -->
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="my-profil-feed.php?del_se&ido=<?php echo $data_s_r['id_offre'];?>" title="">Supprimer</a></li>
															<!-- <li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li> -->
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li>
															<!-- <img src="images/icon8.png" alt=""> -->
															<span style="color:rgb(255, 191, 0);" title="Note du stage">
																<?php
																	$note = $data_s_r['note_stage'];
																	note_stage($note);
																?>
															</span>
													</li>
														<li><img src="images/icon9.png" alt=""><span><?php echo $data_s_r['nom_commune']; ?></span></li>
													</ul>
													<!-- <ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul> -->
												</div>
												<div class="job_descp">
													<h3><?php echo $data_s_r['titre_offre']; ?></h3>
													<!-- <ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul> -->
													<p>
														<?php echo $data_s_r['libelle_offre']; ?>
														<!-- <a href="#" title="">view more</a> -->
													</p>
													<!-- <ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
														<li><a href="#" title="">Photoshop</a></li>
														<li><a href="#" title="">Illustrator</a></li>
														<li><a href="#" title="">Corel Draw</a></li>
													</ul> -->
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div><!--post-bar end-->
											<?php
											}
											?>
											<!-- <div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Ios Shopping mobile app</h3>
													<ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
														<li><a href="#" title="">Photoshop</a></li>
														<li><a href="#" title="">Illustrator</a></li>
														<li><a href="#" title="">Corel Draw</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>--><!--post-bar end-->

											<!-- <div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Simple Classified Site</h3>
													<ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
														<li><a href="#" title="">Photoshop</a></li>
														<li><a href="#" title="">Illustrator</a></li>
														<li><a href="#" title="">Corel Draw</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>--><!--post-bar end-->
											<!-- <div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="images/resources/us-pic.png" alt="">
														<div class="usy-name">
															<h3>John Doe</h3>
															<span><img src="images/clock.png" alt="">3 min ago</span>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
														<ul class="ed-options">
															<li><a href="#" title="">Edit Post</a></li>
															<li><a href="#" title="">Unsaved</a></li>
															<li><a href="#" title="">Unbid</a></li>
															<li><a href="#" title="">Close</a></li>
															<li><a href="#" title="">Hide</a></li>
														</ul>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li><img src="images/icon8.png" alt=""><span>Frontend Developer</span></li>
														<li><img src="images/icon9.png" alt=""><span>India</span></li>
													</ul>
													<ul class="bk-links">
														<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
														<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
														<li><a href="#" title="" class="bid_now">Bid Now</a></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3>Ios Shopping mobile app</h3>
													<ul class="job-dt">
														<li><span>$300 - $350</span></li>
													</ul>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
													<ul class="skill-tags">
														<li><a href="#" title="">HTML</a></li>
														<li><a href="#" title="">PHP</a></li>
														<li><a href="#" title="">CSS</a></li>
														<li><a href="#" title="">Javascript</a></li>
														<li><a href="#" title="">Wordpress</a></li>
														<li><a href="#" title="">Photoshop</a></li>
														<li><a href="#" title="">Illustrator</a></li>
														<li><a href="#" title="">Corel Draw</a></li>
													</ul>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li>
															<a href="#"><i class="la la-heart"></i> Like</a>
															<img src="images/liked-img.png" alt="">
															<span>25</span>
														</li>
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>
											</div>--><!--post-bar end-->
											<div class="process-comm">
												<a href="#" title=""><img src="images/process-icon.png" alt=""></a>
											</div><!--process-comm end-->
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="portfolio-dd">
										<div class="portfolio-gallery-sec">
											<h3>Portfolio</h3>
											<div class="gallery_pf">
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img1.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img2.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img3.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img4.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img5.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img6.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img7.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img8.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img9.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-6 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img10.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
												</div>
											</div><!--gallery_pf end-->
										</div><!--portfolio-gallery-sec end-->
									</div><!--product-feed-tab end-->
								<div class="product-feed-tab" id="payment-dd">
										<div class="billing-method">
											<ul>
												<li>
													<h3>Add Billing Method</h3>
													<a href="#" title=""><i class="fa fa-plus-circle"></i></a>
												</li>
												<li>
													<h3>See Activity</h3>
													<a href="#" title="">View All</a>
												</li>
												<li>
													<h3>Total Money</h3>
													<span>$0.00</span>
												</li>
											</ul>
											<div class="lt-sec">
												<img src="images/lt-icon.png" alt="">
												<h4>All your transactions are saved here</h4>
												<a href="#" title="">Click Here</a>
											</div>
										</div>
										<div class="add-billing-method">
											<h3>Add Billing Method</h3>
											<h4><img src="images/dlr-icon.png" alt=""><span>With workwise payment protection , only pay for work delivered.</span></h4>
											<div class="payment_methods">
												<h4>Credit or Debit Cards</h4>
												<form>
													<div class="row">
														<div class="col-lg-12">
															<div class="cc-head">
																<h5>Card Number</h5>
																<ul>
																	<li><img src="images/cc-icon1.png" alt=""></li>
																	<li><img src="images/cc-icon2.png" alt=""></li>
																	<li><img src="images/cc-icon3.png" alt=""></li>
																	<li><img src="images/cc-icon4.png" alt=""></li>
																</ul>
															</div>
															<div class="inpt-field pd-moree">
																<input type="text" name="cc-number" placeholder="">
																<i class="fa fa-credit-card"></i>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>First Name</h5>
															</div>
															<div class="inpt-field">
																<input type="text" name="f-name" placeholder="">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>Last Name</h5>
															</div>
															<div class="inpt-field">
																<input type="text" name="l-name" placeholder="">
															</div>
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>Expiresons</h5>
															</div>
															<div class="rowwy">
																<div class="row">
																	<div class="col-lg-6 pd-left-none no-pd">
																		<div class="inpt-field">
																			<input type="text" name="f-name" placeholder="">
																		</div>
																	</div>
																	<div class="col-lg-6 pd-right-none no-pd">
																		<div class="inpt-field">
																			<input type="text" name="f-name" placeholder="">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-6">
															<div class="cc-head">
																<h5>Cvv (Security Code) <i class="fa fa-question-circle"></i></h5>
															</div>
															<div class="inpt-field">
																<input type="text" name="l-name" placeholder="">
															</div>
														</div>
														<div class="col-lg-12">
															<button type="submit">Continue</button>
														</div>
													</div>
												</form>
												<h4>Add Paypal Account</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="my-profile-feed.php?del_user" onclick="return confirm('Voulez-vous supprimez ce compte ?');" title=""><i class="fas fa-user-times"></i> Supprimer le compte </a>
									</div>
									<div class="widget widget-portfolio">
										<div class="wd-heady">
											<h3>Portfolio</h3>
											<img src="images/photo-icon.png" alt="">
										</div>
										<div class="pf-gallery">
											<ul>
												<li><a href="#" title=""><img src="images/resources/pf-gallery1.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery2.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery3.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery4.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery5.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery6.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery7.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery8.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery9.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery10.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery11.png" alt=""></a></li>
												<li><a href="#" title=""><img src="images/resources/pf-gallery12.png" alt=""></a></li>
											</ul>
										</div><!--pf-gallery end-->
									</div><!--widget-portfolio end-->
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>

		<footer>
			<div class="footy-sec mn no-margin">
				<div class="container">
					<ul>
						<li><a href="#" title="">Help Center</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="#" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
					</ul>
					<p><img src="images/copy-icon2.png" alt="">Copyright 2018</p>
					<img class="fl-rgt" src="images/logo2.png" alt="">
				</div>
			</div>
		</footer><!--footer end-->

		<div class="overview-box" id="overview-box">
			<div class="overview-edit">
				<h3>Overview</h3>
				<span>5000 character left</span>
				<form>
					<textarea></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->


		<div class="overview-box" id="experience-box">
			<div class="overview-edit">
				<h3>Modification profil</h3>
				<form method="POST" action="traitement_profil.php">
					<input type="text" name="nom_user" value=" <?php echo $data['nom_user'];?>">
					<input type="text" name="prenom_utilisateur" value=" <?php echo $data['prenom_utilisateur'];?>">
					<input type="text" name="tel_user" value=" <?php echo $data['tel_user'];?>">
					<input type="text" name="email_user" value=" <?php echo $data['email_user'];?>">
					<input type="text" name="rue_user" value="	<?php
						if (empty($data['rue_user']))
						{
							echo "Votre rue";
						}
						elseif (isset($data['rue_user']))
						{
							echo $data['rue_user'];
						}
					?>">
					<button type="submit" name="modif_user" class="save">Enregister</button>
					<!--<button type="submit" class="save-add">Save & Add More</button>-->
					<!--<button type="submit" class="cancel">Cancel</button> -->
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

<!-- MODIFICATION DES DIPLOMES -->

		<div class="overview-box" id="education-box">
			<div class="overview-edit">
				<h3>Ajout de diplome</h3>
				<form method="POST" action="traitement_profil.php">
					<!-- <input type="text" name="libelle_diplome" placeholder="" required> -->
					<select name="libelle_diplome" required>
						<?php
							while ($data_diplome = $req_diplome->fetch())
							{
								?>
									<option value="<?php echo $data_diplome['id_diplome']; ?>">
										<?php echo $data_diplome['libelle_diplome']; ?>
									</option>
								<?php
							}
						?>
					</select>

					<!-- <div class="datepicky">
						<div class="row">
							<div class="col-lg-6 no-left-pd">
								<div class="datefm">
									<input type="text" name="from" placeholder="From" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
							<div class="col-lg-6 no-righ-pd">
								<div class="datefm">
									<input type="text" name="to" placeholder="To" class="datepicker">
									<i class="fa fa-calendar"></i>
								</div>
							</div>
						</div>
					</div> -->
					<input type="text" name="date_diplome" id="date_diplome" placeholder="Date d'obtention du diplôme" maxlength="4" required>
					<!-- <input type="text" name="degree" placeholder="Degree"> -->
					<!-- <textarea placeholder="Description"></textarea> -->
					<button type="submit" name="modif_diplome" class="save">Enregister</button>
					<!--<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button> -->
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="location-box">
			<div class="overview-edit">
				<h3>Location</h3>
				<form>
					<div class="datefm">
						<form method="POST" action="traitement_profil.php">
							>
						<i class="fa fa-map-marker"></i>
					</div>
					<button type="submit" name="modif_user2" class="save">Enregister</button>
					<!--<button type="submit" class="cancel">Cancel</button> -->
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="skills-box">
			<div class="overview-edit">
				<h3>Skills</h3>
				<ul>
					<li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
					<li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
				</ul>
				<form>
					<input type="text" name="skills" placeholder="Skills">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="create-portfolio">
			<div class="overview-edit">
				<h3>Create Portfolio</h3>
				<form>
					<input type="text" name="pf-name" placeholder="Portfolio Name">
					<div class="file-submit">
						<input type="file" name="file">
					</div>
					<div class="pf-img">
						<img src="images/resources/np.png" alt="">
					</div>
					<input type="text" name="website-url" placeholder="htp://www.example.com">
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

	</div><!--theme-layout end-->



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flatpickr.min.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/disabled.js"></script>

<!-- SCRIPT DATE PICKER -->

<script type="text/javascript" src="./jquery/external/jquery/jquery.js"></script>
<script type="text/javascript" src="./jquery/jquery-ui.js"></script>

<!-- DATE PICKER -->

<script type="text/javascript">
// $('#date_diplome').datepicker({ dateFormat:'dd-mm-yy' });
$('#date_stage_realise_1').datepicker({ dateFormat:'dd-mm-yy' });
$('#date_stage_realise_2').datepicker({ dateFormat:'dd-mm-yy' });

// TRADUCTION DATE PICKER EN FR

$.datepicker.regional['fr'] = {clearText: 'Effacer', clearStatus: '',
	 closeText: 'Fermer', closeStatus: 'Fermer sans modifier',
	 prevText: '<Préc', prevStatus: 'Voir le mois précédent',
	 nextText: 'Suiv>', nextStatus: 'Voir le mois suivant',
	 currentText: 'Courant', currentStatus: 'Voir le mois courant',
	 monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin',
	 'Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
	 monthNamesShort: ['Jan','Fév','Mar','Avr','Mai','Jun',
	 'Jul','Aoû','Sep','Oct','Nov','Déc'],
	 monthStatus: 'Voir un autre mois', yearStatus: 'Voir un autre année',
	 weekHeader: 'Sm', weekStatus: '',
	 dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
	 dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
	 dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
	 dayStatus: 'Utiliser DD comme premier jour de la semaine', dateStatus: 'Choisir le DD, MM d',
	 dateFormat: 'dd/mm/yy', firstDay: 0,
	 initStatus: 'Choisir la date', isRTL: false};
$.datepicker.setDefaults($.datepicker.regional['fr']);
</script>

<!-- SCRIPT AUTOCOMPLETION STAGE REALISE -->

<script>
  $( function() {
  var availableTags = <?php echo $tab; ?>;
  $( "#AC_commune_stage_r" ).autocomplete({
  source: availableTags
  });
  } );
</script>

<!--VERIFICATION MOT DE PASSE-->
<script type="text/javascript">
	function verif_pw()
	{
		var pw1 = document.getElementById('newpw').value;
		var pw2 = document.getElementById('confirmpw').value;
		if (pw1 != pw2)
		{
			alert("Les mots de passes ne corespondent pas");
			return false;
		}
		else if (pw1 == pw2)
		{
			// alert("ok");
			return true;
		}
	}
</script>
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
<!-- Mirrored from gambolthemes.net/html/workwise/my-profile-feed.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 09:11:46 GMT -->
</html>

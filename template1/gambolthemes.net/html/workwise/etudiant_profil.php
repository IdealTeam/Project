<?php
	session_start();
	include('.\class\bdd.inc.php');
	include('menu.inc.php');
	include('function.inc.php');
	include('requete.php');
	include('affichage_profil.php');



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


<body oncontextmenu="return false;">


	<div class="wrapper">

		<section class="cover-sec">
			<img src="<?php if(empty($data_affiche_etudiant['photo_user']))
									{
										echo "images/couverture.jpg";
									}
									elseif (isset($data_affiche_etudiant['photo_user']))
									{
										echo $data_affiche_etudiant['photo_user'];
									}?>" width="1600" height="400" alt="photo couverture">
		</section><!--cover-sec end-->


		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3">
								<div class="main-left-sidebar">
									<div class="user_profile">
										<div class="user-pro-img">
											<img src="
											<?php if(empty($data_affiche_etudiant['photo_profil_user']))
																			{
																				echo "images/profil.jpg";
																			}
																			elseif (isset($data_affiche_etudiant['photo_profil_user']))
																			{
																				echo $data_affiche_etudiant['photo_profil_user'];
																			}?>"width="170" height="170" alt="photo_profil">
										</div><!--user-pro-img end-->
										<div class="user_pro_status">
											<ul class="flw-hr">
												<li><a href="#" title="" class="flww"><i class="la la-plus"></i> Follow</a></li>
											</ul>
											<ul class="flw-status">
												<li>
													<span>Following</span>
													<b>34</b>
												</li>
												<li>
													<span>Followers</span>
													<b>155</b>
												</li>
											</ul>
										</div><!--user_pro_status end-->
									</div><!--user_profile end-->
									<div class="suggestions full-width">
										<div class="sd-title">
											<h3>Suggestions</h3>
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
												<img src="images/resources/s6.png" width="35" height="35"alt="">
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
												echo  $data_affiche_etudiant['prenom_utilisateur'].' '.$data_affiche_etudiant['nom_user'];
											?>
									</h3>
										<br>
										<div class="tab-feed">
											<ul>
												<li data-tab="feed-dd" class="active">
													<a href="#" title="">
														<img src="images/ic1.png" alt="">
														<span>Feed</span>
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
											</ul>
										</div><!-- tab-feed end-->
									</div><!--user-tab-sec end-->
									<div class="product-feed-tab current" id="feed-dd">
										<div class="posts-section">
											<!--Affichage stage-->
											<?php
											while ($data_affiche_etudiant = $req_affiche_etudiant->fetch())
											{
											?>
												<div class="post-bar">
													<div class="post_topbar">
														<div class="usy-dt">
															<img src="<?php if(empty($data_affiche_etudiant['photo_profil_user']))
																					{
																						echo "images/profil.jpg";
																					}
																					elseif (isset($data_affiche_etudiant['photo_profil_user']))
																					{
																						echo $data_affiche_etudiant['photo_profil_user'];
																					}?>" width="50" height="50" alt="">
															<div class="usy-name">
																<h3>
																	<?php
																		echo $data_affiche_etudiant['prenom_utilisateur'].' '.$data_affiche_etudiant['nom_user'];
																	?>
																</h3>
																<span>
																	<img src="images/clock.png" alt="">
																	<?php
																		echo convert_date_FR($data_affiche_etudiant['date_publication_offre']);
																	?>
																</span>
															</div>
														</div>
													</div>
													<div class="epi-sec">
														<ul class="descp">
															<li><img src="images/icon9.png" alt="">
																<span>
																<?php echo $data_affiche_etudiant['nom_commune']; ?>
																</span>
															</li>
															<li>
		                            <span><i class="fas fa-calendar-alt"></i>
		                              <?php if(empty($data_affiche_etudiant['date_fin_offre']))
		                                    {
		                                      echo " Début du poste : ".convert_date_FR($data_affiche_etudiant['date_debut_offre']);
		                                    }
		                                    elseif (!empty($data_affiche_etudiant['date_fin_offre']))
		                                    {
		                                      echo " Du ".convert_date_FR($data_affiche_etudiant['date_debut_offre'])." au ".convert_date_FR($data_affiche_etudiant['date_fin_offre']);
		                                    }
		                              ?></span>
		                          </li>
														</ul>
													</div>
													<div class="job_descp">
														<h3>
															<?php
																echo $data_affiche_etudiant['titre_offre'];
															?>
														</h3>
														<p>
															<?php
																echo $data_affiche_etudiant['libelle_offre'];
															?>
												</div>
												<div class="job-status-bar">
													<ul class="like-com">
														<li><a href="#" title="" class="com"><img src="images/com.png" alt=""> Comment 15</a></li>
													</ul>
													<a><i class="la la-eye"></i>Views 50</a>
												</div>

											</div><!--post-bar end-->
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
										</div><!--posts-section end-->
									</div><!--product-feed-tab end-->
									<div class="product-feed-tab" id="my-bids">
										<div class="posts-section">
											<?php
												while ($data_affiche_etudiant = $req_affiche_etudiant->fetch())
												{
											?>
											<div class="post-bar">
												<div class="post_topbar">
													<div class="usy-dt">
														<img src="<?php if(empty($data_affiche_etudiant['photo_profil_user']))
																						{
																							echo "images/profil.jpg";
																						}
																						elseif (isset($data_affiche_etudiant['photo_profil_user']))
																						{
																							echo $data_affiche_etudiant['photo_profil_user'];
																						}?>" width="50" height="50" alt="photo profil">
														<div class="usy-name">
															<h3>
																<?php if (!empty($data_affiche_etudiant['prenom_utilisateur']))
																{
																	echo $data_affiche_etudiant['prenom_utilisateur'].$data_affiche_etudiant['nom_user'];
																}
																else
																{
																	echo $data_affiche_etudiant['nom_user'];
																}
																?>
														</h3>
														</div>
													</div>
													<div class="ed-opts">
														<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
													</div>
												</div>
												<div class="epi-sec">
													<ul class="descp">
														<li>
															<!-- <img src="images/icon8.png" alt=""> -->
															<span style="color:rgb(255, 191, 0);" title="Note du stage">
																<?php
																	$note = $data_affiche_etudiant['note_stage'];
																	note_stage($note);
																?>
															</span>
													</li>
														<li><img src="images/icon9.png" alt=""><span><?php echo $data_affiche_etudiant['nom_commune']; ?></span></li>
													</ul>
												</div>
												<div class="job_descp">
													<h3><?php echo $data_affiche_etudiant['titre_offre']; ?></h3>
													<p>
														<?php echo $data_affiche_etudiant['libelle_offre']; ?>
													</p>
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
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img1.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img2.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img3.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img4.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img5.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img6.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img7.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img8.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img9.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
													<div class="col-lg-4 col-md-4 col-sm-4 col-6">
														<div class="gallery_pt">
															<img src="images/resources/pf-img10.jpg" alt="">
															<a href="#" title=""><img src="images/all-out.png" alt=""></a>
														</div><!--gallery_pt end-->
													</div>
												</div>
											</div><!--gallery_pf end-->
										</div><!--portfolio-gallery-sec end-->
									</div><!--product-feed-tab end-->
								</div><!--main-ws-sec end-->
							</div>
							<div class="col-lg-3">
								<div class="right-sidebar">
									<div class="message-btn">
										<a href="#" title=""><i class="fa fa-envelope"></i> Message</a>
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
				<h3>Experience</h3>
				<form>
					<input type="text" name="subject" placeholder="Subject">
					<textarea></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="education-box">
			<div class="overview-edit">
				<h3>Education</h3>
				<form>
					<input type="text" name="school" placeholder="School / University">
					<div class="datepicky">
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
					</div>
					<input type="text" name="degree" placeholder="Degree">
					<textarea placeholder="Description"></textarea>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="save-add">Save & Add More</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->

		<div class="overview-box" id="location-box">
			<div class="overview-edit">
				<h3>Location</h3>
				<form>
					<div class="datefm">
						<select>
							<option>Country</option>
							<option value="pakistan">Pakistan</option>
							<option value="england">England</option>
							<option value="india">India</option>
							<option value="usa">United Sates</option>
						</select>
						<i class="fa fa-globe"></i>
					</div>
					<div class="datefm">
						<select>
							<option>City</option>
							<option value="london">London</option>
							<option value="new-york">New York</option>
							<option value="sydney">Sydney</option>
							<option value="chicago">Chicago</option>
						</select>
						<i class="fa fa-map-marker"></i>
					</div>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
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
					<div class="file-submit nomg">
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

		<div class="overview-box" id="establish-box">
			<div class="overview-edit">
				<h3>Establish Since</h3>
				<form>
					<div class="daty">
						<input type="text" name="establish" placeholder="Select Date" class="datepicker">
						<i class="fa fa-calendar"></i>
					</div>
					<button type="submit" class="save">Save</button>
					<button type="submit" class="cancel">Cancel</button>
				</form>
				<a href="#" title="" class="close-box"><i class="la la-close"></i></a>
			</div><!--overview-edit end-->
		</div><!--overview-box end-->


		<div class="overview-box" id="total-employes">
			<div class="overview-edit">
				<h3>Total Employees</h3>
				<form>
					<input type="text" name="employes" placeholder="Type in numbers">
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
</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
</html>

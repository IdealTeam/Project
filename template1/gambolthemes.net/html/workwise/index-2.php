<?php
 	session_start();

  //LOADER
  // include('loader.php');

  include('.\class\bdd.inc.php');
 	include('function.inc.php');
	include('menu.inc.php');
  include('requete.php');

	//include('sessioncondition.inc.php');

?>
<!DOCTYPE html>
<html lang="fr">

<!-- Mirrored from gambolthemes.net/html/workwise/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Nov 2018 09:11:13 GMT -->
<head>
<meta charset="UTF-8">
<title>PPE 3</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />

<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- LINK DATE PICKER -->

<link rel="stylesheet" type="text/css" href="./jquery/jquery-ui.css">
</head>


<body oncontextmenu="return false;">
<?php defined('CONSTANT') or define('URL', 'index-2.php'); ?>

	<div class="wrapper">
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							<div class="col-lg-3 col-md-4 pd-left-none no-pd">
								<div class="main-left-sidebar no-margin">
									<div class="user-data full-width">
										<div class="user-profile">
											<div class="username-dt">
												<div class="usr-pic">
													<img src="<?php if(empty($data['photo_profil_user']))
                    											{
                    												echo "images/profil.jpg";
                    											}
                    											elseif (isset($data['photo_profil_user']))
                    											{
                    												echo $data['photo_profil_user'];
                    											}?>" alt="photo de profil">
												</div>
											</div><!--username-dt end-->
											<div class="user-specs">
												<h3>
                          <?php
                            echo $data['prenom_utilisateur'].' '.$data['nom_user'];
                          ?>
                        </h3>
												<span></span>
											</div>
										</div><!--user-profile end-->
										<ul class="user-fw-status">
											<li>
												<h4>Suivi</h4>
												<span><?php echo $dataCA['NbAmiSuivi']; ?></span>
											</li>
											<li>
												<h4>Me suis</h4>
												<span><?php echo $dataCAmi['NbAmiQuiSuivent']; ?></span>
											</li>
											<li>
												<a href="my-profile-feed.php" title="Votre profil ViaBahuet">Mon profile</a>
											</li>
										</ul>
									</div><!--user-data end-->
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
							<div class="col-lg-6 col-md-8 no-pd">
								<div class="main-ws-sec">
									<div class="post-topbar">
										<div class="user-picy">
                      <!-- TEST POUR SAVOIR SI ON AFFICHE LA PHOTO EN BDD OU UNE PHOTO PAR DEFAUT -->
											<!-- <img src="<?php /* if(empty($data['photo_profil_user']))
                											{
                												echo "images/profil.jpg";
                											}
                											elseif (isset($data['photo_profil_user']))
                											{
                												echo $data['photo_profil_user'];
                											}*/?>" alt="photo profil"> -->
										</div>
										<div class="post-st">
											<ul>
												<li><a class="post_project" href="#" title="">Publier un emploi</a></li>
												<li><a class="post-jb active" href="#" title="">Publier un stage</a></li>
											</ul>
										</div><!--post-st end-->
									</div><!--post-topbar end-->

									<div class="posts-section">

                    <!-- AFFICHAGE DES OFFRES -->
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
                                      }?>" width="50" height="50" alt="photo profil">
													<div class="usy-name">
														<h3>
                              <!-- TEST POUR SAVOIR SI ON AFFICHE NOM OU PRENOM/NOM -->
                                <?php
                                  if (empty($data_offre['prenom_utilisateur']))
                                  {
                                    echo $data_offre['nom_user'];
                                  }
                                  elseif (!empty($data_offre['prenom_utilisateur']))
                                  {
                                    echo $data_offre['prenom_utilisateur'].' '.$data_offre['nom_user'];
                                  }
                                ?>
                            </h3>
														<span><img src="images/clock.png" alt="">Publie le <?php echo convert_date_FR($data_offre['date_publication_offre']); ?></span>
													</div>
												</div>
											</div>
											<div class="epi-sec">
												<ul class="descp">
													<li><img src="images/icon9.png" alt=""><span><?php echo $data_offre['nom_commune']; ?></span></li>
                          <li>
                            <span><i class="fas fa-calendar-alt"></i>
                              <?php if(empty($data_offre['date_fin_offre']))
                                    {
                                      echo " Début du poste : ".convert_date_FR($data_offre['date_debut_offre']);
                                    }
                                    elseif (!empty($data_offre['date_fin_offre']))
                                    {
                                      echo " Du ".convert_date_FR($data_offre['date_debut_offre'])." au ".convert_date_FR($data_offre['date_fin_offre']);
                                    }
                              ?></span>
                          </li>
												</ul>
											</div>
											<div class="job_descp">
												<h3><?php echo $data_offre['titre_offre']; ?></h3>
												<p><?php echo $data_offre['libelle_offre']; ?></p>
											</div>
										</div><!--post-bar end-->
                    <?php
                    }
                    ?>
                    <!-- ###################################################################### -->
										<div class="post-bar">
                      <!-- ######################################################################################## -->
											<div class="comment-section">
												<div class="plus-ic">
													<i class="la la-plus"></i>
												</div>
												<div class="comment-sec">
													<ul>
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img1.png" alt="">
																</div>
																<div class="comment">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt=""> 3 min ago</span>
																	<p>Lorem ipsum dolor sit amet, </p>
																	<a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
																</div>
															</div><!--comment-list end-->
															<ul>
																<li>
																	<div class="comment-list">
																		<div class="bg-img">
																			<img src="images/resources/bg-img2.png" alt="">
																		</div>
																		<div class="comment">
																			<h3>John Doe</h3>
																			<span><img src="images/clock.png" alt=""> 3 min ago</span>
																			<p>Hi John </p>
																			<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
																		</div>
																	</div><!--comment-list end-->
																 </li>
															</ul>
														</li>
														<li>
															<div class="comment-list">
																<div class="bg-img">
																	<img src="images/resources/bg-img3.png" alt="">
																</div>
																<div class="comment">
																	<h3>John Doe</h3>
																	<span><img src="images/clock.png" alt=""> 3 min ago</span>
																	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
																	<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
																</div>
															</div><!--comment-list end-->
														</li>
													</ul>
												</div><!--comment-sec end-->
												<div class="post-comment">
													<div class="cm_img">
														<img src="images/resources/bg-img4.png" alt="">
													</div>
													<div class="comment_box">
														<form>
															<input type="text" placeholder="Post a comment">
															<button type="submit">Send</button>
														</form>
													</div>
												</div><!--post-comment end-->
											</div><!--comment-section end-->
										</div><!--posty end-->
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

							<div class="col-lg-3 pd-right-none no-pd">
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
									<div class="widget suggestions full-width">
										<div class="sd-title">
											<h3>Most Viewed People</h3>
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
													<span>C &amp; C++ Developer</span>
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
									</div>
								</div><!--right-sidebar end-->
							</div>
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>




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
									</div>
									<div class="col-lg-6">
										<!-- <label>Date de début</label> -->
										<input type="text" id="date" name="date_debut_offre_emploi" placeholder="Date d'embauche" required>
									</div>
									<div class="col-lg-12">
										<textarea name="libelle_offre_emploi" placeholder="Détail de l'emploi" maxlength="200"></textarea>
									</div>
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

<!-- FORMULAIRE AJOUT DE STAGE -->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Nouveau stage</h3>
				<div class="post-project-fields">
					<form method="POST" action="traitement_emploi_stage.php?stage">
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="titre_stage" placeholder="Titre du stage">
							</div>
              <div class="col-lg-12">
								<input type="text" name="commune_stage" id="AC_commune_stage" value="<?php if (empty($data_ville2['id_commune']))
                {
                  $data_ville2['id_commune'] = '';
                }
                elseif (isset($data_ville2['id_commune']))
                {
                  echo $data_ville2['id_commune'];
                } ?>"placeholder="Commune du lieu de stage">
              </div>
							<div class="col-lg-12">
								<input type="hidden" name="date_publication_stage" value="<?php echo date('Y-m-d');?>" required>
							</div>
							<div class="col-lg-6">
								<input type="text" name="date_debut_offre_stage" id="date_stage1" placeholder="Date de début du stage" required>
							</div>
							<div class="col-lg-6">
								<input type="text" name="date_fin_offre_stage" id="date_stage2" placeholder="Date de fin du stage" required>
              </div>
							<div class="col-lg-12">
								<textarea name="libelle_offre_stage" placeholder="Détail du stage" maxlength="200"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<!-- value="post" -->
									<li><button class="active" type="submit" name="envoi_stage">Publier</button></li>
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
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/disabled.js"></script>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script> -->
<!-- SCRIPT DATE PICKER -->

<script type="text/javascript" src="./jquery/external/jquery/jquery.js"></script>
<script type="text/javascript" src="./jquery/jquery-ui.js"></script>

<script type="text/javascript">
$('#date').datepicker({ dateFormat:'dd-mm-yy' });
$('#date_stage1').datepicker({ dateFormat:'dd-mm-yy' });
$('#date_stage2').datepicker({ dateFormat:'dd-mm-yy' });

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

<!-- SCRIPT AUTOCOMPLETION EMPLOI -->

<script>
  $( function() {
  var availableTags = <?php echo $tab; ?>;
  $( "#AC_commune" ).autocomplete({
  source: availableTags
  });
  } );
</script>

<!-- SCRIPT AUTOCOMPLETION STAGE -->

<script>
  $( function() {
  var availableTags = <?php echo $tab; ?>;
  $( "#AC_commune_stage" ).autocomplete({
  source: availableTags
  });
  } );
</script>

<!-- LOADER -->
<script type="text/javascript">
  jQuery(window).load(function(){ jQuery(".loader").fadeOut("200");});
</script>

</body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>
</html>

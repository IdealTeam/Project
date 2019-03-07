<?php
include('deconnexion.php');


  $utilisateur = new user('','','','','','','','');
  $user = $_SESSION['UTILISATEUR'];
  $sql_user = "SELECT nom_user,photo_profil_user FROM user WHERE id_user =".$user;
  $req_user = $utilisateur->sql_user($sql_user,$conn);
  $data_user = $req_user->fetch();


?>
<link rel="icon" type="image/png" href="./images/favincon.png" />
<link rel="apple-touch-icon" href="./img/favincon.png" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<header>
  <div class="container">
    <div class="header-data">
      <div class="logo">
        <a href="index-2.php" title=""><img src="images/logo.png" alt=""></a>
      </div><!--logo end-->
      <div class="search-bar" style="width:280px; height:38px;vertical-align:middle;margin:0 auto; color:white; font-weight:bold; ">
          <!-- <form>
						<input type="text" name="search" placeholder="Search...">
						<button type="submit"><i class="la la-search"></i></button>
					</form> -->
          <br>
          <h1 style="font-size:20px;">ViaBahuet</h1>
      </div>
      <!--search-bar end-->
      <nav>
        <ul>
          <li>
            <a href="index-2.php" title="Acceuil de ViaBahuet">
              <span><img src="images/icon1.png" alt=""></span>
              Accueil
            </a>
          </li>
          <li>
            <a href="projects.php?stage" title="Stages uniquement">
              <span><img src="images/icon3.png" alt=""></span>
              Stages
            </a>
          </li>
          <li>
            <a href="jobs.php?emploi" title="Offres d'emploi uniquement">
              <span><img src="images/icon5.png" alt=""></span>
              Offre d'emploi
            </a>
          </li>
          <li>
            <a href="companies.php" title="Liste des entreprises">
              <span><img src="images/icon2.png" alt=""></span>
              Entreprises
            </a>
          </li>
          <li>
            <!--PARTIE ETUDIANT -->
            <a href="etudiant.php" title="Liste des étudiants de Bahuet" >
              <span>
                <i class="fas fa-graduation-cap"></i>
              </span>
              Etudiant
            </a>
            <div class="notification-box">
              <div class="nt-title">
                <h4>Réglages</h4>
                <a href="#" title="">Tout supprimer</a>
              </div>
              <div class="nott-list">
                <div class="notfication-details">
                    <div class="noty-user-img">
                      <img src="images/resources/ny-img1.png" alt="">
                    </div>
                    <div class="notification-info">
                      <h3><a href="#" title="">Jassica William</a> Commentez</h3>
                      <span>2 min ago</span>
                    </div><!--notification-info -->
                  </div>
                  <div class="notfication-details">
                    <div class="noty-user-img">
                      <img src="images/resources/ny-img2.png" alt="">
                    </div>
                    <div class="notification-info">
                      <h3><a href="#" title="">Jassica William</a> Commentez</h3>
                      <span>2 min ago</span>
                    </div><!--notification-info -->
                  </div>
                  <div class="notfication-details">
                    <div class="noty-user-img">
                      <img src="images/resources/ny-img3.png" alt="">
                    </div>
                    <div class="notification-info">
                      <h3><a href="#" title="">Jassica William</a> Commentez</h3>
                      <span>2 min ago</span>
                    </div><!--notification-info -->
                  </div>
                  <div class="notfication-details">
                    <div class="noty-user-img">
                      <img src="images/resources/ny-img2.png" alt="">
                    </div>
                    <div class="notification-info">
                      <h3><a href="#" title="">Jassica William</a> Commentez</h3>
                      <span>2 min ago</span>
                    </div><!--notification-info -->
                  </div>
                  <div class="view-all-nots">
                    <a href="#" title="">Vue de toutes les notifications</a>
                  </div>
              </div><!--nott-list end-->
            </div><!--notification-box end-->
          </li>
        </ul>
      </nav><!--nav end-->
      <div class="menu-btn">
        <a href="#" title=""><i class="fa fa-bars"></i></a>
      </div><!--menu-btn end-->
      <div class="user-account">
        <div class="user-info" style="padding:13px 0px;">
          <img src="<?php if(empty($data_user['photo_profil_user']))
    											{
    												echo "images/profil.jpg";
    											}
    											elseif (isset($data_user['photo_profil_user']))
    											{
    												echo $data_user['photo_profil_user'];
    											}?>" width="30" height="30" alt="photo profil">
          <a href="#" title=""><?php echo $data_user['nom_user']; ?></a>
          <i class="la la-sort-down"></i>
        </div>
        <div class="user-account-settingss">
          <!-- <h3>Statut en ligne</h3>
          <ul class="on-off-status">
            <li>
              <div class="fgt-sec">
                <input type="radio" name="cc" id="c5">
                <label for="c5">
                  <span></span>
                </label>
                <small>En ligne</small>
              </div>
            </li>
            <li>
              <div class="fgt-sec">
                <input type="radio" name="cc" id="c6">
                <label for="c6">
                  <span></span>
                </label>
                <small>Absent</small>
              </div>
            </li>
          </ul> -->
          <h3>
            <a href="my-profile-feed.php" title="Mon profil " style="color : black;"><i class="fas fa-user"></i> Mon profil  </a></h3>
              <ul>
                <li></li>
              </ul>
          <!-- <h3>Réglages</h3>
          <ul class="us-links">
            <li><a href="profile-account-setting.php" title="">Réglages du compte</a></li>
            <li><a href="#" title="">Privé</a></li>
            <li><a href="#" title="">Faqs</a></li>
            <li><a href="#" title="">Termes & Conditions</a></li>
          </ul> -->
          <h3 class="tc"><a href="index-2.php?logout" title=""><i class="fas fa-power-off" style="color:red;"></i> Déconnexion</a></h3>

        </div><!--user-account-settingss end-->
      </div>
    </div><!--header-data end-->
  </div>
</header><!--header end-->

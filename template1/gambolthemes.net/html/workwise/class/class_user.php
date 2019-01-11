<?php

class user
{
    private $id_user;
    private $nom_user;
    private $tel_user;
    private $email_user;
    private $photo_user;
    private $login_user;
    private $pw_user;
    private $etat_user;

    public function user ($iduser,$nomuser,$teluser,$emailuser,$photouser,$loginuser,$pwuser,$etatuser)
    {
        $this->id_user = $iduser;
        $this->nom_user = $nomuser;
        $this->tel_user = $teluser;
        $this->email_user = $emailuser;
        $this->photo_user = $photouser;
        $this->login_user = $loginuser;
        $this->pw_user = $pwuser;
        $this->etat_user = $etatuser;
    }

    //GETTER USER

    public function get_id_user()
    {
        return $this->id_user;
    }

    public function get_nom_user()
    {
        return $this->nom_user;
    }

    public function get_tel_user()
    {
        return $this->tel_user;
    }

    public function get_email_user()
    {
        return $this->email_user;
    }

    public function get_photo_user()
    {
        return $this->photo_user;
    }

    public function get_pw_user()
    {
        return $this->pw_user;
    }

    public function get_etat_user()
    {
        return $this->etat_user;
    }

    //SETTER USER

    public function set_nom_user($nomuser)
    {
        $this->nom_user = $nomuser;
    }

    public function set_tel_user($teluser)
    {
        $this->tel_user = $teluser;
    }

    public function set_email_user($emailuser)
    {
        $this->email_user = $emailuser;
    }

    public function set_photo_user($photouser)
    {
        $this->photo_user = $photouser;
    }

    public function set_login_user($loginuser)
    {
        $this->login_user = $loginuser;
    }

    public function set_pw_user($pwuser)
    {
        $this->pw_user = $pwuser;
    }

    public function set_etat_user($etatuser)
    {
        $this->etat_user = $etatuser;
    }

//METHODES

    public function sql_user ($requete,$conn)
    {
      $sql_affiche = $requete;
      // echo $sql_affiche;
      // die();
      $req = $conn->query($sql_affiche) or die ('erreur user'.$sql_affiche);
      return $req;
    }

    public function ajout_image ($id_user,$PE,$PS,$PN,$PTn,$profil,$conn)
    {
      // VERIFICATION DES ERREURS

      if ($PE/*$_FILES['$new_photo']['error']*/ == 0)
      {
        // VERIFICATION DE LA TAILLE REQUISE

        $taillemax = 2000000;
        if ($PS/*$_FILES['icone']['size']*/ <= $taillemax)
        {
          // VERIFICATION DE L'EXTENSION DU FICHIER
          $ExtensionFichierEnCours = strtolower(substr(strrchr($PN/*$_FILES['$new_photo']['name']*/,'.'),1));

            //strrchr -> renvoi l'extension du fichier avec le point
            //substr -> ignore le premier caractère de la chaine (point)
            //strtolower -> extension convertie en minuscule

          $ExtentionsAutorisee = array('jpg','jpeg','gif','png','tiff');
          if (in_array($ExtensionFichierEnCours,$ExtentionsAutorisee))
          {
            // DESTINATION DE L'IMAGE
            // RENOMMAGE DU FICHIER AVANT UPLOAD

            $destination = 'images/upload/';
            $new_nom_fichier = basename($PN);
            $t = explode(".", $new_nom_fichier);
    		   	$t[0] = $id_user.'_'.date('d-m-Y').'_'.rand(0,1000);;
    		   	$new_nom_fichier = $t[0].".".$t[1];
            // echo $new_nom_fichier;
            // UPLOAD DANS DOSSIER

            $resultat = move_uploaded_file($PTn,$destination.$new_nom_fichier);

            if ($profil == 'couverture')
            {
              $sql0 = "SELECT photo_user FROM user WHERE id_user = '$id_user'";
              $req0 = $conn->query($sql0);
              $data0 = $req0->fetch();
              $ancienne_image = $data0['photo_user'];
              if( file_exists ($ancienne_image))
      				{
      				    unlink($ancienne_image);
      				}
            }
            elseif ($profil == 'profil')
            {
              $sql0 = "SELECT photo_profil_user FROM user WHERE id_user = '$id_user'";
              $req0 = $conn->query($sql0);
              $data0 = $req0->fetch();
              $ancienne_image = $data0['photo_profil_user'];
              if( file_exists ($ancienne_image))
      				{
      				    unlink($ancienne_image);
      				}
            }
            //AJOUT DE L'IMAGE EN BASE DE DONNEE
            if ($profil == 'couverture')
            {
              $image = $destination.$new_nom_fichier;
              $sql = "UPDATE user SET photo_user = '$image' WHERE id_user = '$id_user';";
              $req = $conn->query($sql) or die('erreur modif img '.$sql);
              if ($resultat && $req)
              {
                $message = "Upload réussi !";
              }
            }
            elseif($profil == 'profil')
            {
              $image = $destination.$new_nom_fichier;
              $sql = "UPDATE user SET photo_profil_user = '$image' WHERE id_user = '$id_user';";
              $req = $conn->query($sql) or die('erreur modif img profil '.$sql);
              if ($resultat && $req)
              {
                $message = "Upload réussi !";
              }
            }
          }
          else
          {
            $message = "Echec extension fichier invalide, extension jpg,jpeg,gif,png,tiff attendue";
          }
        }
        else
        {
          $message = "Echec fichier trop gros";
        }
      }
      else
      {
        $message = "Echec upload";
      }
      return $message;
    }

    //AFFICHAGE ETUDIANT
    public function afficheetudiant ($id_diplome,$conn)
    {
          $sql_etudiant = "SELECT user.id_user,nom_user,prenom_utilisateur,tel_user,email_user,photo_profil_user
          FROM user,diplomer WHERE user.statut_user ='u' AND user.etat_user = 1 AND diplomer.id_diplome = '$id_diplome' AND user.id_user = diplomer.id_user;";
          // echo $sql_etudiant; die();
          $req_etudiant = $conn->query($sql_etudiant) or die("erreur class user".$sql_etudiant);
          return $req_etudiant;
    }
}



//$objetuser = new user(1,'toto','05500000','toto@gmail.com','photo.jpg','t','***',1);
//var_dump($objetuser);

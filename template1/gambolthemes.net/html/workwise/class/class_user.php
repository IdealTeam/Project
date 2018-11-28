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
    private $etat_user = 1;

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

    public function affiche_user($requete,$retour,$conn)
    {
      $sql = "$requete";
      $req = $conn->query($sql);
      if ($retour == 1)
      {
        $data = $req->fetch();
        return $data;
      }
      elseif ($retour == 0)
      {
        echo '';
      }
    }
    public function crypt_pw()
    {
        $pw = $this->pw_user = password_hash($string);
        return $pw;
    }

    public function affiche_nom_prenom($id_user,$nom_user,$prenom_user)
    {
      $sql_affiche_nom_prenom = "SELECT $nom_user,$prenom_user FROM user WHERE ".$where;
      $req = $conn->query($sql_affiche_nom_prenom) or die ($sql_affiche_nom_prenom);
    }

    public function modif_image ($id_user,$new_photo,$conn)
    {
      // VERIFICATION DES ERREURS

      if ($_FILES['$new_photo']['error'] == 0)
      {
        // VERIFICATION DE LA TAILLE REQUISE

        $taillemax = 2000000;
        if ($_FILES['icone']['size'] <= $taillemax)
        {
          // VERIFICATION DE L'EXTENSION DU FICHIER
          $ExtensionFichierEnCours = strtolower(substr(strrchr($_FILES['$new_photo']['name'],'.'),1));
            //strrchr -> renvoi l'extension du fichier avec le point
            //substr -> ignore le premier caractère de la chaine (point)
            //strtolower -> extension convertie en minuscule
          $ExtentionsAutorisee = array('jpg','jpeg','gif','png','tiff');
          if (in_array($ExtensionFichierEnCours,$ExtentionsAutorisee))
          {
            // DESTINATION DE L'IMAGE
            // RENOMMAGE DU FICHIER AVANT UPLOAD

            $destination = 'imgages/upload/';
            $new_nom_fichier = basename($_FILES['$new_photo']['name']);
            $t = explode(".", $new_nom_fichier);
    		   	$t[0] = $id_user.time();//date(' d-m-Y');
    		   	$new_nom_fichier = $t[0].".".$t[1];

            // UPLOAD DANS DOSSIER

            $resultat = move_uploaded_file($_FILES['$new_photo']['tmp_name'],$destination.$new_nom_fichier);

            //AJOUT DE L'IMAGE EN BASE DE DONNEE 

            $image = $destination.$new_nom_fichier;
            $sql = "UPDATE user SET photo_user = '$image';";
            $req = $conn->query($sql);
            if ($resultat && $req)
            {
              $message = "Uploda réussi !";
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
    }
}



//$objetuser = new user(1,'toto','05500000','toto@gmail.com','photo.jpg','t','***',1);
//var_dump($objetuser);

<?php

class utilisateur

    {
        private $prenom_utilisateur;
       
        public function utilisateur($prenomutilisateur) //constructeur
        {
            $this->prenom_utilisateur = $prenomutilisateur;
           
        }
        
        public function get_prenom_utilisateur()
        {
            return $this->prenom_utilisateur;
        }
      
        public function set_prenom_utilisateur($prenom)
        {
            $this->prenom_utilisateur = $prenom;
        }
 
     
    }
    
    ?>

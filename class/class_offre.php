<?php

class offre extends stage

    {
        private $id_offre;
        private $libelle_offre;
        private $date_publication_offre;
        private $date_debut_offre;
        private $date_fin_offre;

        public function offre($idoffre, $libelleoffre, $datepublicationoffre,$datedebutoffre, $datefinoffre) //constructeur
        {
            $this->id_offre = $idoffre;
            $this->libelle_offre� = $libelleoffre;
            $this->date_publication_offre� = $datepublicationoffre;
            $this->date_debut_offre� = $datedebutoffre;
            $this->date_fin_offre = $datefinoffre;
        }

        public function get_id_offre()
        {
            return $this->id_offre;
        }
        public function get_libelle_offre()
        {
            return $this->libelle_offre;
        }

        public function get_date_publication_offre()
        {
            return $this->date_publication_offre;
        }

        public function get_date_debut_offre()
        {
            return $this->date_debut_offre;
        }

        public function get_date_fin_offre()
        {
            return $this->date_fin_offre;
        }


        public function set_libelle_offre($libelle)
        {
            $this->libelle_offre = $libelle;
        }

        public function set_date_publication_offre($datepublicationoffre)
        {
            $this->date_publication_offre = $datepublicationoffre;
        }

        public function set_date_debut_offre($datedebutoffre)
        {
            $this->date_debut_offre� = $datedebutoffre;
        }

        public function set_date_fin_offre($datefinoffre)
        {
            $this->date_fin_offre = $datefinoffre;
        }
    }

    ?>
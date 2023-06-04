<?php
    namespace App;

    class session
    {
        private $id;
        private $description;
        private $debut;
        private $fin;
        private $idCours;
        private $prix;
        private $prixModule;
        private $nombreModule;

        /**
         * @param mixed $id
         */
        public function setId($id): void
        {
            $this->id = $id;
        }
        public function setDescription($description)
        {
            $this->description = $description;
        }

        public function setDebut($debut)
        {
            $this->debut = $debut;
        }

        public function setFin($fin)
        {
            $this->fin = $fin;
        }

        public function setPrix($prix)
        {
            $this->prix = $prix;
        }

        public function setPrixMod($prixModule)
        {
            $this->prixModule = $prixModule;
        }
        
        public function setNombreMod($nombreModule)
        {
            $this->nombreModule = $nombreModule;
        }
        public function setIdCours($idCours)
        {
            $this->idCours = $idCours;
        }

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }
        public function saveSession():bool
        {
            $pdo= Database::getPdo();

            try {
                $query = "INSERT into session(description,debut,fin,idCours,prix,prixModule,nombreModule) value(:u,:d,:t,:q,:c,:s,:h)";
                $req=$pdo->prepare($query);
                $req->execute(
                    [
                        'u'=>$this->description,
                        'd'=>$this->debut,
                        't'=>$this->fin,
                        'q'=>$this->idCours,
                        'c'=>$this->prix,
                        's'=>$this->prixModule,
                        'h'=>$this->nombreModule
                    ]
                );
                return true;
            } catch (\PDOException $e) {
                return false;
            }
        }
        public static function getSessions()
        {
            $connexion=Database::getPdo();
            $dateaujourdhui=date('Y-m-d');
            try {
                $query = "SELECT idSession,description,debut,fin,prix,prixModule,nombreModule,intitule from session inner join cours on session.idCours = cours.idCours where fin > $dateaujourdhui";
                $req=$connexion->prepare($query);
                $req->execute();
                $session = $req->fetchAll();
                return $session;
            }catch (\PDOException $e){
                return false;
        }

        }
    }
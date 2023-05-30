<?php

namespace App;

class Cours
{
    private $id;
    private $intitule;
    private $volumeHoraire;
    private $professeur;

    /**
     * @param mixed $intitule
     */
    public function setIntitule($intitule): void
    {
        $this->intitule = $intitule;
    }

    /**
     * @param mixed $professeur
     */
    public function setProfesseur($professeur): void
    {
        $this->professeur = $professeur;
    }

    /**
     * @param mixed $volumeHoraire
     */
    public function setVolumeHoraire($volumeHoraire): void
    {
        $this->volumeHoraire = $volumeHoraire;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * @return mixed
     */
    public function getProfesseur()
    {
        return $this->professeur;
    }

    /**
     * @return mixed
     */
    public function getVolumeHoraire()
    {
        return $this->volumeHoraire;
    }
    public function create():bool{
        $pdo=Database::getPdo();
        try{
            $query="INSERT INTO cours(intitule,volumeHoraire,professeur) values(:nom, :volumeHoraire, :nomProf)";
            $stmt=$pdo->prepare($query);
            $stmt->execute(['nom'=>$this->intitule,
                'volumeHoraire'=>$this->volumeHoraire,
                'nomProf'=>$this->professeur]);
            return true;
        }catch (\PDOException $e){
            return false;
        }
    }
    public static function getCours()
    {
        $pdo = Database::getPdo();
        try{
            $query = "SELECT * from cours";
            $prepare = $pdo->prepare($query);
            $prepare->execute();
            $arrayCours=$prepare->fetchAll();
            return $arrayCours;
        }catch(\PDOException $e){
            return false;
        }
    }
}

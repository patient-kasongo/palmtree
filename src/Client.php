<?php

namespace App;

class Client
{
    private $idClient;
    private $firstname;
    private $secondname;
    private $lastname;
    private $genre;
    private $adresse;
    private $phoneNumber;
    private $mail;
    private $numWhatsapp;
    private $etudesFaites;
    private $nationalie;
    private $diplomeObetenue;
    private $disponibilite;

    /**
     * @param mixed $idClient
     */
    public function setIdClient($id=null): void
    {
        if($id===null){
            $id=$this->createId();
        }
        $this->idClient = $id;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = strtoupper($firstname);
    }

    /**
     * @param mixed $secondname
     */
    public function setSecondname($secondname): void
    {
        $this->secondname = strtoupper($secondname);
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname): void
    {
        $this->lastname = ucfirst(strtolower($lastname));
    }

    /**
     * @param mixed $genre
     */
    public function setGenre($genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }
    /**
     * @param mixed $numWhatsapp
     */
    public function setNumWhatsapp($numWhatsapp): void
    {
        $this->numWhatsapp = $numWhatsapp;
    }

    /**
     * @param mixed $etudesFaites
     */
    public function setEtudesFaites($etudesFaites): void
    {
        $this->etudesFaites = $etudesFaites;
    }

    /**
     * @param mixed $nationalie
     */
    public function setNationalie($nationalie): void
    {
        $this->nationalie = $nationalie;
    }

    /**
     * @param mixed $diplomeObetenue
     */
    public function setDiplomeObetenue($diplomeObetenue): void
    {
        $this->diplomeObetenue = $diplomeObetenue;
    }

    /**
     * @param mixed $disponibilite
     */
    public function setDisponibilite($disponibilite): void
    {
        $this->disponibilite = $disponibilite;
    }
    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getSecondname()
    {
        return $this->secondname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @return mixed
     */
    public function getNumWhatsapp()
    {
        return $this->numWhatsapp;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * @return mixed
     */
    public function getNationalie()
    {
        return $this->nationalie;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @return mixed
     */
    public function getEtudesFaites()
    {
        return $this->etudesFaites;
    }

    /**
     * @return mixed
     */
    public function getDiplomeObetenue()
    {
        return $this->diplomeObetenue;
    }

    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }
    private function createId(){
        $id=date('y');
        $id .= $this->firstname[0];
        $id .= $this->secondname[0];
        $id .= $this->lastname[0];
        $id .= date('dHis');
        return $id;
    }

    public function enregistrer()
    {
        $pdo=Database::getPdo();
        $query="INSERT INTO clients(idCl,nom,postNom,preNom,numPhone,adresse,genre) values (:id,:nom,:postnom,:prenom,:numPhone,:adresse,:genre)";
        $stmt=$pdo->prepare($query);
        $stmt->execute(['id'=>$this->idClient,
                        'nom'=>$this->firstname,
                        'postnom'=>$this->secondname,
                        'prenom'=>$this->lastname,
                        'numPhone'=>$this->phoneNumber,
                        'adresse'=>$this->adresse,
                        'genre'=>$this->genre]
                        );
    }
    public function  modifier(){
        $pdo=Database::getPdo();
        try{
            $query="UPDATE clients set nom=:name, postNom=:postnom, preNom=:prenom, numWhatapp=:whatsapp,numPhone=:phone, email=:email,adresse=:adresse,genre=:genre,etudesFaites=:etudes, diplomeObtenu=:diplome,nationality=:nationalite, disponibility=:disponibilite where idCl=:id";
            $stmt=$pdo->prepare($query);
            $stmt->execute(['name'=>$this->firstname,
                'postnom'=>$this->secondname,
                'prenom'=>$this->lastname,
                'whatsapp'=>$this->numWhatsapp,
                'phone'=>$this->phoneNumber,
                'email'=>$this->mail,
                'adresse'=>$this->adresse,
                'genre'=>$this->genre,
                'etudes'=>$this->etudesFaites,
                'diplome'=>$this->diplomeObetenue,
                'nationalite'=>$this->nationalie,
                'disponibilite'=>$this->disponibilite,
                'id'=>$this->idClient

            ]);

            return true;
        }catch (\PDOException $e){
            return false;
        }
    }

    public function getClientById($id){
        $pdo=Database::getPdo();
        $stmt=$pdo->prepare("SELECT * from clients where idCl=?");
        $this->getIdClient();
        $stmt->execute([$id]);
        $client=$stmt->fetch();

        return $client;

    }
}
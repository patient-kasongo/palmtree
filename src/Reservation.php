<?php

namespace App;

class Reservation
{
    public $client;
    public $session;

    public $etat;

    public function create(){
        $pdo=Database::getPdo();
        try {
            $this->client->enregistrer();
            $query="INSERT INTO reservation(idCl, idSession) values (:idCl,:idSession)";
            $stmt=$pdo->prepare($query);
            $stmt->execute(['idCl'=>$this->client->getIdClient(),
                'idSession'=>$this->session->getId()]);
            return true;
        }catch (\PDOException $e){
            return false;
        }
    }
    public static function getReservations(){
        $pdo=Database::getPdo();
        $query="SELECT idReservation, nom, postNom, preNom, genre, intitule, prix, prixModule, nombreModule from clients inner join reservation on clients.idCl = reservation.idCl inner join session on reservation.idSession=session.idSession inner join cours on session.idCours=cours.idCours order by idReservation desc";
        $stmt=$pdo->prepare($query);
        $stmt->execute();
        $reservations=$stmt->fetchAll();

        return $reservations;

    }
    public static function getClientByIdReservation($id){
        $pdo=Database::getPdo();
        $query="SELECT idReservation,clients.idCl, nom, postNom, preNom, genre, intitule, prix, prixModule, nombreModule,numPhone,numWhatapp,email,adresse,etudesFaites,diplomeObtenu,nationality,disponibility from clients inner join reservation on clients.idCl = reservation.idCl inner join session on reservation.idSession=session.idSession inner join cours on session.idCours=cours.idCours where idReservation=?";
        $stmt=$pdo->prepare($query);
        $stmt->execute([$id]);
        $client=$stmt->fetch();
        return $client;
    }
    public static function validate($id){
        try {
            $pdo=Database::getPdo();
            $query="UPDATE reservation set etat 'valide' where idReservation = ?";
            $req=$pdo->prepare($query);
            $req->execute([$id]);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }
}
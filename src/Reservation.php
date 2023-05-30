<?php

namespace App;

class Reservation
{
    public $client;
    public $cours;

    public $etat;

    public function create(){
        $pdo=Database::getPdo();
        try {
            $this->client->enregistrer();
            $query="INSERT INTO reservation(idCl, idCours) values (:idCl,:idCours)";
            $stmt=$pdo->prepare($query);
            $stmt->execute(['idCl'=>$this->client->getIdClient(),
                'idCours'=>$this->cours->getId()]);
            return true;
        }catch (\PDOException $e){
            return false;
        }
    }
}
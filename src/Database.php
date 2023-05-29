<?php
    namespace App;
    use PDO;

    class Database
    {
        public static $pdo;

        public static function getPdo()
        {
            if(!self::$pdo){
                try {
                    self::$pdo = new PDO('mysql:host=localhost;dbname=palmts','root','',[
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
                    ]);
                } catch (\PDOException $pdo) {
                    echo "Erreur de connection à la base des données!";
                }
            }
            return self::$pdo;
        }
    }
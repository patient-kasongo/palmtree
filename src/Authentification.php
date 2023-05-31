<?php

namespace App;

class Authentification
{
    private $pdo;

    private $auth;
    
    private $pseudo;
    
    private $motdepasse;

    public function __construct($pdo){
        $this->pdo=$pdo;
    }
    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo): void
    {
        $this->pseudo = $pseudo;
    }
    /**
     * @param mixed $motdepasse
     */
    public function setMotdepasse($motdepasse): void
    {
        $this->motdepasse = $motdepasse;
    }
    /**
     * @return mixed
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }
    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function isConnect():?User
    {
        if(session_status()===PHP_SESSION_NONE){
            session_start();
        }
        $id=$_SESSION['auth'] ?? null;
        if($id===null){
            return null;
        }
        $query=$this->pdo->prepare("SELECT * from users where idUser=?");
        $query->execute([$id]);
        $user=$query->fetchOject(User::class);
        return $user ?? null;
    }
    public function login(): ?User
    {
        $query = $this->pdo->prepare("SELECT * FROM users WHERE pseudo = :username");
        $query->execute(['username' => $this->pseudo]);
        $user=$query->fetchObject(User::class);
        if( $user === false ){
            return null;
        }
        // on vérifie le mot de passe
        //var_dump(password_verify($this->motdepasse, $user->getPassword()));
        if(password_verify($this->motdepasse, $user->getPassword())){
            if(session_status()===PHP_SESSION_NONE){
                session_start();
            }
            $_SESSION['auth']=$user->getId();
            return $user;
        }
        return null;
    }
    public static function accessBlocker()
    {
        $user= Authentification::getAuth()->user();
        if($user === null){
            header('location:/public');
            exit();
        }
    }
    public static function getAuth():Auth
    {
        if(!self::$auth){
            self::$auth=new Auth(self::getPdo());
        }
        return self::$auth;
    }
}
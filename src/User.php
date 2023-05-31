<?php

namespace App;

class User
{
    private $id;
    private $username;
    private $password;
    private $role;

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }
    public function redirectUser($role){
        if($role=="DIRECTION DES OPERATIONS"){
            header("Location:/public/cours/management");
        }elseif($role=="DIRECTION DES FINANCES" || $role=="SECRETARIAT"){
            header("Location:/public/client/management");
        }else{
            header("Location:/public");
        }
    }
}
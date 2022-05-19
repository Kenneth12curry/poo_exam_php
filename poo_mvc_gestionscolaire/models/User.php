<?php
namespace App\Models;
use App\Core\Model;
abstract class User extends Model{

    //attributs d'instances
    protected int $id;
    protected string $login;
    protected string $password;
    protected static string $role;
    protected string $nomComplet;
    //attributs static

    //Méthodes
    //constructeur
    public function __construct()
    {
        parent::$table="user";
    }
    //Getters

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }
    //setters

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 

    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }


    public function insert(){
        $sql="INSERT INTO ".parent::$table." (login,password,role,nom_complet)
        VALUES(?,?,?,?);";
        return parent::database()->executeUpdate($sql,[$this->login,$this->password,self::$role,$this->nomComplet]);
    }
    

}
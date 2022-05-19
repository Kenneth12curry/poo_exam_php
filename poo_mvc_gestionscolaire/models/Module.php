<?php
namespace App\Models;
use App\Core\Model;
class Module extends Model{
    private int $id;
    private string $libelle;


    //OneToMany=>Cours
    public function cours():array{
        $sql="select c.* from cours c,module m where c.module_id=m.id and m.id=?";
        parent::selectWhere($sql,[$this->id]);
        return [];
    }

    public function professeur():array{
        $sql="select u.* from user u,professeur_module pm where pm.professeur_id=u.id and pm.module_id=? 
        and role like 'ROLE_PROFESSEUR";
        parent::selectWhere($sql,[$this->id]);
        return [];
    }

    //Méthodes
    public function __construct()
    {
        parent::$table="module";
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function insert(){
        $sql="INSERT INTO ".parent::$table." (id,libelle)
        VALUES(?,?,?,?);";
        return parent::database()->executeUpdate($sql,[$this->id,$this->libelle]);
    }
    
}
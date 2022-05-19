<?php
namespace App\Models;
use App\Core\Model;
class Reinscriptions extends Model{
    private int $id;
    private string $nomEtudiant;
    private string $filiere;
    //classe Php \namespace racine
    private \DateTime $dateReins;


    //Fonctions navigationnelles;

    public function etudiants():Etudiant{
        $sql="select u.* from reinscriptions re,user u where re.user_id=u.id and re.id=?
        and role like 'ROLE_ETUDIANT";
        parent::selectWhere($sql,[$this->id],true);
        return new Etudiant;
    }
    
    //constructeur 
    public function __construct()
    {
        parent::$table="reinscriptions";
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
     * Get the value of nomEtudiant
     */ 
    public function getNomEtudiant()
    {
        return $this->nomEtudiant;
    }

    /**
     * Set the value of nomEtudiant
     *
     * @return  self
     */ 
    public function setNomEtudiant($nomEtudiant)
    {
        $this->nomEtudiant = $nomEtudiant;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of dateRéins
     */ 
    public function getDateRéins()
    {
        return $this->dateReins;
    }

    /**
     * Set the value of dateRéins
     *
     * @return  self
     */ 
    public function setDateRéins($dateReins)
    {
        $this->dateReins = $dateReins;

        return $this;
    }

    public function insert(){
        $sql="INSERT INTO ".parent::$table." (id,nom_etudiant,filiere,date_reins)
        VALUES(?,?,?,?);";
        return parent::database()->executeUpdate($sql,[$this->id,$this->nomEtudiant,
        $this->filiere,$this->dateReins]);
        
    }
}
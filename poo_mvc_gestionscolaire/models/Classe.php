<?php
namespace App\Models;
use App\Core\Model;
class Classe extends Model{
    private int $id;
    private string $libelle;
    private string $filiere;
    private string $niveau;


    //Fonctions Navigationnelles => Fonctions issues des associations
    //OneToMany=>Cours
    public function cours():array{
        $sql="select c.* from classe cl,cours c where c.classe_id=cl.id and cl.id=?";
        parent::selectWhere($sql,[$this->id]);
        return [];
    }

    public function inscriptions():array{
        $sql="select i.* from classe cl,inscriptions i where i.classe_id=cl.id and cl.id=?";
        parent::selectWhere($sql,[$this->id]);
        return [];
    }
    
    //Méthodes
    public function __construct()
    {
        parent::$table="classe";
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
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function insert(){
        $sql="INSERT INTO ".parent::$table." (id,libelle,filiere,niveau)
        VALUES(?,?,?,?);";
        return parent::database()->executeUpdate($sql,[$this->id,$this->libelle,$this->filiere,$this->niveau]);
    }
    

}
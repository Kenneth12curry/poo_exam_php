<?php
namespace App\Models;
use App\Core\Model;
class Cours extends Model{
    private int $id;
    //classe Php \namespace racine
    private \DateTime $dateCours;
    private string $heureDebut;
    private string $heureFin;

    //Fonctions navigationnelles
    //onetomany=>Classe
    public function classe():Classe{
        $sql="select cl.* from classe cl,cours c where c.classe_id=cl.id and c.id=?";
        parent::selectWhere($sql,[$this->id],true);
        return new Classe;
    }
    //manytoone=>Professeur
    public function professeur():Professeur{
        $sql="select u.* from user u,cours c where c.professeur_id=u.id and c.id=?
        and role like 'ROLE_PROFESSEUR";
        parent::selectWhere($sql,[$this->id],true);
        return new Professeur;
    }
     //manytoone=>Module
     public function module():Module{
         $sql="select m.* from cours c,module m where c.module_id=m.id and c.id=?";
         parent::selectWhere($sql,[$this->id],true);
        return new Module;
    }
    public function etudiants():array{
        $sql="select u.* from user u,cours c where c.id=u.cours_id and c.id=?
        and role like 'ROLE_ETUDIANT";
        parent::selectWhere($sql,[$this->id]);
        return [];
    }
    
    //Méthodes
    public function __construct()
    {
        parent::$table="cours";
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
     * Get the value of dateCours
     */ 
    public function getDateCours()
    {
        return $this->dateCours;
    }

    /**
     * Set the value of dateCours
     *
     * @return  self
     */ 
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }

    /**
     * Get the value of heureDebut
     */ 
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set the value of heureDebut
     *
     * @return  self
     */ 
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get the value of heureFin
     */ 
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set the value of heureFin
     *
     * @return  self
     */ 
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }

    public function insert(){
        $sql="INSERT INTO ".parent::$table." (date_cours,heure_debut,heure_fin)
        VALUES(?,?,?,?);";
        return parent::database()->executeUpdate($sql,[$this->id,$this->dateCours,$this->heureDebut,$this->heureFin]);
    }
}

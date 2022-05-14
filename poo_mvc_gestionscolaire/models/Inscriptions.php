<?php
namespace App\Models;
use App\Core\Model;
class Inscriptions extends Model{

    //classe Php \namespace racine
    private \DateTime $dateInsc;
    private int $annee;

    //Fonctions navigationnelles
    public function etudiants():Etudiant{
        $sql="select u.* from user u,inscriptions i where i.user_id=u.id and i.id=?
        and role like 'ROLE_ETUDIANT";
        parent::selectWhere($sql,[$this->id],true);
        return new Etudiant;
    }

    public function classes():Classe{
        $sql="select cl.* from classe cl,inscriptions i where i.classe_id=cl.id and i.id=?";
        parent::selectWhere($sql,[$this->id],true);
        return new Classe;
    }
    
    //constructeur
    public function __construct()
    {
        self::$table="inscriptions";
    }

    /**
     * Get the value of dateInsc
     */ 
    public function getDateInsc()
    {
        return $this->dateInsc;
    }

    /**
     * Set the value of dateInsc
     *
     * @return  self
     */ 
    public function setDateInsc($dateInsc)
    {
        $this->dateInsc = $dateInsc;

        return $this;
    }

    /**
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }
}
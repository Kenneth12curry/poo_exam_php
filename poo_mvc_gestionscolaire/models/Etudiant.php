<?php
namespace App\Models;
class Etudiant extends User{
    private int $tel;

    //Fonctions naviagtionnelles

    public function inscriptions():array{
        $sql="select i.* from user u,inscriptions i where i.user_id=u.id and u.id={$this->id}
        and role like 'ROLE_ETUDIANT";
        return [];
    }

    public function cours():Cours{
        $sql="select c.* from cours c, user u where u.cours_id=c.id and u.id={$this->id}  
        and role like 'ROLE_ETUDIANT";
        return new Cours;
    }

    public function reinscriptions():array{
        $sql="select re.* from reinscriptions re,user u where re.user_id=u.id and u.id={$this->id}
        and role like 'ROLE_ETUDIANT";
        return [];
    }
    

    //constructeur
     public function __construct()
    {
        $this->role="ROLE_ETUDIANT";
    }

    /**
     * Get the value of tel
     */ 
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     *
     * @return  self
     */ 
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

   //Redefinition => evolution
        //1-Heriatge de Méthode
        //2redefinir=> changer son comportement
    
    public function setRole($role)
    {
        return $this;
    }

}
<?php
namespace App\Models;
class Etudiant extends User{
    private int $tel;

    //Fonctions naviagtionnelles

    public function inscriptions():array{
        $sql="select i.* from user u,inscriptions i where i.user_id=u.id and u.id=?
        and role like 'ROLE_ETUDIANT";
        parent::selectWhere($sql,[$this->id]);
        return [];
    }

    public function cours():Cours{
        $sql="select c.* from cours c, user u where u.cours_id=c.id and u.id=?
        and role like 'ROLE_ETUDIANT";
        parent::selectWhere($sql,[$this->id],true);
        return new Cours;
    }

    public function reinscriptions():array{
        $sql="select re.* from reinscriptions re,user u where re.user_id=u.id and u.id=?
        and role like 'ROLE_ETUDIANT";
        parent::selectWhere($sql,[$this->id]);
        return [];
    }
    

    //constructeur
     public function __construct()
    {
        parent::$role="ROLE_ETUDIANT";
        
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
    public static function selectAll(){
        $sql="select * from ? where role like ? ";
        self::database()->executeSelect($sql,[parent::$table,parent::$role]);
    }

}
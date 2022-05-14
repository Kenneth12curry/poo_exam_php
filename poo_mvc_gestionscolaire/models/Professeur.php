<?php
namespace App\Models;
class Professeur extends User{
    private string $grade;


    
    //oneToMany=>Cours
    public function cours():array{
        return [];
    }

    //ManyToMany=>modules
    public function modules():array{
        $sql="select m.* from module m ,professeur_module pm where m.id=pm.module_id 
        and pm.professeur_id={$this->id}";
        return [];
    }

     //onetoone=>Adresse
     public function adresse():Adresse{
         $sql="select ville,quartier from user where user.id=? and role like 'ROLE_PROFESSEUR";
         parent::selectWhere($sql,[$this->id],true);
        return new Adresse();
    }

     /*public function adresse():Adresse|null{
        return null;
    }*/
   


    //Méthodes
    public function __construct()
    {
        parent::$role="ROLE_PROFESSEUR";
        
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

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
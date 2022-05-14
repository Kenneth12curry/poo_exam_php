<?php
namespace App\Models;
class RP extends User{

    public function __construct()
    {
        parent::$role="ROLE_RP";
    }


    public static function selectAll(){
        $sql="select * from ? where role like ? ";
        self::database()->executeSelect($sql,[parent::$table,parent::$role]);
    }

    //Redefinition => evolution
        //1-Heriatge de Méthode
        //2redefinir=> changer son comportement
    
    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    
    {
        return $this;
    }

}   
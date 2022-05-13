<?php
namespace App\Models;
class RP extends User{

    public function __construct()
    {
        $this->role="ROLE_RP";
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
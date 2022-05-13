<?php
namespace App\Models;
class AC extends User {
    private string $email;

    //Méthodes cosntructeur
    public function __construct()
    {
        $this->role="ROLE_AC";
    }
    

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

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
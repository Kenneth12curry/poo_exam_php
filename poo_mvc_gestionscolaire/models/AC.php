<?php
namespace App\Models;
class AC extends User {
    private string $email;

    //Méthodes cosntructeur
    public function __construct()
    {
        parent::__construct();
        parent::$role="ROLE_AC";
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

    public static function selectAll(){
        $sql="select * from ? where role like ? ";
        self::database()->executeSelect($sql,[parent::$table,parent::$role]);
    }

    public function insert(){
        $sql="INSERT INTO ".parent::$table." (login,password,role,nom_complet,email)
        VALUES (?,?,?,?,?);";
        return parent::database()->executeUpdate($sql,[$this->login,$this->password,parent::$role,$this->nomComplet,$this->email]);
    }
    
}
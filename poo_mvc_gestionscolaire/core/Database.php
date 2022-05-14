<?php
namespace App\Core;
class Database{
    private \PDO|null $pdo=null;//pas de connexion

    public function openConnexion(){

        try{
            $this->pdo=new \PDO("mysql:dbname=gestion_scolaire;host=127.0.0.1","root","");
            die("Bienvenue");
        }catch(\Exception $th){
            die("Erreur Connexion->veuillez contacter votre administrateur");
        }
        
    }
    public function closeConnexion(){
        $this->pdo=null;
    }

    public function executeUpdate(string $sql,array $data=[]){
        $this->openConnexion();
        //sql="select * from classe where id=? and role like ?"
        $stm=$this->pdo->prepare($$sql);
        $stm->execute($data);
        $result=$stm->rowCount();
        $this->closeConnexion();
        return $result;

    }
    public function executeSelect(string $sql,array $data=[],$single=false){

        $this->openConnexion();
        //sql="select * from classe where id=? and role like ?"
        $stm=$this->pdo->prepare($$sql);
        $stm->execute($data);
        if($single){
            $result=$stm->fetch();
        }else{
            $result=$stm->fetchAll();
        }
        $this->closeConnexion();
        return $result;
    }   


}
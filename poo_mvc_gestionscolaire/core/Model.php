<?php
namespace App\Core;
abstract class Model implements IModel{

    protected static Database|null $database=null;
    protected static string $table;

    public function insert(){

    }
    public function update(){

    }
    //création d'une méthode pour pouvoir créer un objet de type database

    public static function database():Database{
        //singleton
        if(self::$database==null){
            self::$database=new Database;
        }
        return self::$database;
    }

    public static function delete(int $id){
        $sql="delete from ? where id=?";
        self::database()->executeUpdate($sql,[self::$table,$id]);
    }

    public static function selectAll(){
        $sql="select * from ? ";
        self::database()->executeSelect($sql,[self::$table]);
    }

    public static function selectById(int $id){
        $sql="select * from ? where id=?";
        self::database()->executeSelect($sql,[self::$table,$id]);
    }
    public static function selectWhere($sql,array $data=[],$single=false){
        return self::database()->executeSelect($sql,$data,$single);
    }
    
}
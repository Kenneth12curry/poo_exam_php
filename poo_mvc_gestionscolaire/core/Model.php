<?php
namespace App\Core;
abstract class Model implements IModel{
    protected static string $table;

    public function insert(){

    }
    public function update(){

    }
    public static function delete(int $id){
        $sql="delete from ".self::$table."where id=$id";
    }
    public static function selectAll(){

    }
    public static function selectById(int $id){

    }
    public static function selectWhere($sql,array $data=[],$single){

    }
    
}
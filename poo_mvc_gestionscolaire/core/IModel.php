<?php
namespace App\Core;
interface IModel{
    public function insert();
    public function update();
    public static function delete(int $id);
    public static function selectAll();
    public static function selectByid(int $id);
    public static function selectWhere($ql,array $data=[],$single);
    
}
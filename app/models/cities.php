<?php
namespace coding\app\models;



class cities extends Model{
   

    function __construct()
    {
        parent::$tblName="users";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}
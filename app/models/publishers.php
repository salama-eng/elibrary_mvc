<?php
namespace coding\app\models;



class publishers extends Model{
   

    function __construct()
    {
        parent::$tblName="publishers";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}
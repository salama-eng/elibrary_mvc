<?php
namespace coding\app\models;



class offers extends Model{
   

    function __construct()
    {
        parent::$tblName="offers";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}
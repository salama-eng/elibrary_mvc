<?php
namespace coding\app\models;



class author extends Model{
   

    function __construct()
    {
        parent::$tblName="authors";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }


}
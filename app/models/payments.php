<?php
namespace coding\app\models;



class payment extends Model{
   

    function __construct()
    {
        parent::$tblName="payments";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }

}
<?php
namespace coding\app\models;



class category extends Model{
   

    function __construct()
    {
        parent::$tblName="categories";
        
    }

    function __set($name, $value)
    {
        $this->$name=$value;
        
    }


}
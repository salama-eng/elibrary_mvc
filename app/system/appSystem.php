<?php
namespace coding\app\system;


class AppSystem{
    public $request;
    
    function __construct()
    {

        $this->request=new Request();

    } 
    
    public function start(){
        $this->request=new Request();
        $this->request->checkRequest();
        

    }
    
}

?>
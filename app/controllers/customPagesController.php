<?php

namespace coding\app\controllers;

class CustomPagesController extends Controller{

    public function notFound (){
        $this->view('error');

    }

    public function notAuthroized(){
        
    }
}
?>
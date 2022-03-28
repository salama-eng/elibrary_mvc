<?php
namespace coding\app\controllers;
class UsersController{
//  public function view($view_name,$data=null){

//         require_once 'app/views/'.$view_name.'.php';

//     }
    
    public static  function show(){
      
        require_once 'app/views/index.php';

    }

    public static  function category(){
      
        require_once 'app/views/category.php';

    }
    public static  function basket(){
      
        require_once 'app/views/basket.php';

    }
    public static  function details(){
      
        require_once 'app/views/details.php';

    }
    public static  function stepper(){
      
        require_once 'app/views/stepper.php';

    }
    public static  function header(){
      
        require_once 'app/views/Admin/header.php';

    }

    public static  function booksList(){
      
        require_once 'app/views/Admin/booksList.php';

    }
    public function model($model_name){
        require_once 'app/models/'.$model_name.'.php';

        return new $model_name();
    }

   


}
?>
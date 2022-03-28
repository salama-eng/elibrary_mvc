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
    public static  function admincategory(){
      
        require_once 'app/views/Admin/admincategory.php';

    }
    public static  function order(){
      
        require_once 'app/views/Admin/order.php';

    }
  
    public static  function offer(){
      
        require_once 'app/views/Admin/offer.php';

    }
  
   
    public static  function users(){
      
        require_once 'app/views/Admin/users.php';

    }
  
    public static  function payments(){
      
        require_once 'app/views/Admin/payments.php';

    }
  
    public static  function Addres(){
      
        require_once 'app/views/Admin/Addres.php';

    }
  
    public static  function publishers(){
      
        require_once 'app/views/Admin/publishers.php';

    }
     
    public static  function cities(){
      
        require_once 'app/views/Admin/cities.php';

    }
    public static  function Author(){
      
        require_once 'app/views/Admin/author.php';

    }


    public function model($model_name){
        require_once 'app/models/'.$model_name.'.php';

        return new $model_name();
    }

   


}
?>
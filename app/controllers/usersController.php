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
  

<<<<<<< Updated upstream
=======
    public static  function booksList(){
      
        require_once 'app/views/Admin/booksList.php';

    }
    public static  function AdminCategory(){
      
        require_once 'app/views/Admin/adminCategory.php';

    }
    public static  function order(){
      
        require_once 'app/views/Admin/order.php';

    }
    public static  function offers(){
      
        require_once 'app/views/Admin/offers.php';

    }

    public static  function publishers(){
      
        require_once 'app/views/Admin/publishers.php';

    }

    public static  function cities(){
      
        require_once 'app/views/Admin/cities.php';

    }
    public static  function payment(){
      
        require_once 'app/views/Admin/payment.php';

    }


    public static  function Address(){
      
        require_once 'app/views/Admin/Address.php';

    }

    public static  function users(){
      
        require_once 'app/views/Admin/users.php';

    }


>>>>>>> Stashed changes
    public function model($model_name){
        require_once 'app/models/'.$model_name.'.php';

        return new $model_name();
    }

   


}
?>
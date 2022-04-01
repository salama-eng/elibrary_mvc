<?php
namespace coding\app\controllers;

use coding\app\models\cities;

class CitiesController extends Controller{
 
 


function Cities(){

    $cities=new cities();
    $allcities=$cities->getAll();
// print_r($alluser);

    $this->view('admin/Cities',$allcities);

}


function AddCity(){
  $this->view('admin/AddCity');

}

function StorCity(){

  $cities=new cities();
  
  $cities->name=$_POST['name'];
  $cities->created_by=7;
 

  $cities->is_active=isset($_POST['is_active'])?1:0;

 
  if(!$cities->save())
  {
       echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='Cities'; </script>";
  }
  else 
  {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
      echo "<script type='text/javascript'> document.location ='AddCity'; </script>";
  }
 

}
function edit(){
    

}



function update(){

}
public function remove(){

}












 

/*********************** */


   

    public function model($model_name){
        require_once 'app/models/'.$model_name.'.php';

        return new $model_name();
    }

   


}
?>
<?php
namespace coding\app\controllers;

use coding\app\models\publishers;

class PublishersController extends Controller{

   

    function publishers(){

        $publisher=new publishers();
        $allpublishers=$publisher->getAll();
  //print_r($allauthor);

      
        $this->view('admin/publishers',$allpublishers);

    }


    function addpublisher(){
      $this->view('admin/addpublisher');

    }

  //   function storcategory(){
    
  //     $category=new Category();
      
  //     $category->name=$_POST['category_name'];
  //     $imageName=$this->uploadFile($_FILES['image']);

  //     $category->image=$imageName!=null?$imageName:"default.png";
  //     $category->created_by=1;
  //     $category->is_active=$_POST['is_active'];

     
  //     if(!$category->save())
  //     {
  //          echo "<script>alert('You have successfully inserted the data');</script>";
  // echo "<script type='text/javascript'> document.location ='AdminCategory'; </script>";
  //     }
  //     else 
  //     {
  //         echo "<script>alert('Something Went Wrong. Please try again');</script>";
  //         echo "<script type='text/javascript'> document.location ='AddCategory'; </script>";
  //     }
     

  // }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }


    public static function uploadFile(array $imageFile): string
    {
        /// check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
          mkdir(__DIR__ . '/../../public/images');
      }

      if ($imageFile && $imageFile['tmp_name']) {
          $image = explode('.', $imageFile['name']);
          $imageExtension = end($image);

          $imageName = uniqid(). "." . $imageExtension;
          $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

          move_uploaded_file($imageFile['tmp_name'], $imagePath);

          return $imageName;
      }

      return null;
    }


    

    public function storpublisher()
    {   
      $publishers=new publishers();
        
      $imageName=$this->uploadFile($_FILES['image']);

      $publishers->image=$imageName!=null?$imageName:"default.png";
            
     
        $publishers->name=$_POST['name'];
        $publishers->alt_phone=$_POST['phone'];
        $publishers->alt_phone=$_POST['alt_phone'];
        $publishers->is_active=isset($_POST['is_active'])?1:0;
        $publishers->fax=$_POST['fax'];
        $publishers->email=$_POST['email'];
        $publishers->address=$_POST['address'];
        $publishers->country=$_POST['country'];
     
        $publishers->created_by=$_POST['created_by'];
    
        if(!$publishers->save())
        {
             echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='publishers'; </script>";
        }
        else 
        {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='addpublisher'; </script>";
        }
       

       
    }
}
?>
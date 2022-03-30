<?php
namespace coding\app\controllers;

use coding\app\models\author;

class AuthorController extends Controller{



    function Authors(){

        $author=new author();
        $allauthor=$author->getAll();
  //print_r($allauthor);

      
        $this->view('admin/Authors',$allauthor);

    }


    function AddAuthor(){
      $this->view('admin/AddAuthor');

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



    public function storauthor()
    {
        
      
        $author=new author();

       
        $author->name=$_POST['name'];
        $author->phone=$_POST['phone'];
        $author->is_active=isset($_POST['is_active'])?1:0;
        $author->bio=$_POST['bio'];
        $author->email=$_POST['email'];
      
        $author->created_by=$_POST['created_by'];
    
        if(!$author->save())
        {
             echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='Authors'; </script>";
        }
        else 
        {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='AddAuthor'; </script>";
        }
       

       
    }
}
?>
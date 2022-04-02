<?php
namespace coding\app\controllers;

use coding\app\models\books;

class bookController extends Controller{

   

    function booksList(){

        $book=new books();
        $allbooks=$book->getAll();
       // print_r($allbooks);

      
        $this->view('admin/booksList',$allbooks);

    }


    

    // function store(){
    //     print_r($_POST);
    //     print_r($_FILES);
    //     $category=new Category();
        
    //     $category->name=$_POST['category_name'];
    //     $imageName=$this->uploadFile($_FILES['image']);

    //     $category->image=$imageName!=null?$imageName:"default.png";
    //     $category->created_by=1;
    //     $category->is_active=$_POST['is_active'];

    //     $category->save();

    // }
    function edit($params=[]){
        $books=new books();
        $result=$books->getSingleRow($params['id']);
        $this->view('admin/edite_book',$result);
        
    }


    function update(){
       print_r($_POST);
        print_r($_FILES);
         $book=new books();
         if(isset($_FILES['image']))

         $book->image=$this->uploadFile($_FILES['image']);
         else
         $book->image=$_POST['image_1'];
        $book->title=$_POST['title'];
        $id=$_POST['id'];
        $book->price=$_POST['price'];
        $book->is_active=isset($_POST['is_active'])?1:0;
        $book->description=$_POST['description'];
        $book->pages_number=$_POST['number'];
        $book->category_id=$_POST['category'];
        $book->author_id=$_POST['authors'];
        $book->publisher_id=$_POST['publishers'];  
        $book->quantity=$_POST['quantity'];
        $book->format=$_POST['format'];
        $book->created_by=$_POST['created_by'];
        $book->update($id);
    //    // if(!$book->update())
    //     //{
    //          echo "<script>alert('You have successfully inserted the data');</script>";
    // // echo "<script type='text/javascript'> document.location ='booksList'; </script>";
    //     }
    //     else 
    //     {
    //         echo "<script>alert('Something Went Wrong. Please try again');</script>";
    //         // echo "<script type='text/javascript'> document.location ='addbook'; </script>";
    //     }
       

       
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

 public function addbook()
    {
        $this->view('admin/addbook');
       
    }
    

    public function storbook()
    {
        $book=new books();
        if(isset($_FILES['image']))

         $book->image=$this->uploadFile($_FILES['image']);
         else
         $book->image=$_POST['image_1'];
            

       
        $book->title=$_POST['title'];
       
        $book->price=$_POST['price'];
        $book->is_active=isset($_POST['is_active'])?1:0;
        $book->description=$_POST['description'];
        $book->pages_number=$_POST['number'];
        $book->category_id=$_POST['category'];
        $book->author_id=$_POST['authors'];
        $book->publisher_id=$_POST['publishers'];  
        $book->quantity=$_POST['quantity'];
        $book->format=$_POST['format'];
        $book->created_by=$_POST['created_by'];
    
        if(!$book->save())
        {
             echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='booksList'; </script>";
        }
        else 
        {
            echo "<script>alert('Something Went Wrong. Please try again');</script>";
            echo "<script type='text/javascript'> document.location ='addbook'; </script>";
        }
       

       
    }
}
?>
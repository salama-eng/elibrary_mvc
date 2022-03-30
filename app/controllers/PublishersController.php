<?php
namespace coding\app\controllers;

use coding\app\models\publishers;

class PublishersController extends Controller{

   

    function Authors(){

        $publisher=new publishers();
        $allpublishers=$publisher->getAll();
  //print_r($allauthor);

      
        $this->view('admin/Authors',$allpublishers);

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
    

    // public function storbook()
    // {
        
    //     if($_FILES['image']['name']){
    //         move_uploaded_file($_FILES['image']['tmp_name'], "assets/books/".$_FILES['image']['name']);
    //         $img=$_FILES['image']['name'];
    //         }
            
    //     $book=new books();

       
    //     $book->title=$_POST['title'];
    //     $book->image=$img!=null?$img:"default.png";
    //     $book->price=$_POST['price'];
    //     $book->is_active=isset($_POST['is_active'])?1:0;
    //     $book->description=$_POST['description'];
    //     $book->pages_number=$_POST['number'];
    //     $book->category_id=$_POST['category'];
    //     $book->author_id=$_POST['authors'];
    //     $book->publisher_id=$_POST['publishers'];  
    //     $book->quantity=$_POST['quantity'];
    //     $book->format=$_POST['format'];
    //     $book->created_by=$_POST['created_by'];
    
    //     if(!$book->save())
    //     {
    //          echo "<script>alert('You have successfully inserted the data');</script>";
    // echo "<script type='text/javascript'> document.location ='bookslist'; </script>";
    //     }
    //     else 
    //     {
    //         echo "<script>alert('Something Went Wrong. Please try again');</script>";
    //         echo "<script type='text/javascript'> document.location ='addbook'; </script>";
    //     }
       

       
    // }
}
?>
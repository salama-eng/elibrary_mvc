<?php
// require_once 'app/system/app.php';
// $app=new App();

require_once __DIR__ .'/../vendor/autoload.php';

use coding\app\controllers\AuthorController;
use coding\app\controllers\PublishersController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\CitiesController;
use coding\app\controllers\bookController;
use coding\app\controllers\AdminCategory
;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

// $config=array(
//   'servername'=>$_ENV['DB_SERVER_NAME'],
//   'dbname'=>$_ENV['DB_NAME'],
//   'dbpass'=>$_ENV['DB_PASSWORD'],
//   'username'=>$_ENV['DB_USERNAME']

// );


$config=array(
  'servername'=>'localhost',
  'dbname'=>'elibrary',
  'dbpass'=>'',
  'username'=>'root'

);



$system=new AppSystem($config);

Router::get('/',[UsersController::class,'show']);
Router::get('/category',[UsersController::class,'category']);
Router::get('/basket',[UsersController::class,'basket']);
Router::get('/stepper',[UsersController::class,'stepper']);
Router::get('/details',[UsersController::class,'details']);   
Router::get('/header',[UsersController::class,'header']); 

/**********  Users Router ********** */

Router::get('/Users',[UsersController::class,'Users']); 
Router::get('/AddUser',[UsersController::class,'AddUser']); 
Router::post('/StorUser',[UsersController::class,'StorUser']); 

Router::get('/booksList',[bookController::class,'booksList']); 

Router::get('/addbook',[bookController::class,'addbook']);
Router::post('/storbook',[bookController::class,'storbook']);
Router::get('/edit_book/{id}',[bookController::class,'edit']);
Router::post('/update',[bookController::class,'update']);
Router::get('/remove_book/{id}',[bookController::class,'remove']);

/**********  Category Router ********** */

Router::get('/AdminCategory',[AdminCategory::class,'Admincategory']);   
Router::get('/AddCategory',[AdminCategory::class,'AddCategory']); 
Router::post('/storcategory',[AdminCategory::class,'storcategory']); 

 
/**********  Authors Router ********** */

Router::get('/Authors',[AuthorController::class,'Authors']);
Router::get('/AddAuthor',[AuthorController::class,'AddAuthor']); 
Router::post('/storauthor',[AuthorController::class,'storauthor']);  
 
/**********  publishers Router ********** */

Router::get('/publishers',[PublishersController::class,'publishers']);
Router::get('/addpublisher',[PublishersController::class,'addpublisher']);
Router::post('/storpublisher',[PublishersController::class,'storpublisher']);  
 
/**********  Cities router ********** */

Router::get('/offer',[CitiesController::class,'offer']);      
Router::get('/order',[UsersController::class,'order']);      


/**********  Cities router ********** */

Router::get('/Cities',[CitiesController::class,'Cities']);  
Router::get('/AddCity',[CitiesController::class,'AddCity']);  
Router::post('/StorCity',[CitiesController::class,'StorCity']);  

Router::get('/address',[UsersController::class,'address']);  
Router::get('/ERROR',[UsersController::class,'ERROR']);
      
$system->start();



?>


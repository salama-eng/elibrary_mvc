<?php
// require_once 'app/system/app.php';
// $app=new App();


require_once __DIR__ . '/vendor/autoload.php';

use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;

$system=new AppSystem;

Router::get('/',[UsersController::class,'show']);
Router::get('/category',[UsersController::class,'category']);
Router::get('/basket',[UsersController::class,'basket']);
Router::get('/stepper',[UsersController::class,'stepper']);
Router::get('/details',[UsersController::class,'details']);   
Router::get('/header',[UsersController::class,'header']); 
Router::get('/booksList',[UsersController::class,'booksList']);   
$system->start();



?>


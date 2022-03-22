<?php
require_once 'controller.php';
class Users extends Controller
{
    public function __construct()
    {

        echo "<h1>inside users controller construct</h1>";
    }
    function index()
    {
        $this->view('index',);
       
    }
    function show($id)
    {


        $user = $this->model('user');
        $userName = $user->select($id);
        $this->view('user_view', $userName);
    }
    function add()
    {

        echo "<h1>add of users</h1>";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

 function validate($email,$name,$password):bool
 {
    if(strlen($name)>0 && strlen($name)<20&&strlen($password)>0&&strlen($password)<20&&filter_var($email, FILTER_VALIDATE_EMAIL))
    {
         return true;
         echo "true";
    }
   
    else
    {
        echo "false";
         return false;
    }
   


 }

    function add_user()
    {

        print_r($_POST);
        if(isset($_POST['submit']))
        {
            $userName=$this->test_input($_POST['name']);
            $password=$this->test_input($_POST['password']);
            $email=$this->test_input($_POST['email']);
           
            
           if($this->validate($email,$userName,$password))
           {
               $user_data =array(
                   'name'=>$userName,
                   'password'=>md5($password),
                   'email'=>$email
                   
               );
               $u=$this->model('user');
               $message="";
               if($u->insert($user_data)){
                   $type='success';
                    $message="user created successful";
                    $this->view('feedback',array('type'=>$type,'message'=>$message));

                }}
               else if($this->validate($email,$userName,$password)==false){
           
                   $type='danger';
                   $message="can not create user please check your data ";
               
                   $this->view('register',array('type'=>$type,'message'=>$message,'form_values'=>$_POST));

                }
           } 

        
        
    }
    function register()
    {
        $this->view('register');
    }

    function list_all()
    { $users=$this->model("user");
        $result=$users->select();
        $this->view('users_table',$result);

    }
    function status($id){
    $user=$this->model("user");
        $user->changeStatus($id);
        $this->list_all();

//        header('location:users/list_all');


        
    }

    function login(){
       
        $this->view('users_table',);
            
        }

   


}

<?php


class validation{


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

}

?>
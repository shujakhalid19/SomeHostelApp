<?php
session_start();

include('core/register.class.php');
$reg= new Register();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if($_POST['email']){
       $email=$_POST['email'];
       $username=$_POST['username'];
       $t=$_POST['time'];
       $password=md5($_POST['password']);
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 4;
       }else if($reg->check_username($username)){
          echo 3;
       }else{

           $x=$reg->create_acc($email, $username, $password,$t);
          if($x){
              $_SESSION['user']=$username;
              $_SESSION['userId']=$x;
              echo $username;

          }else{
              echo 0;
          }
           
       }
       
       
       
   }
    
    
    
}





?>
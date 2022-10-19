<?php
session_start();

include('core/login.class.php');
$log= new Login();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(isset($_POST['username'])){
       $username=$_POST['username'];
       $password=md5($_POST['password']);
       $x=$log->login($username,$password);
        $arr=array(
               'state'=>0,
               'name'=>'unknown'
           );
           
       if($x){
           
           $_SESSION['sel_user']=$username; 
           $_SESSION['sel_userId']=$x;
           
           
          
           if(!isset($_SESSION['sel_user']) || !isset($_SESSION['sel_userId'])){
               echo json_encode($arr);
           }else{
               $arr['state']=1;
               $arr['name']=$_SESSION['sel_user'];
               echo json_encode($arr);
           }
           
       }else{
           echo json_encode($arr);
       }
       
   }

   else if(isset($_POST['gogname'])){

      
        $id=base64_encode($_POST['id']);
        $name=$_POST['gogname'];
        $email=$_POST['email'];
        $imageUrl=$_POST['image'];
        $resp = $log->google_log($id,$name,$email,$imageUrl);
        if ($resp!=9) {

          $_SESSION['userId']=$resp;

           $msg= array(
            'status' => true,
            'username' => $name, 
            'userImage' => $imageUrl 

          ); 


        }else{

          $msg= array(
            'status' => false, 
            'username' => $name, 
            'userImage' => $imageUrl 

          ); 

        }

        echo json_encode($msg);

      /*  if($log->google_log($id,$name,$email,$imageUrl)===1){

         $_SESSION['user']=$name; 
         $_SESSION['userImage']=$imageUrl; 
         $_SESSION['userId']=$id;

          if (isset($_SESSION['user'])) {
            echo 1;
          }else{
            echo 0;
          }
          
      
      }else{
        echo $log->google_log($id,$name,$email,$imageUrl);
      }*/

   }
    
    
    
}





?>
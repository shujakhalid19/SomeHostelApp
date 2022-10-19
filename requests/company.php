<?php
session_start();

include('core/company.class.php');
$comp= new Company();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(isset($_POST['search_data'])){

      $data='%'.$_POST['search_data'].'%';
       $x=$comp->search_data($data);
       
       if(empty($x)){
        $resp=array(
            'state'=>false,
            'result'=>'EMPT'
        );    
       }else{
          $resp=array(
            'state'=>true,
            'result'=>$x
        ); 
       }
      echo json_encode($resp);
   }elseif(isset($_POST['editDesc'])){
      $newDesc=nl2br(strip_tags(stripcslashes($_POST['listDesc'])));
      $hostId=base64_decode($_POST['host_id']);
      $seller=$_SESSION['sel_userId'];
      echo json_encode($comp->newDesc($newDesc,$hostId,$seller)); 
   }  
 }
?>
<?php
session_start();

include('core/profile.class.php');
$pro= new Profile();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(isset($_POST['hname'])){
      $userId=$_SESSION['sel_userId'];
      $hname= $_POST['hname'];
      $address=nl2br(strip_tags(stripcslashes($_POST['address'])));
      $num_room=$_POST['rooms'];
      //$cost=$_POST['price']; //monthly cost
      //$bcost=$_POST['bprice']; //booking cost
      
      $type=$_POST['type'];
      $country=$_POST['country'];
      $state=$_POST['state'];
      $city=$_POST['city'];
      $zip_code=$_POST['zip'];

      $image1=$pro->simple_upload($pro->cleanSpecialCharacters($hname."_".$_FILES['fileToUploadone']['name']),'fileToUploadone',"../profiles/");
      #$image2=$pro->simple_upload($pro->cleanSpecialCharacters($hname."_".$_FILES['fileToUploadtwo']['name']),'fileToUploadtwo',"../profiles/");
      #$image3=$pro->simple_upload($pro->cleanSpecialCharacters($hname."_".$_FILES['fileToUploadthree']['name']),'fileToUploadthree',"../profiles/");
      #$image4=$pro->simple_upload($pro->cleanSpecialCharacters($hname."_".$_FILES['fileToUploadfour']['name']),'fileToUploadfour',"../profiles/");


      $finalImg=$image1;
      #$finalImg=$pro->cleanSpecialCharacters($image1)."#".$pro->cleanSpecialCharacters($image2)."#".$pro->cleanSpecialCharacters($image3)."#".$pro->cleanSpecialCharacters($image4);

      //$near_uni=$pro->cleanSpecialCharacters(str_replace(' ', '', $_POST['nearuni']));
      //$dist=$_POST['distnu'];

      $desc=$_POST['desc'];

      echo $pro->save_h($hname,$userId,$type,$finalImg,$num_room,$country,$address,$state,$city,$desc,$zip_code);
      //echo $finalImg;
      



        
   }else if(isset($_SESSION['user']) && isset($_POST['revnum'])) {
    $uniId=$_POST['uni'];
      $review=nl2br($pro->cleanSpecialCharacters($_POST['review']));
      $revBy=$_SESSION['user'];
      $userImage=$_SESSION['userImage'];
      $revnum=$_POST['revnum'];
      $time=$_POST['time'];

      echo $pro->save_uni_review($uniId,$review,$revBy,$userImage,$revnum,$time);


   }else if(isset($_POST['sellerhome'])){
      $sellerId= $_SESSION['sel_userId'];
      $file=$_FILES['fileToUpload']['name'];
      /*$file_s=$_FILES['fileToUpload']['tmp_name'];*/
      $direct="../profiles/";
      $oldImage=$_POST['oldImg'];
      $filenum=$_POST['fileNum'];
      $home=$_POST['sellerhome'];
      echo $pro->new_h_image($sellerId,$file,$home,"fileToUpload",$direct,$oldImage,$filenum);
   }else if(isset($_POST['bprice'])){
      $bp=$_POST['bprice'];
      $mp=$_POST['price'];
      $sellerId= $_SESSION['sel_userId'];
      $hid=$_POST['h'];
      echo $pro->edit_price($bp,$mp,$sellerId,$hid);
   }else if(isset($_POST['facis'])){
      
      $facid=$_POST['facid'];
      $facis=strip_tags(stripslashes($_POST['facis']));



      $sellerId=$_SESSION['sel_userId'];

      echo $pro->save_faci($facid,$sellerId,$facis);
   }else if (isset($_POST['hreview']) && isset($_SESSION['userId'])) {
      $review=nl2br(strip_tags(stripslashes($_POST['hreview'])));
      $revnum=$_POST['hrevnum'];
      $hid=base64_decode($_POST['hid']);
      //$revBy=$_SESSION['user'];
      $userId=$_SESSION['userId'];
      //$userImage=$_SESSION['userImage'];
      $time=$_POST['time'];
      $resp= $pro->save_hreview($userId,$hid,$review,$revnum,$time);
      if ($resp==0) {
         $msg=array(
            'state'=>false,
            'err'=>0,
         );
      }else{
         $msg=array(
            'state'=>true,
            'id'=>$resp,
            'revnum'=>$revnum,
            'review'=>$review,
            'time'=>'Just Now'
         );
      }

      echo json_encode($msg);
      //echo $userId;



   }else if (isset($_POST['delId'])) {
      $delrev=$_POST['delId'];
      $user=$_SESSION['userId'];
      echo $pro->delete_hreview($delrev,$user);
   }else if(isset($_POST['r_type'])){
      $roomType= $_POST['r_type'];
      $bType= $_POST['b_type'];
      $bedNum= $_POST['b_num'];
      $roomCost= $_POST['r_cost'];
      $roombCost= 120; //$roomType= $_POST['rb_cost'];
      $roomInfo= $_POST['r_info'];
      ($bType==1)? $grade='Standard' : $grade='Basic';
      ($roomType==1)? $roomName=$grade.' Private '.$bedNum.' Bed Room' : $roomName=$grade.' Shared '.$bedNum.' Bed Room';
      $hostId=base64_decode($_POST['host_id']);
       $resp=array(
            'state'=>false,
            'err'=>"EMPT"
        );
        if($bedNum=="" || $roomCost==""){
            
            echo json_encode($resp);
        }else{
            $x=$pro->save_hroom($_SESSION['sel_userId'],$hostId,$roomName,$roombCost,$roomType,$bType,$bedNum,$roomCost,$roomInfo);      
            
            if($x!==0){
                $resp=array(
                    'id'=>$x,
                    'roomType'=>$roomType,
                    'state'=>true,
                    'err'=>'clear',
                    'roomName'=>$roomName,
                    'bType'=>$bType,
                    'grade'=>$grade,
                    'bedNum'=>$bedNum,
                    'price'=>$roomCost,
                    'bPrice'=>$roombCost,
                );
                echo json_encode($resp);
            }
        }
       
      

   }elseif(isset($_POST['getRooms'])){
       $hostId=base64_decode($_POST['hostId']);
       if(!isset($_POST['seller']) || !$_POST['seller']){
         $seller=$_POST['sellerId'];
       }else{
         $seller=$_SESSION['sel_userId'];  
       }
       $x=$pro->getRoom($hostId,$seller);
       if(empty($x)){
           $resp=array(
            'state'=>false,
               'results'=>'Empty'
           );
           
       }else{
        $resp=array(
            'state'=>true,
               'results'=>$x
           );
       }
       echo json_encode($resp);
   }elseif(isset($_POST['addToGal'])){
      $time=$_POST['time'];
      $userId=$_SESSION['sel_userId'];
      $file=$_FILES['fileToUpload']['name'];
      
		$s='fileToUpload';

		$disttype='gallery/'.$pro->clean_encode($userId).'/'.$pro->clean_encode($_POST['hostelId']);
		$final="../uploads/".$disttype.'/';

      $arrayName = array('ar'=>$disttype);
      //echo $_POST['hostelId'];
		//echo json_encode($arrayName);
      $uploadDate=$pro->appUpload($file,$s,$final);
      $x=$pro->addGallery($_POST['hostelId'],$uploadDate['file'],$time);
      if($x==0){
         $uploadDate['fis']=false;
      }else{
         $uploadDate['fis']=$x;
      }
      echo json_encode($uploadDate);

   }elseif(isset($_POST['lName'])){
      $newName=strip_tags(stripcslashes($_POST['lName']));
      $address=nl2br(strip_tags(stripcslashes($_POST['address'])));
      $type=strip_tags(stripcslashes($_POST['type']));
      $city=strip_tags(stripcslashes($_POST['city']));
      $zip=strip_tags(stripcslashes($_POST['zip']));
      
      $resp=array(
         'status'=>false,'err'=>true);

      if(!ctype_digit($zip)){
         $resp=array('status'=>false,'err'=>true,'state'=>0);
         
      }else{
         $resp=array('status'=>true,'err'=>true,'state'=>false);
         $x=$pro->updateListing($_POST['host_id'],$newName,$address,$type,$city,$zip);
            if($x!==0){
               $resp=array('status'=>true,'err'=>false,'state'=>true,'name'=>$newName,'address'=>$address,'type'=>$type,'city'=>$city,'zip'=>$zip);
            }
         
      }
      
      echo json_encode(array($resp)[0]);
   }

 
}





?>
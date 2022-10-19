<?php
//$x = include('db.php');


class Profile{
    private $server="localhost";
    private $username="root";
    private $pass="";
    private $db="profiles";
    private $conn;

    function __construct(){
        $server = $this->server;
        $username = $this->username;
        $pass = $this->pass;
        $db = $this->db;
        $this->conn=mysqli_connect($server,$username,$pass,$db);
        
    }
    
    function clean_encode($string) {
        $string=base64_encode($string);
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        #.replace(/[^\w\s]/gi, '')
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

    function check($data,$sql){
        $d=$this->conn;
        $res=$d->query($sql);
        if($res->num_rows>0){
            return 1;
        }else{
            return $d->error;
        }
    }
    
    function insert($data,$sql){
        $d=$this->conn;
        if($res=$d->query($sql)){ //inserted
            return $d->insert_id;
        }else{
            return $d->error;//$d->error
        }
    }

     function update($data,$sql){
        $d=$this->conn;
        if($res=$d->query($sql)){ //inserted
            return 1;
        }else{
            return 0;//$d->error
        }
    }


      function select($data,$sql){
        $d=$this->conn;
        $res=$d->query($sql);
        if($res->num_rows>0){
        
            while($row=$res->fetch_assoc()){
                $arr[]=$row;
            }
            return $arr;
                    
        }else{
            return $d->error;
        }
    }

    function secure_select($data,$sql,$datatype){
        $db=$this->conn;
        $stmt=$db->prepare($sql);
        if($data!=0 && $datatype!='u'){
            $stmt->bind_param($datatype, $data);
        }
        $stmt->execute();

        $res=$stmt->get_result();
        $arr=array();
        while($row=$res->fetch_assoc())
        {
            $arr[]=$row;
        }
        
        return $arr;    
    }
    
    function check_username($username){
        $sql="SELECT * FROM users WHERE username='$username'";
        return $this->check($username,$sql);
    }
    
    function create_acc($email, $username, $password, $time){
        $sql="INSERT INTO `users`(`username`, `email`, `password`,`role`, `member_since`) VALUES ('$username', '$email', '$password', 'entre',$time)";
        return $this->insert($username,$sql);
    }

    function save_faci($facid,$sellerId,$facis){
        $sql="UPDATE `props` SET facilities='$facis' WHERE id=$facid AND seller_id=$sellerId";
        return $this->update('a',$sql);
    }


    function save_h($hname,$userId,$type,$finalImg,$num_room,$country,$address,$state,$city,$desc,$zip_code){
        $un=uniqid();
        #$finalImg=explode("#", $finalImg);
        //$sql="INSERT INTO `prop`(`name`,`seller_id`, `type`, `num_rms`, `rms_left`,`cost`, `b_cost`, `country`, `city`, `near_uni`, `dist_near_uni`, `images`,`im_one`,`im_two`,`im_three`,`im_four`) VALUES ('$hname',$userId, '$type',$num_room,$num_room,$cost,$bcost,'$country','$city','$near_uni',$dist,'$finalImg[0]','$finalImg[0]','$finalImg[1]','$finalImg[2]','$finalImg[3]')";
        #$sql="INSERT INTO `props`(`keyUnique`, `name`, `seller_id`, `type`, `num_rms`, `rms_left`, `country`, `state`, `city`, `zip`,`im_1`, `im_2`, `im_3`, `im_4`) VALUES ('$un','$hname',$userId, '$type',$num_room,$num_room,'$country','$state','$city','$zip_code','$finalImg[0]','$finalImg[1]','$finalImg[2]','$finalImg[3]')";
        $sql="INSERT INTO `props`(`keyUnique`, `name`, `seller_id`, `type`, `num_rms`, `rms_left`, `country`,`address`, `state`, `city`, `zip`,`im_1`) VALUES ('$un','$hname',$userId, '$type',$num_room,$num_room,'$country','$address','$state','$city','$zip_code','$finalImg')";
        return $this->insert('a',$sql);
        $x=0; //stopped
        if ($x!=0) {
            $sql="INSERT INTO `prop_desc`(`prop_id`, `description`) VALUES ($x,'$desc')";
            $this->save_uni($near_uni,$country,$city);
            return $this->insert('a',$sql);
        }else{
            return $x;
        }

    }

    function save_hroom($sellerId,$hostId,$roomName,$roombCost,$roomType,$bType,$bedNum,$roomCost,$roomInfo){
        $sql="INSERT INTO `rooms`(`seller_id`, `hostelId`, `roomName`,roomType, `bPrice`, `price`, `grade`, `beds`, `availableBeds`) VALUES ($sellerId,$hostId,'$roomName',$roomType,$roombCost,$roomCost,$bType,$bedNum,$bedNum)";
        return $this->insert('a',$sql);
    }
    
    function getRoom($hostId,$seller){
        $sql="SELECT `id`, `seller_id`, `hostelId`, `roomName`, `roomType`, `bPrice`, `price`, `grade`, `beds`, `availableBeds` FROM `rooms` WHERE hostelId=$hostId AND seller_id=$seller";
        //return $sql;
        return $this->select('a',$sql);
    }
    
    function save_hreview($userId,$hid,$review,$revnum,$time){
        $sql="INSERT INTO `h_review`(`user_id`, `h_id`, `review`, `rating`, `time`) VALUES ($userId,$hid,'$review',$revnum,$time)";
        return $this->insert('a',$sql);
    }

    function delete_hreview($delrev,$user){
        $sql="DELETE FROM `h_review` WHERE id=$delrev AND user_id=$user";
        return $this->update('a',$sql);
    }

    function save_uni($near_uni,$country,$city){
        $sql="SELECT * FROM uni WHERE uni_name='$near_uni' AND country='$country' AND city='$city'";
        if ($this->check('a',$sql)) {
            return 1;
        }else{
            $sql="INSERT INTO `uni`(`uni_name`,`country`, `city`) VALUES ('$near_uni','$country','$city')";
            if ($this->insert('a',$sql)) {
                return 1;
            }else{
                return 0;
            }
            
        }
    }

    function save_uni_review($uniId,$review,$revBy,$userImage,$revnum,$time){
        $sql="INSERT INTO `review`(`uni_id`,`name`, `profileImg`,`revnum`,`review`,`timestamp`) VALUES ($uniId,'$revBy','$userImage',$revnum,'$review',$time)";
        return $this->insert('a',$sql);
    }


    function edit_price($bp,$mp,$seller,$hid){
        $sql="UPDATE `prop` SET `cost`=$mp,`b_cost`=$bp WHERE id=$hid AND seller_id=$seller";
        if ($this->update('a',$sql)) {
            $resp = array(
                'status' => true,
                'bp'=>$bp,
                'mp'=>$mp,
                'err'=>0
            );
        }else{
            $resp = array(
                'status' => false,
                'bp'=>$bp,
                'mp'=>$mp,
                'err'=>9
            );
        }

        return json_encode($resp);
    }

    function updateListing($hostelId,$newName,$address,$type,$city,$zip){
        $hostelId=base64_decode($hostelId);
        $sql="UPDATE `props` SET `name`='$newName',`type`='$type',`address`='$address',`city`='$city',`zip`=$zip WHERE id= $hostelId";
        //return $sql;
        return $this->update('a',$sql);
    }

    function new_h_image($sellerId,$file,$home,$file_s,$direct,$oldImage,$filenum){
        
        $file=$this->cleanSpecialCharacters($home."_".$file);
        $newImage=$this->simple_upload($file,$file_s,$direct);
        $x=$home."_".$newImage;

        if ($newImage){
            $sql="UPDATE prop SET im_$filenum = '$newImage' WHERE seller_id=$sellerId AND name='$home'";
            if ($this->update('a',$sql)) {

                unlink("../profiles/".$oldImage);

                $resp = array(
                    'status' => 1,
                    'filenum'=>$filenum,
                    'file'=>$x,
                    'err'=>0 
                );
            }else{

                $resp = array(
                    'status' => 0,
                    'filenum'=>'no',
                    'file'=>$x,
                    'err'=>1 
                );
            }

        }else{
            
                $resp = array(
                    'status' => 0,
                    'filenum'=>'no',
                    'file'=>$x,
                    'err'=>2 
                );;
        }
            
            return json_encode($resp);




/*kag_photo-1497034825429-c343d7c6a68f.jpeg#kag_photo-1497034825429-c343d7c6a68f.jpeg#poster-stark-palace.jpg#photo-1506354666786-959d6d497f1a.jpeg*/

/*Second_Host_kag_photo-1497034825419-c343d7c6a68f.jpeg*/
        //return unlink("../profiles/".$home."_".$oldImage);


/*        //str_replace(search, replace, subject)

        $str="Hello#John";
        $new="WORLD";
        $old="John";
        //str_replace(search, replace, subject)
*/
        /*$images=str_replace($oldImage, $x, $images);
        $sql="UPDATE prop SET images = '$images' WHERE seller_id=$sellerId AND name='$home'";
        if ($this->insert('a',$sql)==0){
            return 1;
        }else{
            return 0;
        }
*/
    }



    /*function new_h_image($sellerId,$file,$home,$file_s,$direct,$oldImage,$filenum){
        $sql="SELECT images as i FROM prop WHERE seller_id=$sellerId AND name='$home' LIMIT 1";
        $images=$this->select('a',$sql)[0]['i'];
        //$newImage=basename($file);
        $x=$this->cleanSpecialCharacters(base64_encode(random_bytes(2)))."_".$file;
        $file=$home."_".$file;
        $newImage=$this->simple_upload($file,$file_s,$direct);*/
/*kag_photo-1497034825429-c343d7c6a68f.jpeg#kag_photo-1497034825429-c343d7c6a68f.jpeg#poster-stark-palace.jpg#photo-1506354666786-959d6d497f1a.jpeg*/

/*Second_Host_kag_photo-1497034825419-c343d7c6a68f.jpeg*/
        //return unlink("../profiles/".$home."_".$oldImage);


        //str_replace(search, replace, subject)
/*
        $str="Hello#John";
        $new="WORLD";
        $old="John";*/
        //str_replace(search, replace, subject)

       /* $images=str_replace($oldImage, $x, $images);
        $sql="UPDATE prop SET images = '$images' WHERE seller_id=$sellerId AND name='$home'";
        if ($this->insert('a',$sql)==0){
            return 1;
        }else{
            return 0;
        }*/




        /*photo-1497034825429-c343d7c6a68f.jpeg#photo-1506354666786-959d6d497f1a.jpeg#z.jpeg#theme_pitchfork.png*/
        /*photo-1497034825429-c343d7c6a68f.jpeg#photo-1506354666786-959d6d497f1a.jpeg#z.jpeg#theme_pitchfork.png*/
        /*download.jpeg#photo-1506354666786-959d6d497f1a.jpeg#z.jpeg#theme_pitchfork.png*/


        
/*    }
*/

    


/*
    function save_post($content,$image,$yt,$wb,$userId){
        $sql="INSERT INTO `posts`(`content`, `user_id`, `image`, `yt_link`, `wb_link`) VALUES ('$content',$userId,'$image','$yt','$wb')";
        return $this->insert('a',$sql);

    }*/
    function set_type($temp){
        if ($temp == "jpg" || $temp == "png" || $temp == "jpeg"
        || $temp == "gif" || $temp == "JPG" || $temp == "JPEG") {
            $t= 'image';
        }elseif($temp == "mp4" || $temp == "ogv" || $temp == "wmv" || $temp == "avi") {
            $t= 'video';
        }else{
            $t= 'inval';
        }

        return $t;
    }

    function addGallery($hostelId,$file,$time){
        $sql="INSERT INTO `gallery`(`hostelId`, `image`, `timestamp`) VALUES ($hostelId,'$file',$time)";
        return $this->insert('a',$sql);
    }

    function appUpload($file,$s,$disttype){
        if (!is_dir($disttype)) {
            mkdir($disttype, 0777, true);        
        }

        $temp = pathinfo($file, PATHINFO_EXTENSION);
        $type= $this->set_type($temp);

        $newfilename=uniqid().".".$temp;
        $target=basename($newfilename);

        $tmp_name = $_FILES[$s]['tmp_name'];
        $resp=array(
            'status' => false, 
            'upload' => false, 
            'file'=>'no', 
            'type'=>$disttype
        );
        
        $final=$disttype.$target;

        if(move_uploaded_file($tmp_name,$final)){
            $resp['status']=true;
            $resp['upload']=true;  
            $resp['file']=$newfilename;
        }else{
              
        }
        return $resp;
}


    function simple_upload($file,$s,$direct){
       //error_reporting(0);
        //return "err";
        if (!is_dir($direct)) {
            mkdir($direct, 0777, true);        
        }
        $target_dir=$direct."/";
        $target_file = $target_dir . basename($file);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        
        //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $check = getimagesize($_FILES[$s]["tmp_name"]);
        if($check !== false) {
          //return "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
    //        return "File is not an image.";
            return 34;
            $uploadOk = 0;
        }
        if ($_FILES[$s]["size"] > 5000000) {
           //return "Sorry, your file is too large.";
            return 92;
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($target_file)) {
   //        return "Sorry, file already exists.";
            $img=basename( $_FILES[$s]["name"]);
            return $img;
            $uploadOk = 0;
        }
        // Check file size
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "JPEG" ) {
           //return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            return 88;
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
           
           //return "Sorry, your file was not uploaded.";
            return 0;
        // if everything is ok, try to upload file
        } else {
            if(move_uploaded_file($_FILES[$s]["tmp_name"], $target_file)){
                //return "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $img=basename($_FILES[$s]["name"]);
                return $img;
            }else{
                return 0;
            }
        }
    }


    function zip_upload($filename, $source, $type, $token){

        $rand = rand(10,100);
        $streplaceFileName = $this->cleanSpecialCharacters($filename);
        $zipFile =$streplaceFileName;$ds = DIRECTORY_SEPARATOR;

        $vaultId=md5($token);

        $storeFolder = "../uploads/websites/".$vaultId;


        //$filename = $rand . “-” . $streplaceFileName;
        //$tempFile = $_FILES[‘zipFile’][‘tmp_name’];
        $targetPath = $storeFolder . $ds;
        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }
        $targetFile = $targetPath.$streplaceFileName;
        $check = move_uploaded_file($source,$targetFile);
        if($check){
             return $streplaceFileName;
        }else{
            return "no";
        }



    }

    function zip_preview($filename, $source, $type, $pname, $user){

        $rand = rand(10,100);
        $info = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        if($info!="zip"){
            return 44; //not html
        }
        $streplaceFileName = $this->cleanSpecialCharacters($filename);
        $pname=$this->cleanSpecialCharacters($pname);
        $zipFile =$streplaceFileName;$ds = DIRECTORY_SEPARATOR;

        //$vaultId=md5($token);

        $storeFolder = "../uploads/preview/".base64_encode($user)."/".$pname;


        //$filename = $rand . “-” . $streplaceFileName;
        //$tempFile = $_FILES[‘zipFile’][‘tmp_name’];
        $targetPath = $storeFolder.$ds;
        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }
        $targetFile = $targetPath.$streplaceFileName;
        $check = move_uploaded_file($source,$targetFile);
        if($check){
             return $streplaceFileName;
        }else{
            return 0;
        }


    }

    function upload_html($filename,$source,$type,$pname, $user){
        $rand = rand(10,100);
        $info = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
        if($info!="html"){
            return 44; //not html
        }
        $streplaceFileName = $this->cleanSpecialCharacters($filename);

        $zipFile =$streplaceFileName;$ds = DIRECTORY_SEPARATOR;

        //$vaultId=md5($token);

        $storeFolder = "../uploads/preview/".base64_encode($user)."/".$pname;


        //$filename = $rand . “-” . $streplaceFileName;
        //$tempFile = $_FILES[‘zipFile’][‘tmp_name’];
        $targetPath = $storeFolder.$ds;
        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }
        $targetFile = $targetPath.$streplaceFileName;
        $check = move_uploaded_file($source,$targetFile);
        if($check){
             return $streplaceFileName;
        }else{
            return 0;
        }
    }


    function upload_prevImage($filename,$source,$user){
        $rand = rand(10,100);
        $filename=time().$filename;
        $info = strtolower(pathinfo($filename,PATHINFO_EXTENSION));

        if($info!="jpg" && $info!="png" && $info!="jpeg" && $info!="gif"){
            return 63; //not img
        }
        $streplaceFileName = $this->cleanSpecialCharacters($filename);

        $zipFile =$streplaceFileName;$ds = DIRECTORY_SEPARATOR;

        //$vaultId=md5($token);

        $storeFolder = "../uploads/previewImage/".base64_encode($user);


        //$filename = $rand . “-” . $streplaceFileName;
        //$tempFile = $_FILES[‘zipFile’][‘tmp_name’];
        $targetPath = $storeFolder.$ds;
        if (!is_dir($targetPath)) {
            mkdir($targetPath, 0777, true);
        }
        $targetFile = $targetPath.$streplaceFileName;
        $check = move_uploaded_file($source,$targetFile);
        if($check){
             return $streplaceFileName;
        }else{
            return 0;
        }
    }

    function unzip_preview($file,$path){
        $zip = new ZipArchive;
        $res = $zip->open('file.zip');
        if ($res === TRUE) {
          $zip->extractTo('/myzips/extract_path/');
          $zip->close();
          echo 'woot!';
        } else {
          echo 'doh!';
        }
    }

    function cleanSpecialCharacters($string) {

        $string = str_replace(' ', '_', $string); // Replaces all spaces with _.

        return preg_replace('/[^A-Za-z0-9.\-_]/', "", $string); // Removes special chars.
    }   

   


    
}

//$reg= new Register();
//$reg -> check();
?>
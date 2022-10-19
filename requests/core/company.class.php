<?php
//$x = include('db.php');


class Company{
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
    
    function check($data,$sql){
        $d=$this->conn;
        $res=$d->query($sql);
        if($res->num_rows>0){
            return 1;
        }else{
            return 0;
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
        if($data!='-1' && $datatype!='u'){
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

    function secure_select_two($data1,$data2,$sql,$datatype){
        $db=$this->conn;
        $stmt=$db->prepare($sql);
        $stmt->bind_param($datatype,$data1,$data2);
        
        $stmt->execute();

        $res=$stmt->get_result();
        $arr=array();
        while($row=$res->fetch_assoc())
        {
            $arr[]=$row;
        }
        
        return $arr;    
    }

    
    function insert($data,$sql){
        $d=$this->conn;
        if($res=$d->query($sql)){ //inserted
            //return $d->insert_id;
            return 1;
        }else{
            return 0;
        }
    }

    function clean_encode($string) {
        $string=base64_encode($string);
        $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
        #.replace(/[^\w\s]/gi, '')
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }

     function cleanSpecialCharacters($string) {

        $string = str_replace(' ', '', $string); // Replaces all spaces with _.

        return preg_replace('/[^A-Za-z0-9.\-_]/', "", $string); // Removes special chars.
    }   

    function ip_location($ip){
        
        //$ip = '132.154.94.69'; // your ip address here
        $query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
        if($query && $query['status'] == 'success')
        {
            echo 'Your City is ' . $query['city'];
            echo '<br />';
            echo 'Your State is ' . $query['region'];
            echo '<br />';
            echo 'Your Country is ' . $query['country'];
            echo '<br />';
            echo 'Your Zipcode is ' . $query['zip'];
            echo '<br />';
            echo 'Your Coordinates are ' . $query['lat'] . ', ' . $query['lon'];
        }

/*        $ipdat = @json_decode(file_get_contents( 
            "http://www.geoplugin.net/json.gp?ip=" . $ip)); 
           
        echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n"; 
        echo 'City Name: ' . $ipdat->geoplugin_city . "\n"; 
        echo 'Continent Name: ' . $ipdat->geoplugin_continentName . "\n"; 
        echo 'Latitude: ' . $ipdat->geoplugin_latitude . "\n"; 
        echo 'Longitude: ' . $ipdat->geoplugin_longitude . "\n"; 
        echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "\n"; 
        echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n"; 
        echo 'Timezone: ' . $ipdat->geoplugin_timezone; 
  */      
    
    }

    function getGallery($hostId){
        $sql="SELECT * FROM gallery WHERE hostelId=$hostId";
        return $this->select('a',$sql);
    }

    function user_det($id){
        $sql="SELECT `google_id`, `email`, `name`, `image` FROM `google_users` WHERE id=?";
        return $this->secure_select($id,$sql,'i');
    }

    function search_data($data){
        //returns colleges with search data
        //$sql="SELECT DISTINCT near_uni,city,country FROM prop WHERE near_uni LIKE ?";
        $sql="SELECT DISTINCT id,keyUnique,name,im_1,type,city,country FROM props WHERE name LIKE '$data' OR city LIKE '$data'";
        //$sql="SELECT DISTINCT props.id,keyUnique,name,im_1,type,city,country,MIN(rooms.bPrice) as b_cost FROM props INNER JOIN rooms ON props.id=rooms.hostelId WHERE props.name LIKE '$data' OR props.city LIKE '$data'";
        //return $sql
        return $this->select('a',$sql);
        //return $this->secure_select_two($data,$data,$sql,'ss');
    }
    
    function starting_from($hostId){
        $sql="SELECT min(bPrice) as b_cost FROM `rooms` WHERE hostelId=$hostId";
        return $this->select('a',$sql);
    }

    function hosts_near($uni){
        $sql="SELECT `id`, `name`, `seller_id`, `type`, `num_rms`, `rms_left`, `cost`, `b_cost`, `country`, `city`, `near_uni`, `dist_near_uni`,`im_1`, `review_count`, `booking_open`, `facilities`, `views` FROM `prop` WHERE near_uni=? ORDER BY b_cost";
        //return $this->select('a',$sql);
        //$sql="SELECT prop.`id`, `name`, `seller_id`, `type`, `num_rms`, `rms_left`, `cost`, `b_cost`, prop.`country`,prop.`city`,`near_uni`,`dist_near_uni`,`images`, `review_count`, `booking_open`, `facilities_id`, `views`,uni.id as uni_id FROM `prop` INNER JOIN `uni` ON prop.near_uni=uni.uni_name WHERE prop.near_uni=?";
        return $this->secure_select($uni,$sql,'s');
    }

    function host_det($host){
        $sql="SELECT `id`, `name`, `seller_id`, `type`, `country`,`state`, `city`, `im_1`,`im_2`,`im_3`,`im_4`,`review_count`, `booking_open`, `facilities` FROM `props` WHERE keyUnique='$host'";
        //return $sql;
        return $this->select('a',$sql)[0];
    }

    function h_reviews($id){
        //$sql="SELECT `id`, `user_id`, `h_id`, `review`, `rating`, `time` FROM `h_review` WHERE h_id=?";
        $sql="SELECT h_review.`id` as a,`user_id`, `h_id`, `review`, `rating`, `time`,google_users.id,name,image FROM `h_review` INNER JOIN google_users ON h_review.user_id=google_users.id WHERE h_review.h_id=? ORDER BY h_review.id DESC";
        return $this->secure_select($id,$sql,'i');
    }

    function uni_det($uni){
        $sql="SELECT * FROM `uni` WHERE uni_name=? AND block=0";
        return $this->secure_select($uni,$sql,'s')[0];

    }

    function seller_entry($sellerId){
        $sql="SELECT `id`, `name` FROM `props` WHERE seller_id=$sellerId";
        return $this->select('a',$sql);
    }

    function seller_data($sellerId){
        //$sql="SELECT `id`, `name`,`type`, `num_rms`, `rms_left`, `cost`, `b_cost`, `country`, `city`, `near_uni`, `dist_near_uni`, `im_1`,`im_2`,`im_3`,`im_4`,`booking_open`, `facilities`, `views` FROM `props` WHERE seller_id=?";
        //$sql="SELECT `id`, `name`,`type`, `country`, `city`, `im_1`,`im_2`,`im_3`,`im_4`,`booking_open`, `facilities` FROM `props` WHERE seller_id=?";
        $sql="SELECT props.`id`, `name`,`type`, `country`,`address`, `city`, `im_1`,`im_2`,`im_3`,`im_4`,`booking_open`,`zip`,`facilities`,prop_desc.description FROM `props` LEFT OUTER JOIN prop_desc ON props.id=prop_desc.prop_id WHERE seller_id=?";
        //return $sql;
        return $this->secure_select($sellerId,$sql,'i');
    }

    function newDesc($newDesc,$hostId,$seller){
        $msg=array('status'=>false,'update'=>false,'desc'=>$newDesc);
        $sql="SELECT id FROM props WHERE id=$hostId AND seller_id=$seller";
        
        $x=$this->check('a',$sql);
        
        if($x==1){ //found
           $sql="UPDATE `prop_desc` SET `description`='$newDesc' WHERE prop_id=$hostId";
           if($this->insert('a',$sql)){
            $msg['status']=true;
            $msg['update']=true;
           }
           
           
        }
         return $msg;   
    }


    function support($cid,$user){
        $sql="SELECT * FROM support WHERE comp_id=$cid";
        if ($this->check('a',$sql)) {
             $sql="SELECT * FROM support WHERE comp_id=$cid AND user_id=$user";
             if ($this->check('a',$sql)==0) {          
                $sql="UPDATE support SET support=support+1 WHERE comp_id=$cid";
                $msg=$this->insert('a',$sql);
            }else{
                //already supporting dissuport
                $msg=3;//
            }


        }else{
            $sql="INSERT INTO `support`(`user_id`, `comp_id`, `support`) VALUES ($user,$cid,1)";
            $msg=$this->insert('a',$sql);
        }

        return $msg;
    }

    function product_det($pId){
        $sql="SELECT * FROM `products` WHERE products.id=?";
        //return $this->select('a',$sql);

        return $this->secure_select($pId,$sql,'i');

    }


   function give_user_products($user){

        $sql="SELECT products.id,seller_id,category,name,suitable_for,price,tech_stack,prev_image,description,downloads,approved FROM `products` WHERE products.seller_id=?";
        //return $this->select('a',$sql);

        return $this->secure_select($user,$sql,'i');
   }

   function unreviewed(){
        $sql="SELECT * FROM `products` WHERE products.approved=?";
        return $this->secure_select(0,$sql,'i');
   }

   function unreviewed_two(){
        $sql="SELECT * FROM `products` WHERE products.approved=?";
        return $this->secure_select(2,$sql,'i');
   }






   function pass_prod($pid,$previewname,$sellerId,$pdname,$reviewerId){


        //unzip true
        $unzip=$this->unzip_preview($sellerId,$pdname,$previewname);
            if($unzip==1){
                $sql="UPDATE products SET approved=3 WHERE id=$pid";
                return $this->insert('a',$sql);
            }else{
                return $unzip;
            }

        

   }
    
    function rej_prod($rejectId,$reason){
        //select preview,previmg,vaulfile
        $sql="SELECT products.name,seller_id,prev_image,demo_name,vault.vault_id,folder_name FROM products INNER JOIN vault ON products.id=vault.prod_id WHERE products.id=?";
        $rows=$this->secure_select($rejectId,$sql,'i')[0];
        
        //$del_main="../uploads/websites/".md5($rows['vault_id']);//."/".$rows['folder_name'];
        
        $prev_path="../uploads/preview/".base64_encode($rows['seller_id'])."/".$rows['name']."/".$rows['demo_name'];//.DIRECTORY_SEPERATOR;
        if(unlink($prev_path)){
            $prev_path="../uploads/preview/".base64_encode($rows['seller_id']);
            if($this->is_dir_empty($prev_path)){
                rmdir($prev_path);    
            }else{
                
            }
            
            //next step
            $prev_img_path="../uploads/previewImage/".base64_encode($rows['seller_id'])."/".$rows['prev_image'];
            if(unlink($prev_img_path)){
                $del_main="../uploads/websites/".md5($rows['vault_id'])."/".$rows['folder_name'];
                if(unlink($del_main)){
                    $sql="UPDATE products SET approved=$reason WHERE id=$rejectId";
                    if($this->insert('a',$sql)){
                        return 1;    
                    }else{
                        return 0;
                    }
                    
                    
                }else{
                    //fail at main unlink
                    return 66;
                }
                
            }else{
                //fail at prev image unlink
                return 65;
            }
            
            
            
        }else{
            //fail at preview unlink
            return 64;
        }
        
        
        //delete preview
        
        
        //delete previewimg
        //delete vaulfile
        
    }
    
    function is_dir_empty($dir) {
      if (!is_readable($dir)) return NULL; 
      return (count(scandir($dir)) == 2);
    }

   function unzip_preview($sellerId,$pdname,$previewname){
    //$zip = new ZipArchive;
    //return $previewname;
    /*header('Content-type: application/zip');
    header('Content-Disposition: attachment; filename="' . basename($previewname). '"'); 
    *///ob_end_flush();
    //ob_end_clean();
    $file="../uploads/preview/".$sellerId."/".$pdname."/".$previewname;
    //return $file;
    $path="../uploads/preview/".$sellerId."/".$pdname."/";

    $zip = new ZipArchive;
        $res = $zip->open($file);
        if ($res === TRUE) {
          $zip->extractTo($path);
          unlink($file); //delete zip
          $zip->close();
          return 1;
        } else {
          return 0;
        }
    
    /*if ($res=$zip->open($file, ZipArchive::CHECKCONS)== TRUE) {
        //return $res;
        if($zip->extractTo($path)){
            unlink($file); //delete zip
            $zip->close();
            return 1;
          }else{
            return 3;
          }
    } else {
      return 0;
    }*/
      /*if($zip->extractTo($path)){
        
        return 1;
      }else{
        return 3;
      }
    } else {
      return 0;
    }*/
    
   }

   function add_first_rev($stage,$reviewerId,$pid){
        //check id present
        $sql="SELECT * FROM reviewer WHERE p_id=$pid";
        if($this->check('a',$sql)){
            //if ues update type_two
            $sql="UPDATE reviewer SET type_two='$stage' WHERE p_id=$pid";
            if($this->insert('a',$sql)){
                return $this->stage_two_approval($pid);
            }


        }else{
            //insert insert new row    
            $sql="INSERT INTO `reviewer`(`reviewer_id`, `p_id`, `type_one`) VALUES ($reviewerId,$pid,'$stage')";
            return $this->insert('a',$sql);

        }
        

        



   }


   function stage_two_approval($pid){
    $sql="UPDATE products SET approved=2 WHERE id=$pid";
    if($this->insert('a',$sql)!=0){
        return 23; //moving on to stage two
    }else{
        return 0;
    }
   }

    function register_company($company, $img, $phrase, $niche, $registrant, $r_pos){

        //register company and then save registerants position in the company
        if($img==""){
            $img='defaultcomp.png';
        }

        $sql="INSERT INTO `company`(`company_name`, `logo`, `company_phrase`, `category`, `registrant_id`) VALUES  ('$company', '$img','$phrase', '$niche', $registrant)";
        //$sql="INSERT INTO `company`(`company_name`, `company_phrase`, `category`, `registrant_id`) VALUES ('$company', '$phrase', '$niche', $registrant)";
        $run=$this->insert('a',$sql);
        if($run!==0){
            $sql="INSERT INTO `company_pos`(`company_id`, `user_id`, `title`) VALUES ($run,$registrant,'$r_pos')";
            if($this->insert('a',$sql)!==0){
                return 1;
            }else{
                return 0;
            }

        }else{
            return 23;
        }

    }
    
    function create_acc($email, $username, $password, $time){
        $sql="INSERT INTO `users`(`username`, `email`, `password`,`role`, `member_since`) VALUES ('$username', '$email', '$password', 'entre',$time)";
        return $this->insert($username,$sql);
    }


    
}

/*$reg= new Company();
$reg -> myComps(1);*/
?>
<?php

class Login{
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
    
    function auth($data,$sql){
        $d=$this->conn;
        $res=$d->query($sql);
        if($res->num_rows>0){
            $row=$res->fetch_assoc();
            return $row['id'];
        }else{
            return 0;
        }
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

   
    
    function login($username,$password){
        $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
        return $this->auth($username,$sql);
    }

    function google_log($id,$name,$email,$imageUrl){
        $sql="SELECT * FROM google_users WHERE google_id='$id'";
        $check=$this->auth($name,$sql);
        if ($check==0) {
            $sql="INSERT INTO `google_users`(`google_id`, `email`, `name`, `image`) VALUES ('$id','$email','$name','$imageUrl')";
            $x=$this->insert('a',$sql);
            if($x!=9){
                return $x;
            }else{
                return 0;
            }

        }else{
            //already registered
            return $check;
        }
    }
    
   
    
}

//$reg= new Register();
//$reg -> check();
?>
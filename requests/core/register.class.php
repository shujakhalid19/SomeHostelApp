<?php
//$x = include('db.php');


class Register{
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
    
    function insert($data,$sql){
        $d=$this->conn;
        if($res=$d->query($sql)){ //inserted
            return $d->insert_id;
            return 1;
        }else{
            return 0;
        }
    }
    
    function check_username($username){
        $sql="SELECT * FROM users WHERE username='$username'";
        return $this->check($username,$sql);
    }
    
    function create_acc($email, $username, $password, $time){
        $sql="INSERT INTO `users`(`username`, `email`, `password`,`role`, `member_since`) VALUES ('$username', '$email', '$password', 'entre',$time)";
        return $this->insert($username,$sql);
    }
    
}

//$reg= new Register();
//$reg -> check();
?>
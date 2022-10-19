<?php
//$x = include('db.php');


class Purchase{
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
    
    function test(){
        return 'asdasd';
    }
    
    function addMyRooom($hostId,$roomId){
        #only to set id in session
        $sql="SELECT `id` FROM `rooms` WHERE seller_id=$hostId AND id=$roomId";
        //return $sql;
        return $this->select('asd',$sql)[0];
    }
    
    function showMyRooms($ids,$guests){
        $ids=implode(',',$ids);
        $sql="SELECT rooms.*,(bPrice * $guests) as Total,$guests as guestNum FROM `rooms` WHERE id IN ($ids)";
        return $this->select('asd',$sql);
        
    }
    
    function subTotal($ids){
        $id=implode(',',$ids);
        $sql="SELECT sum(bPrice) as sub_total FROM rooms WHERE id IN ($id)";
        return $this->select('a',$sql);
    }
}

/*$pur= new Purchase();
$pur -> myComps(1);*/
?>
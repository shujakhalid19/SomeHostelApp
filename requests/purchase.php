<?php
session_start();

include('core/purchase.class.php');
$pur=new Purchase();
if(!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}

if(!isset($_SESSION['requirement'])){
    $_SESSION['requirement']=array(
        'in'=>0,
        'out'=>0,
        'gNum'=>1
    );
}


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['reserve'])){
        $hostId=$_POST['hostId'];
        $roomId=$_POST['roomId'];
        $x = $pur->addMyRooom($hostId,$roomId);
        if (!in_array($x['id'], $_SESSION['cart'])){
            array_push($_SESSION['cart'],$x['id']);
        }
            
        //$x=$pur->showMyRooms($_SESSION['cart']);
       
        echo json_encode($pur->showMyRooms($_SESSION['cart'],$_SESSION['requirement']['gNum']));
        //echo json_encode($x);
        
    }else if(isset($_POST['removeReserve'])){
        $roomId=$_POST['roomId'];
        if (($key = array_search($roomId, $_SESSION['cart'])) !== false) {
            unset($_SESSION['cart'][$key]);
        }
        
        //echo json_encode($_SESSION['cart']);
        echo json_encode($pur->subTotal($_SESSION['cart']));
        
    }else if(isset($_POST['dateIn'])){
        $_SESSION['requirement']['in']=strtotime($_POST['dateIn']);
        $_SESSION['requirement']['out']=strtotime($_POST['dateOut']);
        $_SESSION['requirement']['gNum']=$_POST['guest'];;
        
        $resp=array(
            'status'=>false,
            'results'=>false,
            'output'=>[],
            'requirements'=>[]
        );
        
        
        if(isset($_SESSION['requirement'])){
          $resp=array(
                'status'=>true,
                'results'=>false,
                'output'=>[],
                'requirements'=>$_SESSION['requirement']
            );  
            
            if(!empty($_SESSION['cart'])){
                $resp['results']=true;
                $resp['output']=$pur->showMyRooms($_SESSION['cart'],$_SESSION['requirement']['gNum']);
            }
            
        }
        //$date = new DateTime($dateIn); // format: MM/DD/YYYY
        //echo $date->format('U');

        // or procedural
        //$date = date_create('01/15/2017');
        //echo date_format($date, 'U');
        echo json_encode($resp);
    }/*else if(isset($_POST['reserv'])){
        //previous not in use
        
        $hostId=$_POST['hostId'];
        $roomId=$_POST['roomId'];
        echo json_encode($pur->addMyRooom($hostId,$roomId));
        
    }*/
}
?>
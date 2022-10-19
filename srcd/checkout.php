<?php
session_start();
//print_r($_SESSION['cart']);
include('../requests/core/purchase.class.php');

$pur=new Purchase();



include('../requests/core/company.class.php');

$comp=new Company();



if(!isset($_SESSION['cart'])){
   header('Location:index.php');
}

if(!isset($_SESSION['requirement'])){
    header('Location:index.php');
}else{
    $req=$_SESSION['requirement']; 
}

if(!empty($_SESSION['cart'])){
    $cart = $pur->showMyRooms($_SESSION['cart'],$req['gNum']);
}


//echo $host;


//echo strtotime('tomorrow');


$host=$_GET['b'];
$det=$comp->host_det($host);


function clean_encode($string) {

    $string=base64_encode($string);

   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

#.replace(/[^\w\s]/gi, '')

   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

}

?>

<html>

    <head>

        <title>Theme</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">

        <!-- Latest compiled and minified CSS -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



        <!-- jQuery library -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



        <!-- Latest compiled JavaScript -->

        <script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../css/main.css">

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

        

        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" />

        
				

        <style>
            #attributes{
                transition: font-size 0.1s;
            }
            
            #attributes:hover{
                font-size:25px;
            }
            
            .pointer{
             cursor: pointer;
            }

            input:focus{

                outline:none;

                

            }

            

            .slick-track

{

    display: flex !important;

    float:left;

    

}



.slick-slide

{

    height: inherit !important;

}

            

            

            

            /* The side navigation menu */

.sidenav {

  height: 100%; /* 100% Full-height */

  width: 0; /* 0 width - change this with JavaScript */

  position: fixed; /* Stay in place */

  z-index: 99999999; /* Stay on top */

  top: 0; /* Stay at the top */

  left: auto;

  right:0;

  background-color: #fff; /* Black*/

  overflow-x: hidden; /* Disable horizontal scroll */

  padding-top:0px; /* Place content 60px from the top */

  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */



}



/* The navigation menu links */

.sidenav a {

  padding: 8px 8px 8px 0px;

  text-decoration: none;

  font-size: 25px;

  color: #818181;

  display: block;

  transition: 0.3s;

}



/* When you mouse over the navigation links, change their color */

.sidenav a:hover {

  color: #f1f1f1;

}



/* Position and style the close button (top right corner) */

.sidenav .closebtn {

    left:0px;

  font-size: 22px;

  

}



/* Style page content - use this if you want to push the page content to the right when you open the side navigation */

#main {

  transition: margin-left .5s;

  padding: 20px;

}



/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */

@media screen and (max-height: 450px) {

  .sidenav {padding-top: 15px;}

  .sidenav a {font-size: 18px;}

}

            

            

        </style>

    </head>

<body>
    <div class="header container-fluid pd-10" style="width:100%;z-index:+999999;">
        <div class="f-22 pull-left b pd-10">Logo</div>
        <div class="pull-right pd-10" style="display:flex;">
            
            <span class="b visible-lg visible-md visible-sm" style="font-size:15px;margin:0px 20px 0px 10px;"><a href="../home.php">Log In</a></span>
            
            <a href="../home.php">
                <span class="b" style="font-size:15px; border:3px solid cornflowerblue;padding:10px;margin-right:10px;">Start Selling</span>
            </a>
            
        </div>
    </div>
    <div class="container">
        <div class="row">
            
            
            <!--DETAILS-->
            <div class="col-xs-12 col-sm-12 col-md-8">
            
                <div class="card-2 col-xs-12 col-sm-12 col-md-12 md-rt-30 md-top-30" style="padding:0px;">

                                <div class="col-md-3 col-sm-5 col-xs-12" style="padding:0px;">
                                    <img src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" style="width:100%;height:150px;object-fit:cover;">
                                </div>
                                <div class="col-md-8 col-sm-7 col-sm-12 col-xs-12">
                                        <h4 class="b"><?=$det['name'];?><span class="bg-success b f-22 pd-10 pull-right">4.5 </span></h4>
                                    
                                        <div class="cl-blue">
                                            <i class="fa fa-map-marker-alt"></i>  <?=$det['city'];?>, <?=$det['country'];?></div>
                                    <br>
                                        <span class="bg-warning pd-5"><?=$det['type'];?> Hostel</span>
                                        <br><br>
                                    <?php
                                           $faci=explode("#", $det['facilities']);

                                           foreach ($faci as $f) {
               
                                             if($f=="" || $f=="no"){}else{
                                                 
                                                 switch($f){
                                                    case 'WiFi':
                                                        echo '<span class="md-rt-10 md-top-10 pd-5 cl-blue"><i class="fa fa-wifi"></i></span>';
                                                        break;
                                                    
                                                 }
                                                }
                                            }
                                    ?>

                                        
                                        <span class="md-rt-10 md-top-10 pd-5 cl-green"><i class="fa fa-bed"></i></span>
                                        <span class="md-rt-10 md-top-10 pd-5 text-primary"><i class="fa fa-star"></i></span>
                                        <span class="md-rt-10 md-top-10 pd-5 text-success"><i class="fa fa-check-circle"></i></span>

                                    

<br><br>
                                </div>
                            </div>
            </div>
            <!--//DETAILS-->
            <!--CHECKOUT MAIN-->
            <div class="col-xs-12 col-sm-12 col-md-4">
            
                                <!--CHECKOUT-->

                 <div class="col-xs-12 col-sm-12 col-md-12">

                     <div class="col-xs-12 col-sm-12 col-md-12 b f-22" style="padding:0px;">My Room</div>

                     <div class="col-xs-12 col-sm-12 col-md-12 bg-lav bd md-top-10">

                         <div class="col-xs-12 col-sm-12 col-md-12 md-top-10">

                             <h5><i class="fa fa-calendar"></i> <span id="inDate"></span> - <span id="outDate"></span>

                                <span class="pull-right"><i class="fa fa-users"></i> <span id="guestNum"></span> Guest</span>    

                             </h5>

                         </div>
                     </div>

                     


                     

                     <div id="myRooms" class="col-xs-12 col-sm-12 col-md-12  md-top-0 pd-10">

                         <?php

                            if(isset($cart)){

                                $subTotal=0;

                                foreach($cart as $c){
                                    
                                    //echo $c['roomName'];

                         ?>

                         <div id="<?=clean_encode('addedRoom_'.$c['id']);?>">

                            <br/>

                             <h5 class="b"><?=$c['roomName'];?>

                             </h5>

                             <div class="md-top-20">

                                 <span class="bg-danger bd pd-10"><?=$c['availableBeds'];?> Beds Left!</span>

                             </div>

                             <br/>

                             <div class="md-top-10">

                                 <span class="b text-primary">Reservation Cost</span> 

                                 <span class="b text-muted pull-right"> <?=$c['bPrice'];?></span> 

                             </div>

                             <div class="md-top-10">

                                 <span class="b text-primary">Hostel Cost</span>

                                 <span class="b text-muted pull-right"><?=$c['price'];?></span>

                                 <div class="f-12 text-muted md-top-10">

                                     <i class="fa fa-info-circle"></i> Hostel Cost is according to bed per night and is payable when you reach the hostel.

                                 </div>

                             </div>

                             <div class="md-top-10">

                                 <span class="b text-primary">Rs <?=$c['bPrice'];?> x <?=$c['guestNum'];?> Guests</span>

                                 <span class="b text-muted pull-right">Rs <?=$c['Total'];?></span> 

                             </div>

                         </div>

                         

                         <?php  

                                    $subTotal+=$c['Total'];

                                }

                            }

                         ?>

                     </div>

                    
                     <?php
                        if(!isset($subTotal)){
                            $className='hide';
                        }else{
                            $className='';
                        }
                     ?>
                     
                     <div id="payable" class="col-xs-12 col-sm-12 col-md-12 <?=$className;?>" style="padding:0px;">

                        <h4 class="bg-success md-top-0 pd-10">Payable Now

                            

                            <span id="" class="b pull-right">$ <?=$subTotal;?></span>

                         </h4>

                         

                          <div class="col-xs-12 col-sm-12 col-md-12 md-top-10">

                        <div class="form-group">

                            <a href="checkout.php">
                                <button class="btn btn-md btn-success form-control" style="height:40px;">Reserve</button>
                            </a>
                         </div> 

                     </div>

                         

                     </div>
                
                        

                     

                </div>

            <!--//CHECKOUT-->
            </div>
            <!--CHECKOUT MAIN-->
        </div>
    </div>
</body>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js" integrity="sha512-Izh34nqeeR7/nwthfeE0SI3c8uhFSnqxV0sI9TvTcXiFJkMd6fB644O64BRq2P/LA/+7eRvCw4GmLsXksyTHBg==" crossorigin="anonymous"></script>

    <script>
          const dateIn=moment.unix('<?=$req['in'];?>').format('ll');
        const dateOut=moment.unix('<?=$req['out'];?>').format('ll');
        const guestNum='<?=$req['gNum'];?>';
        
        $('#outDate').text(dateOut);
        $('#inDate').text(dateIn);
        $('#guestNum').text(guestNum);
        
        $(function(){
        
                //$(this).addClass('');
             
            
        })
    </script>
</html>











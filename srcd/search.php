<?php
session_start();
    if(!isset($_GET['search'])){
        header('Location:404.php');
    }

if(isset($_SESSION['cart'])){
    unset($_SESSION['cart']);
    
}

include('../requests/core/company.class.php');
$comp= new Company();
$uni=$comp->cleanSpecialCharacters($_GET['search']);



$hosts=$comp->search_data($uni);

//print_r($hosts);;
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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
        <style>
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
            <!--//Search-->
            <div class="col-xs-12 md-top-30">
                 <form class="col-md-6 col-xs-12 bg-lav"  style="height: 50px;padding: 0px;border-radius: 25px;" action="search.php" method="post">

              <div class="col-md-11 col-xs-10">
                <input id="search_bar" type="text" value="<?=$_GET['search'];?>" name="search" class="f-12" placeholder="Search for college,city or Hostel Name" style="width:100%;height:50px;border: none;display:inline;background-color:#e6e6fa21" autocomplete="off" >
              </div>
              <div class="col-md-1 col-xs-2 f-15 text-muted text-center" style="padding:15px 8px 0px 0px;">
                <i class="fa fa-search"></i>
              </div>

              
            </form>
            </div>
            
            
              <div class="col-xs-12 visible-xs md-top-10"> 
                <!--<h3 class="b">My Requirements</h3>-->
                  
                
                    <h3>Filters</h3>
                  <br/>
                  <div class="col-xs-6">
                 <h4 class="b">Prices</h4>
                <div class="col-xs-12" style="padding:0px;">
                    <div class="checkbox pd-5">
                      <label class="b" style="color:#777;"><input type="checkbox" checked value=""><span class="b" style="#777;">High to Low</span></label>
                        
                    </div>
                    
                    <div class="checkbox pd-5">
                        
                        <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">Low to High</span></label>
                    
                    </div>
                    
                    <div class="checkbox pd-5">
                        <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">Exclusive</span></label>
                    </div>
                    
                    <div class="checkbox pd-5">
                        <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">Vip</span></label>
                    </div>
                <br />
                </div>
               </div> 
                
                   <div class="col-xs-6">
                <h4 class="b"> Facilities</h4>
                <div class="col-xs-12" style="padding:0px;">
                    <div class="checkbox pd-5">
                      <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">Internet/Wifi</span></label>
                    </div>
                    
                    <div class="checkbox pd-5">
                        <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">Air-conditioning</span></label>
                    
                    </div>
                    
                    <div class="checkbox pd-5">
                        <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">Mess</span></label>
                    </div>
                    
                    <div class="checkbox pd-5">
                        <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">Laundry</span></label>
                    </div>
                    
                    
                
                        
                </div>
                  </div>
                    
                
            </div>
            
            
            
            <div class="col-xs-12 col-sm-9 col-md-9 md-top-30"> 
                <h5>20/63 Results
                </h5> 
                    
                        <div class="col-xs-12 col-md-12 col-sm-12" style="padding:0px;"> 
                            <?php
                                if(isset($hosts) || !empty($hosts)){
                                    foreach($hosts as $h){
                            ?>

                            
                        <a href="main3.php?b=<?=$h['keyUnique'];?>">
                            <div class="card-2 col-xs-12 col-sm-12 col-md-5 md-rt-30 md-top-30" style="padding:0px;">

                                <div class="col-md-12 col-sm-5 col-xs-12" style="padding:0px;">
                                    <img src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:200px;object-fit:cover;" />
                                </div>
                                <div class="col-md-12 col-sm-7 col-sm-12 col-xs-12">
                                        <h4 class="b"><?=$h['name'];?><span class="bg-success b f-22 pd-10 pull-right">4.5 </span></h4>
                                    
                                        <div class="cl-blue">
                                            <i class="fa fa-map-marker-alt"></i>  <?=$h['city'];?>,<?=$h['country'];?>
                                        </div>

                                        <br />
                                        <span class="bg-warning pd-5"><?=$h['type'];?></span>

                                        <div class="md-top-10 b " style="color:#a3a3a3;">Starting from $<?=$comp->starting_from($h['id'])[0]['b_cost'];?></div>

                                        <br />
                                    
                                            <span class="b col-xs-4 text-center col-md-4" style="font-size:15px; border:3px solid cornflowerblue;padding:5px;margin-right:10px;">Book Now</span>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <button class="btn btn-success btn-md col-xs-4 col-md-4">View Details</button>
                                </div>
                            </div>
                        </a>
             
                            
                            <?php
                                    }
                                    
                                }
                            ?>
                    
                        </div>
                    
                    
                    
                    
                
                
            </div>
            <!-- <div class="col-xs-5 col-sm-3 col-md-3 visible-lg visible-md visible-sm md-top-30"> 
                <h3 class="b">My Requirements</h3>
                <br/><br/>
                <h4 class="b">Categories</h4>
                <div class="col-xs-12" style="padding:0px;">
                    <div class="checkbox pd-5">
                      <label class="b" style="color:#777;"><input type="checkbox" checked value=""><span class="b" style="#777;">Girls Hostel</span></label>
                    </div>
                    
                    <div class="checkbox pd-5">
                        <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">Boys Hostel</span></label>
                    
                    </div>
                    
                    <div class="checkbox pd-5">
                        <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">All Gender Hostel</span></label>
                    </div>
                    
                    <div class="checkbox pd-5">
                        <label class="b" style="color:#777;"><input type="checkbox" value=""><span class="b" style="#777;">Guest Rooms</span></label>
                    </div>
                <br />
                </div>
            </div> -->
            
        </div>
    </div>
    
</body>
    <script>
        const place='<?=$_GET['search'];?>';
        
        $("#listings").html('<div class="col-xs-12 col-sm-12 col-md-12 f-22 md-top-30 cl-blue"><i class="fa fa-spin fa-spinner"></i></div<');
        $.ajax({
            type:'POST',
            url:'../requests/company.php',
            data:{
                token:'asdds',
                search_data:place
            },
            success:function(data){
                var resp=JSON.parse(data);
                //console.log(resp)
                let html='';
                $.each(resp.result, function(key,val){
                    html+=' <a href="main.php?b='+val.keyUnique+'"> <div class="card-2 col-xs-12 col-sm-12 col-md-12 md-top-30" style="padding:0px; margin-right:10px;"><div class="col-md-4 col-sm-5 col-xs-12" style="padding:0px;"><img src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:200px;object-fit:cover;" /></div><div class="col-md-8 col-sm-7 col-sm-12 col-xs-12"><h4 class="b">'+val.name+'<span class="bg-success b f-22 pd-10 pull-right">4.5 </span></h4><div class="cl-blue"><i class="fa fa-map-marker-alt"></i>  '+val.city+','+val.country+'</div><br /><span class="bg-warning pd-5">Guest Hostel</span><div class="md-top-10 b " style="color:#a3a3a3;">Starting from '+val.b_cost+'</div><br /><a href="../home.php"><span class="b col-xs-4 text-center col-md-4" style="font-size:15px; border:3px solid cornflowerblue;padding:5px;margin-right:10px;">Book Now</span></a>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success btn-md col-xs-4 col-md-4">View Details</button></div></div></a>'
                });

                $("#listings").html(html);
                
            }
        })
    
    </script>
</html>
    
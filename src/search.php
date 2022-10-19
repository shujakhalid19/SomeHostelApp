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
            <div class="col-md-4 col-xs-10 md-top-30">
                <h2>Book unique listings from around the globe.</h2>
            </div>
            <!--//Search-->
            <div class="col-xs-12 md-top-30">
                 <form class="col-md-6 col-xs-12 bg-lav"  style="height: 50px;padding: 0px;border-radius: 25px;">

              <div class="col-md-11 col-xs-10">
                <input id="search_bar" type="text" name="search" class="f-12" placeholder="Search for college,city or Hostel Name" style="width:100%;height:50px;border: none;display:inline;background-color:#e6e6fa21" autocomplete="off" >
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
            
            
            
            <div class="col-xs-12 col-sm-9 col-md-8 md-top-30"> 
                <h5>20/63 Results
                </h5> 
                    
                        <div class="col-xs-12 col-md-12 col-sm-12" style="padding:0px;"> 
                            
                               
                <?php
                $img=[
                    "https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1555854877-bab0e564b8d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1591529865762-f84b1490ef8a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                ];
               for($i=0;$i<=2;$i++){
                ?>
                              <div class="card-2 col-xs-12 col-sm-12 col-md-12 md-top-30" style="padding:0px; margin-right:10px;">
                                <div class="col-md-4 col-sm-5 col-xs-12" style="padding:0px;">
                                    <img src='<?=$img[$i];?>' style="width:100%;height:200px;object-fit:cover;" />

                                </div>

                                <div class="col-md-8 col-sm-7 col-sm-12 col-xs-12">
                                    <h4 class="b">Villa Domina
                                        <span class="bg-success b f-22 pd-10 pull-right">4.5 </span>
                                    </h4>

                                    <div class="cl-blue"><i class="fa fa-map-marker-alt"></i>  St.Petersburg</div>
                                    <br />
                                    
                                    <div class="md-top-10 b " style="color:#a3a3a3;">Starting from $200</div>
                                    <br />
                                    
                                     <a href="../home.php">
                                         
                                        <span class="b col-xs-4 text-center col-md-4" style="font-size:15px; border:3px solid cornflowerblue;padding:5px;margin-right:10px;">Book Now</span>
                                    </a>
                                    
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                     <button class="btn btn-success btn-md col-xs-4 col-md-4">View Details</button>

                                </div>
                                  
                               
                            </div>
                    <?php
                   
               }
                   ?>
                            
                            
                    
                        </div>
                    
                    
                    
                    
                
                
            </div>
            <div class="col-xs-5 col-sm-3 col-md-4 visible-lg visible-md visible-sm md-top-30"> 
                <!--<h3 class="b">My Requirements</h3>-->
                <br/><br/>
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
    </div>
    
</body>
</html>
    
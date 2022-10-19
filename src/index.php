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
            
            <!--//Search-->
            <!--Types-->
            <div class="col-xs-12">
                <h4 class="b">Explore</h4>
                <div class="bd md-10 col-xs-5 col-md-2" style="padding:0px;">
                    <div class="col-xs-5" style="padding:0px;">
                        <img src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:60px" />
                    </div>
                    
                    <div class="col-xs-7">
                        
                        <h5 style="b">Student Hostels</h5>
                    </div>
                
                </div>
                
                
               <div class="bd md-10 col-xs-5 col-md-2" style="padding:0px;">
                    <div class="col-xs-5" style="padding:0px;">
                        <img src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:60px" />
                    </div>
                    
                    <div class="col-xs-7">
                        
                        <h5 style="b">Guest Hostels</h5>
                    </div>
                
                </div>
                
                
               <div class="bd md-10 col-xs-5 col-md-2" style="padding:0px;">
                    <div class="col-xs-5" style="padding:0px;">
                        <img src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:60px" />
                    </div>
                    
                    <div class="col-xs-7">
                        
                        <h5 style="b">Rental Properites</h5>
                    </div>
                
                </div>
                
            </div>
            <!--//Types-->
            
            <!--Hostels-->
            <div class="col-xs-12 col-md-12 md-top-30">
                <h4 class="b">Hostels
                    <span class="pull-right f-15">See All</span>
                </h4>
                <div class="responsive">
                    
                
                <?php
                $img=[
                    "https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1555854877-bab0e564b8d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1591529865762-f84b1490ef8a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                ];
               for($i=0;$i<=2;$i++){
                ?>
               
                <div class="card-2 col-xs-12 col-md-3" style="padding:0px;margin-right:10px;">
                    <div class="col-xs-12" style="padding:0px;">
                        <img src='<?=$img[$i];?>' style="width:100%;height:150px;object-fit:cover;" />
                        
                    </div>
                    
                    <div class="col-xs-12" style="padding:5px;">
                        <h4 class="b">Villa Domina</h4>
                        
                        <div class="cl-blue"><i class="fa fa-map-marker-alt"></i>  St.Petersburg</div>
                        <div class="md-top-10 b " style="color:#a3a3a3;">Starting from $200</div>
                        
                        
                    </div>
                
                </div>
                
               <?php
                }
                ?>
               </div>
                
            </div>
            <!--//Hostels-->
            
            <!--Hostels-->
            <div class="col-xs-12 col-md-12 md-top-20">
                <h4 class="b">Guest Houses
                    <span class="pull-right f-15">See All</span>
                </h4>
                <div class="responsive" style="">
                    <?php
                $img=[
                    "https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1555854877-bab0e564b8d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1591529865762-f84b1490ef8a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1591529865762-f84b1490ef8a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                ];
               for($i=0;$i<=3;$i++){
                ?>
               
                <div class="card-2" style="padding:0px;">
                    <div class="col-xs-12" style="padding:0px;">
                        <img src='<?=$img[$i];?>' style="width:100%;height:150px;object-fit:cover;" />
                        
                    </div>
                    
                    <div class="col-xs-12" style="padding:5px;">
                        <h4 class="b">Villa Domina</h4>
                        
                        <div class="cl-blue"><i class="fa fa-map-marker-alt"></i>  St.Petersburg</div>
                        <div class="md-top-10 b " style="color:#a3a3a3;">Starting from $200</div>
                        
                        
                    </div>
                
                </div>
                
               <?php
                }
                ?>
               
                
                </div>
            </div>
            <!--//Hostels-->
            
                       <!--Hostels-->
            <div class="col-xs-12 col-md-12 md-top-20">
                <h4 class="b">Events
                    <span class="pull-right f-15">See All</span>
                </h4>
                <div class="events bg-lav" style="">
                    <?php
                $img=[
                    "https://images.unsplash.com/photo-1551818255-e6e10975bc17?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1501281668745-f7f57925c3b4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1522158637959-30385a09e0da?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60",
                    
                    "https://images.unsplash.com/photo-1429962714451-bb934ecdc4ec?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                ];
               for($i=0;$i<=3;$i++){
                ?>
               
                <div class="card-2" style="padding:0px;">
                    <div class="col-xs-12" style="padding:0px;">
                        <img src='<?=$img[$i];?>' style="width:100%;height:150px;object-fit:cover;" />
                        
                    </div>
                    
                    <div class="col-xs-12" style="padding:5px;">
                        <h4 class="b">Villa Domina</h4>
                        
                        <div class="cl-blue"><i class="fa fa-map-marker-alt"></i>  St.Petersburg</div>
                        <div class="md-top-10 b " style="color:#a3a3a3;">Starting from $200</div>
                        
                        
                    </div>
                
                </div>
                
               <?php
                }
                ?>
               
                
                </div>
            </div>
            <!--//Hostels-->
            
            <!--Guest Hostels-->
            <!--<div class="col-xs-12 col-md-12 md-top-40" style="padding:5px;">
                
                
                <?php
                    $img=[
                        
                    ];
                
                    
                    for($i=0;$i<=3;$i++){
                        ($i==-1) ? 
                    $card=array(
                        'Cardclass'=>'col-md-5',
                        'height'=>'400px',
                        'heading'=>'h3'
                    ) : $card=array(
                        'Cardclass'=>'col-md-3',
                        'height'=>'250px',
                        'heading'=>'h4'
                    );
                ?>
                
                <div class="col-xs-11 <?=$card['Cardclass'];?>" style="height:<?=$card['height'];?>;padding:0px;margin:10px;">
                    <div class="" style="background-color:rgba(0,0,0,0.05);width:100%;height:100%">
                        <img src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="cv-edge-24" style="width:100%;height:100%;object-fit:cover;filter: brightness(92%)  drop-shadow(8px 8px 10px #a3a3a3);" />
                        <div class="pd-10" style="position:absolute;top:auto;bottom:20px;color:#fff;">
                            <<?=$card['heading'];?> class="b">Sun Burn Festival 2020 In House.</<?=$card['heading'];?>>
                            <h5 class=""><i class="fa fa-map-marker-alt"></i>  St.Petersburg</h5>
                        </div>
                    
                    </div>
                
                </div>
                
                <?php
                            
                            
                    }        
                ?>
                
                
            </div>-->
            <!--//Guest Hostels-->    
        </div>
    </div>
</body>
    <script>
        $('.fade').slick({
          dots: false,
          infinite: true,
          speed: 500,
          fade: true,
          cssEase: 'linear'
        });
        
        
        
        
        $('.responsive').slick({
  dots: false,
  infinite: false,
  speed: 300,
  adaptiveHeight: false,
  slidesToShow: 4,
             prevArrow: false,
    nextArrow: false,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1.1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
        
        
            $('.events').slick({
  dots: false,
  infinite: false,
  speed: 300,
  adaptiveHeight: false,
  slidesToShow: 2,
             prevArrow: false,
    nextArrow: false,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1.1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
        
    </script>
</html>
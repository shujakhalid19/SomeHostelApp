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
            
           .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    color: #000;
    background-color: transparent;
               border-bottom:4px solid cornflowerblue;
}
        </style>
    </head>
<body>

    <div class="header container-fluid pd-10" style="width:100%;z-index:+999999;">
        <div class="f-22 pull-left b pd-10">Logo / Events</div>
        <div class="pull-right pd-10" style="display:flex;">
            
            <span class="b visible-lg visible-md visible-sm" style="font-size:15px;margin:0px 20px 0px 10px;"><a href="../home.php">Log In</a></span>
            
            <a href="../home.php">
                <span class="b" style="font-size:15px; border:3px solid cornflowerblue;padding:10px;margin-right:10px;">Start Selling</span>
            </a>
            
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-10 md-top-30">
                <h2 class='b'>WWII Conferance 2021.<br/></h2>
                <h3>Events and Places can be a great way to find more customers.</h3>
                <h4>Add Fun Places and Events near your Listing.</h4>
                <br/>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        
                        <div class="text-muted f-18 col-xs-7"><i class="far fa-calendar"></i> 23 Nov,2020 to 12 Dec,2020</div>
                        <div class="text-muted f-18 col-xs-5">2.3k<br/> Attending</div>
                        
                    </div>
                
                <button class="btn btn-lg btn-primary md-top-20" data-toggle="modal" data-target="#myModal">Create New</button> 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
              <img src="../includes/images/booking-an-event-on-calendar/3855187.jpg" style="width:100%;height:auto;object-fit:cover;" />
            </div>
            
            <div class="col-md-5 hide col-xs-10 md-top-30 bd">
   
                
            </div>
            <!--//Search-->
            <div class="col-xs-12 hide md-top-30">
                
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
           
        </div>
    </div>

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Near you</h4>
      </div>
      <div class="modal-body">
                
                <div class="col-xs-12 col-md-12 col-sm-12">
 <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#home">Places</a></li>
    <li><a data-toggle="pill" href="#menu1">Events</a></li>
  </ul>

<div class="tab-content md-top-20">
  <div id="home" class="tab-pane fade in active">
                <div class="col-xs-6" style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">Room Type</div>     
                    <select class="form-control bg-lav" id="rType" name="r_type">
                      <option value="0">Shared</option>
                      <option value="1">Private</option>
                    </select>
                </div>

                <div class="col-xs-6" style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">Bathroom Type</div>     

                    <select class="form-control bg-lav" name="b_type">
                      <option value="0">Shared</option>
                      <option value="1">Private</option>
                    </select>
                </div>

                <div class="col-xs-6" style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">Number of Beds</div>     
                    <input type="number" id='bNum' class="form-control" name="b_num" placeholder="12" style="background-color:#e6e6fa51"/>
                </div>
                <div class="col-xs-6" style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">Room Price <a href="#" class="f-12"  data-placement="bottom"  data-toggle="popover" title="Info" data-content="<p class='bg-dark f-12'>For Guest Hostels ,room prices must be given as <b>per bed per night</b> in your <b>local currency.</b></p>"> <i class="fa fa-info-circle"></i> Info </a></div>     
                    <input type="number" class="form-control" name="r_cost" placeholder="$876" style="background-color:#e6e6fa51"/>
                </div>

                <div class="col-xs-12" style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">About this room <span style="color:#a3a3a3;">(optional)</span>
                    </div> 
                    <textarea class="form-control" name="r_info" placeholder="42 E, 15th Street" style="background-color:#e6e6fa51"> </textarea>
                </div>
      
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  
</div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

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
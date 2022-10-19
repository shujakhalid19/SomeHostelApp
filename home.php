<?php
session_start();

?>
<html>
    <head>
        <title>Webster</title>
        <meta name="google-signin-client_id" content="352188290413-s5kuqvu11m106ddon267oaofdcag65gl.apps.googleusercontent.com">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="css/custom.css">
        
    </head>
    <body>
        <!-- NAVBAR -->
        <?php
            include('includes/navbar.php');
        ?>
        <!-- //NAVBAR -->
        <div class="container" style="margin-top:80px;">
            <div class="col-xs-12 bg-grey md-hide collapse fixed" id="demo" style="margin-top:-30px;z-index: +99;margin-bottom: 10px;">
          <div class="col-sm-12 col-xs-12 col-md-0">
            <form class="navbar-form" role="search">
              <div class="input-group">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit" style="border: none;height:35px;color: #d4d4d4;"><i class="glyphicon glyphicon-search"></i></button>
                </div>
                <input type="text" class="form-control" placeholder="Search" name="q" style="border: none;">
                
              </div>
            </form>
          </div>
          <div class="col-xs-12 md-hide  cl-blue">
            
            <div class="col-md-4 col-xs-6">
              <div class="f-15">People</div>
              
            </div>
            <div class="col-md-4 col-xs-6">
              <div class="f-15">Startups</div>
              
            </div>
          </div>
          
          <div class="col-xs-12" style="margin-top: 20px;">
            <strong>Search results in People</strong>
            <div class="col-sm-12" style="height: 100px;background-color: #fff;margin-bottom: 10px;">
              
            </div>
          </div>
          
        </div>
      

            <div class="row">
                <div class="col-md-12" id="main">
                    <div class="col-md-8">
                        
                        <strong class="f-28">Why bother joining?

                            <?php  
                                $str="kag_photo-1497034825429-c343d7c6a68f.jpeg#kag_photo-1497034825429-c343d7c6a68f.jpeg#poster-stark-palace.jpg#photo-1506354666786-959d6d497f1a.jpeg";
                                $str=explode("#", $str);
                                echo $str[2];

                            ?>

                        </strong>
                        <div class="" style="font-size:20px;opacity: 0.8">It's about taking strong decisions,<br>and the next big step for your business starts here.</div>
                        <br/>
                        <div class="" style="font-size:18px;opacity: 0.8">What we offer,
                            <ul class="cl-blue" style="line-height: 52px;font-size:20px; ">
                                <li>
                                    Potential Investors
                                </li>
                                <li>
                                    Potential business partners
                                </li>
                                <li>
                                    Find employees and freelance contractors
                                </li>
                                <li>
                                    Know businesses similar to yours
                                </li>
                                <li>
                                    Know more about other businesses and also the most popular ones
                                </li>
                                <li>
                                    Success stories and podcasts to get you inspired
                                </li>
                            </ul>
                        </div>
                        
                        
                    </div>
                    <div class="col-md-4">
                        <div class="entry col-md-12 bd" style="padding:25px;background-color:#eee;">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
    
    loginHTML();
    
    function loginHTML(){
    $.ajax({
    url: "includes/login.php",
    type: "POST",
    data:'',
    dataType: "html",
    success:function(data){
    $(".entry").html(data);
    }
    });
    }
    function regHTML(){
    $.ajax({
    url: "includes/register.php",
    type: "POST",
    data:'',
    dataType: "html",
    success:function(data){
    $(".entry").html(data);
    }
    });
    }
    function forHTML(){
    $.ajax({
    url: "includes/forgot.php",
    type: "POST",
    data:'',
    dataType: "html",
    success:function(data){
    $(".entry").html(data);
    }
    });
    }
    </script>
</html>
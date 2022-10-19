<?php
include('requests/core/company.class.php');
$comp= new Company();


$uni=$comp->cleanSpecialCharacters($_GET['uni']);



$hosts=$comp->hosts_near($uni);
//$hosts['name']=str_replace("_", ' ', $hosts['name']);
//print_r($hosts) 



?>
<!DOCTYPE html>
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

    <link rel="stylesheet" type="text/css" href="css/main.css">
<!-- STAR -->
<style type="text/css">
    .score {
  display: block;
  font-size: 16px;
  position: relative;
  overflow: hidden;
}

.score-wrap {
  display: inline-block;
  position: relative;
  height: 19px;
}

.score .stars-active {
  color: #EEBD01;
  position: relative;
  z-index: 10;
  display: inline-block;
  overflow: hidden;
  white-space: nowrap;
}

.score .stars-inactive {
  color: grey;
  position: absolute;
  top: 0;
  left: 0;
  -webkit-text-stroke: initial;
  /* overflow: hidden; */
}

input:focus{
  outline: none;
  border: none;
}

#srch_btn{

  width:60%;
  height: 50px;
  border-radius: 50%;
  border:none;

}

</style>
<!-- //STAR -->
</head>
<body>
      <!-- BAVNAT -->
    <nav class="navbar navbar-default banner">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-right navbar-form-search" role="search">

                    <div class="search-form-container hdn" id="search-input-container">

                        <div class="search-input-group">

                            <div id="search-input" class="form-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <button type="submit" class="btn btn-default" id="search-button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                <button class="btn tog-btn" id="search-button" style="display: inline;" onclick="togTheme();return false;"><span class="fa fa-moon" aria-hidden="true"></span></button>
                            </div>
                        </div>

                    </div>


                </form>
                <ul class="nav navbar-nav navbar-right navbar-nav-primary">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Publication</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- ..NAVBAR -->


                    
    

        <div class="container">

            <div class="row">


              
                <div class="col-md-12">

                  <h4 class="b">Search result for '<?=$uni;?>'</h4>
                  

                </div>

                <div class="col-md-12">
                   <div data-role="main" class="ui-content">
                    
                    <div class="dropdown ">
                      <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
                        <i class="fa fa-filter"></i> Filter Search Result <span class="caret"></span>
                      </button>
                       <ul class="dropdown-menu">
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12">
                  

                  
                  <br/>

                    <?php

                      //for($i=0;$i<=5;$i++){
                    if (isset($hosts)) {
                      foreach ($hosts as $h) {
                        
                        //$h['name']=str_replace("_", ' ', $h['name']);
                        
                      
                    ?>
                         <a href="main.php?h=<?=base64_encode($h['id']);?>"><div class="card-1 col-md-12 col-xs-12 bd" style="margin-bottom:20px;">

                            <div class="col-md-4 col-sm-3 col-xs-12">
                                <img src="profiles/<?=$h['name'].'_'.$h['im_1'];?>" style="width:100%;height: 150px;object-fit: cover;">
                            </div>

                           <div class="col-md-8 col-sm-9 col-xs-12 f-22">
                                
                                <div class="col-md-10 col-xs-10" style="padding:0px;">
                                  <h4 class="b"><?=str_replace("_", ' ', $h['name']);?></h4>
                                  <span class="score">
                                        <div class="score-wrap">
                                            
                                        <span class="stars-active f-12" style="width:100%;">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        </span>
                                

                                </div>
                                <div class="col-md-2 col-xs-2 b" style="padding:5px;">
                                  $<?=$h['b_cost'];?>
                                </div>  
                                       

                                <div class="col-md-12 col-xs-12 f-12 bg-red" style="padding:0px;">
                                    <?=$h['dist_near_uni'];?>km From <?=ucfirst($h['near_uni']);?> University
                                    
                                    
                                    
                                </div>

                                    <div class="col-md-12 col-xs-8 f-12" style="padding: 0px;">
                                      <br/>
                                      <i class="fa fa-map-marker-alt"></i> <?=$h['city'].','.$h['country'];?>
                                      
                                        
                                    </div>
                                   
                                    

                            </div>

                         </div>
                       </a>
                         <?php

                          }
                      # code...
                    }

                         ?>



                  

                </div>


                <div class="col-md-4 col-sm-4 col-xs-12">

                                      

                    <div class="col-md-12 col-sm-12 col-xs-12 bd-btm bg-info" style="margin-bottom: 50px;">
                      <h4 class="b">Your univs</h4>

                    <div class="col-md-3 col-sm-4 col-xs-4" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width: 100%;height: 80px;object-fit: cover;">
                    </div>

                    <div class="col-md-9 col-sm-8 col-xs-8 f-22 ">
                        <a href="#">
                            <h5 class="b ">St.Petersburg University</h5>
                        </a>
                        <div class="f-12">
                            <span style="opacity: 0.8;"> St.Petersburh,Russia </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                        </div>
                    </div>
                    

                    
                    


                </div>
                    <h4 class="b">Top univs</h4>

                    <div class="col-md-12 col-sm-12 col-xs-12 bd-btm" style="margin-bottom: 50px;">

                    <div class="col-md-3 col-sm-4 col-xs-4" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width: 100%;height: 80px;object-fit: cover;">
                    </div>

                    <div class="col-md-9 col-sm-8 col-xs-8 f-22 ">
                        <a href="#">
                            <h5 class="b ">St.Petersburg University</h5>
                        </a>
                        <div class="f-12">
                            <span style="opacity: 0.8;"> St.Petersburh,Russia </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                        </div>
                    </div>
                    

                    
                    


                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 bd-btm" style="margin-bottom: 50px;">

                    <div class="col-md-3 col-sm-4 col-xs-4" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width: 100%;height: 80px;object-fit: cover;">
                    </div>

                    <div class="col-md-9 col-sm-8 col-xs-8 f-22 ">
                        <a href="#">
                            <h5 class="b ">St.Petersburg University</h5>
                        </a>
                        <div class="f-12">
                            <span style="opacity: 0.8;"> St.Petersburh,Russia </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                        </div>
                    </div>
                    

                    
                    


                </div>


                </div>

<div class="col-md-12 col-sm-12 col-xs-12 bd-btm bg-grey md-hide" style="position: fixed;bottom: 0;;z-index: +99;padding: 10px;">
                      

                    <div class="col-md-3 col-sm-4 col-xs-3" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width: 100%;height: 80px;object-fit: cover;">
                    </div>

                    <div class="col-md-9 col-sm-8 col-xs-7 f-22 ">
                        <a href="uni2.php?uni=<?=$uni;?>">
                            <h5 class="b cl-blue">Learn more about St.Petersburg University</h5>
                        </a>
                        <div class="f-12">
                            <span style="opacity: 0.8;"> St.Petersburh,Russia </span>|<span style="opacity: 0.8;"> 2600 Views</span>

                        </div>

                    </div>
                    <div class="col-xs-2 text-right text-danger">
                      <i class="fa fa-times"></i>
                    </div>
                  </div>
     

            </div>
            

        </div>
    





</body>
<script type="text/javascript">
      function togTheme() {

        $("body").toggleClass('th-dark');
        $(".fa-moon").toggleClass('fa-sun');
    }

</script>
</html>
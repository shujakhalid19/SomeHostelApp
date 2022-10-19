<?php
session_start();
include('requests/core/company.class.php');
$comp= new Company();

$host=base64_decode($_GET['h']);
//echo $host;


$det=$comp->host_det($host)[0];
$rev=$comp->h_reviews($host);
//print_r($rev);

$hid= base64_encode($det['id']);

if (isset($_SESSION['userId'])) {
    
  $id=$_SESSION['userId'];
  $user=$comp->user_det($id)[0];
  //print_r($user);
  $name= $user['name'];
  $img=$user['image'];

  
}else{
  //not logged
}

//echo $id;


switch ($det['type']){
   case 'Boys':
     $t="<i class='fa fa-mars'></i> Boys Hostel";
     break;
   case 'Girls':
     $t="<i class='fa fa-venus'></i> Girls Hostel";
     break;
   case 'All':
     $t='<i class="fa fa-mars f-22"></i> <i class="fa fa-venus f-22"></i>  All Gender Hostel';
     break;
   case 'Guest':
     $t="<i class='fa fa-home'></i> Guest House";
     break;
   default:
     # code...
     break;
 };

?>
<!DOCTYPE html>
<html>

<head>
    <title>Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="google-signin-client_id" content="214371390847-b43rrru7vih0fsp4soofiacp0m9t5uev.apps.googleusercontent.com">

 <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script type="text/javascript">


      function onSignIn(googleUser) {

          var profile = googleUser.getBasicProfile();
          
          var id=profile.getId(); // Do not send to your backend! Use an ID token instead.
          var name=profile.getName();
          var image=profile.getImageUrl();
          var email=profile.getEmail(); // This is null if the 'email' scope is not present.
          //save_user(id,name,email,image);
          

          console.log(image);
          save_user(id,name,image,email);
          $('#google-input').html('<div id="signedIn" class="" style="width: 150px;height: 50px;display: flex;background-color: #FFF;box-shadow: 4px 4px 13px 1px #d4d4d4;padding:5px;"> <img src="'+image+'" style="width: 40px;height: 40px;border-radius: 50%;"> <div class="f-12 text-center b text-muted" style="width: 100px;padding:10px 0px 0px 0px; ">'+name+'</div> </div>');

        }

       

   </script>

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
   overflow: hidden; 
}


.bd-blue{
  border:3px solid cornflowerblue;
}

.gold{
  color: gold;
}


#pill{
display:inline-block;width: auto;height: auto;background-color: cornflowerblue;padding: 10px;margin:10px 10px 0px 0px;color: #FFF;border-radius:14px;
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
















   <div class="col-md-9 col-sm-12 col-xs-12">
           

                <div class="col-md-10  col-sm-10 col-xs-12">
           
                    <img id="mainImg" src="profiles/<?=$det['name'].'_'.$det['im_1'];?>" style="width:100%;height:360px;object-fit: cover;"/>
                    
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="col-xs-12 md-hide" style="height: 20px;"></div>
                        <?php
                          
                          if(isset($det)){
                            $x=1;
                            //foreach($img as $i){
                            for($i=1;$i<=4;$i++){

                            ($x==1)? $cl='bd-blue': $cl='';
                               
                        ?>
                        
                         
                          <img src="profiles/<?=$det['name'].'_'.$det['im_'.$i];?>" data-hold="<?=$det['name'].'_'.$det['im_'.$i];?>" class="chng col-md-12 col-xs-chng <?=$cl;?>" style="height:70px;object-fit: cover;padding: 0px;"/>
                        
                       
                        <div class="col-md-12 xs-hide" style="height: 20px;"></div>
                        <?php
                            $x++;
                            }
                          }
                        ?>
                        
                    </div>
              

                         <div class="col-md-12 col-sm-12 col-xs-12 f-12">

                          <h2 class="b"><?=str_replace("_", ' ', $det['name']);?></h2>


                            <div class="col-md-7 col-sm-12 col-xs-7 f-15" style="padding: 0px;">
                              
                              <i class="fa fa-map-marker-alt"></i> <?=$det['city'].','.$det['state'];?>
                              
                                
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-5" style="padding: 0px;">
                              
                                <span class="score">
                                <div class="score-wrap">
                                    
                                <span class="stars-active" style="width:60%;">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </span>
                            </div>


                        <div class="col-md-12 col-xs-12 f-15 b" style="padding:0px;">
                            <?=$det['dist_near_uni'];?>km From <?=$det['near_uni'];?> University
                        </div>
                        <!-- F! -->
                        <div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
                
                          
                          

                          <?php
                          if($det['facilities']!='no'){
                            ?>

                            <h4 class="b">
                            Hostel Facilities
                          </h4>
                          <?php


                            $faci=explode("#", $det['facilities']);
                            foreach ($faci as $f) {
                              if($f==""){}else{
                          ?>
                                <span id="pill" class="b">
                                  <?=$f;?>
                                </span>
                              <?php
                              }
                            }

                          }

                        ?>

                          
                        <!--    <span id="pill" class="b">
                            AC rooms
                          </span>
                           <span id="pill" class="b">
                            AC rooms
                          </span>
                          <span id="pill" class="b">
                            AC
                          </span>
                          <span id="pill" class="b">
                            AC rooms
                          </span>
                          <span id="pill" class="b">
                            AC rooms
                          </span> -->
                        </div>


                        <!-- //F! -->



                        <!-- COMODITIES -->
<!-- 
                              <div class="col-md-12 col-sm-12 col-xs-12 new">
                
                <br />
                <div class="card-6 col-md-3 col-sm-3 col-xs-5 bg-info" style="">
                   <div class="card text-center">
                      <div class="card-header ">
                        <i class="fa fa-music"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Music Creators</h5>
                        <p class="card-text f-10">Showcase your best work in the field of music here.</p>
                        
                      </div>
                      
                    </div>
                </div>

                <div class="card-6 col-md-3 col-sm-3 col-xs-5 bg-info" style="">
                   <div class="card text-center">
                      <div class="card-header">
                        <i class="fa fa-code"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Web Creators</h5>
                        <p class="card-text f-10">Showcase your best website here lorem .</p>
                        
                      </div>
                      
                    </div>
                </div>

                <div class="card-6 col-md-3 col-sm-3 col-xs-5 bg-info" style="">
                   <div class="card text-center">
                      <div class="card-header">
                        <i class="fa fa-palette"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"> For Digital Artists</h5>
                        <p class="card-text f-10">Showcase your best work in digital arts here.</p>
                        
                      </div>
                      
                    </div>
                </div>
                <div class="card-6 col-md-3 col-sm-3 col-xs-5 bg-info" style="">
                   <div class="card text-center">
                      <div class="card-header">
                        <i class="fa fa-atom"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"> For Animators</h5>
                        <p class="card-text f-10">Showcase your best work in the field of music here.</p>
                        
                      </div>
                      
                    </div>
                </div>
                <div class="card-6 col-md-3 col-sm-3 col-xs-5 bg-info" style="">
                   <div class="card text-center">
                      <div class="card-header">
                        <i class="fa fa-pen"></i>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title"> For Online Writers</h5>
                        <p class="card-text f-10">Showcase your best work in the field of music here.</p>
                        
                      </div>
                      
                    </div>
                </div>
                <div class="card-6 col-md-3 col-sm-3 col-xs-5 bg-info" style="">
                   <div class="card text-center">
                      <div class="card-header">
                         <i class="fa fa-flask"></i> 
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">For Scientists</h5>
                        <p class="card-text f-10">Showcase your science thesis here.</p>
                        
                      </div>
                      
                    </div>
                </div>
            </div> -->
                        <!-- COMODITIES -->


                        <div class="col-md-12 col-xs-12 f-15" style="padding:0px;">
                          <br/>
<ul class="nav nav-tabs bg-grey">
  <li class="active"><a data-toggle="tab" href="#home">Info</a></li>
  <li><a data-toggle="tab" href="#rev">Reviews</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade">
    <h3 class="b">Info</h3>
    <p>Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,
                          <br/><br/>
Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage

</p>
  </div>
  <div id="rev" class="tab-pane fade in active">
    <h3 class="b">Reviews</h3>
    <div class="col-md-12 col-xs-12  row">
      



                    <?php
                      if (isset($name)) {
                    ?>
                              <!-- <h5 class="col-xs-12 col-sm-12 b">Write about your experience at St.Petersburg</h5> -->
                              <form id="hostReview">
                                
                              
                                <div class="col-md-1 col-sm-2 col-xs-3 text-right" style="padding: 10px;">
                                  <img  src="<?=$img;?>" style="width: 100%;height:50px;object-fit: cover;float: right;" />
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-9 bg" style="padding: 0px;">

                                <strong><?=$name;?></strong>
                                
                                <textarea id="review" class="form-control" placeholder="Write Here" name="hreview"></textarea>
                                <span id="errreview" class="hide f-12">Field cannot be left empty</span>


                                <div class="form-group" style="padding: 10px;">
                                  <input id="hid" type="hidden" name="hid" class="form-control" name="rating" value="<?=$hid;?>">
                                  <input id="revnum" type="hidden" name="hrevnum" class="form-control" name="rating" value="0">


                                 <div class="rating">
                                    <span class="star rev1" onclick="f1(1)">
                                      <i class="fa fa-star"></i>
                                    </span>
                                    <span class="star rev2" onclick="f1(2)">
                                      <i class="fa fa-star"></i>
                                    </span>
                                    <span class="star rev3" onclick="f1(3)">
                                      <i class="fa fa-star"></i>
                                    </span>
                                    <span class="star rev4" onclick="f1(4)">
                                      <i class="fa fa-star"></i>
                                    </span>
                                    <span class="star rev5" onclick="f1(5)">
                                      <i class="fa fa-star"></i>
                                    </span>
                                  </div>  
                                  <span id="errrevnum" class="hide f-12">Select Review Stars</span>
                                  </div>
                  
                                  <div class="form-group text-right">
                                    
                                      <button class="btn btn-md btn-default">
                                        Reset
                                      </button>
                                      <input type="submit" name="submit" class="btn btn-md btn-primary">
                                        
                                  </div>
                              </div>
                              </form>

                    <?php

                     }else{

                      ?>
                         
                      <div class="col-md-12 bd" style="padding: 14px;">
                        <strong>Login To write your experience</strong>
                        <div id="google-input">
                          <div class="g-signin2 pull-right" data-onsuccess="onSignIn"></div>
                        </div>
                      </div>
                  <?php

                     }

                    ?>




    </div>

                <div id="review_box" class="col-md-9 col-sm-12 col-xs-12  col-md-offset-1" style="padding: 0px;">
                  <?php

                  if (isset($rev)) {
                    foreach ($rev as $r) {
                      
                    
                    
                  ?>
                  <div id="rev<?=$r['a'];?>" class="col-md-12 col-sm-12 col-xs-12 bd-btm" style="margin-bottom: 30px;padding:0px 0px 20px 0px;">
                    <div class="col-md-1 col-sm-2 col-xs-2">
                      <img  src="<?=$r['image'];?>" style="width:50px;height:50px;object-fit: cover;" />
                    </div>
                    <div class="col-md-11 col-sm-10 col-xs-10" style="padding-left:4%;" >
                      <h5 class="b"><?=$r['name'];?>
                        <div class="rating pull-right">
                        <span class="star rev1 gold" style="font-size: 22px;" onclick="f1(1)">
                          <i class="fa fa-star"></i>
                        </span>
                        <span class="f-15 cl-blue b">
                          <?=$r['rating'];?>/5 Rating
                        </span>
                      </div>
                      </h5>
                      <div class="rating f-12 text-muted">
                        <span>4 July,2019</span>
                     
                      </div>  
                    

                      
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <br/>
                      <p>
                        <?=$r['review'];?>

                        <?php
                          if ($r['user_id']==$id) {
                            ?>
                            <div class="dropup pull-right" style="width: 30px ;height: 30px;">
                              <div class="dropdown-toggle text-right" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></div>
                              <!-- <span class="caret"></span></button> -->
                              <ul class="dropdown-menu">
                                <li><a href="#" >HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JavaScript</a></li>
                                <li class="divider"></li>
                                 <!-- data-toggle="modal" data-target="#myModal" -->
                                <li onclick="myFunction(<?=$r['a'];?>)"><a href="#" onclick="return false">Delete Review</a></li>
                              </ul>
                            </div>

                        <?php
                          }else{

                          }
                        ?>

                      </p>

                    </div>
                  </div>
                  <?php
                    }
                    # code...
                  }

                  ?>





                </div>
                <!-- //REVIEWS -->
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>

<!--  
                          Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,
                          <br/><br/>
Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,<br/><br/> -->
                        </div>
                
 
                


            </div>

</div>
<div class="col-md-3  col-sm-12 col-xs-12 bd pd-10">
    <div class="col-md-12 text-center">
        <h1 class="b">$<?=$det['b_cost'];?></h1>

    </div>
    <div class="col-md-12">
        <button class="btn form-control f-22" style="height: 49px;border: 2px solid cornflowerblue;color: cornflowerblue;">
            Book Now
        </button>
        <br/><br/>
        <button class="btn form-control btn-primary" style="height: 49px;">
            Add to favourites
        </button>
        
        <div class="text-center text-danger b">
            <br/>
            2 rooms left!
        </div>
    </div>

    <div class="col-md-12  col-xs-12">
        <br/>
        <ul class="list-group">
          <li class="list-group-item"><span class="b">Monthly Charge: </span>$<?=$det['cost'];?></li>
          <li class="list-group-item"><i class="fa fa-map-marker-alt"></i> <?=$det['city'];?>,<?=$det['state'];?></li>
          <li class="list-group-item"><i class="fa fa-university"></i> <?=$det['near_uni'];?></li>
          <li class="list-group-item"><i class="fa fa-home"></i> <?=$det['num_rms'];?> Rooms</li>
          <li class="list-group-item"><?=$t;?></li>
        </ul>

    </div>

</div>

</div>
</div>

  <!-- <button type="button" class="btn btn-info btn-lg">Open Small Modal</button> -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title"> <i class="fa fa-info-circle"></i> Your review will be deleted, are you sure you want to delete your review? </h4>
        </div>
        <div class="modal-body">
          <p class="f-15 b">This action cannot be undone!</p>
          <input id="delrev" type="text" name="revId">
        </div>
        <div class="modal-footer">
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Delete </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>


</body>
<script type="text/javascript">
  $(function(){
     const d = new Date();
    $(".chng").click(function(){
      $('.chng').removeClass('bd-blue');
      $(this).addClass('bd-blue');
      console.log($(this).attr('data-hold'));
      $("#mainImg").attr('src','profiles/'+$(this).attr('data-hold'));
    });

    $("#hostReview").on('submit', function(e){
      e.preventDefault();
     if($("#review").val()==""){
        $("#errreview").removeClass('hide');
    }else if($("#revnum").val()=="" || $("#revnum").val()==0){
        $("#errrevnum").removeClass('hide');
    }else if($("#hid").val()=="" || $("#hid").val()!=='<?=$_GET["h"];?>'){
        $("#errrevnum").removeClass('hide');
        alert("NO");
    }else{
        $("#errreview").addClass('hide');
        $("#errrevnum").addClass('hide');
        $.ajax({
          type:"POST",
          url:"requests/profile.php",
          data:$(this).serialize() + '&' + $.param({
                      'time': d.getTime()
                  }),
          success:function(data){
            var resp=JSON.parse(data);

            $("#review_box").prepend('<div class="col-md-12 col-sm-12 col-xs-12 bd-btm" style="margin-bottom: 30px;padding:0px;"> <div class="col-md-1 col-sm-2 col-xs-2"> <img src="<?=$img;?>" style="width:50px;height:50px;object-fit: cover;" /> </div> <div class="col-md-11 col-sm-10 col-xs-10" style="padding-left:4%;" > <h5 class="b"><?=$name;?> <div class="rating pull-right"> <span class="star rev1 gold" style="font-size: 22px;"> <i class="fa fa-star"></i> </span> <span class="f-15 cl-blue b"> '+resp.revnum
+'/5 Rating </span> </div> </h5> <div class="rating f-12 text-muted"> <span>'+resp.time
+'</span> </div> </div> <div class="col-md-12 col-sm-12 col-xs-12"> <br/> <p>'+resp.review+'</p> </div> </div>');


          }

        });
    }


    });




  });

function f1(x){
    //alert(x); 


    $("#revnum").val(x);
    $('.star').removeClass('gold');
    for(var i=0;i<=x;i++){

      $('.rev'+i).addClass('gold');
    }
      
    
  }

  function del_rev(a){
    $("#delrev").val(a);
  }

  function myFunction(id) {
     //e.preventDefault();
  var txt;
  var r = confirm("Your review will be deleted.Are you sure you want to delete your review? \n This action cannot be undone!.");
  if (r == true) {
    $.ajax({
      type:"POST",
      url:"requests/profile.php",
      data:{
        'delId':id
      },
      success:function(data){
        console.log(data);
        if (data==1) {
            $("#rev"+id).addClass('bg-danger');
           $("#rev"+id).fadeOut(100);
        }else{
          alert("Review was not deleted!");
        }
      }
    });
  } else {
    //
  }
  
  
}

</script>
</html>
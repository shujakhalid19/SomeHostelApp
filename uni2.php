<?php
session_start();
include('requests/core/company.class.php');
$comp= new Company();


$uni_det=$comp->uni_det($_GET['uni']);
print_r($uni_det);

if (isset($_SESSION['userImage'])) {
  $img= $_SESSION['userImage'];
  $name= $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="214371390847-b43rrru7vih0fsp4soofiacp0m9t5uev.apps.googleusercontent.com">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
          $('#google-input').html('<div id="signedIn" class="" style="width: 150px;height: 40px;display: flex;background-color: #FFF;box-shadow: 4px 4px 13px 1px #d4d4d4;"> <img src="'+image+'" style="width: 40px;height: 40px;border-radius: 50%;"> <div class="f-12 text-center" style="width: 100px;padding:10px 0px 0px 0px; ">'+name+'</div> </div>');

        }
        
        

   </script>

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

  
.gold{
  color: gold;
}



#blah {
    width:100%;
    height:250px;
    border: 1px solid #d4d4d4;
    object-fit: cover;
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
                    <li><a href="#" onclick="signOut();">Sign out</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">News</a></li>

                </ul>
                <script>
                      function signOut() {
                        var auth2 = gapi.auth2.getAuthInstance();
                        auth2.signOut().then(function () {
                          console.log('User signed out.');
                        });
                      }
                    </script>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- ..NAVBAR -->
    

<div class="container">

  <div class="row">
    <!-- height: 400px;background-image: url(https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg);background-repeat: no-repeat;background-size: 100% 100%; --><!-- col-md-offset-4 -->
       <div class="col-md-3 col-sm-4 col-xs-12">
           
            <img src="https://images.static-collegedunia.com/public/college_data/images/studyabroad/logos/college_791_31-19:37_1.png?tr=w-80,h-80,c-force" class="col-md-offset-4 col-xs-offset-4" style="width:80px;height:80px;object-fit: cover;" /> 
          
           
            <h4 class="b text-center"><?=$uni_det['uni_name'];?> asdasd</h4>  
           
           
             <ul class="list-group">
          
          <li class="list-group-item"><i class="fa fa-map-marker-alt"></i> <?=$uni_det['city'];?>,<?=$uni_det['country'];?></li>
          <li class="list-group-item"><i class="fa fa-university"></i> St.Petersburg</li>
          <li class="list-group-item"><i class="fa fa-home"></i> 14 Rooms</li>
          
        </ul>
        </div>

        <div class="col-md-9 col-sm-8 col-xs-12 bd">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#gallery">Gallery</a></li>
              <li><a data-toggle="tab" href="#menu1">Reviews</a></li>
              <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            </ul>

            <div class="tab-content">
              <div id="gallery" class="tab-pane fade in active">
                <!-- GALLERY -->

    <h2 class="b">Infrastructure
                   <button class="pull-right f-15 btn btn-success"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                        <i class="fa fa-plus"></i> Add More
                    </button>
                </h2>

<div class="col-md-3 col-sm-4 col-xs-12" style="padding: 0px;">
          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px;">
             
          
            <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width: 100%;height:200px;object-fit: cover;">
            <div class="f-22">  
              <h3 class="b">Lorem 1 ipsum sut amore dolor velloew</h3>
                <div class="f-22 pull-left">
                            <h5 class="b">Lorem 1 ipsum sut amore dolor velloew</h5>
                            <div class="f-12">
                                <strong>By Harsh Verma</strong> |<span style="opacity: 0.8;"> 2 Feb,2020 </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                            </div>
                        </div>
                            <div class="pull-right f-15" style="padding: 15px;">
                              <i class="fa fa-heart"></i> <span class="f-15">223k</span>

                            </div>
            </div>
          </div>  

          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px;">
             
          
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width: 100%;height:200px;object-fit: cover;">
            <div class="f-22">  
              <h3 class="b">Lorem 2 ipsum sut amore dolor velloew</h3>
               <div class="f-22 pull-left">
                            <h5 class="b">Lorem 1 ipsum sut amore dolor velloew</h5>
                            <div class="f-12">
                                <strong>By Harsh Verma</strong> |<span style="opacity: 0.8;"> 2 Feb,2020 </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                            </div>
                        </div>
                            <div class="pull-right f-15" style="padding: 15px;">
                              <i class="fa fa-heart"></i> <span class="f-15">223k</span>

                            </div>
            </div>
          </div>  

          
        </div>

        <div class="col-md-6 col-sm-8 col-xs-12" style="padding: 0px;">
          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px;">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <img src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
              style="width: 100%;height: 300px;object-fit: cover;">
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 f-22">  
              <h4 class="b">Lorem 3 ipsum sut amore dolor velloew</h4>
               <div class="f-22 pull-left">
                            <h5 class="b">Lorem 1 ipsum sut amore dolor velloew</h5>
                            <div class="f-12">
                                <strong>By Harsh Verma</strong> |<span style="opacity: 0.8;"> 2 Feb,2020 </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                            </div>
                        </div>
                            <div class="pull-right f-15" style="padding: 15px;">
                              <i class="fa fa-heart"></i> <span class="f-15">223k</span>

                            </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 50px;">
            <div class="col-md-12 col-sm-2 col-xs-12">
              <img src="https://images.unsplash.com/photo-1497034825429-c343d7c6a68f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
              style="width: 100%;height:150px;object-fit: cover;">
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 f-22">  
              <h4 class="b">Lorem 4 ipsum sut amore dolor velloew</h4>
               <div class="f-22 pull-left">
                            <h5 class="b">Lorem 1 ipsum sut amore dolor velloew</h5>
                            <div class="f-12">
                                <strong>By Harsh Verma</strong> |<span style="opacity: 0.8;"> 2 Feb,2020 </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                            </div>
                        </div>
                            <div class="pull-right f-15" style="padding: 15px;">
                              <i class="fa fa-heart"></i> <span class="f-15">223k</span>

                            </div>
            </div>
          </div>

          


          <div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 50px;">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
              style="width: 100%;height:150px;object-fit: cover;">
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12 f-22">  
              <h4 class="b">Lorem 5 ipsum sut amore dolor velloew</h4>
                <div class="f-22 pull-left">
                            <h5 class="b">Lorem 1 ipsum sut amore dolor velloew</h5>
                            <div class="f-12">
                                <strong>By Harsh Verma</strong> |<span style="opacity: 0.8;"> 2 Feb,2020 </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                            </div>
                        </div>
                            <div class="pull-right f-15" style="padding: 15px;">
                              <i class="fa fa-heart"></i> <span class="f-15">223k</span>

                            </div>
            </div>
          </div>



          
        </div>
                
             <div class="col-md-3 col-sm-4 col-xs-12" style="padding: 0px;">
          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 50px;">
             
          
            <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width: 100%;height:200px;object-fit: cover;">
            <div class="f-22">  
              <h3 class="b">Lorem 1 ipsum sut amore dolor velloew</h3>
               <div class="f-22 pull-left">
                            <h5 class="b">Lorem 1 ipsum sut amore dolor velloew</h5>
                            <div class="f-12">
                                <strong>By Harsh Verma</strong> |<span style="opacity: 0.8;"> 2 Feb,2020 </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                            </div>
                        </div>
                            <div class="pull-right f-15" style="padding: 15px;">
                              <i class="fa fa-heart"></i> <span class="f-15">223k</span>

                            </div>
            </div>
          </div>  

          <div class="col-md-12 col-sm-12 col-xs-2" style="margin-bottom: 50px;">
             
          
            <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width: 100%;height:200px;object-fit: cover;">
            <div class="f-22">  
              <h3 class="b">Lorem 2 ipsum sut amore dolor velloew</h3>
               <div class="f-22 pull-left">
                            <h5 class="b">Lorem 1 ipsum sut amore dolor velloew</h5>
                            <div class="f-12">
                                <strong>By Harsh Verma</strong> |<span style="opacity: 0.8;"> 2 Feb,2020 </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                            </div>
                        </div>
                            <div class="pull-right f-15" style="padding: 15px;">
                              <i class="fa fa-heart"></i> <span class="f-15">223k</span>

                            </div>
            </div>
          </div>  

          
        </div>











                <!-- //GALLERT -->
               

              </div>

<!--   
 -->

              <div id="menu1" class="tab-pane fade">
            
         

                <!-- REVIEWS -->
                   <div class="col-md-12 col-sm-12 col-xs-12 " style="padding: 0px;">
                    
                    <br/>
                    
                    
                    <?php
                      if (isset($name)) {
                    ?>
                              <h5 class="col-xs-12 col-sm-12 b">Write about your experience at St.Petersburg</h5>
                              <form id="uniReview">
                                
                              
                                <div class="col-md-1 col-sm-2 col-xs-3 text-right" style="padding: 10px;">
                                  <img  src="<?=$img;?>" style="width: 100%;height:50px;object-fit: cover;float: right;" />
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-9 bg" style="padding: 0px;">

                                <strong><?=$name;?></strong>
                                
                                <textarea id="review" class="form-control" placeholder="Write Here" name="review"></textarea>
                                <span id="errreview" class="hide f-12">Field cannot be left empty</span>


                                <div class="form-group" style="padding: 10px;">
                                  <input id="revnum" type="hidden" name="revnum" class="form-control" value="0">


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

                <div class="col-md-9 col-sm-12 col-xs-12  col-md-offset-1" style="padding: 0px;">
                  <?php

                    for($i=1;$i<=10;$i++){
                  ?>
                  <div class="col-md-12 col-sm-12 col-xs-12 bd-btm" style="margin-bottom: 30px;padding: 0px;">
                    <div class="col-md-1 col-sm-2 col-xs-2">
                      <img  src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width:50px;height:50px;object-fit: cover;border-radius: 50%;" />
                    </div>
                    <div class="col-md-11 col-sm-10 col-xs-10 text-left">
                      <h5 class="b">Shuja Khalid</h5>
                      <div class="rating f-12">
                        <span class="star rev1 gold" onclick="f1(1)">
                          <i class="fa fa-star"></i>
                        </span>
                        <span class="star rev2 gold" onclick="f1(2)">
                          <i class="fa fa-star"></i>
                        </span>
                        <span class="star rev3 gold" onclick="f1(3)">
                          <i class="fa fa-star"></i>
                        </span>
                        <span class="star rev4 gold" onclick="f1(4)">
                          <i class="fa fa-star"></i>
                        </span>
                        <span class="star rev5" onclick="f1(5)">
                          <i class="fa fa-star"></i>
                        </span>
                      </div>  
                    

                      
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <br/>
                      <p>Lorem iosun a das,das dasdasd sd asdasdasd  we wer we werwe r addasd asd asd   ghhtyhtyh rty rty rtyrty rty rty rtytryrty rt yr ty rt yrt yrtydas dasdasd sd asdasdasd  we wer we werwe r addasd asd asd   ghhtyhtyh rty rty rtyrty rty rty rtytryrty rt yr ty rt yrt yrtydas dasdasd sd asdasdasd  we wer we werwe r addasd asd asd   ghhtyhtyh rty rty rtyrty rty rty rtytryrty rt yr ty rt yrt yrty dasdasd sd asdasdasd  we wer we werwe r addasd asd asd   ghhtyhtyh rty rty rtyrty rty rty rtytryrty rt yr ty rt yrt yrty.</p>
                    </div>
                  </div>
                  <?php
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
        </div>




  </div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
      <label class="control-label " for="pwd">Upload image:</label>
        <div class="col-md-12" style="padding: 0px;">
          
        
            <div id="attach_img" class="col-md-10 col-xs-3">
                <div id="imgAt" style="width:50px;height:50px;background-color:#d4d4d4;text-align:center;padding-top:15px;" class="f-22" onclick="trigimage()"><i class="fa fa-image"></i></div>
            </div>
            <div style="position: absolute;margin:-2000px;">
              <input name="fileToUploadone" type="file" id="imgFileone" style="opacity:0;" />
            </div>



          </div>
        </div>



          <div class="form-group">
            <br/><br/><br/><br/>
            <label for="recipient-name" class="col-form-label">About this image:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            
            <label for="recipient-name" class="col-form-label">Category:</label>

            <input type="hidden" class="form-control" id="category">
            <button type="button" class="cat btn btn-default" data-hold="Infrastructure">Infrastructure</button>
            <button type="button" class="cat btn btn-default" data-hold="Events">Events</button>
            <button type="button" class="cat btn btn-default" data-hold="People">People</button>
          </div>
           
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Send message</button>
        </div>
          
        </form>
      </div>
    </div>
  </div>
</div>

</body>
<script type="text/javascript">
$(function(){
   var d = new Date();
   const uni=<?=$uni_det['id'];?>;
    $(".cat").click(function(){
      $(".cat").removeClass('active');
      $(this).addClass('active');
      $("#category").val($(this).attr('data-hold'));
    });


    $("#uniReview").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.
    if($("#review").val()==""){
      $("#errreview").removeClass('hide');
    }else if($("#revnum").val()=="" || $("#revnum").val()==0){
      $("#errrevnum").removeClass('hide');
    }else{
      $("#errreview").addClass('hide');
      $("#errrevnum").addClass('hide');
      var form = $(this);
      var url = 'requests/profile.php';

      $.ajax({
             type: "POST",
             url: url,
             data: form.serialize() + '&' + $.param({
                    'time': d.getTime(),
                    'uni':uni
                }), // serializes the form's elements.
             success: function(data)
             {
                 alert(data); // show response from the php script.
             }
           });

      }

    });



});


  function f1(x){


    $("#revnum").val(x);
    $('.star').removeClass('gold');
    for(var i=0;i<=x;i++){

      $('.rev'+i).addClass('gold');
    }
      
    
  }

  function save_user(id,name,image,email){
       $.ajax({
          type:"POST",
          url:"requests/login.php",
          data:{
            'id':id,
            'gogname':name,
            'image':image,
            'email':email
          },
          success:function(data){

          }
       });

  }


     function trigimage() {
      $("#imgFileone").trigger('click');
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();


            reader.onload = function(e) {
                $("#attach_img").removeClass('col-xs-3');
                //$('#blah').attr('src', e.target.result);
                $("#attach_img").html('<br/><img src="' + e.target.result + '" id="blah" alt="image not rendered"><div id="imgAt" style="display:inline-block;width:20px;height:50px;background-color:#fff;text-align:center;padding-top:15px;" class="f-15" onclick="trigimage()"><i class="fa fa-redo-alt"></i></div>');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }



    $("#imgFileone").change(function() {
        readURL(this);
    });
</script>
</html>
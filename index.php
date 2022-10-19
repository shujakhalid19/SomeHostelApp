
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
          $('#google-input').html('<div id="signedIn" class="" style="width: 150px;height: 50px;display: flex;background-color: #FFF;box-shadow: 4px 4px 13px 1px #d4d4d4;padding:5px;"> <img src="'+image+'" style="width: 40px;height: 40px;border-radius: 50%;"> <div class="f-12 text-center b text-muted" style="width: 100px;padding:10px 0px 0px 0px; ">'+name+'</div> </div>');

        }

       

   </script>

   <!-- <script src="https://apis.google.com/js/platform.js" async defer></script> -->

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

                            <div id="google-input" class="form-group">
                     
                     
                               <div class="g-signin2" data-width="150" data-height="50" data-onsuccess="onSignIn"></div>
                               
                               

                            </div>
                        </div>

                    </div>


                </form>
                <ul class="nav navbar-nav navbar-right navbar-nav-primary">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#"><a href="#" onclick="signOut();">Sign out</a></a></li>
                    <script>
                      function signOut() {
                        var auth2 = gapi.auth2.getAuthInstance();
                        auth2.signOut().then(function () {
                          console.log('User signed out.');
                        });
                      }
                    </script>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- ..NAVBAR -->
    

        <div class="container">

            <div class="row">

              <div class="jumbotron col-md-12 col-xs-12">
          
            <form class="col-md-6 col-xs-12 col-md-offset-3 bg-info"  style="background-color: #fff;height: 50px;padding: 0px;border-radius: 25px;">

              <div class="col-md-11 col-xs-10">
                <input id="search_bar" type="text" name="search" class="f-12" placeholder="Search for college,city or Hostel Name" style="width:100%;height:50px;border: none;display:inline;" autocomplete="off" >
              </div>
              <div class="col-md-1 col-xs-2 f-15 text-muted text-center" style="padding:15px 8px 0px 0px;">
                <i class="fa fa-search"></i>
              </div>

              
            </form>

            <div id="search_data" class="col-md-6 col-xs-12 col-md-offset-3">

                 
                 <div class="col-md-12 col-sm-6 col-xs-12 bd-btm bg-success" style="margin-bottom: 50px;">

                        <a href="#">
                            <h5 class="b ">hostels near St.Petersburg University</h5>
                        </a>
                        <div class="f-12">
                            <span style="opacity: 0.8;"> St.Petersburh,Russia </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                        </div>
                    
                    

                </div>
            </div>
          
        </div>



        <!-- <div class="col-md-12" >
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  Indicators
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  Wrapper for slides
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://cdn.pixabay.com/photo/2015/09/01/09/32/banner-916673__340.jpg" alt="Los Angeles"style="width: 100%; height: 200px;">
    </div>

    <div class="item">
      <img src="https://www.w3schools.com/bootstrap/chicago.jpg" alt="Chicago"style="width: 100%; height: 200px;object-fit: cover;">
    </div>

    <div class="item">
      <img src="https://cdn.pixabay.com/photo/2019/04/21/21/29/pattern-4145023__340.jpg" alt="New York"style="width: 100%; height: 200px;">
    </div>

  </div>

  Left and right controls
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br/><br/>
        </div> -->


        

        <div class=" col-md-12 col-xs-12">
                  
              
                  <label class="f-12" style="display: flex;">Search Hostels by <button class="btn btn-md btn-secondary">
                    College Name
                  </button></label>
                  
                  <input type="text" class="form-control" class="col-md-10 col-xs-10" id="recipient-name">
                  
              

            <div id="search_data" class="col-md-6 col-xs-12 col-md-offset-3">

                 
                 <div class="col-md-12 col-sm-6 col-xs-12 bd-btm bg-success" style="margin-bottom: 50px;">

                        <a href="#">
                            <h5 class="b ">hostels near St.Petersburg University</h5>
                        </a>
                        <div class="f-12">
                            <span style="opacity: 0.8;"> St.Petersburh,Russia </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                        </div>
                    
                    

                </div>
            </div>
          
        </div>

            <div class="jumbotron col-md-12 col-xs-12">

                <div class="card-hero ">
                  <div class="col-md-5 col-sm-3 col-xs-12" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width:100%;height: 350px;object-fit: cover;">
                    </div>
                    <div class="col-md-7 col-sm-9 col-xs-12">
                        
                        <h2 class="b">Name</h2>


                            <div class="col-md-7 col-xs-7 f-15" style="padding: 0px;">
                              
                              <i class="fa fa-map-marker-alt"></i> St.Petersburg,Russia
                              
                                
                            </div>
                            <div class="col-md-5 col-xs-5" style="padding: 0px;">
                              
                                <span class="score">
                                <div class="score-wrap">
                                    
                                <span class="stars-active" style="width:100%;">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </span>
                            </div>


                        <div class="col-md-12 f-15 b" style="padding:0px;">
                            1km From St. Petersburg University
                        </div>

                        <div class="col-md-12 f-15" style="padding:0px;">
                          <br/>
                          Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,
                          <br/><br/>
Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,<br/><br/>
                        </div>

                        <button class="pull-right btn btn-md btn-primary">
                          View More <i class="fa fa-arrow-right"></i>
                        </button>
                            

                    </div>
                </div>




            </div>


               <div class="col-md-12 col-xs-12">
                <h1 class="b">
                    Popular
                </h1>
                   
               

                <div class="card-3 col-md-3 col-xs-12">
                    

                    <div class="col-md-12 col-sm-3 col-xs-12" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width:100%;height: 150px;object-fit: cover;">
                    </div>

                   <div class="col-md-12 col-sm-9 col-xs-12 f-22" style="padding: 0px;">
                        
                        <h4 class="b">Name</h4>

                        <div class="col-md-12 f-12 bg-red" style="padding:0px;">
                            1km From St. Petersburg University
                            
                            
                            
                        </div>

                            <div class="col-md-7 col-xs-7 f-12" style="padding: 0px;">
                              <br/>
                              <i class="fa fa-map-marker-alt"></i> St.Petersburg,Russia
                              
                                
                            </div>
                            <div class="col-md-5 col-xs-5" style="padding: 0px;">
                              <br/>
                                <span class="score">
                                <div class="score-wrap">
                                    
                                <span class="stars-active" style="width:100%;">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </span>
                            </div>
                            

                    </div>

                </div>


                 <div class="card-3 col-md-3 col-xs-12">
                    

                    <div class="col-md-12 col-sm-3 col-xs-12" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width:100%;height: 150px;object-fit: cover;">
                    </div>

                   <div class="col-md-12 col-sm-9 col-xs-12 f-22" style="padding: 0px;">
                        
                        <h4 class="b">Name</h4>

                        <div class="col-md-12 f-12 bg-red" style="padding:0px;">
                            1km From St. Petersburg University
                            
                            
                            
                        </div>

                            <div class="col-md-7 col-xs-7 f-12" style="padding: 0px;">
                              <br/>
                              <i class="fa fa-map-marker-alt"></i> St.Petersburg,Russia
                              
                                
                            </div>
                            <div class="col-md-5 col-xs-5" style="padding: 0px;">
                              <br/>
                                <span class="score">
                                <div class="score-wrap">
                                    
                                <span class="stars-active" style="width:100%;">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </span>
                            </div>
                            

                    </div>

                </div>

                 <div class="card-3 col-md-3 col-xs-12">
                    

                    <div class="col-md-12 col-sm-3 col-xs-12" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width:100%;height: 150px;object-fit: cover;">
                    </div>

                   <div class="col-md-12 col-sm-9 col-xs-12 f-22" style="padding: 0px;">
                        
                        <h4 class="b">Name</h4>

                        <div class="col-md-12 f-12 bg-red" style="padding:0px;">
                            1km From St. Petersburg University
                            
                            
                            
                        </div>

                            <div class="col-md-7 col-xs-7 f-12" style="padding: 0px;">
                              <br/>
                              <i class="fa fa-map-marker-alt"></i> St.Petersburg,Russia
                              
                                
                            </div>
                            <div class="col-md-5 col-xs-5" style="padding: 0px;">
                              <br/>
                                <span class="score">
                                <div class="score-wrap">
                                    
                                <span class="stars-active" style="width:100%;">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </span>
                            </div>
                            

                    </div>

                </div>

</div>








          <!-- Top HOSHOS -->
                   <div class="col-md-8 col-xs-12 bg-grey" style="margin-top: 50px;">
                <h2 class="b">
                    Popular
                </h2>
                   
               

                <div class="card-2 col-md-5 col-xs-12">
                    

                    <div class="col-md-12 col-sm-3 col-xs-12" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width:100%;height: 150px;object-fit: cover;">
                    </div>

                   <div class="col-md-12 col-sm-9 col-xs-12 f-22" style="padding: 0px;">
                        
                        <h4 class="b">Name</h4>

                        <div class="col-md-12 f-12 bg-red" style="padding:0px;">
                            1km From St. Petersburg University
                            
                            
                            
                        </div>

                            <div class="col-md-7 col-xs-7 f-12" style="padding: 0px;">
                              <br/>
                              <i class="fa fa-map-marker-alt"></i> St.Petersburg,Russia
                              
                                
                            </div>
                            <div class="col-md-5 col-xs-5" style="padding: 0px;">
                              <br/>
                                <span class="score">
                                <div class="score-wrap">
                                    
                                <span class="stars-active" style="width:100%;">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </span>
                            </div>
                            

                    </div>

                </div>


                 <div class="card-2 col-md-5 col-xs-12">
                    

                    <div class="col-md-12 col-sm-3 col-xs-12" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width:100%;height: 150px;object-fit: cover;">
                    </div>

                   <div class="col-md-12 col-sm-9 col-xs-12 f-22" style="padding: 0px;">
                        
                        <h4 class="b">Name</h4>

                        <div class="col-md-12 f-12 bg-red" style="padding:0px;">
                            1km From St. Petersburg University
                            
                            
                            
                        </div>

                            <div class="col-md-7 col-xs-7 f-12" style="padding: 0px;">
                              <br/>
                              <i class="fa fa-map-marker-alt"></i> St.Petersburg,Russia
                              
                                
                            </div>
                            <div class="col-md-5 col-xs-5" style="padding: 0px;">
                              <br/>
                                <span class="score">
                                <div class="score-wrap">
                                    
                                <span class="stars-active" style="width:100%;">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </span>
                            </div>
                            

                    </div>

                </div>

                 <div class="card-2 col-md-5 col-xs-12">
                    

                    <div class="col-md-12 col-sm-3 col-xs-12" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width:100%;height: 150px;object-fit: cover;">
                    </div>

                   <div class="col-md-12 col-sm-9 col-xs-12 f-22" style="padding: 0px;">
                        
                        <h4 class="b">Name</h4>

                        <div class="col-md-12 f-12 bg-red" style="padding:0px;">
                            1km From St. Petersburg University
                            
                            
                            
                        </div>

                            <div class="col-md-7 col-xs-7 f-12" style="padding: 0px;">
                              <br/>
                              <i class="fa fa-map-marker-alt"></i> St.Petersburg,Russia
                              
                                
                            </div>
                            <div class="col-md-5 col-xs-5" style="padding: 0px;">
                              <br/>
                                <span class="score">
                                <div class="score-wrap">
                                    
                                <span class="stars-active" style="width:100%;">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </span>
                            </div>
                            

                    </div>

                </div>

                <div class="card-2 col-md-5 col-xs-12">
                    

                    <div class="col-md-12 col-sm-3 col-xs-12" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width:100%;height: 150px;object-fit: cover;">
                    </div>

                   <div class="col-md-12 col-sm-9 col-xs-12 f-22" style="padding: 0px;">
                        
                        <h4 class="b">Name</h4>

                        <div class="col-md-12 f-12 bg-red" style="padding:0px;">
                            1km From St. Petersburg University
                            
                            
                            
                        </div>

                            <div class="col-md-7 col-xs-7 f-12" style="padding: 0px;">
                              <br/>
                              <i class="fa fa-map-marker-alt"></i> St.Petersburg,Russia
                              
                                
                            </div>
                            <div class="col-md-5 col-xs-5" style="padding: 0px;">
                              <br/>
                                <span class="score">
                                <div class="score-wrap">
                                    
                                <span class="stars-active" style="width:100%;">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </span>
                                </div>
                                </span>
                            </div>
                            

                    </div>

                </div>

</div>
<!-- //TOP HOSBSIN -->





          <!-- Top HOSHOS -->
                   <div class="col-md-4 col-xs-12" style="margin-top: 50px;">
                <h3 class="b">
                    Popular
                </h3>
                  <div class="col-md-12 col-sm-6 col-xs-12 bd-btm" style="margin-bottom: 50px;">

                    <div class="col-md-3 col-sm-3 col-xs-4" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width: 100%;height: 80px;object-fit: cover;">
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-8 f-22 ">
                        <a href="#">
                            <h5 class="b ">St.Petersburg University</h5>
                        </a>
                        <div class="f-12">
                            <span style="opacity: 0.8;"> St.Petersburh,Russia </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                        </div>
                    </div>
                    

                </div>
                <div class="col-md-12 col-sm-6 col-xs-12 bd-btm" style="margin-bottom: 50px;">

                    <div class="col-md-3 col-sm-3 col-xs-4" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width: 100%;height: 80px;object-fit: cover;">
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-8 f-22 ">
                        <a href="#">
                            <h5 class="b ">St.Petersburg University</h5>
                        </a>
                        <div class="f-12">
                            <span style="opacity: 0.8;"> St.Petersburh,Russia </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                        </div>
                    </div>
                    

                </div>
                <div class="col-md-12 col-sm-6 col-xs-12 bd-btm" style="margin-bottom: 50px;">

                    <div class="col-md-3 col-sm-3 col-xs-4" style="padding: 0px;">
                        <img src="https://cdn.pixabay.com/photo/2015/09/09/19/56/office-932926__340.jpg" style="width: 100%;height: 80px;object-fit: cover;">
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-8 f-22 ">
                        <a href="#">
                            <h5 class="b ">St.Petersburg University</h5>
                        </a>
                        <div class="f-12">
                            <span style="opacity: 0.8;"> St.Petersburh,Russia </span>|<span style="opacity: 0.8;"> 2600 Views</span>
                        </div>
                    </div>
                    

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
<script type="text/javascript">
  $(function(){

     $("#search_bar").focus();
    $("#search_bar").on('keyup',function(){
        //alert($(this).val());
        var x = this.value.length;

        if(x>=3){
            //send req

            $.ajax({
              type:"POST",
              url:"requests/company.php",
              data:{
                'search_data':this.value
              },
              success:function(data){
                var res=JSON.parse(data);
                //console.log(res[0]['near_uni']);
                $("#search_data").html('');
                $.each(res,function(key,index){
                  console.log(index.near_uni);
                  $("#search_data").append('<div class="col-md-12 col-sm-6 col-xs-12 bd-btm bg-success" style="margin-bottom:20px;"> <a href="result.php?uni='+index['near_uni']+'"> <h5 class="b ">hostels near '+index['near_uni']+' University</h5> </a> <div class="f-12"> <span style="opacity: 0.8;"> '+index['city']+','+index['country']+' </span>|<span style="opacity: 0.8;"> 2600 Views</span> </div> </div>');
                });
                
              }
            });


        }else{

        }


    });
  });

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
</script>

</html>
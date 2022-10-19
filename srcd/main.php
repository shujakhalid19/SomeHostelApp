<?php
    if(!isset($_GET['b'])){
        header('Location:404.php');
    }

    include('../requests/core/company.class.php');
$comp= new Company();

$host=$_GET['b'];
//echo $host;


$det=$comp->host_det($host);
//print_r($det);
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
            <div id="mySidenav" class="sidenav bd">
                <div class="col-xs-12 col-sm-12 col-md-12 bg-lav" style="height:auto;">
                    <a href="javascript: window.history.back();" class="closebtn "><i class="fa fa-arrow-left"></i> &nbsp;&nbsp;Reviews</a>              
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 md-top-20 pd-10">
                      
                            
                            <div class="col-xs-12 col-sm-12 col-md-3 pd-5">
                                <span class="f-32 pd-5 bg-success b">4.5</span>   
                                
                                <div class="f-22 b md-top-10">Awesome</div>
                                
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9 md-top-10">

                                <div class="rating">
                                    <strong class="f-15">Okay</strong>
                                    <div class="progress" style="background-color:#fff;border:1px solid #888;height:5px;">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:20%;height:5px;">

                                      </div>
                                    </div>
                                </div>

                                <div class="rating">
                                    <strong class="f-15">Good</strong>
                                   <div class="progress" style="background-color:#fff;border:1px solid #888;height:5px;">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:40%;height:8px;">

                                      </div>
                                    </div>
                                </div>

                                <div class="rating">
                                    <strong class="f-15">Awesome</strong>
                                   <div class="progress" style="background-color:#fff;border:1px solid #888;height:5px;">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:80%;height:8px;">

                                      </div>
                                    </div>
                                </div>

                                <div class="rating">
                                    <strong class="f-15">Perfect</strong>
                                    <div class="progress" style="background-color:#fff;border:1px solid #888;height:5px;">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:20%;height:8px;">

                                      </div>
                                    </div>
                                </div>


                            </div>
               <?php
                    for($i=0;$i<=6;$i++){
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 md-top-40 bd" style="padding:5px;">
                        <div class="col-xs-12 col-md-3" style="padding:0px;">
                            <div class="col-xs-12 b text-center">
                                <i class="fa  f-32 fa-user-circle"></i>
                                <div class="md-top-20">Anonymous123</div>
                            </div>
                            
                        </div>    
                        <div class="col-xs-12 col-md-9 md-top-10">
                            <div class="col-xs-12">
                                <span class="pd-5 b f-22 bg-success">4.2</span>
                                <span class="b f-15 cl-blue">Awesome</span>
                            </div>
                            <div class="col-xs-12 md-top-20">
                                <b>Note: Load these reviews via ajax request.</b> <br/>Almost perfect for the money. It has everything you may need, it would be a perfect 10/10 if the common kitchen area was bigger (it's small for such a big hostel) and better equipped with more cutlery and cups. Otherwise one of the best hostels I've been to and the price is more than fair.
                            </div>
                                
                            
                        </div>
                    </div>
                         <?php
                            }
                        ?>
                           
                        
                </div>
                
  <!--<a href="javascript: window.history.back();" class="closebtn">&times;</a>-->

</div>

    
 <div class="header container-fluid pd-5" style="width:100%;z-index:+999999;background-color:rgba(0,0,0,0);color:#fff;position:absolute;">
        <div class="f-22 pull-left b pd-10">Logo</div>
        <div class="pull-right pd-10" style="display:flex;">
            
            <span class="b visible-lg visible-md visible-sm" style="font-size:15px;margin:0px 20px 0px 10px;"><a href="../home.php">Log In</a></span>
            
            <a href="#madal">
                <span class="b" style="font-size:15px; border:3px solid cornflowerblue;padding:10px;margin-right:10px;">Start Selling</span>
            </a>
            
        </div>
    </div>
    
    
    
    <div class="container-fluid">
        
        <div class="row">
            
            <div class="col-xs-12 col-md-12" style="padding:0px;color:#fff;">
                <img src="https://images.unsplash.com/photo-1523908511403-7fc7b25592f4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:400px;object-fit:cover;" />
            </div>
            
        </div>
    
    </div>
    
    <div class="container">
        <div class="row">
            
            
               <div class="col-xs-12 col-sm-12 col-md-12">
                <br />
                <h2 class="b"><?=$det['name'];?></h2>
                
                <span class="b bg-success f-15 pd-5"><?=$det['type'];?></span>
                
                   
                <h4 class="cl-blue"><br /> <i class="fa fa-map-marker-alt"></i> <?=$det['city'];?>,<?=$det['country'];?></h4>
           <br />
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0px;">
                    <h5 class="b">Overview</h5>    
                    <p class="f-15" style="color:#a3a3a3;font-weight:400;">
                        London’s top attractions and landmarks are on the doorstep of this fully refurbished 18th Century Georgian building with chic lounges, large café/bar and comfortable beds. Groups, families and backpackers alike will love this popular London hostel for its quality, friendly service and competitive prices. Only 500m from Elephant & Castle tube station the hostel is ideal for guests who prefer to spend their time enjoying the sights rather than travelling to them. Many of London’s most popular landmarks.
                    </p>
               </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 md-top-30">
                          
                
                <div class="col-xs-12 col-sm-12 col-md-3" style="padding:0px;">
                    
                 
                
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <h4>
                                Reviews And Ratings

                            </h4>
                            
                            <div class="col-xs-2 col-sm-12 col-md-12" style="padding:0px;">
                                <span class="f-32 b">4.5</span>   
                            </div>
                            <div class="col-xs-10 col-sm-12 col-md-12 md-top-0" style="padding:0px;">

                                <div class="rating">
                                    <strong class="f-15">Okay</strong>
                                    <div class="progress" style="background-color:#fff;border:1px solid #888;height:8px;">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:20%;height:8px;">

                                      </div>
                                    </div>
                                </div>

                                <div class="rating">
                                    <strong class="f-15">Good</strong>
                                   <div class="progress" style="background-color:#fff;border:1px solid #888;height:8px;">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:40%;height:8px;">

                                      </div>
                                    </div>
                                </div>

                                <div class="rating">
                                    <strong class="f-15">Awesome</strong>
                                   <div class="progress" style="background-color:#fff;border:1px solid #888;height:8px;">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:80%;height:8px;">

                                      </div>
                                    </div>
                                </div>

                                <div class="rating">
                                    <strong class="f-15">Perfect</strong>
                                    <div class="progress" style="background-color:#fff;border:1px solid #888;height:8px;">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                      aria-valuemin="0" aria-valuemax="100" style="width:20%;height:8px;">

                                      </div>
                                    </div>
                                </div>


                            </div>
                            
                            <div class="col-xs-12 pd-5">
                                <a href="#modal"><span class="cl-blue bd-blue b">Read All Reviews</span></a>
                                
                            </div>

                        </div>
                    
                    
                        <div class="col-xs-12 col-md-12 md-top-30">
                        <?php
                          if($det['facilities']!='no'){
                            ?>
                            <h4 class="b">Facilities</h4>
                            <ul class="list-group f-15">
                          <?php


                            $faci=explode("#", $det['facilities']);
                            foreach ($faci as $f) {
                              if($f==""){}else{
                          ?>
                            
                            
                                <li class="list-group-item"><?=$f;?></li>
                            <?php
                              }
                            }

                          }

                        ?>
</ul>
                        </div>
                    
                    <div class="col-xs-12 col-md-12 bg-grey bd md-top-30">
                    
                            <h5 class="b">Cancellation Policies
                                <a href="#" class="f-12 pull-right cl-blue" >View All <i class="fa fa-arrow-right"></i></a>
                            </h5>
                            
                        </div>
                
                </div>
                
                
                <!--ROOMS-->
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <div id="shared">
                        <div class="b f-22">Shared Rooms</div>
                        <div class="f-12">*Prices listed are per bed per night</div>
                        <div id="SharedRooms">
                       
                       </div> 
                    </div>
                    <div id="private" class="col-xs-12 md-top-40" style="padding:0px;">
                        <div class="b f-22">Private Rooms</div>
                        <div class="f-12">*Prices listed are per bed per night</div>
                        <div id="PrivateRooms"></div>
                    </div>
                </div>
                
                <!--//ROOMS-->
            <!--CHECKOUT-->
                 <div class="col-xs-12 col-sm-12 col-md-4">
                     <div class="col-xs-12 col-sm-12 col-md-12 b f-22" style="padding:0px;">My Room</div>
                     <div class="col-xs-12 col-sm-12 col-md-12 bg-lav bd md-top-10">
                         <div class="col-xs-12 col-sm-12 col-md-12 md-top-10">
                             <h5><i class="fa fa-calendar"></i> <span id="inDate"></span> - <span id="outDate"></span>
                                <span class="pull-right"><i class="fa fa-users"></i> 1 Guest</span>    
                             </h5>
                            
      
  

                         </div>
                         
                         <div class="col-xs-12 col-sm-12 col-md-12 md-top-10">
                            <h5 class="cl-blue b"><i class="fa fa-edit"></i> Edit requirements</h5>
                         </div>
                            
                         
                     </div>
                     
                        <div class="col-xs-12 col-sm-12 col-md-12 bg-lav hide bd md-top-10 pd-5">
                            <div class="col-xs-12 col-sm-12 col-md-12 pd-5">
                                <h4 class="pull-left b">Edit Requirements</h4>
                                <span class="pull-right f-22">&times;</span>
                            </div>
                           <div class="col-xs-12 col-sm-12 col-md-6 md-top-10 pd-5">
                               
                             <div class="form-group">
                                 <label>Check-in</label>
                                <!--<input type='text' class="form-control" id='datetimepicker1' />-->
                                 <input type='date' class="form-control" onChange="setDate(this,&apos;inDate&apos;)" />
                             </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 md-top-10 pd-5">
                             <div class="form-group">
                                 <label>Check-out</label>
                                <input type='date' class="form-control"  onChange="setDate(this,&apos;outDate&apos;)" />
                             </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 md-top-0 pd-5">
                             <div class="form-group">
                                 <label>Guests</label>
                                <select class="form-control">
                                    <?php
                                        for($i=1;$i<=10;$i++){
                                    ?>
                                        <option><?=$i;?></option>
                                    <?php
                                        }
                                    ?>
                                 </select>
                             </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 md-top-20 pd-10">
                             <div class="form-group">
                             <button class="btn btn-md form-control btn-success">Save</button>
                             </div>
                            </div>
                        </div>
                     
                     <div class="col-xs-12 col-sm-12 col-md-12 bd md-top-0 pd-10">
                        <h5 class="b">Basic Shared 12 Bed Room
                            <span class="pull-right"><i class="fa fa-trash-alt"></i></span>
                         </h5>
                         <div class="md-top-20">
                            <span class="bg-danger bd pd-10">6 Beds Left!</span>
                         </div>
                         <br/>
                         <div class="md-top-10">
                             <span class="b text-primary">Reservation Cost</span>
                             <span class="b text-muted pull-right">Rs 120</span>
                         </div>
                         
                         <div class="md-top-10">
                             <span class="b text-primary">Hostel Cost</span>
                             <span class="b text-muted pull-right">Rs 440</span>
                             <div class="f-12 text-muted md-top-10"><i class="fa fa-info-circle"></i> Hostel Cost is according to bed per night and is payable when you reach the hostel.</div>
                         </div>
                         <div class="md-top-10">
                             <span class="b text-primary">Rs 120 x 2 Guests</span>
                             <span class="b text-muted pull-right">Rs 240</span>
                         </div>
                         
                     </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 bd md-top-0 pd-10">
                        <h5 class="b">Basic Shared 12 Bed Room
                            <span class="pull-right"><i class="fa fa-trash-alt"></i></span>
                         </h5>
                         <div class="md-top-20">
                            <span class="bg-danger  bd pd-10">6 Beds Left!</span>
                         </div>
                         <br/>
                         <div class="md-top-10">
                             <span class="b text-primary">Reservation Cost</span>
                             <span class="b text-muted pull-right">Rs 120</span>
                         </div>
                         
                         <div class="md-top-10">
                             <span class="b text-primary">Hostel Cost</span>
                             <span class="b text-muted pull-right">Rs 440</span>
                             <div class="f-12 text-muted md-top-10"><i class="fa fa-info-circle"></i> Hostel Cost is according to bed per night and is payable when you reach the hostel.</div>
                         </div>
                         <div class="md-top-10">
                             <span class="b text-primary">Rs 120 x 2 Guests</span>
                             <span class="b text-muted pull-right">Rs 240</span>
                         </div>
                         
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 bd bg-success md-top-0 pd-10">
                        <h4 class="">Payable Now
                            <span class="b pull-right">Rs 480</span>
                         </h4>
                         
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12 md-top-10">
                        <div class="form-group">
                            <button class="btn btn-md btn-success form-control" style="height:40px;">Reserve</button>
                         </div> 
                     </div>
                        
                     
                </div>
            <!--//CHECKOUT-->
         
            </div>
        </div>
        

<!-- Use any element to open the sidenav -->


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

        
    
    </div>
    
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js" integrity="sha512-Izh34nqeeR7/nwthfeE0SI3c8uhFSnqxV0sI9TvTcXiFJkMd6fB644O64BRq2P/LA/+7eRvCw4GmLsXksyTHBg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous"></script>
    <script>
        const listingId=btoa(<?=$det['id'];?>);
        const sellerId=<?=$det['seller_id'];?>;
                          //console.log(sellerId);
        $(function(){
        /*    var day1 = moment();
var day2 = moment().add(1,'days');
var result = [moment({...day2})];

while(day1.date() != day2.date()){
  day2.add(1, 'day');
  result.push(moment({ ...day2 }));  
}
console.log(result.map(x => x.format("YYYY-MM-DD")));*/
            
            
            
            $("#dateIn").on('change', function(){
                
            })
            
            var day1=moment();
            var day2=moment().add(3, 'days');
            
            var enumerateDaysBetweenDates = function(startDate, endDate) {
    //var dates = [];
                var dates=[];

    var currDate = moment(startDate).startOf('day');
    var lastDate = moment(endDate).startOf('day');

    while(currDate.add(1, 'days').diff(lastDate) < 0) {
        //dates.push(currDate.clone().toDate());
          dates.push(moment(currDate));  
    }

    return dates;
};

            //console.log(enumerateDaysBetweenDates(day1,day2).map(x => x.format("YYYY-MM-DD"))[0]);
            console.log(enumerateDaysBetweenDates(day1,day2).length);
                /*$.each(enumerateDaysBetweenDates(day1,day2),function(key,ind){
                        console.log(ind.format("YYYY-MM-DD"))
                     })*/
                var x='2020-10-06';
               $('#datetimepicker1').datetimepicker({
                 //defaultDate: new Date(),
                 enabledDates: [
                     //for(i=0;i<=enumerateDaysBetweenDates(day1,day2).length,i++){
                     $.each(enumerateDaysBetweenDates(day1,day2),function(k,x){
                        x.format("YYYY-MM-DD")
                     })
                        //enumerateDaysBetweenDates(day1,day2).map(x => x.format("YYYY-MM-DD"))[0]
                 ]
             });
            console.log(listingId);
            $.ajax({
                type:'POST',
                url:'../requests/profile.php',
                data:{
                    hostId:listingId,
                    sellerId:sellerId,
                    getRooms:true
                },
                success:function(data){
                    var resp=JSON.parse(data);
                    console.warn(resp);
                    //console.warn(data);
                     if(!resp.state){
                      $(".msgRoom").removeClass('hide').addClass('alert-danger').text("Please fill the required fields");
                  }else{
                      $(".msgRoom").removeClass('hide').addClass('alert-success').text("New Room Saved");
                      
                       
                       
                      let html='';
                      var bType='';
                    $.each(resp.results,function(key,val){
                      (val.roomType==1)? elemId='PrivateRooms' : elemId='SharedRooms';
                       (val.grade==1)? (val.grade="Standard", bType="Private") : (val.grade="Basic", bType="Shared");
                        console.log(val);
                        console.log(resp.grade)
                        html='<div class="col-xs-12 col-md-12 md-top-20 pd-10 bd" data-toggle="collapse" data-target="#demo'+key+'"> <div class="b f-15"> <span class="caret"></span>'+val.roomName+' <div class="f-22 pull-right">$'+val.bPrice+'</div> </div> </div> <div class="collapse col-xs-12 col=-sm-12 col-md-12 bg-success" id="demo'+key+'"> <div class="col-xs-12 col-sm-12 col-md 12"> <div class="col-md-4 col-sm-3 col-xs-6"> <br /> <div class="b"><i class="fa fa-bed"></i> Beds</div> <div class="b" style="color:#999;">'+val.beds+' Beds</div> </div> <div class="col-md-4 col-sm-3 col-xs-6"> <br /> <div class="b"><i class="fa fa-star"></i> Grade</div> <div class="b" style="color:#999;">'+val.grade+'</div> </div><div class="col-md-4 col-sm-3 col-xs-6"> <br /> <div class="b"><i class="fa fa-bath"></i> Bathroom</div> <div class="b" style="color:#999;">'+bType+' Bathroom</div> </div><div class="col-md-12 col-sm-3 col-xs-6"> <br /> <div class="b">Average Cost per night</div> <div class="b" style="color:#999;">$'+val.price+'</div> </div>  </div> <div class="col-xs-12 col-sm-12 col-md-12  pd-10 md-top-20"> <Button class="btn btn-success btn-md pull-right" onClick="reserveNow('+val.id+')"> Reserve</Button> </div> </div>'
                        $('#'+elemId).append(html);
                    })

                        
                      
                  }
                }
            });
        })
    </script>
      <script>
          
    function reserveNow(id){
        $.ajax({
            type:"POST",
            url:'../requests/purchase.php',
            data:{
                roomId:id,
                hostId:listingId,
                reserve:true
            },
            success:function(data){
                var resp=JSON.parse(data);
                alert(resp)
            }
        })
    }
          
          history.pushState("", document.title, window.location.pathname+ window.location.search);
          
           //if (window.history && window.history.pushState) {
          if (window.history.pushState) {
                var flag=true;           
                $(window).on('popstate', function () {
                    (flag) ? openNav() : closeNav();
                    flag=!flag;
                });
            }
          
          
       function myFunction(x,call) {
          if (x.matches) { // If media query matches
               var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                call(width);
          } else {
                call('md');
          }
        }

      var x = window.matchMedia("(max-width: 700px)");
          
      function openNav() {
          myFunction(x,function(size){
                  
                  if(size=='md'){
                    document.getElementById("mySidenav").style.width = "550px";
                  }else{
                      document.getElementById("mySidenav").style.width = size+"px";            
                  }
                
              });
          
          $('body').css('overflow','hidden');
      
              
      }

/* Set the width of the side navigation to 0 */
    function closeNav() {
        $('body').css('overflow','auto');
        $('body').css('position','static');
        document.getElementById("mySidenav").style.width = "0";
    }
          
          function setDate(date,id){
                checkDate(date.value)
                var s=moment(date.value).format('ll');
                alert(s);
                $('#'+id).text(s);
          }
          
          function checkDate(date){
              var date = moment(date)
                var now = moment();

                if (now > date) {
                   // date is past
                    alert('Past');
                } else {
                   // date is future
                    alert('Future');
                }
          }
          
          
        </script>
</html>
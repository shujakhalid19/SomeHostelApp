<?php
session_start();
include('requests/core/company.class.php');
$comp= new Company();

//echo $_SESSION['sel_userId'];
$seller_det=$comp->seller_data($_SESSION['sel_userId'])[$_POST['id']];



?>

<div class="col-xs-12 col-md-12" style="background-color:#e6e6fa51 ; height:50px;padding:10px;margin-bottom:20px;">asd</div>

<div class="tab-content">
                  <div id="home" class="tab-pane fade in active">
                       <h3 class="b bd-rt-blue" style="margin-bottom: 30px;"><?=$seller_det['name'];?>
                        <div class="dropdown pull-right">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span style="font-size:12px;">My Hostels </span>
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                          <?php
                          $i=0;
                            foreach($_POST['data'] as $d){
                                ?>
                            <li class="" onclick="seller_pro(<?=$i;?>);"><a href="#"><?=$d['name'];?></a></li>
                          <?php
                                $i++;
                            }
                          ?>
                          
                          

                      </ul>
                    </div>
                    
                    </h3>
                
                  
<div id="cards" class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="card-6 col-md-2 col-sm-4 col-xs-12 btn-pill" style="background-color:rgba(124,124,124,0.1);color:#000;">
                           <div class="card text-center">
                              <div class="card-header">
                                <h2 class="b">522</h2>
                                  
                              </div>
                              <div class="card-body" style="padding-top:2px;">
                                
                                <h5 class="card-title"> Visitors This Month</h5>
                                <br/>
                                
                              </div>
                              
                            </div>
                        </div>

   <div class="card-6 col-md-2 col-sm-4 col-xs-12 btn-pill" style="background-color:rgba(124,124,124,0.1);color:#000;">
                           <div class="card text-center">
                              <div class="card-header">
                                  
                                <h3 class="b">522</h3>  
                                  
                              </div>
                              <div class="card-body" style="padding-top:2px;">
                                
                                <h5 class="card-title"> Visitors This Month</h5>
                                <br/>
                                
                              </div>
                              
                            </div>
                        </div>
                        

    
    
 <div class="card-6 col-md-2 col-sm-4 col-xs-12 btn-pill" style="background-color:rgba(124,124,124,0.1);color:#000;">
                           <div class="card text-center">
                              <div class="card-header">
                                  
                                <h3 class="b">522</h3>  
                                  
                              </div>
                              <div class="card-body" style="padding-top:2px;">
                                
                                <h5 class="card-title"> Visitors This Month</h5>
                                <br/>
                                
                              </div>
                              
                            </div>
                        </div>
     </div>
    <div class="card-6 col-md-3 col-sm-4 col-xs-12" style="padding:0px;">
<a href="new.php" class="list-group-item list-group-item-action flex-column align-items-start ">
                              <div class="card text-center" style="border-radius:14px!important;">
                              <div class="card-header">
                                <img src="https://image.freepik.com/free-vector/add-notes-concept-illustration_114360-2496.jpg" style="width:100%;height:140px;object-fit: contain;">
                              </div>
                              <div class="card-body">
                                <h3 class="card-title b"> Add New Listing</h3>
                                <p class="card-text f-10">Create an new listing in just 3 simple steps.</p>
                                
                              </div>
                                  <button class="btn btn-primary btn-md btn-pill" onclisk="alert('asdasd)"><i class="fa fa-plus"></i> Start here</button>
                              
                            </div>
                                  </a>
                        </div>


 

    
  

    

        <div class="card-6 col-md-5 col-sm-4 col-xs-12 list-group-item">
            
                <div class="card-header" style="padding:0px;">
                                  <?php
                                    if (isset($seller_det)) {
                                      $x=1;
                                       for($i=1;$i<=4;$i++){
                                           if($i==1){
                                               ?>
                     <div class="col-md-6 col-xs-12" style="margin:0px;padding:2px;">
                    <img  src="profiles/<?=$seller_det['name'].'_'.$seller_det['im_'.$i];?>" style="width:100%;height:200px;object-fit:cover;" />
                    </div>
                    <?php
                           }else{
                         ?>
                    <div class="col-md-3 col-xs-6" style="margin:0px;padding:1px;">
                    <img   src="profiles/<?=$seller_det['name'].'_'.$seller_det['im_'.$i];?>" style="width:100%;height:100px;object-fit:cover;" />
                    </div>
                    
                           <?php                    
                                               
                                           }
                                        ?>
               
                
                     <?php
                                        $x++;
                                      }
                                    }else{
                                      echo "DATA NOT FOUND";
                                    }
                                  ?>
                    <!--<div class="col-md-3" style="margin:0px;padding:1px;">
                    <img src="https://images.unsplash.com/photo-1565799515768-2dcfd834625c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:100px;object-fit:cover;" />
                    </div>
                     <div class="col-md-3" style="margin:0px;padding:1px;">
                    <img src="https://images.unsplash.com/photo-1565799515768-2dcfd834625c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:100px;object-fit:cover;" />
                    </div>-->
                     <div class="col-md-3  col-xs-6" style="margin:0px;padding:1px;">
                    <img src="https://images.unsplash.com/photo-1565799515768-2dcfd834625c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" style="width:100%;height:100px;object-fit:cover;" />
                    </div>
              </div>
            
            <div class="col-md-12 col-xs-12">
                <h3 class="b">Hostel Gallery</h3>
                
                 <button class="btn btn-md btn-pill" style="background-color:rgba(100,149,237,0.1); border:2px solid cornflowerblue;" onclick="myGallery(<?=$seller_det['id'];?>)"><i class="fa fa-plus"></i> Add More </button>
                    
               
            </div>
                      
            
        </div>
          

                        
    
                          <!--EVENTS-->    
     <div class="card-6 col-md-3 col-sm-4 col-xs-12" style="padding:0px;">
<a href="new.php" class="list-group-item list-group-item-action flex-column align-items-start ">
                              <div class="card text-center" style="border-radius:14px!important;">
                              <div class="card-header">
                                <img src="https://image.freepik.com/free-vector/booking-event-calendar_23-2148551245.jpg" style="width:100%;height:140px;object-fit: contain;">
                              </div>
                              <div class="card-body">
                                <h3 class="card-title b"> Add Events and Places</h3>
                                <p class="card-text f-10">Events and places near you.Events and places are a great way to attract more customers.</p>
                                
                              </div>
                                  <button class="btn btn-primary btn-md btn-pill" onclisk="alert('asdasd)"><i class="fa fa-plus"></i> Start here</button>
                              
                            </div>
                                  </a>
                        </div>
                          <!--//EVENTS-->    
                   
               </div>
                    
    </div>
    
    <!--ACCC-->
    <div id="account" class="tab-pane fade">
        <h3 class="b bd-rt-blue">Account
            <span class="pull-right" data-toggle="modal" data-target="#myDetails"><i class="fa fa-edit"></i></span>
        </h3>
        <div id="cards" class="col-md-12 col-sm-12 col-xs-12">
            
                <div class="card-6 col-md-3 col-sm-4 col-xs-12" style="padding:0px;">
                        <a href="new.php" class="list-group-item list-group-item-action flex-column align-items-start ">
                              <div class="card" style="border-radius:14px!important;">
                              <div class="card-header text-center">
                                <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="prof-img" style="" />
                                  
                              </div>
                              <div class="card-body text-center">
                                <h3 class="card-title b"> Shuja Khalid</h3>
                                  <div id="pill" class="f-12">Balance $2000</div>
                                    <br/><br/>
                                    <div><i class="fa fa-map-marker-alt"></i> London,Uk </div>
                                  <br/>
                                  <div><i class="fa fa-envelope"></i> shujakhalid@gmail.com </div>
                                  <br/>
                                  <div><i class="fa fa-phone"></i> +91-9812345609</div>
                                  
                                
                                
                              </div>
                                
                            </div>
                    </a>
                    </div>

             <div class="card-6 col-md-4 col-sm-4 col-xs-12 list-group-item " style="padding:10px;">
                
                    <h4 class="b">Details</h4>        
                 
                    <div style="padding:20px 5px 5px 5px;">
                        <span class="b">First Name</span>
                        <span class="pull-right">Shuja</span>
                    </div>
                 <div style="padding:20px 5px 5px 5px;">
                        <span class="b">Last Name</span>
                        <span class="pull-right">Khalid</span>
                    </div>
                 <div style="padding:20px 5px 5px 5px;">
                        <span class="b">Username</span>
                        <span class="pull-right">@shujakhalid</span>
                    </div>
                 
                              
                </div>
            
             <div class="card-6 col-md-4 col-sm-4 col-xs-12 list-group-item " style="padding:10px;">
                
                    <h4 class="b">Payment details</h4>        
                 
                    <div style="padding:20px 5px 5px 5px;">
                        <span class="b">Contact</span>
                        <span class="pull-right">+91 8253839XXX</span>
                    </div>
                 <div style="padding:20px 5px 5px 5px;">
                        <span class="b">Balance</span>
                        <span class="pull-right">$2200</span>
                    </div>
                 <div style="padding:20px 5px 5px 5px;">
                        <span class="b">Card details</span>
                        <span class="pull-right">XXX-XXXX</span>
                    </div>
                 
                              
                </div>
            
             <div class="card-6 col-md-4 col-sm-4 col-xs-12 list-group-item " style="padding:10px;">
                
                    <h4 class="b">Listing Address</h4>        
                 
                    <div style="padding:20px 5px 5px 5px;">
                        <span class="b">Address</span>
                        <span class="pull-right">42/2,Shimla Enclave,Majra</span>
                    </div>
                 <div style="padding:20px 5px 5px 5px;">
                        <span class="b">City</span>
                        <span class="pull-right">Dehradun</span>
                    </div>
                 <div style="padding:20px 5px 5px 5px;">
                        <span class="b">Country</span>
                        <span class="pull-right">India</span>
                    </div>
                 
                 <div style="padding:20px 5px 5px 5px;">
                        <span class="b">Zip Code</span>
                        <span class="pull-right">298136</span>
                    </div>
                 
                              
                </div>
 
            
            
            
        </div>
    </div>
    
    <!--//ACC-->
    

                  <div id="edit" class="tab-pane fade">
                    <h3 class="b bd-rt-blue">Edit
                        
                        <span class="pull-right bg-lav btn-pill" style="padding:10px;" data-toggle="modal" data-target="#myEdit"><i class="fa fa-edit"></i></span>
                    
                    </h3>
                        <div class="card-6 col-md-4 col-sm-4 col-xs-12 list-group-item " style="padding:10px;">
                        <h4 class="b">Description</h4>        
                            <br/>
                                <p>
                                    Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,

Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage,Lorem ipsuym si amore sodl a dolor vcaso dfoe e desro goeage
                                  </p>
                         
                      </div>

                      <div class="card-6 col-md-4 col-sm-4 col-xs-12 list-group-item " style="padding:10px;">
                
                    <h4 class="b">Facilties</h4>        
                 
                    <div id="realFaci" style="padding:20px 5px 5px 5px;">
                                  <?php
                        $fac=explode("#", $seller_det['facilities']);

                        foreach ($fac as $f) {
                          if($f!=="" && $f!=="no"){
          ?>

                            <span id="pill"><?=$f;?> </span>
                        
                        

                        <?php
                        }
                        }
                      ?>
                    </div>
                 
                 
                              
                </div>





             <!--  <div class="col-md-8 col-xs-12">
                      <h4 class="b">Select facilities you offer:</h4>
                      
                      <button data-hold="AC" class="btn btn-lg btn-default" style="margin:10px;" onclick="addfaci('AC')">
                        A/C
                      </button>
                      <button data-hold="Wifi" class="btn btn-lg btn-default" style="margin:10px;" onclick="addfaci('WiFi')">
                        WIFI
                      </button>
                      <button class="btn btn-lg btn-default" style="margin:10px;" onclick="addfaci('Mess')">
                        Mess
                      </button>
                      <button class="btn btn-lg btn-default" style="margin:10px;" onclick="addfaci('Friendly Environment')">
                        Friendly Environment
                      </button>
                      <button class="btn btn-lg btn-default active" style="margin:10px;">
                        A/C
                      </button>
                      <button class="btn btn-lg btn-default" style="margin:10px;">
                        A/C
                      </button>
                      <button class="btn btn-lg btn-default" style="margin:10px;">
                        A/C
                      </button>
                      <button class="btn btn-lg btn-default" style="margin:10px;">
                        A/C
                      </button>
                      <button class="btn btn-lg btn-default" style="margin:10px;">
                        A/C
                      </button>
                      <button class="btn btn-lg btn-default" style="margin:10px;">
                        A/C
                      </button>
                      <button class="btn btn-lg btn-default" style="margin:10px;">
                        A/C
                      </button>
                      <button class="btn btn-lg btn-default" style="margin:10px;">
                        A/C
                      </button>
                      <br/>
                      
                      <strong>My Facilities:</strong>
                       <div id="myFaci">
                           
                      </div>
                      <br/>
                      <form id="faciForm" method="POST">
                        <input id="faci_id" type="hidden" name="facid" value="<?=$seller_det['id'];?>"/>
                        <input id="faci_inp" type="hidden" name="facis" placeholder="AC#WIFI" />
                        <input type="submit" class="btn btn-md btn-primary" value="Save">
                      </form>
                        
                    </div> -->


                      <!--    <div class="col-md-4 col-xs-12 bd pull-right">
                      <h4 class="b">Discount offers:</h4>
                      <form id="priceEdit" method="POST">

                        

                        <div class="form-group">
                          <div class="err hide alert alert-success">
                            Price not updated!!
                          </div>
                          <div class="done hide alert alert-success">
                            Prices updated successfully!!
                          </div>
                          <input type="hidden" name="h" value="<?=$seller_det['id'];?>" />
                          <strong>
                            New Booking Cost:
                          </strong>
                            <input id="bp" type="number" name="bprice" placeholder="$21" class="form-control" value="<?=$seller_det['b_cost'];?>">
                            <span class="errFirst four f-12 hide cl-red">Field cannot be left empty!</span>
                        </div>
                        <div class="form-group">
                          <input type="hidden" name="token" value="<?=$token;?>">
                          <strong>
                            New Monthly Cost:
                          </strong>
                            <input id="mp" type="number" name="price" placeholder="$21" class="form-control" value="<?=$seller_det['cost'];?>">
                            <span class="errFirst four f-12 hide cl-red">Field cannot be left empty!</span>
                        </div>

                        <div class="form-group">
                          
                          <button type="submit" class="btn btn-md btn-success form-control">
                            Save
                          </button>

                        </div>
                      </form>
                    </div>
-->
           
        



               

                  </div>
    
    
    
    
    <!--ROOMS-->
    <div id="rooms" class="tab-pane fade">
         <h3 class="b bd-rt-blue" style="margin-bottom: 30px;">Rooms
                      <?php

                        ?>

                            <button class="pull-right f-15 btn btn-sm btn-primary" data-toggle="modal" data-target="#myRooms">
                                <i class=" fa fa-plus"></i> Add More
                            </button>
                        </h3>
        
            <div id="table" class="col-md-12 col-sm-12 col-xs-12 md-top-10" style="padding:0px;">
                
                        <div id="SharedRooms" class="col-xs-12">
                            <h4 class="b bd-rt-blue" style="margin-bottom: 30px;">Shared Rooms</h4>
                        </div>
                        <div id="PrivateRooms" class="col-xs-12 md-top-40">
                            <h4 class="b bd-rt-blue" style="margin-bottom: 30px;">Private Rooms</h4>
                        </div>
            </div>
    </div>
    <!--//ROOMS-->
    
    
                  <div id="books" class="tab-pane fade">

                        <h3 class="b bd-rt-blue" style="margin-bottom: 30px;">New Bookings
                            <button class="pull-right f-15 btn btn-sm btn-success">
                                <i class=" fa fa-plus"></i> Add More
                            </button>
                        </h3>


                        <div id="table" class="col-md-12 col-xs-12" style="padding:0px;">
                        
                          <div class="card-6 col-md-3 col-sm-4 col-xs-12" style="padding:0px;">
                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Booking Confirmation</h5>
                                  
                                </div>
                                <p class="mb-1"><strong>Visitor</strong> just booked your room.
                                    <strong>Booking Id: 248234erwerw2</strong>

                                </p>
                                <div>
                                    <small>3 days ago</small>

                                </div>

                                <br/>
                                <button class="btn btn-md btn-default">
                                    Reject
                                </button>

                                <button class="btn btn-md btn-success">
                                    Confirm
                                </button>
                              </a>
                          </div>

                          <div class="card-6 col-md-3 col-sm-4 col-xs-12" style="padding:0px;">
                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Booking Confirmation</h5>
                                  
                                </div>
                                <p class="mb-1"><strong>Visitor</strong> just booked your room.
                                    <strong>Booking Id: 248234erwerw2</strong>

                                </p>
                                <div>
                                    <small>3 days ago</small>

                                </div>

                                <br/>
                                <button class="btn btn-md btn-default">
                                    Reject
                                </button>

                                <button class="btn btn-md btn-success">
                                    Confirm
                                </button>
                              </a>
                          </div>

                    <div class="card-6 col-md-3 col-sm-4 col-xs-12" style="padding:0px;">
                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Booking Confirmation</h5>
                                  
                                </div>
                                <p class="mb-1"><strong>Visitor</strong> just booked your room.
                                    <strong>Booking Id: 248234erwerw2</strong>

                                </p>
                                <div>
                                    <small>3 days ago</small>

                                </div>

                                <br/>
                                <button class="btn btn-md btn-default">
                                    Reject
                                </button>

                                <button class="btn btn-md btn-success">
                                    Confirm
                                </button>
                              </a>
                          </div>

                      
                        </div>



                </div>

                <div id="news" class="tab-pane fade">
                    <div class="card-6 col-md-3 col-sm-4 col-xs-12" style="">
                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">List group item heading</h5>
                                  <small>3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small>Donec id elit non mi porta.</small>
                              </a>
                          </div>

                          <div class="card-6 col-md-3 col-sm-4 col-xs-12" style="">
                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">List group item heading</h5>
                                  <small>3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small>Donec id elit non mi porta.</small>
                              </a>
                          </div>

                          <div class="card-6 col-md-3 col-sm-4 col-xs-12" style="">
                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">List group item heading</h5>
                                  <small>3 days ago</small>
                                </div>
                                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                <small>Donec id elit non mi porta.</small>
                              </a>
                          </div>


                </div>

                
            </div>





<!--Modal Acc Details-->
 <!-- Modal -->
  <div class="modal fade" id="myDetails" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="b">Account Details</h4>
        </div>
        <div class="modal-body">
            <div class="col-md-4 bg-grey">
               <div class="card" style="border-radius:14px!important;">
                              <div class="card-header text-center">
                                <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="prof-img" style="" />
                                  
                              </div>
                    <br/><br/><br/>
                              <div class="card-body b">
                                
                                  <div><a data-toggle="tab" href="#det"><i class="fa fa-user"></i> Account Details</a> </div>
                                  <br/>
                                  <div><a data-toggle="tab" href="#add"><i class="fa fa-map-marker-alt"></i> Listing Address</a></div>
                                  <br/>
                                  <div><a data-toggle="tab" href="#meth"><i class="fa fa-credit-card"></i> Payment Method</a></div>
                                  
                                
                                
                              </div>
                                <br/><br/><br/>
                            </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
  <div id="det" class="tab-pane fade in active">
      
   
                <div class="col-xs-6" style="padding:0px;margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">First Name</div>     
                    <input type="text" class="form-control" name="name" value="Shuja" style="background-color:#e6e6fa51"/>
                </div>
             <div class="col-xs-6" style="margin-bottom:20px">
                        <div style="color:#555;padding-bottom:10px;" class="b">Last Name</div>     
                        <input type="text" class="form-control" name="name" value="Khalid" style="background-color:#e6e6fa51"/>
                    </div>
                
                <div style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">Email</div>     
                    <input type="text" class="form-control" name="email" value="shujakhalid26@gmail.com" style="background-color:#e6e6fa51"/>
                </div>
      
  </div>
  <div id="add" class="tab-pane fade">
        
                <div style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">Street Address</div>     
                    <textarea class="form-control" name="address" placeholder="42 E, 15th Street" style="background-color:#e6e6fa51"> </textarea>
                </div>
      
                <div style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">Locality</div>     
                    <input type="text" class="form-control" name="locality" placeholder="Townarea" value="Khalid" style="background-color:#e6e6fa51"/>
                </div>
                <div class="col-xs-6" style="padding:0px; margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">City</div>     
                    <input type="text" class="form-control" name="city" placeholder="California" value="shujakhalid26@gmail.com" style="background-color:#e6e6fa51"/>
                </div>
                <div class="col-xs-6" style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">Zip</div>     
                    <input type="text" class="form-control" name="zip" placeholder="9876" value="shujakhalid26@gmail.com" style="background-color:#e6e6fa51"/>
                </div>
            
                
      
  </div>
    <div id="meth" class="tab-pane fade">
    
        ?
        
        
    </div>
    
</div>          
            </div>
            <div class="col-xs-12">
                <div class="pull-right">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-sync"></i> Update</button>    
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
                    
        </div>
        <div class="modal-footer">
            
        </div>
      </div>
      
    </div>
  </div>
<!--//Modal Acc Details-->

<!--MODAL EDIT-->
<!-- Modal -->
<div id="myEdit" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title b">Listing Details</h4>
      </div>
      <div class="modal-body">
       <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
  <li><a data-toggle="tab" href="#prices">Details</a></li>
   <li><a data-toggle="tab" href="#facis">Facilities</a></li>
  
</ul>

<div class="tab-content">
  <div id="description" class="tab-pane fade in active">
      
     <div class="">
        <div style="margin-bottom:20px;margin-top:20px">
            
            <textarea class="form-control" name="name" placeholder="Describe your listing" style="background-color:#e6e6fa51;height:200px;"></textarea>
        </div>
           <div class="pull-right">
                <button type="button" id="myBTNT" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-sync"></i> Update</button>    
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
      </div>
  </div>
  <div id="prices" class="tab-pane fade">
     <form id="priceEdit" method="POST" onSubmit="aa()">

                         <div style="margin-bottom:20px;margin-top:20px;">
                    

                        <div class="form-group">
                          <div class="err hide alert alert-success">
                            Price not updated!!
                          </div>
                          <div class="done hide alert alert-success">
                            Prices updated successfully!!
                          </div>
                          <input type="hidden" name="h" value="<?=$seller_det['id'];?>" />
                         <div style="color:#555;padding-bottom:10px;" class="b">Hostel Name *NOT DYNAMIC</div>     
                            <input id="bp" type="number" name="bprice" placeholder="$21" class="form-control" value="<?=$seller_det['b_cost'];?>" style="background-color:#e6e6fa51"/>
                            <span class="errFirst four f-12 hide cl-red">Field cannot be left empty!</span>
                        </div>
                        <div class="form-group">
                          <input type="hidden" name="token" value="<?=$token;?>">
                          <div style="color:#555;padding-bottom:10px;" class="b">New Monthly Cost</div>     
                            <input id="mp" type="number" name="price" placeholder="$21" class="form-control" value="<?=$seller_det['cost'];?>" style="background-color:#e6e6fa51"/>
                            <span class="errFirst four f-12 hide cl-red">Field cannot be left empty!</span>
                        </div>

                        <div class="form-group">
                            <br/>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sync"></i> Update</button>    
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>

                        </div>
         </div>
                      </form>
  </div>
    <div id="facis" class="tab-pane fade">
        <div class="top" style="margin-top:20px;">
                   <?php
                        $fac=explode("#", $seller_det['facilities']);

                        foreach ($fac as $f) {
                          if($f!=""){
          ?>

                        <span id="pill" class="b" onclick="removePill('<?=$f;?>',this)"><?=$f;?><span class="text-right"> <i class="fa fa-times"></i> </span> </span>

                        <?php
                        }
                        }
                      ?>
    <div id="myFaci">
                             



                        </div>
                           
                     <div id="newFaci" class="">
                         <br />
                         <h4 class="b">Select facilities you offer :</h4>
                        <button data-hold="AC" class="btn btn-md btn-default" style="margin:10px;" onclick="addfaci('AC')">
                          A/C
                        </button>
                        <button data-hold="Wifi" class="btn btn-md btn-default" style="margin:10px;" onclick="addfaci('WiFi')">
                          WIFI
                        </button>
                        <button class="btn btn-md btn-default" style="margin:10px;" onclick="addfaci('Mess')">
                          Mess
                        </button>
                        <button class="btn btn-md btn-default" style="margin:10px;" onclick="addfaci('Friendly Environment')">
                          Friendly Environment
                        </button>


                      
                        <br/>
                      
  


                        </div>
        </div>
        <div class="bottom" style="margin-bottom:20px;">
              <form id="faciForm" method="POST" class=" pull-right">
                        <input id="faci_id" type="hidden" name="facid" value="<?=$seller_det['id'];?>"/>
                        <input id="faci_inp" type="hidden" name="facis" class="form-control" value="<?=$seller_det['facilities'];?>" />
                        <input type="submit" class="btn btn-md btn-success" value="Save">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </form>
        </div>
    </div>
    
</div>
     
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>
<!--//MODAL EDIT-->


<!-- MODAL NEW ROOM -->
<div class="modal fade" id="myRooms" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="b">Add Room</h4>
        </div>
        <form id="newRoom" method="POST">
        <div class="modal-body">
        <div class="msgRoom hide alert"></div>
        <div style="margin-bottom:20px">
        
                <div class="col-xs-12" style="margin-bottom:20px">
                    <div style="color:#555;padding-bottom:10px;" class="b">Room Name</div>     
                    <!-- <input type="text" disabled class="form-control" id="roomName" style="background-color:#e6e6fa51"/> -->
                    <div class="col-xs-12 bg-grey pd-10 bd">
                      <span id="rTypeName">Shared</span>
                      <span id="rBedNumName"></span>
                      <span>Bed Room</span>
                    </div>
                </div>

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
      
                
            
                    
        </div>
        <div class="modal-footer">
            <div class="pull-right">
                <button type="submit" class="btn btn-success">Save</button>    
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
        </div>
      </form>  
      </div>
      
    </div>
  </div>                
<!-- //MODAL NEW ROOM -->


<!--GALLERY MODAL-->
<!-- Modal -->
<div id="myGallery" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title b">Gallery</h4>
      </div>
      <div id="gal" class="modal-body">
        <div class="col-md-12 col-sm-12 col-sx-12">
            <div class="pointer col-xs-2 bg-lav" style="padding:5px;height:120px;" onclick="newGal()">
                <div class="md-top-40 text-center b">Add New</div>
                <div style="opacity:0;">
                        <input class="fileToUpload" type="file" />
                </div>
            </div>
            <?php
                $arr=['https://images.unsplash.com/photo-1520277739336-7bf67edfa768?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60','https://images.unsplash.com/photo-1555854877-bab0e564b8d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60','https://images.unsplash.com/photo-1600077625345-f401f4ba2fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60','https://images.unsplash.com/photo-1552312994-c9e517c23bd4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'];
                for($x=1;$x<=5;$x++){
                    for($i=0;$i<=3;$i++){
            ?>
                <div class="col-md-2 col-xs-12" style="padding:5px;">
                    <img src="<?=$arr[$i];?>" style="height:120px;width:100%;object-fit:cover;"/>
                </div>
            <?php
                }        }
            ?>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--//GALLERY MODAL-->



<script type="text/javascript">
  var hostId='<?=base64_encode($seller_det['id']);?>';
    $(function() {
        

      $('#rType').change(function(){($(this).val()==1) ? $('#rTypeName').text('Private') : $('#rTypeName').text('Shared')});
      

var currency_input = 1;
var currency_from = "USD"; // currency codes : http://en.wikipedia.org/wiki/ISO_4217
var currency_to = "INR";
var arr={
    id:1,
    bPrice: 120,
    bType: "1",
    bedNum: "350",
    err: "clear",
    grade: "Standard",
    price: "450",
    roomName: "Standard Shared 350 Bed Room",
    state: true
};
        
        $.ajax({
            type:"POST",
            url:"requests/profile.php",
            data:{
                hostId:hostId,
                getRooms:true
            },
            success:function(data){
                var resp=JSON.parse(data);
                console.log('ZINDABAD',resp);
                if(resp.state){
                    $.each(resp.results, function(key,arr){

                       (arr.roomType==1)? elemId='PrivateRooms' : elemId='SharedRooms';
                       (arr.bType==1)? arr.bType="Private" : arr.bType="Shared";

                        $('#'+elemId).append('<div id="room" class="col-xs-12 col-sm-12 col-md-6 "> <div class="col-xs-12 col-sm-12 col-md-12 md-top-10 pd-10 bg-lav" data-toggle="collapse" data-target="#demo'+arr.id+'"> <div class="b f-15"> <span class="caret"></span>'+arr.roomName+'<div class="f-22 pull-right"><i class="fa fa-edit"></i></div> </div> </div> <div class="collapse col-xs-12 col=-sm-12 col-md-12 bd bg-grey" id="demo'+arr.id+'"> <div class="col-xs-12 col-sm-12 col-md 12"> <div class="col-xs-4"> <br /> <div class="b"><i class="fa fa-money"></i> Price</div> <div class="b" style="color:#999;">'+arr.price+'</div> </div> <div class="col-xs-4"> <br /> <div class="b"><i class="fa fa-bed"></i> Beds</div> <div class="b" style="color:#999;">'+arr.beds+' Beds</div> </div> <div class="col-xs-4"> <br /> <div class="b"><i class="fa fa-star"></i> Grade</div> <div class="b" style="color:#999;">'+arr.grade+'</div> </div> <div class="col-xs-4"> <br /> <div class="b"><i class="fa fa-bath"></i> Bathroom</div> <div class="b" style="color:#999;">'+arr.bType+'</div> </div> <div class="col-xs-5"> <br /> <div class="b"><i class="fa fa-bath"></i> Available Beds:<span class="b" style="color:#999"> '+arr.beds+'</span></div> </div> </div></div> </div>');

                    });
                }else{
                    
                        $('#SharedRooms').append('<div id="room" class="col-xs-12 col-sm-12 col-md-6 ">Add new room</div>');
                        $('#PrivateRooms').append('<div id="room" class="col-xs-12 col-sm-12 col-md-6 ">Add new room</div>');

                    
                }
                    
            }
        });
        
        
        //console.log(arr);

var op_data =0;

$.ajax({
  url:"https://api.exchangeratesapi.io/latest?symbols=USD,TRY&base=USD",
  type:'GET',
  success:function(data){
    console.log(data)
    var base=data.rates.USD;
    var oth=data.rates.TRY;

    console.log(35* oth);
  }
})


      $('[data-toggle="popover"]').popover({
         trigger: "hover" ,
         html:true
      }); 

      //const sellerId=1;
var oldImg;
var id;

$("#myBTNT").on('click',function(){
    alert('asd')
})

      $(".imager").on('click',function(){

          oldImg = $(this).attr('data-hold');
          id = $(this).attr('data-id');
          $("#fileToUpload").trigger('click');
          $("#oldImg").val(oldImg);
          $("#fileNum").val(id);
      });

      $("#fileToUpload").change(function() {
          $("#imagechangeForm").submit();
          //readURL(1,this);
      });

      $("#imagechangeForm").on('submit',function(event){
        event.preventDefault();
        var formData = new FormData(this);
          $.ajax({
            type:"POST",
            url:"requests/profile.php",
            data:formData,
            success:function(data){
                var resp=JSON.parse(data);
                if (resp.err) {
                  console.log("err:"+resp.err);
                }else{
                  $("#vzx_"+resp.filenum).attr('src',"profiles/"+resp.file);
                }
            },
            cache: false,
            contentType: false,
            processData: false
          });

      });


      $("#priceEdit").on('submit',function(e){
        e.preventDefault();
        var formData = $(this);
        $.ajax({
          type:"POST",
          url:"requests/profile.php",
            data:formData.serialize(),
            success:function(data){
                var resp=JSON.parse(data);
                if (resp.err) {
                  $(".err").removeClass('hide');
                }else{
                  $(".done").removeClass('hide');
                    $("#bCost").text('$'+resp.bp);
                    $("#mCost").text('$'+resp.mp);
                }
            }
        });

      });

      $("#faciForm").on('submit',function(event){
        event.preventDefault();
        var val = $("#faci_inp").val();
        if(val==""){

        }else{
        var formData = $(this);
          $.ajax({
            type:"POST",
            url:"requests/profile.php",
              data:formData.serialize(),
              success:function(data){
                  var resp=JSON.parse(data);
                  if(resp==1){
                      
                    var arr=val.split("#");
                    let htmlss;
                    $.each(arr, function(index, item) {
                        (item!=="" && item!=="no")? htmlss+='<span id="pill">'+item+'</span>' : htmlss='';
                            
                    });
                      
                  $('#realFaci').html(htmlss);
                    
                      
                    $(".msg").removeClass('hide').addClass('alert-success').text("Changes Added");
                  }else{
                    $(".msg").removeClass('hide').addClass('alert-danger').text("Error!");
                  } 

                  

              }
          });
        } 
      });

      $("#newRoom").on('submit',function(e){
        e.preventDefault();
          alert(hostId);
          var form = $(this);
          $.ajax({
            type:"POST",
            url:"requests/profile.php",
              data:form.serialize() + '&' + $.param({
                    'host_id': hostId
                }),
              success:function(data){
                  var arr=JSON.parse(data);
                  console.log(arr);
                  if(!arr.state){
                      $(".msgRoom").removeClass('hide').addClass('alert-danger').text("Please fill the required fields");
                  }else{
                      $(".msgRoom").removeClass('hide').addClass('alert-success').text("New Room Saved");
                      (arr.roomType==1)? elemId='PrivateRooms' : elemId='SharedRooms';
                       (arr.bType==1)? arr.bType="Private" : arr.bType="Shared";
         

                        $('#'+elemId).append('<div id="room" class="col-xs-12 col-sm-12 col-md-6 "> <div class="col-xs-12 col-sm-12 col-md-12 md-top-10 pd-10 bg-lav" data-toggle="collapse" data-target="#demo'+arr.id+'"> <div class="b f-15"> <span class="caret"></span>'+arr.roomName+'<div class="f-22 pull-right"><i class="fa fa-edit"></i></div> </div> </div> <div class="collapse col-xs-12 col=-sm-12 col-md-12 bd bg-grey" id="demo'+arr.id+'"> <div class="col-xs-12 col-sm-12 col-md 12"> <div class="col-xs-4"> <br /> <div class="b"><i class="fa fa-money"></i> Price</div> <div class="b" style="color:#999;">'+arr.price+'</div> </div> <div class="col-xs-4"> <br /> <div class="b"><i class="fa fa-bed"></i> Beds</div> <div class="b" style="color:#999;">'+arr.bedNum+' Beds</div> </div> <div class="col-xs-4"> <br /> <div class="b"><i class="fa fa-star"></i> Grade</div> <div class="b" style="color:#999;">'+arr.grade+'</div> </div> <div class="col-xs-4"> <br /> <div class="b"><i class="fa fa-bath"></i> Bathroom</div> <div class="b" style="color:#999;">'+arr.bType+'</div> </div> <div class="col-xs-5"> <br /> <div class="b"><i class="fa fa-bath"></i> Available Beds:<span class="b" style="color:#999"> '+arr.bedNum+'</span></div> </div> </div></div></div>');
                      
                  }

              }
          });
      })

});


</script>
<script>
    async function myGallery(id){
        $.ajax({
            type:"POST",
            url:'seller/test.php',
            data:{
                _id:id,
                hostId:hostId
            },
            success:function(data){
              $('#gal').html(data)
              $("#myGallery").modal();        
            }
        });
    }

   
</script>
<script>

function clean_encode(str){

    var enc=btoa(str);

      //alert(enc.replace(/[^a-zA-Z0-9\-]/g, ''));

    return enc.replace(/[^a-zA-Z0-9\-]/g, '');

    

}

</script>
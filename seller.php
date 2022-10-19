<?php
session_start();
if(!isset($_SESSION['sel_userId'])){
    header('Location:home.php');
}else{
    
include('requests/core/company.class.php');
$comp= new Company();

//echo $_SESSION['sel_userId'];
$seller_ini=json_encode($comp->seller_entry($_SESSION['sel_userId']));

//print_r($seller_ini);
//echo $seller_det['images'];

//print_r($comp->seller_data($_SESSION['userId']));

//echo $_SESSION['userId'];
//echo base64_encode(random_bytes(1));


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

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <style type="text/css">
        .popover-content{
            line-height:20px;
        }

        .list-group>li {
            background-color: transparent;

            padding: 10px;
            border: none;

            line-height: 30px;
        }
        
        .prof-img{
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            padding:10px;
        }

        .photo{
          width: 100%;height: 200px;
        }
        
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            .xs-hide{
                display: none;
            }

            .photo{
                height: 90px;
            }

            .col-xs-12>.photo{
                height: 250px;
            }
            
        }
        
        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .sm-hide{
                display: none;
            }
            
            .prof-img{
                width: 150px;
                height: 150px;
                border-radius: 50%;
                object-fit: cover;
                padding:10px;
            }
            
        }
        
       /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            .md-hide{
                display:none;
            }

            
            .photo{
                height: 20  0px;
            }
        }
        

    </style>
<style type="text/css">
                    .bd{
                        border:1px solid #d4d4d4;
                    }



.btn.active{
	background-color: cornflowerblue;
	color: #FFF;
}

#pill{
display:inline-block;width: auto;height: auto;background-color: cornflowerblue;padding: 10px;margin:10px 10px 0px 0px;color: #FFF;border-radius:14px;
}
    
    .btn-pill{
        border-radius:14px;
    }
    
                    
                </style>
</head>

<body class="width:100%;height:100%">





    <div class="container-fluid">
        <div class="row">



            
            <div id="about" class="col-md-2 col-sm-3 col-xs-12 bd" style="padding-top:20px;background-color:#fff;">

                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="prof-img" style="" />
                </div>

                <div>

                    <br />
                    <div class="text-center"><span class="b f-22"><?=$_SESSION['sel_user'];?></span></div>
                    <br />
                    
                    <ul class="nav nav-pills nav-stacked">
                      <li  data-toggle="tab" href="#home" class="active"><a href="#">Dashboard</a></li>
                        <li data-toggle="tab" href="#account"><a href="#">Account</a></li>
                      <li data-toggle="tab" href="#edit"><a href="#">Listing</a></li>
                        <li data-toggle="tab" href="#rooms"><a href="#">Rooms</a></li>
                      <li data-toggle="tab" href="#books"><a href="#"> Bookings</a></li>
                      <li data-toggle="tab" href="#news"><a href="#"> News</a></li>
                      
                    </ul>


                </div>


            </div>


            <div class="col-md-10 col-sm-9 col-xs-12 arena">

                

                




        	</div>





        
    </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        
        
        
        
       if(isTouchDevice()===false) {
     $('[data-toggle="tooltip"]').tooltip();
}
    });
    
    var mq = window.matchMedia( "(max-width: 760px)" );
if (mq.matches) {
    // window width is at less than 570px
    $("ul").removeClass('nav-stacked');
}
else {
    // window width is greater than 570px
    $("ul").addClass('nav-stacked');
}
    
    
    
    function isTouchDevice(){
    return true == ("ontouchstart" in window || window.DocumentTouch && document instanceof DocumentTouch);
}

var i=0;
function a(t){
    
    switch(i){
        case 0:
            $('#addNew').show();
            $(t).replaceWith('<button class="pull-right f-15 btn btn-success" onclick="a(this)"><i class="fa fa-angle-up"></i> Hide</button>');
            i=1;
            break;

        case 1:
            $('#addNew').hide();
            $(t).replaceWith('<button class="pull-right f-15 btn btn-success" onclick="a(this)"><i class="fa fa-angle-down"></i> Add New</button>');
            i=0;
            break;
    }

        
}



function trigger(id){
    $("#"+id).trigger('click');
}

 function edit_about(){
       $("#about_txt").html('<br/><br/><div id="abt_err" class="alert alert-danger hide">Not updated</div><form id="abt_frm" method="POST" onsubmit="abt_form()"> <div class="form-group"> <textarea name="about" style="width: 100%;height:100px;border:1px solid blue;padding: 10px;resize: vertical; ">Hello so this my answer and t wills.</textarea> </div> <div class="form-group pull-right"><button class="btn btn-md btn-danger" onclick="edit_close()">Cancel</button>&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" value="Save" name="abtform" class="btn  btn-md btn-success pull-right"> </div> </form> </div>');

       $("#edit_btn").hide();
    }

    function edit_close(){
       $("#about_txt").html('<p>Hello so this my answer and t wills.</p>');
       $("#edit_btn").show();
       //$("#edit_btn").html('<span class="pull-right pointer f-15" onclick="edit_about()"><i class="fa fa-edit"></i>Edit</span><br/><br/>');
    }

    function abt_form(){
        event.preventDefault();
         $.ajax({
            type:"POST",
            url:"requests/profile.php",
            data:$("form#abt_frm").serialize() + '&' + $.param({
                    'time': d.getTime()
                }),
            success:function(data){
                var resp = JSON.parse(data);
                if(resp.status==1){
                    $("#about_txt").html('<p>'+resp.text+'</p>');
                    $("#edit_btn").html('<span class="pull-right pointer" onclick="edit_about()"><i class="fa fa-edit"></i> Edit</span>');
                }else{
                    $("#abt_err").removeClass('hide');
                }
            }

        });
            
    
    }

</script>
<script type="text/javascript">
    $(function() {
        
      const sellerId=1;
var oldImg;
var id;
        if (localStorage.listingKey){
            console.log(localStorage.getItem("listingKey"));    
        }else{
            localStorage.setItem("listingKey",0);
        }
		seller_pro(localStorage.getItem("listingKey"));

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
                        console.log('Noww');
                        console.log(val.split('#'));
	                	$(".msg").removeClass('hide').addClass('alert-success').text("Changes Added");
	                }else{
	                	$(".msg").removeClass('hide').addClass('alert-danger').text("Error!");
	                }	

	                

	            }
	      	});
    	}	
      })



        $('#search-button').on('click', function(e) {
            if ($('#search-input-container').hasClass('hdn')) {
                e.preventDefault();
                $('#search-input-container').removeClass('hdn')
                return false;
            }
        });

        $('#hide-search-input-container').on('click', function(e) {
            e.preventDefault();
            $('#search-input-container').addClass('hdn')
            return false;
        });

    });


 	function seller_pro(id){
        
 		$.ajax({
 			type:"POST",
 			url:"seller/seller2.php",
 			data:{
 				id:id,
 				data:<?=$seller_ini;?>

 			},
 			success:function(data){
 				$(".arena").html(data);
                localStorage.setItem("listingKey", id);
 			}
 		});
            
 	}


     /* function trigimage() {
        $("#fileToUpload").trigger('click');
        $("#fileToUpload").click({param1: "Hello", param2: "World"}, a());
      }

      function a(event){
        console.log(event);
      }*/

    function readURL(id,input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();


            reader.onload = function(e) {
                $("#attach_img"+id).removeClass('col-xs-3');
                //$('#blah').attr('src', e.target.result);
                $("#attach_img"+id).html('<br/><img src="' + e.target.result + '" id="blah" alt="image not rendered"><div id="imgAt" style="display:inline-block;width:20px;height:50px;background-color:#fff;text-align:center;padding-top:15px;" class="f-15" onclick="trigimage('+id+')"><i class="fa fa-redo-alt"></i></div>');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }



    function addfaci(faci){
        
        var val = "#"+$("#faci_inp").val();
        val = val.replace("##", "#");
        //alert(val)
        if(val=="#"){
    		val+=faci;
            
    		//console.log("HOLE"+val);
    		$("#myFaci").append('<span id="pill" class="b" onclick="removePill(&apos;'+faci+'&apos;,this)">'+faci+'<span class="text-right"> <i class="fa fa-times"></i> </span> </span>');
    	}else{
    		if (val.includes(faci)) {

    		}else{
    			val+="#"+faci;
    			$("#myFaci").append('<span id="pill" class="b" onclick="removePill(&apos;'+faci+'&apos;,this)">'+faci+'<span class="text-right"> <i class="fa fa-times"></i> </span> </span>');
    			console.log(val);
    		}
    	}
	    	val = val.replace("##", "");
	    	$("#faci_inp").val(val);


	    	
    }

    function removePill(faci,t){
    	var val = $("#faci_inp").val();
    	val = val.replace("#"+faci, "");
    	$("#faci_inp").val(val);
    	console.log(val);
    	$(t).remove();

    }


    var flag=0;
    function faciUI(t){
    	switch(flag){
			case 0:
				$("#newFaci").removeClass("hide");
		    	$(t).html('<i class="fa fa-angle-up"></i> Hide');
		    	$("#oldFac").hide();
		    	$(".btn-frm").removeClass('hide');

		    	flag=1;
	    	break;
	    	case 1:
				$("#newFaci").addClass("hide");
		    	$(t).html('<i class="fa fa-Edit"></i> Edit');
		    	$("#oldFac").show();
		    	$(".btn-frm").addClass('hide');
		    	flag=0;
	    	break;

    	}
	    	

    }
    

</script>

</html>
<?php
}
?>
<style type="text/css">


.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

#blah {
    width:100px;
    height:100px;
    border: 1px solid #d4d4d4;
    object-fit: contain;
}

</style>

<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <span id="step-1" type="button" class="btn btn-primary btn-circle">1</span>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <span id="step-2" type="button" class="btn btn-default btn-circle">2</span>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <span id="step-3" type="button" class="btn btn-default btn-circle">3</span>
            <p>Step 3</p>
        </div>
    </div>
</div>


            </div>


<br/><br/><!-- multistep form -->
  


  <!-- progressbar -->
  <div class="col-xs-12">
    

  </div>

  <form id="fileForm" class="col-md-12 col-xs-12" style="padding: 10px;">
  <!-- fieldsets -->
  <div id="part1" class="col-md-12">
    <div class="form-group">
      <strong>
        Name:
      </strong>
        <input id="pdnm" type="text" name="hname" placeholder="H Name" class="form-control">
        <span class="errFirst one f-12 hide cl-red">Field cannot be left empty!</span>
    </div>
    <div class="form-group">
      <strong>
        Type:
      </strong>
        <select id="suit" class="select form-control">
          <option>
            M
          </option>
          <option>
            F
          </option>
          <option>
            All
          </option>
          
        </select>
        <span class="errFirst two f-12 hide cl-red">Field cannot be left empty!</span>
    </div>


    <div class="form-group">
      <label class="control-label " for="pwd">Attach 4 images:</label>
        <div class="col-md-12" style="padding: 0px;">
          
        
            <div id="attach_img1" class="col-md-3 col-xs-3">
                <div id="imgAt" style="width:50px;height:50px;background-color:#d4d4d4;text-align:center;padding-top:15px;" class="f-22" onclick="trigimage(1)"><i class="fa fa-image"></i></div>
            </div>

            <div id="attach_img2" class="col-md-3 col-xs-3">
                <div id="imgAt" style="width:50px;height:50px;background-color:#d4d4d4;text-align:center;padding-top:15px;" class="f-22" onclick="trigimage(2)"><i class="fa fa-image"></i></div>
            </div>

            <div id="attach_img3" class="col-md-3 col-xs-3">
                <div id="imgAt" style="width:50px;height:50px;background-color:#d4d4d4;text-align:center;padding-top:15px;" class="f-22" onclick="trigimage(3)"><i class="fa fa-image"></i></div>
            </div>
            <div id="attach_img4" class="col-md-3 col-xs-3">
                <div id="imgAt" style="width:50px;height:50px;background-color:#d4d4d4;text-align:center;padding-top:15px;" class="f-22" onclick="trigimage(4)"><i class="fa fa-image"></i></div>
            </div>

        </div>

        <div style="position: absolute;margin:-2000px;">
          <input name="fileToUploadone" type="file" id="imgFileone" style="opacity:0;" />
          <input name="fileToUploadtwo" type="file" id="imgFiletwo" style="opacity:0;" />  
          <input name="fileToUploadthree" type="file" id="imgFilethree" style="opacity:0;" />
          <input name="fileToUploadfour" type="file" id="imgFilefour" style="opacity:0;" />
        </div>

    </div>
    <div class="form-group">

      <input type="hidden" name="token" value="<?=$token;?>">
      <br/><br/><br/><br/>
      <strong>
        Number of rooms:
      </strong>
        <input id="rm" type="number" name="rooms" placeholder="12" class="form-control">
        <span class="errFirst three f-12 hide cl-red">Field cannot be left empty!</span>
    </div>
    <div class="form-group">
      <input type="hidden" name="token" value="<?=$token;?>">
      <strong>
        Monthly Cost:
      </strong>
        <input id="pc" type="number" name="price" placeholder="$21" class="form-control">
        <span class="errFirst four f-12 hide cl-red">Field cannot be left empty!</span>
    </div>
    <div class="form-group">
      <input type="hidden" name="token" value="<?=$token;?>">
      <strong>
        Booking Cost:
      </strong>
        <input id="bc" type="number" name="bprice" placeholder="$2" class="form-control">
        <span class="errFirst eight f-12 hide cl-red">Field cannot be left empty!</span>
    </div>
    <div class="form-group">
      
        <button type="button"  type="button"class="btn btn-md btn-success pull-right" onclick="next(1)">NEXT</button>
    </div>
  </div>

  <div id="part2" class="col-md-12 hide in fade">
    
    <div class="form-group">
                                
        <label>Country:</label>
        <!-- <input type="text" name="loc" class="form-control"> -->
        <select class="form-control selectpicker" data-live-search="true">
          <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
          <option data-tokens="mustard">Burger, Shake and a Smile</option>
          <option data-tokens="frosting">Sugar, Spice and all things nice</option>
        </select>
    </div>
    
    <div class="form-group">
        <label>City:</label>
        <!-- <input type="text" name="loc" class="form-control"> -->
        <select class="form-control selectpicker" data-live-search="true">
          <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
          <option data-tokens="mustard">Burger, Shake and a Smile</option>
          <option data-tokens="frosting">Sugar, Spice and all things nice</option>
        </select>
    </div>

     <div class="form-group">
      <strong>
        Nearest University/Institute:
      </strong>
        <input id="nu" type="text" name="nearuni" placeholder="Product Name" class="form-control">
        <span class="errFirst five f-12 hide cl-red">Field cannot be left empty!</span>
    </div>


    <div class="form-group">
      <input type="hidden" name="token" value="<?=$token;?>">
      <strong>
        How far is the nearest University/Institute(in kms):
      </strong>
        <input id="ss" type="number" name="distnu" placeholder="2km" class="form-control" required />
        <span class="errFirst six f-12 hide cl-red">Field cannot be left empty!</span>
    </div>

     <div class="form-group">
      <strong>
        Preview Image:
      </strong>
        <input id="pvim" type="file" name="fileToUpload" class="form-control" accept="image/x-png,image/gif,image/jpeg" >
        <span class="errSecond seven f-12 hide cl-red">File not selected!</span>
    </div>


    
    
    
    <div class="form-group">
        <button type="button" class="btn btn-md btn-success " onclick="prev(2)">Previous</button>      
        <button type="button" class="btn btn-md btn-success pull-right" onclick="next(2)">NEXT</button>
    </div>
    <div class="col-xs-12 bd">
      
      *Website URL will be used for demo purpose only.Leave the field empty if you have nor hosted yet.

    </div>
  </div>


  <div id="part3" class="col-md-12 hide in fade">
    

    <div class="form-group">
      <strong>
        Product description:
      </strong>
        <textarea name="desc" placeholder="Type here.." class="form-control"></textarea>

    </div>

    <div class="form-group" style="padding: 10px;">
      <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
      <span class="sr-only">70% Complete</span>
    </div>
</div>


    </div>
    <div class="form-group">
        <button type="button" class="btn btn-md btn-success " onclick="prev(3)">Previous</button>      
        <input type="submit" class="btn btn-md btn-primary pull-right" name="submit" value="Save">
    </div>
    <div class="col-xs-12 bd">
      
      *Website URL will be used for demo purpose only.Leave the field empty if you have nor hosted yet.

    </div>
  </div>


</form>

<script type="text/javascript">
   $(function(){



      $("#fileForm").on('submit', function(){
      event.preventDefault();         

        var formData = new FormData(this);
          $.ajax({
             xhr: function() {
              var xhr = new window.XMLHttpRequest();
              xhr.upload.addEventListener("progress", function(evt) {

                  if (evt.lengthComputable) {
                      var percentComplete = (evt.loaded / evt.total) * 100;
                      //Do something with upload progress here
                      $('.progress-bar').animate({
                  width: percentComplete+"%",
                  opacity: 1
                }, 1000 );
                      
                  }
             }, false);
             return xhr;
          },
              type:"POST",
              url:"requests/profile.php",
              data:formData,
              success:function(data){
                  console.log(data);
              },
              cache: false,
              contentType: false,
              processData: false

          });  

      
    });








   });
   function next(state){
    event.preventDefault();

      if(validate(state)){
        //alert('er');
      }else{
        $("#part"+state).addClass('hide');
        $("#part"+parseInt(state+1)).removeClass('hide');
        $("#step-"+parseInt(state+1)).removeClass('btn-default');
        $("#step-"+parseInt(state+1)).addClass('btn-primary');
      }

    
    
   }

   function prev(state){
    event.preventDefault();
    $("#part"+state).addClass('hide');
    $("#part"+parseInt(state-1)).removeClass('hide');
    $("#step-"+state).removeClass('btn-primary');
    $("#step-"+state).addClass('btn-default');
    
   }

   function validate(at){
      switch(at){
        case 1:
          if ($("#pdnm").val()==""){
            $(".one").removeClass('hide');
            return true;
          }else if($('#suit').val()==""){
            $(".two").removeClass('hide');
            return true;

          }else if($("#rm").val()==""){
            $(".three").removeClass('hide');
            return true;  
          }else if($("#pc").val()==""){
            $(".four").removeClass('hide');
            return true;  
          }else if($("#bc").val()==""){
            $(".eight").removeClass('hide');
            return true;  
          }else{
            $(".errFirst").addClass('hide');
            return false;
          }
          break;

        case 2:
          if ($("#nu").val()==""){
            $(".five").removeClass('hide');
            return true;
          }else if($('#ss').val()==""){
           
            $(".six").removeClass('hide');
            return true;

          }else if($("#pvim").val()==""){
            $(".seven").removeClass('hide');
            return true;
          }else{
            $(".errSecond").addClass('hide');
          }
          break;

      }


   }

   function check(file){
      var ext = file.split('.').pop().toLowerCase();
      console.log(ext);
      return ext;
    }



     function trigimage(t) {
      //alert(t);
      switch(t){
        case 1:
          $("#imgFileone").trigger('click');
          break;

        case 2:
          $("#imgFiletwo").trigger('click');
          break;

        case 3:
          $("#imgFilethree").trigger('click');
          break;

        case 4:
          $("#imgFilefour").trigger('click');
          break;
      }
        
      
    }

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



    $("#imgFileone").change(function() {
        readURL(1,this);
    });

    $("#imgFiletwo").change(function() {
        readURL(2,this);
    });

    $("#imgFilethree").change(function() {
        readURL(3,this);
    });

    $("#imgFilefour").change(function() {
        readURL(4,this);
    });
   

</script>
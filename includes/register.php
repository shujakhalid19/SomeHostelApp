<form id="regForm" method="POST">
    <div class="ok alert alert-success hide">Account created :)</div>
    <div class="err alert alert-danger hide">Account was not created ! :(</div>
    <div class="form-group">
        <strong class="f-12">Username</strong>
        <input type="text" name="username" placeholder="eg; John Doe" class="form-control">
        <span id="taken" class="f-12 cl-blue hide">Username already taken</span>
    </div>
    <div class="form-group">
        <strong class="f-12">Email</strong>
        <input type="text" name="email" placeholder="Email" class="form-control">
        <span id="inc_email" class="f-12 cl-red hide">Invalid email address</span>
    </div>
    
    <strong class="f-12">Password</strong>
    <div class="form-group">
        <input type="text" name="password" placeholder="password" class="form-control">
    </div>
    <div class="remember-me">
        <label for="user_remember_me">
            <input name="user[remember_me]" type="hidden" value="0"><input class="remember-me-checkbox" type="checkbox" value="1" name="user[remember_me]" id="user_remember_me">
            <span>Remember me</span>
        </label>
    </div>
    <div class="form-group">
        <br/>
        <input type="submit" name="submit" class="btn btn-sm btn-success form-control">
        <br/>
        <br/>
        
        <div class="">
            Already have an account? <span class="cl-blue pointer" onclick="loginHTML()">Login here</span>
        </div>
    </div>
</form>
<div class="col-md-12 bd" style="padding:25px;background-color:#eee;">
    <strong class="f-12">Or Sign In Via</strong>
    <br/>
    <br/>
    
    <br/>
    <br/>
</div>



<script>
$(function(){
      var d = new Date();
    $("#regForm").on('submit', function(){
        event.preventDefault();

        $.ajax({
            type:"POST",
            url:"requests/register.php",
            data:$(this).serialize() + '&' + $.param({
                    'time': d.getTime()
                }),
            success:function(data){
                if(data==0){
                    $(".err").removeClass('hide');
                    $(".ok").addClass('hide');
                }else if(data==3){
                    $("#taken").removeClass('hide');
                    $(".ok").addClass('hide');
                }else if(data==4){
                    $("#inc_email").removeClass('hide');
                    $(".ok").addClass('hide');
                }else{
                    $(".err").addClass('hide');
                    $("#taken").addClass('hide');
                    $("#inc_email").addClass('hide');
                    $(".ok").removeClass('hide');
                }
            }       

        });


    })



})



</script>
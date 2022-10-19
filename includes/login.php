<form id="loginForm" method="post">

    <div class="form-group">
        <strong class="f-12">Username or Email</strong>
        <input type="text" name="username" placeholder="username" class="form-control">
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
        <div class="pull-right cl-blue">
            <div class="cl-blue pointer" onclick="forHTML()">Forgot your password?</div>
        </div>
    </div>
    <div class="form-group">
        <div id="fail" class="f-12 cl-red text-center hide">Incorrect username/password</div>
        <br/>
        <input type="submit" name="submit" class="btn btn-sm btn-success form-control">
        <br/>
        <br/>
        
        <div class="">
            Don&apos;t have an account? <span class="cl-blue pointer" onclick="regHTML()">Register here</span>
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
    $("#loginForm").on('submit', function(){
        event.preventDefault();

        $.ajax({
            type:"POST",
            url:"requests/login.php",
            data:$(this).serialize(),
            success:function(data){
                var resp = JSON.parse(data);
                    



                if(resp.state){
                    //alert("ok");
                    $("#logIn").html('<li class="dropdown"><ul class="nav navbar-nav navbar-right"><li><a href="#">Link</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="name_me" class="cl-blue">@'+resp.name+'</span> <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="profile.php">Profile</a></li><li><a href="#">Another action</a></li><li><a href="logout.php">Logout</a></li><li class="divider"></li><li><a href="#">Separated link</a></li></ul></li>');
                    
                    window.location.href="seller.php";
                }else{
                    $("#fail").removeClass("hide");
                }
            }

        });


    })



})



</script>
<?php
session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];


//echo $userId;


$type="web";

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Marketplace</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
		<!-- Latest compiled and minified CSS -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


		    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

		
		<link rel="stylesheet" href="css/main.css">
	</head>
<body class="bg-grey">

 <?php
            include('includes/navbar.php');
        ?>
			<div class="container" style="margin-top:20px;">
			


				<div class="col-md-5 col-xs-12 col-md-offset-3" style="background-color: #fff;padding:0px;">

									<div class="col-xs-12 col-md-12" style="margin:10px 4px 4px 4px;padding:2px">
		        		  


										<?php
										switch($type){
											case 'web':
												include('includes/sellerForm3.php');
												break;

											case 'js':
												include('includes/jsForm.php');
												break;

										}

							            	//include('includes/websiteForm.php');
							        	?>	
							        </div>	
		        
			</div>


</body>
</html>
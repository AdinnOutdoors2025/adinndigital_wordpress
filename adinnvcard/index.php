<?php
session_start();
$message="";
if(isset($_POST["VCardLogin"])) {
 $con = mysqli_connect('localhost','adinnvcarduser','Ph+d*PTr9^lc','adinnvcard') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM adinnvcard_userlist WHERE Email='" . $_POST["email"] . "' and Password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["Id"] = $row['Id'];
$_SESSION["Email"] = $row['Email'];
$message = "Success!";
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
//header("Location:adinnvcardreg.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adinn Vcard</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
      
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/component.css"/>
    <link rel="stylesheet" href="css/liststyle.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style>.box
  {
   width:800px;
   margin:0 auto;
  }
  .active_tab1
  {
   background-color:#fff;
   color:#333;
   font-weight: 600;
  }
  .inactive_tab1
  {
   background-color: #f5f5f5;
   color: #333;
   cursor: not-allowed;
  }
  .has-error
  {
   border-color:#cc0000;
   background-color:#ffff99;
  }
  </style>
</head>

 <body> 
 <div class="page-content">
	<img src="https://adinnoutdoors.com/wp-content/uploads/2018/10/adinn-outdoors.png" style="margin: 0px auto;display: block;padding: 50px;">
		<div class="form-v10-content">
		
			<form class="form-detail" action="" method="post" id="myform">			 
				<div class="form-left">
				<div class="tab-content">
				 <div class="tab-pane active" id="Basic_Infomation">
				 <p>To access your vcard account, please identify yourself by providing the information requested in the fields below, then click "Login". If you are not registered yet, click "Register Now" and follow the instructions to create an account.</p>
				<h2>Login</h2> 
						 				 
						<div class="form-row">
 <input type="text" name="email" id="email" class="input-text"  placeholder="Email Id"/>
         <span id="error_email" class="text-danger"></span>
		 </div> 				 
						<div class="form-row">
 <input type="password" name="password" id="password" class="input-text"  placeholder="Password"/>
         <span id="error_password" class="text-danger"></span>
		 </div>
					<div class="form-row"><div class="message"><?php if($message!="") { echo $message; } ?></div> </div> 
				<div class="form-right text-right">					 
					<div class="form-row-last">
					<a href="adinnvcardreg.php" class="float-left register text-center reg_but">Register Now</a>
					<input type="submit" name="VCardLogin" id="VCardLogin" class="register" value="Login"> 					   
					</div>
				</div>	
				
				</div>
				 
				</div>
				</div>
						
			</form>
		</div>
		<div class="space p-3"></div>
		</div>
		 
 </body>
</html>

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="js/modalEffects.js"></script>
<script src="js/classie.js"></script>

<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ff57cb620e5abc1"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

<script>
$(document).ready(function(){
 
 $('#btn_login_details').click(function(){ 
  var error_password = '';
  var error_mobile_no = '';
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   var mobile_validation = /^\d{10}$/;
  
  if($.trim($('#email').val()).length == 0)
  {
   error_email = 'Email is required';
   $('#error_email').text(error_email);
   $('#email').addClass('has-error');
  }
  else
  {
   if (!filter.test($('#email').val()))
   {
    error_email = 'Invalid Email';
    $('#error_email').text(error_email);
    $('#email').addClass('has-error');
   }
   else
   {
    error_email = '';
    $('#error_email').text(error_email);
    $('#email').removeClass('has-error');
   }
  }
   

 
if($.trim($('#password').val()).length == 0)
  {
   error_password = 'Password is required';
   $('#error_password').text(error_password);
   $('#password').addClass('has-error');
  }
  else
  {
   error_password = '';
   $('#error_password').text(error_password);
   $('#password').removeClass('has-error');
  }
   
  if(error_password != '' || error_last_name != '' || error_email != '' || error_mobile_no != '')
  {
   return false;
  }

 });
 
});

</script>

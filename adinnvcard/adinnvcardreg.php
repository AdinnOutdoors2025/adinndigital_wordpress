
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adinn Vcard</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width,itial-scale=1, maximum-scale=1">
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
  .custom-file-label {
    
    text-overflow: ellipsis;
    padding-right: 100px;
    overflow: hidden;
    white-space: nowrap;
}
  </style>
</head>

 <body> 
 <div class="page-content">
	<img src="https://adinndigital.com/wp-content/uploads/2021/04/Adinn-Digital.png" style="margin: 0px auto;display: block;padding: 50px;">
		<div class="form-v10-content">
		
			<form class="form-detail" action="#" method="post" id="myform" enctype="multipart/form-data">			 
				<div class="form-left">
				<div class="tab-content">
				 <div class="tab-pane active" id="Basic_Infomation">
				 <p>Fill Below detail to generate your Business VCard</p>
				<h2>Basic Infomation</h2> 
						<div class="form-row">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name">
							 <span id="error_first_name" class="text-danger"></span>
						</div>
						<div class="form-row">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name">
							 <span id="error_last_name" class="text-danger"></span>
						</div>		
						<div class="form-row">
							<input type="text" name="mobile_no" class="phone" maxlength="10" id="mobile_no" placeholder="Phone Number">
							 <span id="error_mobile_no" class="text-danger"></span>
						</div> 			 
						<div class="form-row">
 <input type="text" name="email" id="email" class="input-text"  placeholder="Email"/>
         <span id="error_email" class="text-danger"></span>
		 </div>
		 <div class="form-row">
 <input type="password" name="password" id="password" class="input-text"  placeholder="Password"/>
         <span id="error_password" class="text-danger"></span>
		 </div>
						 
						
				
				<div class="form-right text-right">					 
					<div class="form-row-last">
					<input type="button" name="btn_login_details" id="btn_login_details" class="register" value="Next"> 					   
					</div>
				</div>	
				</div>
				 <div class="tab-pane " id="Other_Infomation" >
				 <p>Fill Below detail to generate your Business VCard</p>
				<h2>Other Infomation</h2> 
						<div class="form-row">
						<div class="custom-file" style="margin-bottom: 15px;">
  <input type="file" class="custom-file-input" id="profileimage" name="profileimage" accept='image/*' />
  <label class="custom-file-label" for="profileimage" data-browse="Browse">Upload Your Profile Image</label>
</div>
						<input type="text" class="" id="" placeholder="Upload Your Profile Image" style="height:0;padding: 0;">
						<span id="error_profileimage" class="text-danger"></span>
					</div> 
					<div class="form-row">
						<input type="text" name="company" class="company" id="company" placeholder="Company Name">
						<span id="error_company" class="text-danger"></span>
					</div> 
						<div class="form-row">
							<input type="text" name="profession" class="profession" id="profession" placeholder="Profession">
							<span id="error_profession" class="text-danger"></span>
						</div>  
						<div class="form-row">
						<input type="web" name="website_url" id="website_url" class="input-text" placeholder="Website URL">
						<span id="error_website_url" class="text-danger"></span>
					</div> 
					<div class="form-row">
							<input type="text" name="whatsapp_number" class="phone" maxlength="10" id="whatsapp_number" placeholder="Whatsapp Number">
							 <span id="error_whatsapp_number" class="text-danger"></span>
						</div> 
						<div class="form-row">
						<textarea id="location" name="location" rows="4" cols="50" placeholder="Location"></textarea>
						</div> 
						<!--<div class="form-row">
						<input type="text" name="skype_id" id="skype_id" class="input-text" placeholder="Skype Id">
					</div>--> 
						<div class="form-row" style="margin: 0;"><h4>Social Links</h4></div>
						<div class="form-row">
						<input type="text" name="fb_url" id="fb_url" class="input-text" placeholder="FB URL">
						 <span id="error_fb_url" class="text-danger"></span>
					</div>	
						<div class="form-row">
						<input type="text" name="twitter_url" id="twitter_url" class="input-text" placeholder="Twitter  URL">
						 <span id="error_twitter_url" class="text-danger"></span>
					</div>	
						<div class="form-row">
						<input type="text" name="instagram_url" id="instagram_url" class="input-text" placeholder="Instagram URL">
						 <span id="error_instagram_url" class="text-danger"></span>
					</div>	
						<div class="form-row">
						<input type="text" name="linkedin_url" id="linkedin_url" class="input-text" placeholder="Linkedin URL">
						 <span id="error_linkedin_url" class="text-danger"></span>
					</div>	 
				<div class="form-right text-right">					 
					<div class="form-row-last">
					<input type="button" name="btn_other_details_prev" id="btn_other_details_prev" class="register float-left" value="Previous"> 
					<input type="button" name="btn_other_details" id="btn_other_details" class="register" value="Next"> 
										   
					</div>
				</div>	
				</div>
				 <div class="tab-pane" id="Profile_Infomation"> 
				<h2>Your Vcard Design</h2> 
				 <div class="holder">
				 <div style="margin-left: 5px;margin-right:5px;margin-top:20px;">
         
         <div class="userprofileimageholder"><img src="images/default.png" id="userprofileimage" class="adUserprofileimage"></div> 
         <div>
             <h1> <span id="fname">fname</span> <span id="lname">lname</span></h1>
            <p class="adProfession" style="padding: 0;" id="adprofession">Profession</p>
            <div class="adJagya20"></div> 
         </div>
      </div> 
       <div class="adModalContainer">
        
         <div class="md-modal md-effect-1" id="savemepopup">
            <div class="md-content">
               <h3>Save to Phone Book</h3>
               <div align="center">
                  <div class="adJagya10"></div>
                  <p>Save my Contact Information in your phone book</p>
                  <div class="adJagya10"></div>
                  <img src="" width="150px">
                  <p class="adModalNiAndarNaText">Scan above QR Code OR</p>
                  <p class="adModalNiAndarNaText">
                     <strong>Step : 1 - </strong>Download this
                     <!-- NICHE "abc.vcf" ni Jagya e tamare dynamic link mukvi -->
                     <a href="#">VCF File</a>
                  </p>
                  <p class="adModalNiAndarNaText"><strong>Step : 2 - </strong>Open the VCF File</p>
                  <p class="adModalNiAndarNaText"><strong>Step : 3 - </strong>Save To Contacts</p>
                  <div class="adJagya20"></div>
                  <a class="adModalChokdi md-close">Close Me!</a>
               </div>
            </div>
         </div> 
         <div class="md-modal md-effect-1" id="shareform">
            <div class="md-content">
               <h3>Share Profile</h3>
               <div>
                  <div class="adJagya10"></div>
                  <p>Share my Digital vCard in your network.</p>
                  <div class="addthis_inline_share_toolbox"></div>
                  <div class="adJagya20"></div>
                  <a class="adModalChokdi md-close">Close Me!</a>
               </div>
            </div>
         </div> 
         <div class="md-modal md-effect-1" id="enqform">
            <div class="md-content">
               <h3>Submit Enquiry </h3>
               <div>
                  <div class="adJagya10"></div>
                  <div class="adJagya20"></div>
                  <button class="adModalChokdi md-close">Close Me!</button>
               </div>
            </div>
         </div> 
      </div> 
      <div class="adAkhuContainer">
         <div class="adJagya40"></div> 
         <div class="adJagya10"></div>
         <div class="adCTAcontainer">
            <a id="admobile_url" href="#">
			<img src="images/phone-icon.jpg" style="width:45px"> 
            <span class="adCTAjamnuTEXT" id="admobile">9999999999</span>
            </a>
         </div>
         <div class="adCTAcontainer">
            <a id="ademail_url" href="#">
           <img src="images/mail-icon.jpg" style="width:45px"> 
            <span class="adCTAjamnuTEXT" id="ademail">info@adinn.co.in</span>
            </a>
         </div> 
         <div class="adCTAcontainer">
            <a id="adwebsite_url_link" href="#" target="_blank">
            <img src="images/link-icon.jpg" style="width:45px"> 
            <span class="adCTAjamnuTEXT" id="adwebsite_url">www.adinn.co.in</span>
            </a>
         </div>
         <div class="adCTAcontainer">
            <a target="_blank" id="adwhatsapp_number_link" href="#">
            <img src="images/whatsapp-icon.jpg" style="width:45px"> 
            <span class="adCTAjamnuTEXT" id="">Chat on Whatsapp</span>
            </a>
         </div> 
         <div class="adCTAcontainer">
            <a href="#"> 
			   <img src="images/location-icon.jpg" style="width:45px"> 
			    <span class="adCTAjamnuTEXT" id="adlocation"> 29,1st street,Vanamamalai Nagar, Bypass Rd, Madurai, Tamil Nadu 625010</span></div>
            </a>
         </div>
          
         <div class="center-text">
            <!--<a class="adTwobuttonShareCSS md-trigger" data-modal="shareform"><i class="fas fa-share-alt adTwobuttonShare"></i>Share
            </a>
            <a class="adTwobuttonShareCSS md-trigger" data-modal="savemepopup"><i class="fas fa-qrcode adTwobuttonShare"></i>Scan
            </a>-->
         </div> 
         <div>
            <div class="adJagya50"></div> 
			<div class="socialwrapper">
            <a href="#" class="adShareContainer" target="_blank" id="adfb_url"><img src="images/fb-icon.jpg" style="width:45px"> </a>
            <a href="#" class="adShareContainer" target="_blank" id="adtwitter_url"><img src="images/tw-icon.jpg" style="width:45px"> </a> 
            <a href="#" class="adShareContainer" target="_blank" id="adinstagram_url"><img src="images/insta-icon.jpg" style="width:45px"> </a>
            <a href="#" class="adShareContainer" target="_blank" id="adlinkedin_url"><img src="images/in-icon.jpg" style="width:45px"> </a>
             <!--<a href="#" class="adShareContainer" target="_blank" id="adskype_id_url"><img src="images/location-icon.jpg" style="width:45px"> </a>-->
			 </div>
			 <div class="adJagya50"></div> 
         </div>
        <div class="center-text">
		ATL, BTL, Digital Marketing, Outdoor Media Solutions, Media Buying and Planning, Roadshow & Rural Engagement Solutions, Exhibition Services, Retail Branding & Signage Solutions 
		</div>
         <div class="adJagya20"></div>
      </div>
	  
	  <div class="form-right text-right">					 
					<div class="form-row-last">
					<input type="button" name="GenerateVCard_Prev" id="GenerateVCard_Prev" class="register float-left" value="Previous"> 
					<input type="submit" name="GenerateVCard" id="GenerateVCard" class="register" value="Generate VCard"> 					   
					</div>
				</div>	
				</div>
				</div>
				
				</div>
					</div>		
			</form>
			<div class="space p-3"></div>
		</div> 
		 
 </body>
</html>
 <?php 
$host="localhost";
$user="adinnvcarduser";
$password="Ph+d*PTr9^lc";
$db_name="adinnvcard";
$conn1 = mysqli_connect($host,$user,$password,$db_name);
if ($conn1->connect_error)
{
   die("Connection failed: " . $conn1->connect_error);
  
} 
if(isset($_POST["GenerateVCard"]))
{ 
$adfirst_name = $_POST["first_name"];
$adlast_name = $_POST["last_name"];
$ademail = $_POST["email"];
$adpassword = $_POST["password"];
$admobile_no = $_POST["mobile_no"]; 
$adcompany = $_POST["company"]; 
$adprofession = $_POST["profession"]; 
$adwebsite_url = $_POST["website_url"]; 
$adwhatsapp_number = $_POST["whatsapp_number"]; 
$adlocation = $_POST["location"]; 
//$adskype_id = $_POST["skype_id"]; 
$adfb_url = $_POST["fb_url"]; 
$adtwitter_url = $_POST["twitter_url"]; 
$adinstagram_url = $_POST["instagram_url"]; 
$linkedin_url = $_POST["linkedin_url"]; 
 

$t=md5(md5(time()));
	$file_path = "images/profileimg/".$t;
	$newpath="https://adinndigital.com/adinnvcard/images/profileimg/".$t;
	$name_array = $_FILES['profileimage']['name'];
    $target_dir = "images/profileimg/";
$target_file = $target_dir . basename($_FILES["profileimage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
 
 
  $query1 = "SELECT * FROM adinnvcard_userlist WHERE Email = '$ademail'";
 $query3 = "SELECT * FROM adinnvcard_userlist WHERE Mobile_Number = '$admobile_no'";
  $result1 = mysqli_query($conn1, $query1);
  $result2 = mysqli_query($conn1, $query3);
  $rowc = mysqli_num_rows($result1);
  $rowmob = mysqli_num_rows($result2);
  if ($rowc > 0) {
    echo "<script>alert('Email Already Exist');</script>";
  }
elseif ($rowmob > 0) {

echo "<script>alert('Mobile Already Exist');</script>";
 }
 else{
    $query2 = "INSERT INTO adinnvcard_userlist (First_Name, Last_Name, Email, Password, Mobile_Number, Profile_URL, Company, Profession, Website_URL, Whatsapp_Number, Location,  FB_URL, Twitter_URL, Instagram_URL, Linkedin_URL) VALUES ('$adfirst_name','$adlast_name','$ademail','$adpassword','$admobile_no','$newpath$name_array','$adcompany','$adprofession','$adwebsite_url','$adwhatsapp_number','$adlocation','$adfb_url','$adtwitter_url','$adinstagram_url','$linkedin_url')";
  
  if(mysqli_query($conn1,$query2))
	  {
	      move_uploaded_file($_FILES["profileimage"]["tmp_name"], $file_path .$name_array);
		  $last_id = mysqli_insert_id($conn1);
  //echo "New record created successfully. Last inserted ID is: " . $last_id; 
        $to = $ademail;
	    $subject = "Adinn Vcard Registered Details";
		$from = 'info@adinn.co.in';
 
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
		$headers .= 'From: Adinn '.$from."\r\n".
		    'Reply-To: '.$from."\r\n" .
		    'X-Mailer: PHP/' . phpversion();
 
		$message = '<html><body>';
		$message .= 'Your Adinn VCard URL: https://adinndigital.com/adinnvcard/adinnvcard.php?id='.$last_id;
		$message .= '</body></html>';
 
		if(mail($to, $subject, $message, $headers)){			 
		
		echo '<script type="text/javascript">
		    		alert("User Registered Successfully");
                </script>'; 
		} else{
		    echo "<script>
                    alert('User Not Registered');
                </script>";
		}
}

 }
}
else{
 
}
?>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="js/modalEffects.js"></script>
<script src="js/classie.js"></script>

<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ff57cb620e5abc1"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#userprofileimage').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}
function ValidateSize() {
        var image = document.getElementById("profileimage");
        if (typeof (image.files) != "undefined") {
            var size = parseFloat(image.files[0].size / (1024 * 1024)).toFixed(2); 
            if(size > 2) {
                alert('Please select image size less than 2 MB');
            } 
        } else {
            alert("This browser does not support HTML5.");
        }
    }

$("#profileimage").change(function() {
  readURL(this);
  ValidateSize(this);
});
$(document).ready(function() {
  $('input[type="file"]').on("change", function() {
    let filenames = [];
    let files = document.getElementById("profileimage").files;
    if (files.length > 1) {
      filenames.push("Total Files (" + files.length + ")");
    } else {
      for (let i in files) {
        if (files.hasOwnProperty(i)) {
          filenames.push(files[i].name);
        }
      }
    }
    $(this)
      .next(".custom-file-label")
      .html(filenames.join(","));
  });
});
$(document).ready(function(){
 
 $('#btn_login_details').click(function(){
   var error_first_name = '';
  var error_last_name = '';
  var error_email = '';
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
   

 
if($.trim($('#first_name').val()).length == 0)
  {
   error_first_name = 'First Name is required';
   $('#error_first_name').text(error_first_name);
   $('#first_name').addClass('has-error');
  }
  else
  {
   error_first_name = '';
   $('#error_first_name').text(error_first_name);
   $('#first_name').removeClass('has-error');
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
  
  if($.trim($('#last_name').val()).length == 0)
  {
   error_last_name = 'Last Name is required';
   $('#error_last_name').text(error_last_name);
   $('#last_name').addClass('has-error');
  }
  else
  {
   error_last_name = '';
   $('#error_last_name').text(error_last_name);
   $('#last_name').removeClass('has-error');
  }
if($.trim($('#mobile_no').val()).length == 0)
  {
   error_mobile_no = 'Mobile Number is required';
   $('#error_mobile_no').text(error_mobile_no);
   $('#mobile_no').addClass('has-error');
  }
  else
  {
   if (!mobile_validation.test($('#mobile_no').val()))
   {
    error_mobile_no = 'Invalid Mobile Number Enter 10 Digits';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').addClass('has-error');
   }
   else
   {
    error_mobile_no = '';
    $('#error_mobile_no').text(error_mobile_no);
    $('#mobile_no').removeClass('has-error');
   }
  }
  if(error_first_name != '' || error_last_name != '' || error_email != '' || error_mobile_no != '' || error_password != '')
  {
   return false;
  }
else
  { 
   $('#Basic_Infomation').removeClass('active'); 
   $('#Other_Infomation').addClass('active');
   $('#Profile_Infomation').removeClass('active');
  }  
 });

 $('#btn_other_details').click(function(){
  var error_error_profileimage = '';
  var error_website_url = '';
  var error_company = '';
  var error_profession = '';
  var error_whatsapp_number = '';
  var url_validation = /\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i;
  var fb_validation = /\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i;
  var twitter_validation = /\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i;
  var instagram_validation = /\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i;
  var linkedin_validation = /\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i; 
  var whatsapp_number_validation = /^\d{10}$/;
    
if (!fb_validation.test($('#fb_url').val()))
{
error_fb_url = 'Invalid Facebook URL';
$('#error_fb_url').text(error_fb_url);
$('#fb_url').addClass('has-error');
}
else
{
error_fb_url = '';
$('#error_fb_url').text(error_fb_url);
$('#fb_url').removeClass('has-error');
}
  
if (!twitter_validation.test($('#twitter_url').val()))
{
error_twitter_url = 'Invalid Twitter URL';
$('#error_twitter_url').text(error_twitter_url);
$('#twitter_url').addClass('has-error');
}
else
{
error_twitter_url = '';
$('#error_twitter_url').text(error_twitter_url);
$('#twitter_url').removeClass('has-error');
}
  
if (!instagram_validation.test($('#instagram_url').val()))
{
error_instagram_url = 'Invalid Instagram URL';
$('#error_instagram_url').text(error_instagram_url);
$('#instagram_url').addClass('has-error');
}
else
{
error_instagram_url = '';
$('#error_instagram_url').text(error_instagram_url);
$('#instagram_url').removeClass('has-error');
}
  
if (!linkedin_validation.test($('#linkedin_url').val()))
{
error_linkedin_url = 'Invalid Linkedin URL';
$('#error_linkedin_url').text(error_linkedin_url);
$('#linkedin_url').addClass('has-error');
}
else
{
error_linkedin_url = '';
$('#error_linkedin_url').text(error_linkedin_url);
$('#linkedin_url').removeClass('has-error');
}
	
	
	
  if($.trim($('#website_url').val()).length == 0)
  {
   error_website_url = 'Website URL is required';
   $('#error_website_url').text(error_website_url);
   $('#website_url').addClass('has-error');
  }
  else
  {
   if (!url_validation.test($('#website_url').val()))
   {
    error_website_url = 'Invalid Website URL';
    $('#error_website_url').text(error_website_url);
    $('#website_url').addClass('has-error');
   }
   else
   {
    error_website_url = '';
    $('#error_website_url').text(error_website_url);
    $('#website_url').removeClass('has-error');
   }
  }
  
  
  if($.trim($('#profileimage').val()).length == 0)
  {
   error_profileimage = 'Profile Image is required';
   $('#error_profileimage').text(error_profileimage);
   $('#profileimage').addClass('has-error');
  }
  else
  {
   error_profileimage = '';
   $('#error_profileimage').text(error_profileimage);
   $('#profileimage').removeClass('has-error');
  }
  
  
  if($.trim($('#company').val()).length == 0)
  {
   error_company = 'Company Name is required';
   $('#error_company').text(error_company);
   $('#company').addClass('has-error');
  }
  else
  {
   error_company = '';
   $('#error_company').text(error_company);
   $('#company').removeClass('has-error');
  }
   
  if($.trim($('#profession').val()).length == 0)
  {
   error_profession = 'Profession is required';
   $('#error_profession').text(error_profession);
   $('#profession').addClass('has-error');
  }
  else
  {
   error_profession = '';
   $('#error_profession').text(error_profession);
   $('#profession').removeClass('has-error');
  }
  
  if($.trim($('#whatsapp_number').val()).length == 0)
  {
   error_whatsapp_number = 'Whatsapp Number is required';
   $('#error_whatsapp_number').text(error_whatsapp_number);
   $('#whatsapp_number').addClass('has-error');
  }
  else
  {
   if (!whatsapp_number_validation.test($('#whatsapp_number').val()))
   {
    error_whatsapp_number = 'Invalid Whatsapp Number Enter 10 Digits';
    $('#error_whatsapp_number').text(error_whatsapp_number);
    $('#whatsapp_number').addClass('has-error');
   }
   else
   {
    error_whatsapp_number = '';
    $('#error_whatsapp_number').text(error_whatsapp_number);
    $('#whatsapp_number').removeClass('has-error');
   }
  }
  
  
  if(error_whatsapp_number != '' || error_profession != '' || error_company != '' || error_website_url != '')
  {
   return false;
  }
  else
  {
 $('#Basic_Infomation').removeClass('active'); 
   $('#Other_Infomation').removeClass('active');
   $('#Profile_Infomation').addClass('active');
  }
  
var fname=$('#first_name').val();
var lname=$('#last_name').val();
var ademail=$('#email').val();
var admobile=$('#mobile_no').val();
var adcompany=$('#company').val();
var adprofession=$('#profession').val();
var adwebsite_url=$('#website_url').val();
var adwhatsapp_number=$('#whatsapp_number').val();
var adlocation=$('#location').val();
var adskype_id=$('#skype_id').val();
var adfb_url=$('#fb_url').val();
var adtwitter_url=$('#twitter_url').val();
var adinstagram_url=$('#instagram_url').val();
var adlinkedin_url=$('#linkedin_url').val(); 
$('#fname').html(fname);
$('#lname').html(lname);
$('#ademail').html(ademail);
$('#ademail_url').attr("href", "mailto:" + ademail);
$('#admobile').html(admobile);
$('#admobile_url').attr("href", "tel:" + admobile);
$('#adcompany').html(adcompany);
$('#adprofession').html(adprofession);
$('#adwebsite_url').html(adwebsite_url);
$('#adwebsite_url_link').attr("href", "//" + adwebsite_url);
$('#adwhatsapp_number').html(adwhatsapp_number);
$('#adwhatsapp_number_link').attr("href", "https://api.whatsapp.com/send?phone=" + adwhatsapp_number + "&text=Want%20to%20know%20more%20about%20our%20products%20and%20services.");
$('#adlocation').html(adlocation); 
$('#adskype_id_url').attr("href", "skype:" + adskype_id);
$('#adskype_id').html(adskype_id);
$('#adfb_url').attr("href", "//" +  adfb_url);
$('#adtwitter_url').attr("href", "//" +  adtwitter_url);
$('#adinstagram_url').attr("href", "//" +  adinstagram_url);
$('#adlinkedin_url').attr("href", "//" +  adlinkedin_url); 
 });
 
 
 $('#btn_other_details_prev').click(function(){
	 $('#Basic_Infomation').addClass('active'); 
   $('#Other_Infomation').removeClass('active');
   $('#Profile_Infomation').removeClass('active');
 });
 $('#GenerateVCard_Prev').click(function(){
	 $('#Basic_Infomation').removeClass('active'); 
   $('#Other_Infomation').addClass('active');
   $('#Profile_Infomation').removeClass('active');
 });
 
});

</script>

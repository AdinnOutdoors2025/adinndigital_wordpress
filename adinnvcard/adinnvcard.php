<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$host="localhost";
$user="adinnvcarduser";
$password="Ph+d*PTr9^lc";
$db_name="adinnvcard";
$conn1 = mysqli_connect($host,$user,$password,$db_name);
if ($conn1->connect_error)
{
   die("Connection failed: " . $conn1->connect_error);
  
}
 
$id=($_GET["id"]); 

$query5 = "SELECT * FROM adinnvcard_userlist WHERE Id='$id'";

$res = mysqli_query($conn1, $query5);
    if (mysqli_num_rows($res) > 0) {  
        while ($row = mysqli_fetch_array($res)) { 
             
?>
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
  .holder{margin:25px auto}
  </style>
</head>

 <body> 
<div class="holder">
 <div style="margin-left: 5px;margin-right:5px;margin-top:20px;">
         
         <div class="userprofileimageholder"><img src="<?php echo $row["Profile_URL"]; ?>" id="userprofileimage" class="adUserprofileimage"></div> 
         <div>
             <h1> <span id="fname"><?php echo $row["First_Name"]; ?></span> <span id="lname"><?php echo $row["Last_Name"]; ?></span></h1>
            <p class="adProfession" style="padding: 0;" id="adprofession"><?php echo $row["Profession"]; ?></p>
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
            <a id="admobile_url" href="tel:<?php echo $row["Mobile_Number"]; ?>">
            <img src="images/phone-icon.jpg" style="width:45px"> 
            <span class="adCTAjamnuTEXT" id="admobile"><?php echo $row["Mobile_Number"]; ?></span>
            </a>
         </div>
         <div class="adCTAcontainer">
            <a id="ademail_url" href="mailto:<?php echo $row["Email"]; ?>">
             <img src="images/mail-icon.jpg" style="width:45px"> 
            <span class="adCTAjamnuTEXT" id="ademail"><?php echo $row["Email"]; ?></span>
            </a>
         </div> 
         <div class="adCTAcontainer">            
		  <img src="images/link-icon.jpg" style="width:45px;float: left;">  
            <div> 
			<span class="adCTAjamnuTEXT" id="adwebsite_url"><?php echo $row["Company"]; ?></span>
            <br>
			<a id="adwebsite_url_link" href="<?php echo $row["Website_URL"]; ?>" target="_blank">
			<span class="adCTAjamnuTEXT" id="adwebsite_url"><?php echo $row["Website_URL"]; ?></span>
            </a></div>
         </div>
         <div class="adCTAcontainer">
            
            <a target="_blank" id="adwhatsapp_number_link" href="https://api.whatsapp.com/send?phone=+91<?php echo $row["Whatsapp_Number"]; ?>&text=Chat with me...">
            <img src="images/whatsapp-icon.jpg" style="width:45px"> 
            <span class="adCTAjamnuTEXT" id="">Chat on Whatsapp</span>
            </a>
         </div> 
         <div class="adCTAcontainer"> 
               <a target="_blank" id="" href="https://goo.gl/maps/pXQSZgwkLvqCjoP39">
                    <img src="images/location-icon.jpg" style="width:45px;float: left;margin-right: 15px;">  <p style="margin-bottom:0" class="adCTAjamnuTEXT" id="adlocation"><?php echo $row["Location"]; ?></p>
            </a>
         </div>
         <!--<div class="adJagya30"></div>
         <div class="center-text">
            <a class="adTwobuttonShareCSS md-trigger" data-modal="shareform"><i class="fas fa-share-alt adTwobuttonShare"></i>Share
            </a> 
            <a class="adTwobuttonShareCSS md-trigger" data-modal="savemepopup"><i class="fas fa-qrcode adTwobuttonShare"></i>Scan
            </a>
         </div> --> 
         <div>
            <div class="adJagya40"></div> 
			<div class="socialwrapper">
            <a href="<?php echo $row["FB_URL"]; ?>" class="adShareContainer" target="_blank" id="adfb_url"><img src="images/fb-icon.jpg" style="width:45px"></a>
            <a href="<?php echo $row["Twitter_URL"]; ?>" class="adShareContainer" target="_blank" id="adtwitter_url"><img src="images/tw-icon.jpg" style="width:45px"></a> 
            <a href="<?php echo $row["Instagram_URL"]; ?>" class="adShareContainer" target="_blank" id="adinstagram_url"><img src="images/insta-icon.jpg" style="width:45px"></a>
            <a href="<?php echo $row["Linkedin_URL"]; ?>" class="adShareContainer" target="_blank" id="adlinkedin_url"><img src="images/in-icon.jpg" style="width:45px"></a>
         </div>        
         <div class="adJagya40"></div>
      </div>
	  <div class="center-text">
		ATL, BTL, Digital Marketing, Outdoor Media Solutions, Media Buying and Planning, Roadshow & Rural Engagement Solutions, Exhibition Services, Retail Branding & Signage Solutions 
		</div>
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
  var error_website_url = '';
  var error_company = '';
  var error_profession = '';
  var error_whatsapp_number = '';
  var url_validation = /^((https?|ftp|smtp):\/\/)?(www.)?[a-z0-9]+(\.[a-z]{2,}){1,3}(#?\/?[a-zA-Z0-9#]+)*\/?(\?[a-zA-Z0-9-_]+=[a-zA-Z0-9-%]+&?)?$/;
  var whatsapp_number_validation = /^\d{10}$/;
    
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
$('#adwebsite_url_link').attr("href", "https://" + adwebsite_url);
$('#adwhatsapp_number').html(adwhatsapp_number);
$('#adwhatsapp_number_link').attr("href", "https://api.whatsapp.com/send?phone=" + adwhatsapp_number + "&text=Want%20to%20know%20more%20about%20our%20products%20and%20services.");
$('#adlocation').html(adlocation); 
$('#adskype_id_url').attr("href", "skype:" + adskype_id);
$('#adskype_id').html(adskype_id);
$('#adfb_url').attr("href", adfb_url);
$('#adtwitter_url').attr("href", adtwitter_url);
$('#adinstagram_url').attr("href", adinstagram_url);
$('#adlinkedin_url').attr("href", adlinkedin_url); 
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
<?php
}	
}	
?>
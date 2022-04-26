<?php
require_once('../ClassLibraries/MainClass.php');
// include('../ClassLibraries/hdplusMothers/MainClass.php');
$mainPlug = new mainClass();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/hdplus-logo.jpg"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->

  	<!-- Notification -->
	<!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Toastr -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <title>Staging Website</title>
</head>

<?php
if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
  $submitStatus = $mainPlug->uploadOrder($_POST);

  if($submitStatus == 'good'){
    // echo 'gooood';
    echo " <script type='text/javascript'>   
    $(document).ready(function() {
    toastr.options.positionClass = 'toast-top-right';
    toastr.options.closeButton = true;
    toastr.options.closeDuration = 300;
    toastr.success('A Customer Service Representative will be in touch to complete your order.', 'Order Submited');
});
</script>";
  }else{
    echo 'Error: '.$submitStatus ;
  }
}
?>
<body>
    <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
            <a href=""><img src="images/hdplus-logo.jpg" alt=""></a>
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        <div class="nav-links">
            <div class="hfe-search-icon-toggle">
                    <!-- <input placeholder="" class="hfe-search-form__input" type="search" name="s" title="Search" value="" style="padding-right: 44px;"> -->
                    <i class="fas fa-search" aria-hidden="true"></i>
                </div>
        <div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
              <a href="#" class="elementor-button-link elementor-button elementor-size-sm disabled" role="button">
              <span class="elementor-button-content-wrapper">
              <span class="elementor-button-icon elementor-align-icon-left"><i aria-hidden="true" class="fas fa-bars"></i></span>
              <span class="elementor-button-text"></span>
              </span>
              </a>
            </div>
        </div>
        <div class="lg-hidden">
            <a href="https://www.hd-plus.com.gh/" class="">Home</a>
            <a href="https://www.hd-plus.com.gh/packages/" class="">Packages</a>
            <a href="https://www.hd-plus.com.gh/promotions/" class="">Promotions</a>
            <a href="https://www.hd-plus.com.gh/get-hd/" class="">Find A Dealer</a>
            <a href="https://www.hd-plus.com.gh/activate-hd/" class="">Activate HD+</a>
            <a href="https://www.hd-plus.com.gh/about-us/" class="">About Us</a>
            <a href="https://www.hd-plus.com.gh/faqs/" class="">FAQs</a> 
        </div>
        </div>
    </div>
    <div class="container-contact100">
      <div class="wrap-contact100">
        <form class="contact100-form validate-form" action="" method="POST">
          <span class="contact100-form-title">
          Place your order for an HD+ Decoder with 5 months subscription at GHC170 for mom and we will call you to arrange delivery. The first 3 orders per day get to treat mom to lunch with Adina and Akrobetu on Mother’s Day.
          </span>
  
          <label class="label-input100" for="first-name">Tell us your name *</label>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
            <input id="first-name" class="input100" type="text" name="fname" placeholder="First name" required>
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
            <input class="input100" type="text" name="lname" placeholder="Last name" required>
            <span class="focus-input100"></span>
          </div>
  
          <label class="label-input100" for="first-name">Contact *</label>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
            <input id="first-name" class="input100" type="email" name="email" placeholder="Email" required>
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
            <input class="input100" type="tel" name="phone_number" placeholder="Phone Number" required>
            <span class="focus-input100"></span>
          </div>

          <label class="label-input100" for="first-name">Location *</label>
          <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
            <input id="first-name" class="input100" type="text" name="moms_loc" placeholder="Mom's Location" required>
            <span class="focus-input100"></span>
          </div>
          <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
            <input class="input100" type="text" name="your_loc" placeholder="Your Location" required>
            <span class="focus-input100"></span>
          </div>

          <label class="label-input100" for="phone">Mom's Name *</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="moms_name" placeholder="Eg. Jane Doe" required>
					<span class="focus-input100"></span>
				</div>
  
          <label class="label-input100" for="message">Write A Message To Mom</label>
          <div class="wrap-input100 validate-input" data-validate = "Message is required">
            <textarea id="message" class="input100" name="message_to_mom" placeholder="Write A Message To Mom"></textarea>
            <span class="focus-input100"></span>
          </div>
  
          <p style="color: #bd1111;">Terms and Conditions apply</p>
          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn" name="submit" value="submit">
              Submit
            </button>
          </div>
        </form>

        <img class="img-mom" src="images/bg.png" alt="">
      </div>
    </div>
  
    <div class="footer">
        <div class="omg-wrapper">
         <a class="logo-a" href=""><img src="images/hdplus-logo.jpg" alt="" width="74px"></a>
        </div>
        <div class="icon-wrapper">
         <a class="icon-a" href=""><i class="fab fa-youtube"></i></a>
         <a class="icon-a" href=""><i class="fab fa-instagram"></i></a>
         <a class="icon-a" href=""><i class="fab fa-facebook-f"></i></a>
         <a class="icon-a" href=""><i class="fab fa-twitter"></i></a>
        </div>
        <div class="text-wrapper">
          <a class="text-a" href="">Subscribe</a>
          <a class="text-a" href="">Packages</a>
          <a class="text-a" href="">Product Info</a>
          <a class="text-a" href="">Help & Services</a>
          <a class="text-a" href="">Terms Of Delivery</a>
        </div>
        <div class="text-wrapper_b">
         <a class="text-b" href="">COMPANY</a>
         <a class="text-b" href="">CAREER</a>
         <a class="text-b" href="">PRESS</a>
         <a class="text-b" href="">IMPRINT</a>
         <a class="text-b" href="">PRIVACY</a>
         <a class="text-b" href="">TERMS & CONDITIONS</a>
       </div>
         <div class="ses-wrapper"><a href="https://www.ses.com/">SES GROUP</a></div>
         <div class="c-rigth"><p class="p-footer">COPYRIGHT © 2020 ALL RIGHTS RESERVED</p></div>
       </div>

       
</body>
</html>
<?php 
$errorMessage = '';
$successMessage = '';

if(isset($_POST['submit'])){
 $name = $_POST['fullName'];
 $visitor_email = $_POST['email_id'];
 $visitor_Phone_Number = $_POST['phone_Number'];
 $Subject = $_POST['subject'];
 $Message = $_POST['message'];

 $email_body = 'Name: ' .$name. '<br>Email: ' .$visitor_email. '<br>Phone No: ' .$visitor_Phone_Number. '<br>Message: ' .$Message;

 $to = "communication@bongotoru.in";

 $headers = ['From' => $visitor_email, 'Reply-To' => $visitor_email, 'Content-type' => 'text/html; charset=iso-8859-1'];

 if(mail($to,$Subject,$email_body,$headers))
 {
  $successMessage = "<p style='color: green;'>Thank you for contacting us :)</p>";
 }
 else{
  $errorMessage = "<p style='color: red;'>Oops, something went wrong. Please try again later</p>";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bongotoru - Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand logo-show" href="index.html"><img src="images/n-logo.png" class="img-fluid"
            style="max-width:183px;"></a>
        <a class="navbar-brand logo-hide" href="index.html"><img src="images/n-logo-red.png" class="img-fluid"
              style="max-width:183px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
  
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item dropdown-h">
              <a href="javascript:;" class="nav-link">About</a>
              <div class="h-drop">
                <ul>
                  <li>
                    <a href="about.html">About US</a>
                  </li>
                  <li>
                    <a href="the-team.html">Team</a>
                  </li>
                  <li>
                    <a href="we-care.html">We Care</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item"><a href="events.html" class="nav-link">Events</a></li>
            <!-- <li class="nav-item"><a href="javascript:;" class="nav-link">Sponsors</a></li>
            <li class="nav-item"><a href="javascript:;" class="nav-link">Gallery</a></li> -->
            <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/2022-Website-Headers-Home-03.jpg');" data-stellar-background-ratio="0.5">
      <div class="img-overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Address:</span> 392 C, Shipra Suncity, Indirapuram, Ghaziabad - 201014, Uttarpradesh</p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p>
                    <span>Phone:</span> 
                      <a href="tel://1234567920">	+91 98738 89299
                      </a>
                      <a class="d-block" href="tel://1234567920">	+91 9899793699 
                      </a>
                  </p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="https://mail.google.com/mail/?view=cm&fs=1&to=communication@bongotoru.in">	communication@bongotoru.in</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <form class="bg-light p-5 contact-form" action="" method="POST">
              <div class="form-group">
                <input type="text" name="fullName" class="form-control" placeholder="Your Name *" required>
              </div>
              <div class="form-group">
                <input type="email" name="email_id" class="form-control" placeholder="Your Email *" required>
              </div>
              <div class="form-group">
                <input type="number" name="phone_Number" class="form-control" placeholder="Your Phone Number *" required>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject *" required>
              </div>
              <div class="form-group">
                <textarea name="message" cols="30" rows="7" class="form-control" placeholder="Your Message *" required></textarea>
              </div>
              <div class="form-group">
                <!-- <a onclick="runForrestRun()" id="submit"> -->
                  <button name="submit" type="submit" name="submit" value="submit" class="btn btn-primary py-3 px-5">Submit
                  </button>
                <!-- </a> -->
              </div>
              <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
              <?php echo((!empty($successMessage)) ? $successMessage : '') ?>
            </form>

            
          
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14006.955109521428!2d77.3762312!3d28.6375902!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d4657c292f5e66e!2sBongotoru!5e0!3m2!1sen!2sin!4v1666845216100!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        	</div>
        </div>
      </div>
    </section>
	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <a href="index.html">
                <img src="images/n-logo.png" alt="image" style="max-width:183px;">
              </a>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://www.twitter.com/bongotoru"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/bongotoru"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/bongotoru"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <div class="row">
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li><a href="index.html" class="d-block">Home</a></li>
                    <li><a href="the-team.html" class="d-block">Team</a></li>
                    <li><a href="we-care.html" class="d-block">We Care</a></li>
                  </ul>
                </div>
                
                <div class="col-md-6">
                  <ul class="list-unstyled">
                    <li><a href="about.html" class="d-block">About Us</a></li>
                    <li><a href="contact.php" class="d-block">Contact Us</a></li>
                    <li><a href="events.html" class="d-block">Events</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">392 C, Shipra Suncity, Indirapuram, Ghaziabad - 201014, Uttarpradesh</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 98738 89299, +91 9899793699</span></a></li>
                  <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=communication@bongotoru.in"><span class="icon icon-envelope"></span><span
                        class="text">communication@bongotoru.in</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
  
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | BONGOTORU 
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="social-widget">
      <ul>
        <li>
          <a href="javascript:;" target="_blank" title="Facebook" class="sc-bx d-flex align-items-center justify-content-center">
            <img src="images/facebook.png" alt="image">
            <div class="sc-txt"></div>
          </a>
        </li>
        <li>
          <a href="javascript:;" target="_blank" title="Google" class="sc-bx d-flex align-items-center justify-content-center">
            <img src="images/google.png" alt="image">
            <div class="sc-txt"></div>
          </a>
        </li>
        <li>
          <a href="javascript:;" target="_blank" title="Instagram" class="sc-bx d-flex align-items-center justify-content-center">
            <img src="images/instagram.png" alt="image">
            <div class="sc-txt"></div>
          </a>
        </li>
      </ul>
    </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
</body>
</html>
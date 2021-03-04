<?PHP 
session_start();
if (!isset($_GET['evn']) || !isset($_SESSION['V-Help '])) {
  header('location:index.php');
}else {
  $event_name = $_GET['evn'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>V-Help | Single Platform for Multiple Services</title>
	<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style type="text/css">
    @media screen and (max-width: 768px) {
      #intext {
       margin-top: -90px;
      }
    }
  </style>
</head>
<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><img src="assets/img/Vhelp_logo.JPG"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php#header">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="index.php#faq">FAQ</a></li>

          <li class="get-started"><a href="index.php#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <br><br>

	<section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Get Your Service</h2>
        </div>

        <div class="row">


          <div class="col-lg-6 col-md-12 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200"  >
            <div class="info">
              <div style="margin-top: 20%;" >
                <h2 id="intext" style="font-weight: bold;line-height: 60px;">We make you happy with our<br> QUALIFIED PROFESSIONALS!</h2>
                <p><a href="index.html">V-HELP</a> Single Platform for Multiple Services</p>
              </div>


            </div>
          </div>


          <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="contact_request.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <p>Service Request : <b><?PHP echo $event_name;?></b></p>
              </div>
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" name="contact" id="contact" placeholder="Your Contact" data-rule="contact" data-msg="Please enter a valid contact" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="hidden" name="services" class="form-control" id="subject" value="<?PHP echo $event_name;?>"required/>
              <div class="validate"></div>
              </div>
              <div class="form-group">
                <select name="time" class="form-control" id="subject" data-msg="Please select the service" required>
                  <option value="">------ When should we contact ------</option>
                  <option value="All Day">All Day</option>
                  <option value="Morning 9 :00 AM to 01 :00 PM">Morning 9 :00 AM to 01 :00 PM</option>
                  <option value="Afternoon 01:00 PM to 07:00 PM">Afternoon 01:00 PM to 07:00 PM</option>
                </select>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Mention Your concern" placeholder="Mention Your concern" required></textarea>
                <div class="validate"></div>
              </div>
              
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center sendmsg"><button type="submit" name="submit" >Send Message</button></div>
            </form>
          </div>
      </div>
      </div>
    </section><!-- End Contact Section -->

 <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            <strong>&copy; Copyright Vhelp</strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by AITAM <a href="http://aitamsac.in/">Developers Club</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="index.php#hero" class="scrollto">Home</a>
            <a href="index.php#about" class="scrollto">About</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
 <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
  function studing() {
    if($("#present_study_yes").prop("checked") == true){
      $(".student_yes").show();
    }else{
      $(".student_yes").hide();
    }
  }
  </script>
</body>
</html>
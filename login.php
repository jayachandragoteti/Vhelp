<?PHP 
session_start();
$use="V-Help";
$pass="V-Help-password";
include 'db_connection.php';
if (isset($_POST['login_submit'])) {

    $username=$_POST['username'];
    $password=$_POST['password'];
    if ($username == $use && $password == $pass) {
        $_SESSION['V-Help']="V-Help | Single Platform for Multiple Service";
        header('location:Customer_requests.php');
    } else {
        echo"<script>alert('username or password are wrong')</script>";
    }  
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
          <h2>Login</h2>
        </div>

        <div class="row justify-content-md-center">
          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">

              <div class="form-group">
                <input type="text" name="username" class="form-control" id="name" placeholder="Username" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Your password" data-rule="email" data-msg="Please enter a valid password" required/>
                <div class="validate"></div>
              </div>
              <div class="text-center sendmsg">
                <button type="submit" name="login_submit" class='btn-lg btn-success'>Login</button>
              </div>
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

</body>
</html>
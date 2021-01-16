<?PHP 
session_start();
if (!isset($_SESSION['V-Help'])) {
  header('location:index.php');
}
include 'db_connection.php';
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
          <h2>Customer Requests</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <div class="table-responsive">
                <table class="table ">
                    <thead class="bg-success">
                        <tr>
                            <th scope="col">sno</th>
                            <th scope="col">Service</th>
                            <th scope="col">Request Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Customer Phone</th>
                            <th scope="col">Contact Timings</th>
                            <th scope="col">Requirements:</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?PHP 
                        $sellect=mysqli_query($connect,"SELECT * FROM `servicerequests` ORDER BY `sno` DESC");
                        $i=1;
                        while ($row=mysqli_fetch_array($sellect)) { ?>
                        <tr>
                            <th scope="col"><?PHP echo $i;?></th>
                            <th scope="col"><?PHP echo $row['services'];?></th>
                            <th scope="col"><?PHP echo $row['request_id'];?></th>
                            <th scope="col"><?PHP echo $row['name'];?></th>
                            <th scope="col"><?PHP echo $row['email'];?></th>
                            <th scope="col"><?PHP echo $row['contact'];?></th>
                            <th scope="col"><?PHP echo $row['time'];?></th>
                            <th scope="col"><?PHP echo $row['message'];?></th>
                        </tr>
                        <?PHP $i ++; }  ?>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
        <div class="section-title" data-aos="fade-up">
          <h2>Carrier Councilling Requests</h2>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <div class="table-responsive">
                <table class="table ">
                    <thead class="bg-success">
                        <tr>
                            <th scope="col">sno</th>
                            <th scope="col">Service</th>
                            <th scope="col">Request Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Customer Phone</th>
                            <th scope="col">Contact Timings</th>
                            <th scope="col">Requirements:</th>
                            <th scope="col">Present Studing</th>
                            <th scope="col">UG/PG</th>
                            <th scope="col">Standard</th>
                            <th scope="col">National/International Education</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?PHP 
                        $sellect=mysqli_query($connect,"SELECT * FROM `carriercouncilling` ORDER BY `sno` DESC");
                        $i=1;
                        while ($row=mysqli_fetch_array($sellect)) { ?>
                        <tr>
                            <th scope="col"><?PHP echo $i;?></th>
                            <th scope="col"><?PHP echo $row['services'];?></th>
                            <th scope="col"><?PHP echo $row['request_id'];?></th>
                            <th scope="col"><?PHP echo $row['name'];?></th>
                            <th scope="col"><?PHP echo $row['email'];?></th>
                            <th scope="col"><?PHP echo $row['contact'];?></th>
                            <th scope="col"><?PHP echo $row['time'];?></th>
                            <th scope="col"><?PHP echo $row['message'];?></th>
                            <th scope="col"><?PHP echo $row['present_studing'];?></th>
                            <th scope="col"><?PHP echo $row['ug-pg'];?></th>
                            <th scope="col"><?PHP echo $row['standard'];?></th>
                            <th scope="col"><?PHP echo $row['national-international-education'];?></th>
                        </tr>
                        <?PHP $i ++; }  ?>
                    </tbody>
                </table>
            </div>
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
<?php
@session_start();
error_reporting(E_ALL ^ E_NOTICE);
$student=$_SESSION['Username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Project management system - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php
echo $_SESSION['Username'];
include 'connect.php';
    $querys = "select * from Student where Username = '$student'";
    $results = mysqli_query($dbcon, $querys);
    $values = mysqli_fetch_assoc($results);
    // echo "$student $querys";
?>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:webmaster@rru.ac.th">webmaster@rru.ac.th</a>
        <i class="icofont-phone"></i> 038-535116, 038-810274
      </div>
      <div class="social-links">
        <a href="https://www.facebook.com/RRU.CSIT" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
      <h1 class="text"> <img src="assets\img\logo.png"alt="logo">&nbsp;<a href=""></a><span>ระบบการจัดการโครงงาน</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
      <ul>
          <!-- <li class="active"><a href="index.html">หน้าแรก</a></li> -->
          <li><a href="services.php">บริการ</a></li>
          <li><a href="blog.php">ตัวอย่างโครงการ</a></li>
          <li><a href="contact.html">ติดต่อเรา</a></li>
          <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <ol>
          <li><a href="index.html">หน้าแรก</a></li>
          <li>แบบฟอร์มยื่นขอสอบโครงงาน</li>
        </ol>
        <h2>แบบฟอร์มยื่นขอสอบโครงงาน</h2>

    </div>
  </section><!-- End Breadcrumbs -->

<!--แบบฟอร์มหัวข้อโครงงาน-->

  <section id="project" class="project">
    <div class="container">
        <div class="project-grid">
        <div class="border-form">
          <h3>แบบฟอร์มยื่นขอสอบโครงงาน</h3>
          <form action="pdf2.php" method="POST">

          <label for="fname">ชื่อโปรเจค(ภาษาไทย):</label>
          <div class="project-input">
            <input  type="text" id="P_title" name="P_title" value="<?php echo $values['P_title']; ?>" />
          </div>

          <label for="fname">ชื่อโปรเจค(ภาษาอังกฤษ):</label>
          <div class="project-input">
            <input  type="text" id="EP_title" name="EP_title" value="<?php echo $values['EP_title']; ?>" />
          </div>

          <label for="fname">ชื่อ:</label>
          <div class="project-input">
            <input type="text" id="F_Name" name="F_Name" value="<?php echo $values['F_Name']; ?>"/>
          </div>

          <label for="fname">นามสกุล:</label>
          <div class="project-input">  
            <input type="text" id="S_Name" name="S_Name" value="<?php echo $values['S_Name']; ?>"/>
          </div>

          <label for="fname">รหัสนักศึกษา:</label>
          <div class="project-input">
            <input type="text" id="StdentID" name="StdentID" value="<?php echo $values['StdentID']; ?>"/>
          </div>

          <label for="fname">สาขา:</label>
          <div class="project-input">
            <input type="text" id="Major" name="Major" value="<?php echo $values['Major']; ?>"/>
          </div>

          <label for="fname">อาจารย์ที่ปรึกษา:</label>
          <div class="project-input">
            <input type="text" id="AName" name="AName" value="<?php echo $values['AdvisorID']; ?>"/>
          </div>

          <div class="btn-form">
            <input class="btn" type="submit" value="ยื่นขอสอบ">
          </div>

          </form> 
          </div>
      </div>
    </div>
  </section>



  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
          </div>
          
          <!-- <div class="col-lg-6"> 
            <form action="" method="post">-->
              <!-- <input type="email" name="email"><input type="submit" value="Subscribe"> -->
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>เมนู</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="services.php">บริการ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blog.php">ตัวอย่างโครงการ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.html">ติดต่อเรา</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>เว็บไซต์ที่เกี่ยวข้องในสาขา</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">เว็บไซต์สาขา</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">เว็บไซต์ระบบการจัดการการฝึกประสบการณ์วิชาชีพ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">เว็บไซต์ระบบประชาสัมพันธ์</a></li>
            </ul>
          </div>

          
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>ติดต่อเรา</h4>
            <p>
              422 ถนน มรุพงษ์ 
              ตำบล หน้าเมือง อำเภอเมืองฉะเชิงเทรา 
              ฉะเชิงเทรา 24000
              <strong>Phone:</strong> 038-535116, 038-810274
              <strong>Email:</strong> webmaster@rru.ac.th
            </p>

          </div>
          <div class="col-lg-4 col-md-6 footer-info">
            <h3>เกี่ยวกับเรา</h3>
            <p>เว็บจัดการ การยื่นสอบหัวข้อเเละสอบโครงงาน ค้นหาโครงงานตัวอย่าง</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/RRU.CSIT" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

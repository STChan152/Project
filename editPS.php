<?php
@session_start();
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Project management system - Index</title>
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

  <!-- =======================================================
  * Template Name: Eterna - v2.1.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

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

        
        <li><a href="admin.php">บริการ</a></li>
        

          <li><a href="blogA.php">ตัวอย่างโครงการ</a></li>
          <li><a href="contactA.html">ติดต่อเรา</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

   <!-- ======= Breadcrumbs ======= -->
   <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="updateฆ.php">ลบ/แก้ไข</a></li>
          <li>แก้ไขข้อมูล</li>
        </ol>
        <h2>แก้ไขข้อมูล</h2>

      </div>
    </section><!-- End Breadcrumbs -->

<!--แบบฟอร์มหัวข้อโครงงาน-->
<?php
          error_reporting(E_ALL ^ E_NOTICE);
          $tID = $_GET['id'];
          include 'connect.php';
          $show_edit = " select * from  Student where id='$tID'";
          $result_edit = mysqli_query($dbcon,$show_edit);
          mysqli_close($dbcon);
          $rec = mysqli_fetch_assoc($result_edit);
        ?>
<main>
  <section id="contact" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
          <form action="editcodeS.php" method="post" role="form" class="php-email-form">
                <!-- <div class="form-row">
                  <div class="col form-group">
                    <strong>ชื่อโปรเจค</strong>
                    <input type="text" name="P_title" class="form-control" id="P_title"  data-rule="minlen:4"  />
                    <div class="validate"></div>
                  </div>

                </div> -->
                <div class="form-group">
                      <strong>ลำดับ</strong>
                      <input type="text" class="form-control" name="id" id="id" value="<?php echo $rec['id']; ?>" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                      <strong>ชื่อ</strong>
                      <input type="text" class="form-control" name="F_Name" id="F_Name" data-rule="minlen:4" value="<?php echo $rec['F_Name']; ?>" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                      <strong>นามสกุล</strong>
                      <input type="text" class="form-control" name="S_Name" id="S_Name"  data-rule="minlen:4" value="<?php echo $rec['S_Name']; ?>"  />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                      <strong>สาขาวิชา</strong>
                      <input type="text" class="form-control" name="Major" id="Major"  data-rule="minlen:4"  value="<?php echo $rec['Major']; ?>"  />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                      <strong>เบอร์</strong>
                      <input type="text" class="form-control" name="Tel" id="Tel" data-rule="minlen:4"  value="<?php echo $rec['Tel']; ?>" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                  <strong>Email</strong>
                  <input type="text" class="form-control" name="Email" id="Email" data-rule="minlen:4"  value="<?php echo $rec['Email']; ?>" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                  <strong>Username</strong>
                  <input type="text" class="form-control" name="Username" id="Username" data-rule="minlen:4" value="<?php echo $rec['Username']; ?>" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                  <strong>Password</strong>
                  <input type="text" class="form-control" name="Password1" id="Password1" data-rule="minlen:4"  value="<?php echo $rec['Password1']; ?>" />
                    <div class="validate"></div>
                  </div>
                  
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                <div class="text-center"><button type="submit">อัพเดพ</button></div>
              </form>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </section>
</<main>
    

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
             
              <li><i class="bx bx-chevron-right"></i> <a href="admin.php">บริการ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blogA.php">ตัวอย่างโครงการ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactA.html">ติดต่อเรา</a></li>
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
              422 ถนน มรุพงษ์ <br>
              ตำบล หน้าเมือง อำเภอเมืองฉะเชิงเทรา <br>
              ฉะเชิงเทรา 24000<br><br>
              <strong>Phone:</strong> 038-535116, 038-810274<br>
              <strong>Email:</strong> webmaster@rru.ac.th<br>
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

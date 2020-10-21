

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - Eterna Bootstrap Template</title>
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
 
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
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
          <!-- <li><a href="index.html">หน้าแรก</a></li> -->

          <li class="active"><a href="PinforS.php">ข้อมูลส่วนตัว</a></li>
          <li><a href="services.php">บริการ</a></li>
       
          <li class="active"><a href="blog.html">บอร์ด</a></li>
          <li><a href="contact.html">ติดต่อ</a></li>
          <li><a href="logout.php">ออกจากระบบ</a></li>
</ui>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <!-- <ol>
          <li><a href="services.html">บริการ</a></li>
          <li>บอร์ด</li>
        </ol> -->
        <h2>บอร์ด</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
      <?php
          error_reporting(E_ALL ^ E_NOTICE);
          include 'connect.php';
          $sID = $_GET['id'];
          
          //array random

          $a=array();
          $show_array = "select Material_ID from Material;";
          $result_array = mysqli_query($dbcon, $show_array);

          while($fetcharray = mysqli_fetch_assoc($result_array))
          {
            
            array_push($a, $fetcharray['Material_ID']);

          }
          $random_array = $a[array_rand($a, 1)];

          //array random

          $show_edit = " select * from  Material where Material_ID;";
          $result_edit = mysqli_query($dbcon,$show_edit);
          mysqli_close($dbcon);

          while($rec = mysqli_fetch_assoc($result_edit))
          {

          
        ?>
        <!-- <div class="row"> -->

          <div class="col-lg-10 entries">

            <article class="entry">

              <div class="entry-img">
                
              </div>

              <h2 class="entry-title">
              <?php echo $rec['P_titel']; ?>
              </h2>

              <div class="entry-meta">
                <ul>
                <?php echo $rec['Origin']; ?> </li>                  
                
                </ul>
              </div>

              <div class="entry-content" >
                
                <div class="read-more">
                  <a href="#">Read More</a>
                </div>
              </div>
           
            </article><!-- End blog entry -->
   
          
         
       

          </div><!-- End blog entries list -->
<?php
           }
          ?>
          <!-- <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div>End sidebar search formn -->

              <!-- <h3 class="sidebar-title">ประเภท</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">แอปพลิเคชัน <span>(25)</span></a></li>
                  <li><a href="#">เว็ปแอพพลิเคชั่น <span>(12)</span></a></li>
                  <li><a href="#">เว็บไซต์ <span>(5)</span></a></li>
                  <li><a href="#">เกมส์ <span>(22)</span></a></li>
                  <li><a href="#">IOT <span>(8)</span></a></li>
                  
                </ul>
 
              </div>End sidebar categories -->
<!-- 
              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-1.jpg" alt="">
                  <h4><a href="#">เว็บไซต์โรงเรียนวัดจรเข้น้อย</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2012</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-2.jpg" alt="">
                  <h4><a href="#">เว็บไซต์จัดการข้อมูลโรงเรียนชลบุรีสุขบท ชมรมอาสายุกาชาด</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2012</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-3.jpg" alt="">
                  <h4><a href="#">การพัฒนาบทเรียนออนไลน์ วิชาการเขียนโปรแกรมภาษาจาวา</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2009</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-4.jpg" alt="">
                  <h4><a href="#">การ์ตูนแอนิเมชัน 2 มิติ เรื่องครอบครัวสุดประหยัด </a></h4>
                  <time datetime="2020-01-01">Jan 1, 2010</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-5.jpg" alt="">
                  <h4><a href="#">โปรแกรมดูแลรรักษาความปลอดภัยสำหรับอุปกรณ์เก็บข้อมูลคอมพิวเตอร์</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2010</time>
                </div>

              </div>End sidebar recent posts -->

           

              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
 
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
          </div>
          <div class="col-lg-6">
            <!-- <form action="" method="post"> -->
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
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">หน้าหลัก</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">บริการ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blog.html">ตัวอย่างโครงการ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="connet.php">ติดต่อเรา</a></li>
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
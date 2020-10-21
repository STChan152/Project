<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Services - Project management system</title>
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
          <!-- <li class="active"><a href="PinforS.php">ข้อมูลส่วนตัว</a></li> -->
          <li class="active"><a href="services.php">บริการ</a></li>
        
          <li><a href="blog.php">บอร์ด</a></li>
          <li><a href="contact.html">ติดต่อ</a></li>
          <li><a href="logout.php">ออกจากระบบ</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="services.php">บริการ</a></li>
          <li>อัพโหลด</li>
        </ol>
        <h2>บริการ</h2>

      </div>
    </section><!-- End Breadcrumbs -->
  
<!-- ใส่โค้ดอัพโหลด -->

<?php
//1. เชื่อมต่อ database: 
include('connect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง: 
$query = "SELECT * FROM uploadfile ORDER BY fileID asc" or die("Error:" . mysqli_error()); 
//3. execute the query. 
$result = mysqli_query($dbcon, $query); 
//4 . แสดงข้อมูลที่ query ออกมา: 

//ใช้ตารางในการจัดข้อมูล
echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
// echo "<tr align='center' bgcolor='#CCCCCC'><td>File ID</td><td>File</td><td>date_create</td></tr>";
// while($row = mysqli_fetch_array($result)) { 
//   echo "<tr>";
//   echo "<td align='center'>" .$row["fileID"] .  "</td> "; 
//   //echo "<td><a href='.$row['fileupload']'>showfile</a></td> ";
//   echo "<td>"  .$row["fileupload"] . "</td> ";  
//   echo "<td align='center'>" .$row["dateup"] .  "</td> ";
//   echo "</tr>";
// }
// echo "</table>";
//5. close connection
mysqli_close($dbcon);
?>
<br/>
<form action="add_file_db2.php" method="post" enctype="multipart/form-data" name="upfile" id="upfile">
  <p>&nbsp;</p>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D6D6">อัพโหลด&nbsp;เอกสาร</td>
    </tr>
    <tr>
      <td width="126" bgcolor="#EDEDED">&nbsp;</td>
      <td width="574" bgcolor="#EDEDED">&nbsp;</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#EDEDED">ไฟล์</td>
      <td bgcolor="#EDEDED"><label>
        <input type="file" name="fileupload" id="fileupload"  required="required"/>
      </label></td>
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td bgcolor="#EDEDED">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td  bgcolor="#EDEDED"><input type="submit" name="button" id="button" value="อัพโหลด" /></td>
    </tr>
    <tr>
      <td bgcolor="#EDEDED">&nbsp;</td>
      <td bgcolor="#EDEDED">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

<!-- สิ้นสุดโค้ด -->
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
            <!-- <li><i class="bx bx-chevron-right"></i> <a href="index.html">หน้าหลัก</a></li> -->
            <li><i class="bx bx-chevron-right"></i> <a href="services.php">บริการ</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="blog.php">ตัวอย่างโครงการ</a></li>
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
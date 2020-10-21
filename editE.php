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
          
          <li class="active"><a href="PinforA.php">ข้อมูลส่วนตัว</a></li>
          <li class="active"><a href="admin.php">บริการ</a></li>
        
          <li><a href="blogA.php">บอร์ด</a></li>
          <li><a href="contactA.html">ติดต่อ</a></li>
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
          <li><a href="examA.php">บริการ</a></li>
          <li>ตารางสอบ</li>
        </ol>
        <h2>เพิ่มตารางสอบ</h2>

      </div>
    </section><!-- End Breadcrumbs -->


<!-- ใส่โค้ดตาราง -->
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<?php
          error_reporting(E_ALL ^ E_NOTICE);
          $sID = $_GET['id'];
          include 'connect.php';
          $show_edit = " select * from  Exam where id='$sID'";
          $result_edit = mysqli_query($dbcon,$show_edit);
          mysqli_close($dbcon);
          $rec = mysqli_fetch_assoc($result_edit);
        ?>
<table>
  <tr>
  <th><center>ลำดับ</center></th>
    <th><center>ชื่อโปรเจค</center></th>
    <th><center>รหัสนักศึกษา</center></th>
    <th><center>วันที่สอบ</center></th>
    <th><center>เวลาที่สอบ</center></th>
    <th><center>ห้องสอบ</center></th>
    <th><center>อาจารย์ที่คุมสอบ</center></th>
    <th><center></center></th>
    
    </tr>
  <tr>
  <form action="examcode.php" method="post" role="form" >
  <td><input type="text" name="id" class="form-control" id="id" value="<?php echo $rec['id']; ?>"></td>
    <td><input type="text" name="P_title" class="form-control" id="P_title" value="<?php echo $rec['P_title']; ?>"></td>
    <td><input type="text" name="StdentID" class="form-control" id="StdentID" value="<?php echo $rec['StdentID']; ?>"></td>
    <td><center><input type="text" name="Date1" class="form-control" id="Date1" value="<?php echo $rec['Date1']; ?>" ></center></td>
    <td><center><input type="text" name="Time1" class="form-control" id="Time1" value="<?php echo $rec['Time1']; ?>" ></center></td>
    <td><center><input type="text" name="Room" class="form-control" id="Room" value="<?php echo $rec['Room']; ?>"></center></td>
    <td><input type="text" name="AdvisorID" class="form-control" id="AdvisorID" value="<?php echo $rec['AdvisorID']; ?>"></td>
    <div class="mb-3">
    <td> <button type="submit"   class=" hero btn-get-started ">บันทึก</button></td>
</form>
  </tr>
  

  <?php
                        //       $servername = "localhost";
                        //       $username = "root";
                        //       $password = "";
                        //       $dbname = "ProjectN";
                        //   // Create connection
                        //       $conn = new mysqli($servername, $username, $password, $dbname);
                        //   // Check connection
                        //       if ($conn->connect_error) {
                        //       die("Connection failed: " . $conn->connect_error);
                        //       }
                        //       $sql = "SELECT * FROM Exam ;";
                        //       $result = $conn->query($sql);
                        //       if ($result->num_rows > 0) {
                        //   // output data of each row
                        //       while($row = $result->fetch_assoc()) {
                        //   // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["username"]. "<br>";
                        //   echo "<tr>";
                        //   echo "<td>".$row["P_title"]."</td>";
                        //   echo "<td><center>".$row["StdentID"]."</center></td>";
                        //   echo "<td><center>".$row["Date1"]."</center></td>";
                        //   echo "<td><center>".$row["Time1"]."</center></td>";
                        //   echo "<td><center>".$row["Room"]."</center></td>";
                        //   echo "<td><center>".$row["AdvisorID"]."</center></td>";
                        //   echo "<td><center><a href='delete.php?id=$row[id]' onclick=\"return confirm('คุณต้องการลบใช่หรือไม่')\">ลบข้อมูล</a>/<a href='editEcode.php?id=$row[id]' onclick=\"return confirm('คุณต้องการแก้ไขใช่หรือไม่')\">แก้ไข</a></center></td> ";
                        //   echo "</tr>";
                        //       }
                        //       } else {
                        //           echo "ไม่มีข้อมูล";
                        //       }
                        //       $conn->close();
                          ?>



          </table>

        </body>
        </html><br>
       
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
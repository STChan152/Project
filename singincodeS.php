<?php
  @session_start();
  error_reporting(E_ALL ^ E_NOTICE);
   $StdentID = $_POST['StdentID'];
   $U_ID = $_POST['Username'];
   $P_ID = $_POST['Password1'];
   $Name = $_POST['F_Name'];
   $S_Name = $_POST['S_Name'];
   $Major = $_POST['Major'];
   $Email = $_POST['Email']; 
   $Tel = $_POST['Tel'];
   
    include 'connect.php';
    $add_user = "INSERT INTO `Student` (`StdentID`, `Username`, `Password1`, `F_Name`, `S_Name`, `Major`, `Email`, `Tel`) VALUES ('$StdentID', '$U_ID', '$P_ID ', '$Name', '$S_Name', '$Major', '$Email', ' $Tel')";
    $result = mysqli_query($dbcon,$add_user);
    mysqli_close($dbcon);
    echo $add_user ;
   echo"<meta http-equiv='refresh' content ='0; url=singinS.php'>";
   if(!$result) { ?>
      <script language="javascript">
      alert('ลงทะเบียนเข้าใช้งานไม่สำเร็จ');
   </script>
  
  <?php } else { ?>
    <script language="javascript">
    alert('ลงทะเบียนเข้าใช้งานสำเร็จ');
 </script>
  <?php }
?>
<?php

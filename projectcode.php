<?php
  @session_start();
  error_reporting(E_ALL ^ E_NOTICE);
   $Material_ID = $_POST['Material_ID'];
   $P_titel = $_POST['P_titel'];
   $Type = $_POST['Type'];
   $Tool = $_POST['Tool'];
   $Origin = $_POST['Origin'];
   $Scope = $_POST['Scope'];
   $Objective = $_POST['Objective']; 

    include 'connect.php';
    $add = "INSERT INTO `Material` (`Material_ID`,`P_titel`,`Type`,`Tool`,`Origin`,`Scope`,`Objective`) VALUES (null,'$P_titel', '$Type', '$Tool', '$Origin', '$Scope', '$Objective')";
    $result = mysqli_query($dbcon,$add);
    mysqli_close($dbcon);
    echo $add ;
   echo"<meta http-equiv='refresh' content ='0; url=Project.php'>";
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
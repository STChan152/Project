<?php
// foreach($_POST as $key => $value)
// {
//   echo $key.": ".$value."<br />";
// }

@session_start();
error_reporting(E_ALL ^ E_NOTICE);
 $AdvisorID = $_POST['AdvisorID'];
  $F_Name = $_POST['F_Name']; 
  $S_Name = $_POST['S_Name'];
  $Tel = $_POST['Tel'];
  $Email = $_POST['Email']; 
  $Username = $_POST['Username'];
 $Password1= $_POST['Password1'];

  include 'connect.php';
  $add_user = "INSERT INTO `Advisor` (`AdvisorID`, `F_Name`, `S_Name`, `Tel`, `Email`, `Username`, `Password1`) VALUES ('$AdvisorID', '$F_Name ', '$S_Name', '$Tel', '$Email', '$Username', '$Password1')";
  $result = mysqli_query($dbcon,$add_user);
  mysqli_close($dbcon);
  echo $add_user ;
 echo"<meta http-equiv='refresh' content ='0; url=singinT.php '>";
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
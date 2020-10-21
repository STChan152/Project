
<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname ="ProjectN";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id=$_POST['id'];
$_P_title = $_POST['P_title'];
$_StdentID = $_POST['StdentID'];
$_Date = $_POST['Date1'];
$_Time = $_POST['Time1'];
$_Room = $_POST['Room'];
$_AdvisorID = $_POST['AdvisorID'];
$sql = "INSERT INTO Exam (id,P_title,StdentID,Date1,Time1,Room,AdvisorID)
VALUES ('$id','$_P_title','$_StdentID','$_Date','$_Time','$_Room','$_AdvisorID')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
echo"<meta http-equiv='refresh' content ='0; url=examA.php'>";
?>
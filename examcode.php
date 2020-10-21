
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
$P_title= $_POST['P_title'];
$StdentID = $_POST['StdentID'];
$Date = $_POST['Date1'];
$Time = $_POST['Time1'];
$Room = $_POST['Room'];
$AName = $_POST['AName'];
$AName1 = $_POST['AName1'];
$AName2 = $_POST['AName2'];
$AName3 = $_POST['AName3'];
$sql = "UPDATE Exam SET P_title='$P_title',StdentID='$StdentID',Date1='$Date',Time1='$Time',Room='$Room',AName='$AName',AName1='$AName1',AName2='$AName2',AName3='$AName3' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	echo"<meta http-equiv='refresh' content ='0; url=examA.php'>";;
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
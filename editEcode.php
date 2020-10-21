<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProjectN";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'];
$P_title= $_POST['P_title'];
$StdentID = $_POST['StdentID'];
$Date1 = $_POST['Date1'];
$Time1 = $_POST['Time1'];
$Room = $_POST['Room'];
$AdvisorID = $_POST['AdvisorID'];
$sql = "UPDATE Exam SET P_title='$P_title',StdentID='$StdentID',Date1='$Date1',Time1='$Time1',Room='$Room',AdvisorID='$AdvisorID' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	echo"<meta http-equiv='refresh' content ='0; url=examA.php'>";;
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
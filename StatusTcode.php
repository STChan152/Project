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
$StatusS = $_POST['StatusS'];

$sql = "UPDATE Statuss SET P_title='$P_title',StdentID='$StdentID',StatusS='$StatusS' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	echo"<meta http-equiv='refresh' content ='0; url=SatatusT.php'>";;
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
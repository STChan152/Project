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
$F_Name = $_POST['F_Name'];
$S_Name = $_POST['S_Name'];
$Major = $_POST['Major'];
$Tel = $_POST['Tel'];
$Email = $_POST['Email'];
$Username = $_POST['Username'];
$Password1 = $_POST['Password1'];
$sql = "UPDATE Student SET F_Name='$F_Name',S_Name='$S_Name',Major='$Major',Tel='$Tel',Email='$Email',Username='$Username',Password1='$Password1' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
	echo"<meta http-equiv='refresh' content ='0; url=updateS.php'>";;
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

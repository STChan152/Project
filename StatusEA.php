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
$id = $_POST['id'];
$P_title= $_POST['P_title'];
$StdentID = $_POST['StdentID'];
$StatusS = $_POST['StatusS'];
$sql = "INSERT INTO Statuss (StatusS,P_title,StdentID,id)
VALUES ('$StatusS','$P_title','$StdentID','$id')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<?php
echo"<meta http-equiv='refresh' content ='0; url=SatatusA.php'>";
?>
<?php
include('connect.php');  
$id = $_REQUEST["id"];
$sql = "DELETE FROM Student WHERE id='$id'";
$result = mysqli_query($dbcon, $sql);	
// echo $sql;
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
    echo "window.location = 'updateS.php; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "</script>";
}
?>
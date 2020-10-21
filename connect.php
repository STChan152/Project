<?php
$host = "localhost";
$username = "root";
$password ="";
$DBName ="ProjectN";

$dbcon = mysqli_connect($host,$username,$password,$DBName);
if (!$dbcon){
    echo "ไม่สามารถติดต่อกับ Database ได้";
    exit();
}
mysqli_query($dbcon,"SET NAMES 'utf8'");
?>
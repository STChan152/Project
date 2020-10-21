<?php
$host = "localhost";
$username = "root";
$password ="";
$DBName ="ProjectN";
 $dbcon = mysqli_connect();

if (mysqli_connect_errno($host, $username, $password, $DBName)){
    echo "Failed to connect to MySQL : ".mysqli_connect_errno();
}



?>
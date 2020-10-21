<?php
    @session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    $StdentID = $_POST['StdentID'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password1'];
    $F_Name = $_POST['F_Name'];
    $S_Name = $_POST['S_Name'];
    $Major = $_POST['Major'];
    $Email = $_POST['Email'];
    $Tel = $_POST['Tel'];
    include 'connect.php';
    $add_student = "UPDATE student SET F_Name='$F_Name',S_Name='$S_Name',Tel='$Tel',Email='$Email',Username='$Username',Password1='$Password',Major='$Major',P_title='$P_title' where F_Name = '$F_Name'";
    echo $add_student;
    $result = mysqli_query($dbcon,$add_student);
    $querys = "select * from Student where StdentID = '$StdentID';";
    $results = mysqli_query($dbcon, $querys);
    $values = mysqli_fetch_assoc($results);
    mysqli_close($dbcon);
    echo"<meta http-equiv='refresh' content ='0; url=services.php'>";
?>


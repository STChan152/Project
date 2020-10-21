<?php
    @session_start();
    error_reporting(E_ALL ^ E_NOTICE);
    $Material_ID = $_POST['Material_ID'];
    $P_title = $_POST['P_titel'];
    $Type1 = $_POST['Type'];
    $Tool = $_POST['Tool'];
    $Origin = $_POST['Origin'];
    $Scope = $_POST['Scope'];
    $Objective = $_POST['Objective'];
    include 'connect.php';
    
    $insert_Material = "INSERT INTO `material` (`Material_ID`,`P_titel`, `Type`, `Tool`, `Origin`,`Scope`, `Objective`) VALUES (null,'$P_title', '$Type', '$Tool ', '$Origin', '$Scope', '$Objective');";
    
    $result = mysqli_query($dbcon,$insert_Material);
    // $add2 = "UPDATE Material set P_title='$P_title' (StdentID) values ((select Material_ID from material where P_title='$P_title'));";
    $result1 = mysqli_query($dbcon,$add2);
    mysqli_close($dbcon);
    echo"<meta http-equiv='refresh' content ='0; url=From.php'>";

    // echo $insert_Material;
    // echo $add2;


// <!-- โค้ดอัพเดท -->
// <!-- $update_Material = "UPDATE Material set P_title='$P_title',Type1='$Type1',Tool='$Tool',Origin='$Origin',Scope='$Scope',Objective='$Objective' where Material_ID = '$Material_ID';"; -->

?>

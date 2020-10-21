
<?php
@session_start();
error_reporting(E_ALL ^ E_NOTICE);
$Username = $_POST['Username'];
$Password = $_POST['Password1'];
include 'connect.php';
// if($Username == ''){
//     echo "check Username";
// }else if ($Password == ''){
//     echo "check Password";
// }else{
    $sql = ("select * from student where Username='$Username'and Password1 ='$Password'");
    $result = mysqli_query($dbcon,$sql);
    $num = mysqli_num_rows($result);
    if($num <=0){ 
        echo "<meta http-equiv='refresh' content ='0; url=loginS.php'>";
}else{
    while($user = mysqli_fetch_assoc($result)){
        $_SESSION['sess_user']=$user;
            $_SESSION['id']= session_id();
            $_SESSION['Username']=$user['Username'];

            echo "<meta http-equiv='refresh' content ='0; url=services.php'>";  
    }
}


?>
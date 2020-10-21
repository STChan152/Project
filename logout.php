<?php
@session_start();
@session_unset();
unset($_SESSSION['Username']); // clear session
unset($_SESSION['Password']);
@session_destroy();
header('location: index.html');
?>
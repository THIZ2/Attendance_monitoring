<?php error_reporting(0);
session_start();
unset($_SESSION['id']);
header("location:index.php");
session_destroy();


?>
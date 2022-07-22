<?php session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sas");

$email=$_REQUEST['email'];
$password=$_REQUEST['pass']; 

$sql="select * from student where email='$email' && password='$password' ";

$run=mysqli_query($conn,$sql);

if($data=mysqli_fetch_assoc($run))
{
  $_SESSION['id']=$data['id'];    
  header("location:student-profile.php");
}
else
{
    $_SESSION["Success"]=1;
    header("location:student-login.php");
}
?>
<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sas");
$id=$_REQUEST["id"];
$sql= "update student set status=0 where id='".$id."' ";
if(mysqli_query($conn,$sql))
{
  header("location:a-student-data.php");
}
else
{
    mysqli_error($conn);
}
?>
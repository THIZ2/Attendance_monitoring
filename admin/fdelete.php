<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sas");
$id=$_REQUEST["id"];
$sql= "update staff set status=0 where id='".$id."' ";
if(mysqli_query($conn,$sql))
{
  header("location:facultydata.php");
}
else
{
    mysqli_error($conn);
}
?>
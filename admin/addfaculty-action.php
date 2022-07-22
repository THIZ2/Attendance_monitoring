<?php session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sas");

$full_name=$_REQUEST['fname'];
if($full_name=="")
{
   $_SESSION['error'][0]="please enter full name";
     header("location:addfaculty.php");
}
$qualification=$_REQUEST['quali'];
if($qualification=="")
{
   $_SESSION['error'][1]="please enter qualificaton";
     header("location:addfaculty.php");
}
$subject=$_REQUEST['subject'];
if($subject=="")
{
   $_SESSION['error'][4]="please enter year/semester";
     header("location:addfaculty.php");
}

$email=$_REQUEST['email'];
if($email=="")
{
   $_SESSION['error'][5]="please enter email.";
     header("location:addfaculty.php");
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $_SESSION[error][6]="Invalid email format";
     header("location:addfaculty.php");
}
$password=$_REQUEST['pass'];
if($password=="")
{
   $_SESSION['error'][7]="password should be at least 8 characters in length and should include at least one upper case letter,one lower case letter, one number,and one special character.";
     header("location:addfaculty.php");
}
/*$uppercase=preg_match('@[A-Z]@',$password);
$lowercase=preg_match('@[a-z]@',$password);
$number=preg_match('@[0-9]@',$password);
$specialChars=preg_match('@[^\w]@',$password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password)<8 )
{
    $_SESSION['error'][7]="password should be at least 8 characters in length and should include at least one upper case letter,one lower case letter, one number,and one special character.";
    header("location:register1.php");
}*/


$contact_number=$_REQUEST['contact'];
if($contact_number=="")
{
   $_SESSION['error'][9]="please enter contact number";
     header("location:addfaculty.php");
}
if(strlen($contact_number)!=10)
{
 $_SESSION['error'][10]="please enter valid contact number";
     header("location:addfaculty.php");   
}


if(!empty($_SESSION['error']))
{
   header("location:addfaculty.php");   
}
else
{
  $sql="INSERT INTO `staff`(`full_name`, `mobile_no`, `qualification`, `Subject`, `email`, `password`) VALUES ('".$full_name."','".$contact_number."','".$qualification."','".$subject."','".$email."','".$password."')";

if(mysqli_query($conn,$sql))
 {
    $_SESSION["Success"]=1;
    header("location:facultydata.php");
}
else
{
    echo mysqli_error($conn);
} 
}
?>
<?php 

$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sas");

$id=$_REQUEST['id'];


$first_name=$_REQUEST['fname'];
if($first_name=="")
{
   $_SESSION['error'][0]="please enter first name";
     header("location:supdate.php");
}

$last_name=$_REQUEST['lname'];
if($last_name=="")
{
   $_SESSION['error'][1]="please enter last name";
     header("location:supdate.php");
}

$course=$_REQUEST['course'];
if($course=="")
{
   $_SESSION['error'][3]="please enter course";
     header("location:supdate.php");
}
$year=$_REQUEST['year'];
if($year=="")
{
   $_SESSION['error'][4]="please select year /semester";
     header("location:supdate.php");
}
$gender=$_REQUEST['gender'];
if($gender=="")
{
   $_SESSION['error'][5]="please enter gender";
     header("location:supdate.php");
}
$email=$_REQUEST['email'];
if($email=="")
{
   $_SESSION['error'][6]="please enter email.";
     header("location:supdate.php");
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $_SESSION[error][7]="Invalid email format";
     header("location:supdate.php");
}
/*$password=$_REQUEST['pass'];
if($password=="")
{
   $_SESSION['error'][7]="password should be at least 8 characters in length and should include at least one upper case letter,one lower case letter, one number,and one special character.";
     header("location:edit_profile.php");
}
$uppercase=preg_match('@[A-Z]@',$password);
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
     header("location:supdate.php");
}
if(strlen($contact_number)!=10)
{
 $_SESSION['error'][10]="please enter valid contact number";
     header("location:supdate.php");   
}



/*$event_name=$_REQUEST['event'];
$chk="";  
foreach($event_name as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
   
if($event_name=="")
{
   $_SESSION['error'][13]="please select event";
     header("location:reg.php");
 
}*/
if(!empty($_SESSION['error']))
{
   header("location:supdate.php");   
}
else
{
   
     $sql="update  student set first_name='".$first_name."',last_name='".$last_name."', course ='".$course."', contact_number ='".$contact_number."', year_sem='".$year."', email='".$email."',gender='".$gender."' where id='".$id."' " ;
    
   

if(mysqli_query($conn,$sql))
 {
   
    header("location:a-student-data.php");
   
}
else
{
    echo mysqli_error($conn);
} 
}
?>


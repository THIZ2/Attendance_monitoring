<?php 
@session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sas");
$sql="select * from staff where id='".$_SESSION['id']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/f-profile.css" type="text/css" rel=stylesheet>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <title>profile</title>
    
</head>
<?php include("faculty-dashboard.php"); ?>
<body>
   
    
   <div class="team">
      <div class="container">
         <h1>Welcome &nbsp;<?php echo  $data['full_name'];?></h1>
          <div class= "card">
          
           <div class="box">
             <h4>TEACHER-ID</h4>
                 <div class="store">
                     <?php  echo $data['id'];?>
                 </div>
             
                 <h4>FULL NAME</h4>
                 <div class="store">
                     <?php  echo $data['full_name'];?>
                 </div>
                  
                 <h4>CONTACT NUMBER</h4>
                 <div class="store">
                     <?php echo $data['mobile_no']; ?>
                 </div>
                  <h4>QUALIFICATION</h4>
                 <div class="store">
                     <?php echo $data['qualification']; ?>
                 </div>
                  <h4>EMAIL</h4>
                 <div class="store">
                     <?php echo $data['email']; ?>
                 </div>
                 <h4>SUBJECT</h4>
                 <div class="store">
                     <?php echo $data['Subject']; ?>
                 </div>
                 
                 
               <a href="edit_profile.php"><input type="submit" name="sub" value="Edit profile" class="sub"></a>
                 
                 
           </div>
       </div>
      
      
       
   </div>
    </div>
</body>
</html>
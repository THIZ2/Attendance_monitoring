<?php 

session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sas");
$sql="select * from student where id='".$_REQUEST["id"]."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/fview1.css" type="text/css" rel=stylesheet>
   <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <title>profile</title>
    
</head>
<?php include("dashboard.php"); ?>
<body>
   
    
   <div class="team">
      <div class="container">
         <h1>Profile of &nbsp;<?php echo  $data['first_name'];?></h1>
          <div class= "card">
          
           <div class="box">
             <h4>ID</h4>
                 <div class="store">
                     <?php  echo $data['id'];?>
                 </div>
             
                 <h4>FIRST NAME</h4>
                 <div class="store">
                     <?php  echo $data['first_name'];?>
                 </div>
                  
                 <h4>LAST NAME</h4>
                 <div class="store">
                     <?php echo $data['last_name']; ?>
                 </div>
                  <h4>EMAIL</h4>
                 <div class="store">
                     <?php echo $data['email']; ?>
                 </div>
                 <h4>CONTACT NUMBER</h4>
                 <div class="store">
                     <?php echo $data['contact_number']; ?>
                 </div>
                  <h4>GENDER</h4>
                 <div class="store">
                     <?php echo $data['gender']; ?>
                 </div>
                 <h4>YEAR</h4>
                 <div class="store">
                     <?php echo $data['year_sem']; ?>
                 </div>
                 
                 
               
                 
                 
           </div>
       </div>
      
      
       
   </div>
    </div>
</body>
</html>
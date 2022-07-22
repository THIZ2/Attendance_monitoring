<?php error_reporting(0);
session_start();
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"sas");
$sql="select * from staff where id='".$_REQUEST["id"]."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_assoc($run);

?>
<?php include("dashboard.php"); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>update</title>
    <link rel="stylesheet" href="css/supdate1.css">
</head>

<body>
  
   <section class="background ">
     <div class="forminfo animated lightSpeedIn">
             
              <form method="POST" action="fupdate-action.php" enctype="multipart/form-data">
                 
                  <div class="head">  <p>Update profile</p></div>
                  <input type="hidden" name="id" value="<?php echo $_REQUEST["id"]; ?>" >
              <p class="name">FULL NAME</p>
             <p> <input type="text" name="fname" placeholder="First Name"  class="field" value="<?php echo  $data['full_name']; ?>"></p>
      <div class="start">
             <?php if(isset($_SESSION['error'][0]) and $_SESSION['error'][0]!="")
              {
                   echo $_SESSION['error'][0];
                   unset($_SESSION['error'][0]);
            }?>
    </div>
            <p class="name">CONTACT NUMBER</p>
                 <p><input type="text" name="contact"  placeholder="contact" class="field" value="<?php echo  $data['mobile_no']; ?>"></p>
    <div class="start">
             <?php if(isset($_SESSION['error'][9]) and $_SESSION['error'][9]!="")
              {
                   echo $_SESSION['error'][9];
                   unset($_SESSION['error'][9]);
            }?>
            <?php if(isset($_SESSION['error'][10]) and $_SESSION['error'][10]!="")
              {
                   echo $_SESSION['error'][10];
                   unset($_SESSION['error'][10]);
            }?>
    </div> 
            <p class="name">QUALIFICATION</p>
                 <p><input type="text" name="quali"  placeholder="qualification" class="field" value="<?php echo  $data['qualification']; ?>"></p>
     <div class="start">
             <?php if(isset($_SESSION['error'][1]) and $_SESSION['error'][1]!="")
              {
                   echo $_SESSION['error'][1];
                   unset($_SESSION['error'][1]);
            }?>
    </div>
            <p class="name">SUBJECT</p>
                  <p><input type="text" class="field" name="subject" placeholder="year/semester" value="<?php echo  $data['Subject']; ?>"></p>
                 
             
    <div class="start">
             <?php if(isset($_SESSION['error'][4]) and $_SESSION['error'][4]!="")
              {
                   echo $_SESSION['error'][4];
                   unset($_SESSION['error'][4]);
            }?>
    </div>
            
             
              
                 
                 <p class="name">EMAIL</p>
                 <p><input type="text" readonly name="email"  placeholder="Email" class="field" value="<?php echo  $data['email']; ?>"></p>
     
           
             
                 
                
             
               
              
             
                 
               
   
                
           
   
                
            
            
            
             
        <p>
           
            <input type="submit" name="sub" value="SUBMIT" class="sub">
        </p>
                
        
            
              
                
                        
             
         </form>
                     
                  </div>
                  
    </section>
            
               
               </body>
 

    
</html>
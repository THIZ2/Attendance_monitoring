<?php error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>reg</title>
    <link rel="stylesheet" href="css/supdate1.css">
    <!---------------------------------------------to apply animation-------------------------------------------------------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    </head>
<body>
  <?php include("dashboard.php"); ?>
   <section class="background ">
     <div class="forminfo animated lightSpeedIn">
             <?php session_start(); ?>
              <form method="POST" action="addfaculty-action.php" enctype="multipart/form-data">
                  <div class="head">  <p>Faculty Registration</p></div>
              <p class="name">FULL NAME</p>
             <p> <input type="text" name="fname" placeholder="Full Name"  class="field"></p>
    <div class="start">
             <?php if(isset($_SESSION['error'][0]) and $_SESSION['error'][0]!="")
              {
                   echo $_SESSION['error'][0];
                   unset($_SESSION['error'][0]);
            }?>
    </div>
            
              <p class="name">CONTACT NUMBER</p>
                 <p><input type="text" name="contact"  placeholder="contact" class="field"></p>
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
                 <p><input type="text" name="quali"  placeholder="qualification" class="field"></p>
     <div class="start">
             <?php if(isset($_SESSION['error'][1]) and $_SESSION['error'][1]!="")
              {
                   echo $_SESSION['error'][1];
                   unset($_SESSION['error'][1]);
            }?>
    </div>
              
                 
                 <p class="name">SUBJECT</p>
                  <p><input type="text" class="field" name="subject" placeholder="subject"></p>
                 
             
    <div class="start">
             <?php if(isset($_SESSION['error'][4]) and $_SESSION['error'][4]!="")
              {
                   echo $_SESSION['error'][4];
                   unset($_SESSION['error'][4]);
            }?>
    </div>
                 
                 
                 <p class="name">EMAIL</p>
                 <p><input type="text" name="email"  placeholder="Email" class="field"></p>
     <div class="start">
             <?php if(isset($_SESSION['error'][5]) and $_SESSION['error'][5]!="")
              {
                   echo $_SESSION['error'][5];
                   unset($_SESSION['error'][5]);
            }?>
             
         <?php if(isset($_SESSION['error'][6]) and $_SESSION['error'][6]!="")
              {
                   echo $_SESSION['error'][6];
                   unset($_SESSION['error'][6]);
            }?>
             </div>
             
                  <p class="name">PASSWORD</p>
                <p> 
                <input type="password" name="pass"  placeholder="Password" class="pass">
   
             <input type="password" name="pass"  placeholder="Confirm Password" class="pass">
             </p>
              <div class="start">
             <?php if(isset($_SESSION['error'][7]) and $_SESSION['error'][7]!="")
              {
                   echo $_SESSION['error'][7];
                   unset($_SESSION['error'][7]);
            }?>
    </div>
    
            <p>
            <input type="submit" name="sub" value="SUBMIT" class="sub">
        </p>
                
        <?php         
             if($_SESSION["Success"]==1)
             {
                ?>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                   <?php echo "<script>swal({title: 'Registration Successfull!',  text: '',  icon: 'success',
                            button: 'OK',})</script>";
                  unset($_SESSION["Success"]);
             }
                  
               
                 
                 
           ?>    
            
              
                
                        
             
         </form>
                     
                  </div>
                  
    </section>
            
               
               </body>
 
</html>
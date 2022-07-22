<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>student attendance</title>
   <link rel="stylesheet" href="css/studentdata1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<?php include("student-dashboard.php"); ?>
<body>
 <br><br>
  

   <div class="container">
       <div class="col-lg-12">
           <center> <h1>STUDENT-DATA</h1></center>
          <table class="table  table-bordered">
              <tr>
                  <th>DATE</th>
                  <th>ID</th>
                  <th>ATTENDANCE</th>
                  
                
                  
                  
                
              </tr>
     <?php
                session_start();
                  $conn=mysqli_connect("localhost","root","");
                   mysqli_select_db($conn,"sas");
             
                 $sql="select * from attendance where id='".$_SESSION['id']."' ";
                  $run=mysqli_query($conn,$sql);
              while($data=mysqli_fetch_assoc($run))
              {
?>
              <tr>
                  <td><?php echo $data['date']; ?></td>
                  <td><?php echo $data['id']; ?></td>
                  <td><?php echo $data['attendance']; ?></td>
                 
                 
                  
                  
                  
                  
                  
              </tr>
              <?php }
              ?>
          </table>
        
       </div>
   </div>
    
   
    
</body>
    
</html>
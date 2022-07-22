<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>student attendance</title>
   <link rel="stylesheet" href="css/f-view-attendance.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<?php include("faculty-dashboard.php"); ?>
<body>
 <br><br>
  

   <div class="container">
       <div class="col-lg-12">
           <center> <h1>STUDENT-ATTENDANCE</h1></center>
           <form method="post" action="export.php">
               <input type="submit" name="export" value="CSV Export"/>
           </form>
          <table class="table  table-bordered">
              <tr>
                  <th>DATE</th>
                  <th>ID</th>
                  <th>ATTENDANCE</th>
                  
                
                  
                  
                
              </tr>
     <?php
                
                  $conn=mysqli_connect("localhost","root","");
                   mysqli_select_db($conn,"sas");
                   $sql="select * from attendance";
                   $query=mysqli_query($conn,$sql);
              while($result=mysqli_fetch_assoc($query))
              {
?>
              <tr>
                  <td><?php echo $result['date']; ?></td>
                  <td><?php echo $result['id']; ?></td>
                  <td><?php echo $result['attendance']; ?></td>
                 
                 
                  
                  
                  
                  
                  
              </tr>
              <?php }
              ?>
          </table>
        
       </div>
   </div>
    
   
    
</body>
    
</html>
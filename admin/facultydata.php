<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>faculty data</title>
   <link rel="stylesheet" href="css/facultydata.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<?php include("dashboard.php"); ?>
<body>
 <br><br>
  

   <div class="container">
       <div class="col-lg-12">
           <center> <h1>FACULTY DATA</h1></center>
          <table class="table  table-bordered">
              <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>CONTACT NUMBER</th>
                  <th>QUALIFICATION</th>
                  <th>SUBJECT</th>
                 <th>VIEW PROFILE</th>
                  <th>DELETE</th>
                  <th>UPDATE</th>
              </tr>
     <?php
                 
                  $conn=mysqli_connect("localhost","root","");
                   mysqli_select_db($conn,"sas");
                   $sql="select * from staff where status=1";
                   $query=mysqli_query($conn,$sql);
              while($result=mysqli_fetch_assoc($query))
              {
?>
              <tr>
                  <td><?php echo $result['id']; ?></td>
                  <td><?php echo $result['full_name']; ?></td>
                  <td><?php echo $result['mobile_no']; ?></td>
                  <td><?php echo $result['qualification']; ?></td>
                  <td><?php echo $result['Subject']; ?></td>
                  <td><div class="button"> <a href="fview.php?id=<?php echo $result['id']; ?>"><img src="image/view.png" height="60px" width="110px"></a></div></td>
                  <td><div class="button"> <a href="fdelete.php?id=<?php echo $result['id']; ?>"><img src="image/delete.png" height="60px" width="110px"></a></div></td>
                  <td><div class="button"> <a href="fupdate.php?id=<?php echo $result['id']; ?>"><img src="image/update.png"  height="60px" width="110px"></a></div></td>
                  
                  
                  
                  
                  
              </tr>
              <?php }
              ?>
          </table>
        
       </div>
   </div>
    
   
    
</body>
    
</html>
<?php 	error_reporting(0);	
		include("student.php");
		$stu = new Student();
?>
<?php
$cur_date = date('Y-m-d');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mark Attendance</title>
<link rel="stylesheet" href="css/mark.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>


<body>
<div class="dashboard">
<?php include("faculty-dashboard.php"); ?>
    </div>
	<div class="container">
       <div class="col-lg-12">
         <center> <h1>MARK-ATTENDANCE</h1></center>
         <h3><?php
					
	error_reporting(0);
	$cur_date = date('Y-m-d');
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$attend = $_POST['attend'];
		$insertattend = $stu->insertAttendance($attend);
	}
?>
<?php 
	if (isset($insertattend)) {
		echo $insertattend;
	}
             ?></h3>
	<h4><strong>Date</strong>: <?php echo $cur_date; ?></h4>
	<form action="" method="POST">
					<table class="table  table-bordered">
						<tr>
							<th>Id</th>
							<th >Student Name</th>
							<th >Attendance</th>
						</tr>
						<?php 
							$getstudent = $stu->getStudents();
							if ($getstudent) {
								$i = 0;
								while ($value = $getstudent->fetch_assoc()) {
									$i++;
									$name=ucwords($value['first_name']." ".$value['last_name']); 
						?>
						<tr>
							<td width="25%"><?php echo $value['id']; ?></td>
							<td><?php echo $name; ?></td>
							<td>
								<input type="radio" name="attend[<?php echo $value['id']; ?>]" value="present">P
								<input type="radio" name="attend[<?php echo $value['id']; ?>]" value="absent">A
							</td>
						</tr>
						<?php } } ?>

						<tr>
							<td colspan="4">
								<input type="submit" name="submit" value="Submit">
							</td>
						</tr>
										
					</table>
					
           </form>
        </div>
    </div>
    
					
		
    </body>

</html>

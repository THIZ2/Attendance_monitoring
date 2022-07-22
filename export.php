<?php
if(isset($_POST['export']))
{
      $conn=mysqli_connect("localhost","root","");
       mysqli_select_db($conn,"sas");
    header('Content-type:text/csv;');
    header('content-Disposition: attachment; filename=data.csv');
    $output=fopen("php://output","w");
    fputcsv($output, array('id' ,'attendance' ,'date'));
     $sql="select * from attendance";
    $query=mysqli_query($conn,$sql);
     while($result=mysqli_fetch_assoc($query))
     {
         fputcsv($output, $result);
     }
    fclose($output);
    
    
}
?>
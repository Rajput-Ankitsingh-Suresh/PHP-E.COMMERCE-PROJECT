<?php
include('conn.php');
$pid=$_GET['x'];
$q=mysqli_query($con,"delete from product where pid=$pid");
if($q)
      header('location:Product_master.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
<?php
include('conn.php');
$userid=$_GET['x'];
$q=mysqli_query($con,"delete from about_us where userid=$userid");
if($q)
      header('location:about_us.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
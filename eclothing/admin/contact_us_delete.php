<?php
include('conn.php');
$userid=$_GET['x'];
$q=mysqli_query($con,"delete from contact_us where userid=$userid");
if($q)
      header('location:contact_us.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
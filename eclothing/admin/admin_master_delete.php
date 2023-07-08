<?php
include('conn.php');
$aid=$_GET['x'];
$q=mysqli_query($con,"delete from admin where aid=$aid");
if($q)
      header('location:admin_master.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
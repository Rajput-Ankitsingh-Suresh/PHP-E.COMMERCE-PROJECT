<?php
include('conn.php');
$sid=$_GET['x'];
$q=mysqli_query($con,"delete from subcategory where sid=$sid");
if($q)
      header('location:subcategory.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
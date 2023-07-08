<?php
include('conn.php');
$cid=$_GET['x'];
$q=mysqli_query($con,"delete from category where cid=$cid");
if($q)
      header('location:category.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
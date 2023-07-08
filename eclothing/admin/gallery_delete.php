<?php
include('conn.php');
$gid=$_GET['x'];
$q=mysqli_query($con,"delete from gallery where gid=$gid");
if($q)
      header('location:gallery.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
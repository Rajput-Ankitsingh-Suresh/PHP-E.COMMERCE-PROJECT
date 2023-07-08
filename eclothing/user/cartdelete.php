<?php
include('conn.php');
$cartid=$_GET['x'];
$q=mysqli_query($con,"delete from cart where cartid=$cartid");
if($q)
      header('location:shoppingcart1.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
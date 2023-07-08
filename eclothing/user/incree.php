<?php
$cid=$_GET['cid'];

include('conn.php');
$q=mysqli_query($con,"update cart set qty=qty+1 where cartid=$cid");
if($q)
    header('location:shoppingcart1.php');
?>
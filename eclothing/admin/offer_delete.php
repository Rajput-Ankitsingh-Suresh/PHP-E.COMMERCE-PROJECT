
<?php
include('conn.php');
$oid=$_GET['x'];
$q=mysqli_query($con,"delete from offer where oid=$oid");
if($q)
      header('location:offer.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
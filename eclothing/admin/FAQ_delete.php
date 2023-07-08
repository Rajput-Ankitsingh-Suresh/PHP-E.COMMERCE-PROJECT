
<?php
include('conn.php');
$id=$_GET['x'];
$q=mysqli_query($con,"delete from faq where id=$id");
if($q)
      header('location:FAQ.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
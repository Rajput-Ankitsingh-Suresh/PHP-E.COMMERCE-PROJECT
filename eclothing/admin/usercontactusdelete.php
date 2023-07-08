
<?php
include('conn.php');
$ucid=$_GET['x'];
$q=mysqli_query($con,"delete from user_contact where ucid=$ucid");
if($q)
      header('location:usercontactus.php');
else
      echo "<script>alert('not deleted');</script>";
?>            
 
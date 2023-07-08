<?php
     session_start();
     $con=mysqli_connect("localhost","root","","BCA6");
     $uid=$_SESSION['uid'];
     $pid=$_GET['x'];
     $cdate=date('d/m/y');
    if (isset($_SESSION['uid']))
    {
     mysqli_query($con,"insert into cart values(null,'$uid','$pid',0,1,'$cdate')");
     // echo $_SESSION['uid'];
     echo "<script>alert('your item has been added into cart');</script>";
     echo "<script>window.location.assign('index2.php');</script>";
    }
    else
    {
      header('location:loginuser.php');
    } 
?>
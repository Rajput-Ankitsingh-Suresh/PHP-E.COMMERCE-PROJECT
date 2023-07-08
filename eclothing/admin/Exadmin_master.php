<?php
$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnins']))
{
    $aid=$_POST['txtaid'];
    $Email=$_POST['txtEmail'];
    $Username=$_POST['txtUsername'];
    $Password=$_POST['txtPassword'];
    $pic = $_FILES["txtpic"]["name"];
    $dst="./images/".$pic;
    move_uploaded_file($_FILES['txtpic']['tmp_name'],$dst);
    $q=mysqli_query($con,"insert into registration values(null,'$Email','$Username','$Password','$pic')");
    if($q)
      echo "inserted";
    else
      echo "not inserted";  
}
?>
<form method = POST enctype="multipart/form-data">
aid <input type = text name=txtaid ><br>
Email <input type = text  name=txtEmail><br>
Username <input type = text  name=txtUsername><br>
Password <input type = text  name=txtPassword><br>
Enter photo <input type = FILE name=txtpic><br>
<input type=submit name=btnins value="Insert">
</form>
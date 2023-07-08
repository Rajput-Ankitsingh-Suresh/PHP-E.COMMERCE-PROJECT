<?php

$con=mysqli_connect("localhost","root","","bca6");
if(isset($_POST['submit']))
{
    $email= mysqli_real_escape_string($con, $_POST['email']);
    $emailquery = "select * from registration where  email = '$email'";
    $query = mysqli_query($con,$emailquery);
    $emailcount = mysqli_num_rows($query);
	if($emailcount){
		$userdata = mysqli_fetch_array($query);
		$username = $userdata['username'];
		$aid = $userdata['aid'];
		$subject = "Password Reset";
        $body = "Hi, $username. click here too reset your Password http://localhost/eclothing/user/reset_password.php?aid=$aid";
		$sender_email = "From: rajputankit5570@gmail.com";

		if(mail($email,$subject,$body,$sender_email))
		{
			$_SESSION['msg'] = "check you mail to reset your Password $email";
			header('location:loginuser.php');
		}
		else
		{
			echo "Email sending failed.......";
		}

	} 
	else
	{
		echo "No email found";
	}
}    

   
?>


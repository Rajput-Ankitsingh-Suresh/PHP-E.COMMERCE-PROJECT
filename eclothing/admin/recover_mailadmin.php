<?php
//session_start();
include('Header.php');

//echo $_SESSION['Email'];
?>
<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
									<?php

$con=mysqli_connect("localhost","root","","bca6");
if(isset($_POST['submit']))
{
    $Email= mysqli_real_escape_string($con, $_POST['Email']);
    $emailquery = "select * from registration where  Email = '$Email'";
    $query=mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_rows($query);
	if($emailcount){
		$Userdata = mysqli_fetch_array($query);
		$Username = $Userdata['Username'];
		$aid = $Userdata['aid'];
		$subject = "Password Reset";
        $body = "Hi, $Username. click here too reset your Password http://localhost/eclothing/user/reset_password.php?aid=$aid";
		$sender_email = "From:rajputankit5570@gmail.com";

		if(mail($Email,$subject,$body,$sender_email))
		{
			$_SESSION['msg'] = "check you mail to reset your Password $Email";
			header('location:index.php');
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
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="ace-icon fa fa-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form method="post">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="Email" name="Email" class="form-control" placeholder="Email" />
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-danger">
															<i class="ace-icon fa fa-lightbulb-o"></i>
															<span class="bigger-110">Send Me!</span>
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /.widget-main -->

										<div class="toolbar center">
											<a href="index.php" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

<?php
include('footer.php');
?>
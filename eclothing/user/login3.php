<?php
session_start();

$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnlogin']))
{
    $email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
    $q=mysqli_query($con,"select * from userregistration where ` email` = '$email' and ` password` = '$password' ");
	//echo "select * from userregistration where ` email` = '$email' and ` password` = '$password' and 'status'=1";
	//$row=mysqli_fetch_array($q);
//	$pic=$row['pic'];
    //$cnt = mysqli_num_rows($q);
    if($q)
        echo " login";
        //$_SESSION['uid']=$uid;
		//$_SESSION['email']=$email;
		//$_SESSION['pic']=$pic;
		
	 
		else
	 	
		echo "not login";
	 
}
?>
								<form id="login-form" action="" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name=txtemail id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name=
                                        txtpassword id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="btnlogin" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
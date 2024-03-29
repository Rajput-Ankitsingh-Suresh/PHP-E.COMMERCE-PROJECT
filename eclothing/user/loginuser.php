<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
	$(function() {

$('#login-form-link').click(function(e) {
	$("#login-form").delay(100).fadeIn(100);
	 $("#register-form").fadeOut(100);
	$('#register-form-link').removeClass('active');
	$(this).addClass('active');
	e.preventDefault();
});
$('#register-form-link').click(function(e) {
	$("#register-form").delay(100).fadeIn(100);
	 $("#login-form").fadeOut(100);
	$('#login-form-link').removeClass('active');
	$(this).addClass('active');
	e.preventDefault();
});

});

</script>
<!------ Include the above in your HEAD tag ---------->
<style>
	body {
    padding-top: 90px;
}
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

</style>

<?php
session_start();
?>
<div class="container" >
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
						<div class="row">
							<div class="col-lg-12">
<?php

$con=mysqli_connect("localhost","root","","bca6");
if(isset($_POST['btnlogin']))
{
    $email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
    $q=mysqli_query($con,"select * from userregistration where  email = '$email' and  password = '$password' and status=1");
	$row=mysqli_fetch_array($q);
    $cnt = mysqli_num_rows($q);

//echo "my session is ". $_SESSION['uid'];
  if($q)
	 {
		$_SESSION['uid']=$row['uid'];
       
		$_SESSION['email']=$email;
		$_SESSION['pic']=$pic;
	  header('location:index2.php');
	 }	
		else
	 {	
		echo "not login";
	 }
}
?>
								<form id="login-form" action="" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="txtemail" id="username" tabindex="1" class="form-control" placeholder="Email" value=""  required>
									</div>
									<div class="form-group">
										<input type="password" name="txtpassword" id="password" tabindex="2" class="form-control" placeholder="Password"  required>
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
													<a href="recover_email.php" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
<?php
$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnins']))
{
	
	$username=$_POST['txtusername'];
	$gender=$_POST['txtgender']; 
	$dob=$_POST['date'];
	$usermobileno=$_POST['txtusermobileno'];
    $email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
	$useraddress=$_POST['txtuseraddress'];
	$otp=rand(999,9999);
	
     $q=mysqli_query($con,"insert into userregistration values(null,'$username','$gender','$dob','$usermobileno','$email',$password, '$useraddress',$otp,0)");
	 mail($email, "subject", $otp);
	 echo "insert into userregistration values(null,'$username','$gender','$dob','$usermobileno','$email',$password', '$useraddress',$otp,0)";
    if($q)
	{
		$_SESSION['sotp']=$otp;
		

	echo "<script>	window.location.assign('http://localhost/eclothing/user/otp.php')</script>";
	header('location:otp.php');
		

	}
    else
	{
	
      echo "not inserted";
	} 
	
}
?>
								<form id="register-form"  method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="txtusername" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required>
									</div>
									<div class="form-group">
									<input type="text" name="txtgender" id="gender" tabindex="1" class="form-control" placeholder="Gender" value="" required>
										<!--<input type="radio" name="mf" id="gender" tabindex="1" class="form-control" placeholder="Gender" value="Male" required>
										<input type="radio" name="mf" id="gender" tabindex="1" class="form-control" placeholder="Gender" value="Female" required>
										<input type="radio" name="txtgender" id="gender" tabindex="1" class="form-control" placeholder="Gender" value="Other" required>-->
									</div>
									<div class="form-group">
										<input type="date" name="date" id="date" tabindex="1" class="form-control" placeholder="Date of Birth" value="" required>
									</div>
									<div class="form-group">
										<input type="text" name="txtusermobileno" id="usermobileno"  tabindex="1" class="form-control" placeholder="User Mobileno" value="" required>
									</div>
									<div class="form-group">
										<input type="email" name="txtemail" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="txtpassword" id="password"  tabindex="2" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<!--<input type="password" name="txtpassword" id="password" tabindex="2" class="form-control" placeholder="Password">-->
										<textarea  name="txtuseraddress" id="useraddress" tabindex="2" class="form-control" placeholder="Useraddress" required  ></textarea>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="btnins" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
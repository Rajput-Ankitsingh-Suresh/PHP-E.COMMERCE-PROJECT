
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<!--hide and show Password-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
		<!-- Password and confirmPassword javascript 
		coding -->
		<script>
			function validate()
			{
				var pwd=document.getElementById("pwd").value;
				var cnfpwd=document.getElementById("cnfpwd").value;
				  if(pwd.length<8 || pwd.length>18 )
				  {
					  alert("password length invalid");
					  return false;
				  }
				  if(pwd!=cnfpwd)
				  {
					  alert("password and confirm password not match");
					  return false
				  }
				  return true;
			}
		</script>

	</head>

	<body class="login-layout">
<?php
session_start();
?>
	<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">E-</span>
									<span class="white" id="id-text2">Mall</span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Company Name</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>
                                              
<?php

$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnlogin']))
{
    $Email=$_POST['txtEmail'];
    $Password=$_POST['txtPassword'];
    $q=mysqli_query($con,"select * from registration where ` Email` = '$Email' and ` Password` = '$Password'");
	//echo "select * from registration where ` Email` = '$Email' and ` Password` = '$Password'";
	$row=mysqli_fetch_array($q);
	$pic=$row['pic'];
    $cnt = mysqli_num_rows($q);
    if($cnt>0)
	 {
		$_SESSION['Email']=$Email;
		$_SESSION['pic']=$pic;
		header ('location:Home.php');
	 }	
		else
	 {	
		echo "not login";
	 }
}

?>


											<form method = Post>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="Email" class="form-control" placeholder="Email" name="txtEmail"  autocomplete="off" required />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													
													<!--<form method = Post>

													    Username
														<input type="text" name="username" autofocus="" autocapitalize="none" autocomplete="username" required="" id="id_username">
														Password-->
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														<input type="password" placeholder="Password" name="txtPassword" autocomplete="current-password" required="" id="id_password">
														<i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
														</span>
													</label>
														
														<!--<button type="submit" class="btn btn-primary">Login</button>
                                                        </form>-->
														

													<!--<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Password" name="txtPassword"  required/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>-->
													

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Remember Me</span>
														</label>

														<input type="submit" name=btnlogin class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>

											<div class="space-6"></div>

											<div class="social-login center">
												<a class="btn btn-primary">
													<i class="ace-icon fa fa-facebook"></i>
												</a>

												<a class="btn btn-info">
													<i class="ace-icon fa fa-twitter"></i>
												</a>

												<a class="btn btn-danger">
													<i class="ace-icon fa fa-google-plus"></i>
												</a>
											</div>
										</div><!-- /.widget-main -->

										<div class="toolbar clearfix">
										   <!-- <div>
												<a href="#" data-target="#forgot-box" class="forgot-password-link">
													<i class="ace-icon fa fa-arrow-left"></i>
													I forgot my password
												</a>
											</div>-->
											
											
											<div>
												<a href="#" data-target="#signup-box" class="user-signup-link" >
													I want to register
													<!--<i class="ace-icon fa fa-arrow-right"></i>-->
													<i class="ace-icon fa fa-arrow"></i>
												</a>
											</div>
										</div>
							<div class="">
								       <div>
												<a href="recover_emailadmin.php" data-target="#forgot-box" class="forgot-password-link" style="color:red">
													<!--<i class="ace-icon fa fa-arrow-left"></i>-->
													<i class="ace-icon fa fa-arrow"></i>

													I forgot my password
												</a>
											</div>
								</div>				

									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
								


							<!--<div id="forgot-box" class="forgot-box widget-box no-border">
									<div class="widget-body">
<?php

$con=mysqli_connect("localhost","root","","bca6");
if(isset($_POST['submit']))
{
    $Email= mysqli_real_escape_string($con, $_POST['Email']);
    $emailquery="SELECT * FROM `registration` WHERE 'email'='$email'";
    $query=mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_rows($query);
    if($emailcount){
		$userdata = mysqli_fetch_array($query);
		$Username = $userdata['Username'];
		$aid = $userdata['aid'];
		$subject="Password Reset";
        $body="Hi, $Username. click here too reset your Password http://localhost/eclothing/admin/reset_paassword.php?aid=$aid";
		$sender_email="From:rajputankit5570@gmail.com";

		if(mail($Email,$subject,$body,$sender_email))
		{
			$_SESSION['msg']="check you mail to reset your Password $Email";
			//header('location:index.php');
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

										<!--<div class="toolbar center">
											<a href="index.php" data-target="#login-box" class="back-to-login-link">
												Back to login
												<i class="ace-icon fa fa-arrow-right"></i>
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.forgot-box -->

								<div id="signup-box" class="signup-box widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="ace-icon fa fa-users blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>
<?php
$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnins']))
{
 //   $aid=$_POST['txtaid'];
    $Email=$_POST['txtEmail'];
    $Username=$_POST['txtUsername'];
    $Password=$_POST['txtPassword'];
	$CPassword=$_POST['txtrepass'];
    $pic = $_FILES["txtpic"]["name"];
    $dst="images/".$pic;
      $q=mysqli_query($con,"insert into registration values(null,'$Email','$Username','$Password','$pic')");
	  

    if($q)
	{
		move_uploaded_file($_FILES['txtpic']['tmp_name'],$dst);
        echo "inserted";
	}
    else
	{
      echo "not inserted";  
	}
}
?>
											<form method=POST enctype="multipart/form-data" onsubmit=" return validate() ">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Email" name="txtEmail" required/>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Username" name=txtUsername required/>
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" id="pwd" class="form-control" placeholder="Password" name=txtPassword required/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													<!--<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														<input type="password" placeholder="Password" name="txtPassword" autocomplete="current-password" required="" id="id_password">
														<i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
														</span>
													</label>-->

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" id="cnfpwd" class="form-control" placeholder="Repeat password" name=txtrepass required/>
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="File" class="form-control" placeholder="pic" name="txtpic" required/>
															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<input type="submit" class="width-65 pull-right btn btn-sm btn-success" name=btnins value=Register>

													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a href="#" data-target="#login-box" class="back-to-login-link">
												<i class="ace-icon fa fa-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->

							<div class="navbar-fixed-top align-right">
								<br />
								&nbsp;
								<a id="btn-login-dark" href="#">Dark</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-blur" href="#">Blur</a>
								&nbsp;
								<span class="blue">/</span>
								&nbsp;
								<a id="btn-login-light" href="#">Light</a>
								&nbsp; &nbsp; &nbsp;
							</div>
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
		<!-- show and hide Password javascript code "https://www.csestack.org/hide-show-password-eye-icon-html-javascript/ "-->
		<script>
			  const togglePassword = document.querySelector('#togglePassword');
					const password = document.querySelector('#id_password');
					
					togglePassword.addEventListener('click', function (e) {
						// toggle the type attribute
						const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
						password.setAttribute('type', type);
						// toggle the eye slash icon
						this.classList.toggle('fa-eye-slash');
					});
		</script>
			
	</body>
</html>

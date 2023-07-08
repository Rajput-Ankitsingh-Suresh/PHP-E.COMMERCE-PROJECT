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
ob_start();
?>
<div class="container" >
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Reset Password</a>
							</div>
							

                            <p >
                                <?php
                                if(isset($_SESSION['passmsg']))
                                {
                                    echo $_SESSION['passmsg'] = "";
                                }else
                                {
                                    echo $_SESSION['passmsg'] = "";
                                }
                                ?></p>
							<!--<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>-->
						</div>
						<hr>
					</div>
					<div class="panel-body" style="background-image: url('assets/images/backgrounds/login-bg.jpg')">
						<div class="row">
							<div class="col-lg-12">
<?php

$con=mysqli_connect("localhost","root","","bca6");
if(isset($_POST['submit']))
{
    if(isset($_GET['aid']))
    {
        $aid = $_GET['aid'];
    
    $password = mysqli_real_escape_string($con, $_POST['Password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cPassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
         
          
            if($password === $cpassword)
            {
                $updatequery="update registration set `Password`='$password' where `aid`='$aid'";
                $iquery = mysqli_query($con, $updatequery);
                if($iquery)
                {
                   $_SESSION['msg'] = "Your password has been updated";
				   //echo "Your password has been updated";
                    header('location:index.php');

                }
                else
                {
                   $_SESSION['passmsg'] = "Your password not updated";
				   //echo "Your password not updated";
                    header('location:reset_passwordadmin.php');
                }
            }else{// $_SESSION['passmsg'] = "password is not matching"; 
			        echo "password is not matching"; 
			}
    }else{ echo "No aid found"; } 
} 
?>
								<form id="login-form" action="" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="password" name="Password" id="password" tabindex="1" class="form-control" placeholder="New password" value=""  required>
									</div>
									<div class="form-group">
										<input type="password" name="cPassword" id="password" tabindex="2" class="form-control" placeholder=" confirm Password"  required>
									</div>
									<!--<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>-->
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="update password">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="loginhtml.php" tabindex="5" class="forgot-password">Back to login Page</a>

												</div>
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

<?php
$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnlogin']))
{
    $Email=$_POST['txtEmail'];
    $Password=$_POST['txtPassword'];
    $q=mysqli_query($con,"select * from admin where ` Email` = '$Email' and ` Password` = '$Password'");
    echo "select * from admin where Email = '$Email' and Password = '$Password'";
    $cnt = mysqli_num_rows($q);
    if($cnt>0)
      echo "login successfully";
    else
      echo "not login";  
}
?>
<form method = POST >
                                    
									<div class="form-group">
																			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
									
																			<div class="col-sm-9">
																				<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtEmail />
																			</div>
																		</div><br>
									<div class="form-group">
																			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Password </label>
									
																			<div class="col-sm-9">
																				<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtPassword />
																			</div>
																		</div><br>
																		
																		
									<input type=submit name=btnlogin value="login">
									</form>

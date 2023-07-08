
<?php
    session_start();
    
    $con=mysqli_connect("localhost","root","","BCA6");
    if(isset($_POST['btnins']))
    {
        $sotp=$_SESSION['sotp'];
        echo $sotp;
        $otp=$_POST['otp'];
        if($otp==$sotp)
{
        mysqli_query($con,"update userregistration set status=1 where otp=$sotp");
                     header('location:loginuser.php');
}
        else 
 {       
            echo "check ur mail and veryfiy ur otp";
 }         
    }
?>
<form method="post"  align="Center">
 Enter otp<input type="text" name="otp" value="" required></br></br>

 <input type="submit" name="btnins" value="verifcation">

 <!--<form method = POST class="contact-form mb-3" >
     
        <div class="page-content pb-0">
                <div class="container">
                				<div class="row">
                					<div class="col-sm-6">  
                                        <label for="otp" class="sr-only">Enter otp</label>
                						<input type="text" class="form-control" id="otp" placeholder="Enter otp"  name="otp" required>
                					</div>
                                    <button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm"  align="right" name=btnins>
                					<span>verifiaction</span>
            						<i class="icon-long-arrow-right"></i>
                				   </button>
                               </div> --> 
</form>

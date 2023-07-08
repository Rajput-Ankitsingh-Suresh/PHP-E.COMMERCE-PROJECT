<?php

    //get data from form
    //$name=$_POST['name'];
    $email=$_POST['emailaddress'];
    $message=$_POST['message'];
   // $number=$_POST['mobile'];
   // $to = "asr91198@gmail.com";
    $subject = "Mail from website";
    //$txt ="Name = ".$name."\r\n Email =". $email . "\r\n Message = " .$message."\r\n Mobile number =" . $number;
    $txt ="Email =". $email . "\r\n Message = " .$message;
    //$headers = "From: rajputankit5570@gmail.com" . "\r\n".
    //"cc: thakurankitsingh9956@gmail.com ";
    if($email!=NULL)
    {
        mail($email,"subject",$message);
        //mail($to,$subject,$txt,$headers);
    }
    //redirect
    //header("location:")
?>
<form action="contactusmail.php" method="post" align="center">
    <!--<input type="text" name="name" placeholder="your name"></br></br>-->
    <input type="email" name="emailaddress" placeholder="your Email address"></br></br>
    <!--<input type="text" name="mobile" placeholder="mobile number"></br></br>-->
    <textarea type="text" name="message" placeholder="your message"></textarea></br></br>
    
    <button type="submit">submit</button>
</form>
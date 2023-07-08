
<?php
include('Header.php');
?>
<?php
include('conn.php');
$ucid=$_GET['x'];
$q=mysqli_query($con,"select * from user_contact where ucid=$ucid");
$row=mysqli_fetch_array($q);
if(isset ($_POST['btnup']))
{

    $ucname=$_POST['txtucname'];
    $ucemail=$_POST['txtucemail'];
    $ucphone=$_POST['txtucphone'];
    $ucsubject=$_POST['txtucsubject'];
    $ucmessage=$_POST['txtucmessage'];
    $ucstatus=$_POST['txtucstatus'];
    $q=mysqli_query($con, "update user_contact set ucname='$ucname',ucemail='$ucemail',ucphone='$ucphone',ucsubject='$ucsubject',ucmessage='$ucmessage',ucstatus=$ucstatus where uid=$ucid");
    if($q)
	 	
        echo "updated";
    else
	     
        echo "not updated";
        
}
?>
<center><a href="" class="previous round"><b>&#8249; previ </b></a><b style="color:black;font-size:20px;">USERCONTACT EDIT</b><!--<a href="" class="Next round"><b>Next &#8250;</b></a>--></center>
<form method = POST >
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User name</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtucname  value="<?php echo $row['ucname'];?>" required />
										</div>
									</div><br>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User Email</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtucemail value="<?php echo $row['ucemail'];?>" required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User phone</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtucphone value="<?php echo $row['ucphone'];?>" required />
										</div>
									</div><br> 
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User subject</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtucsubject value="<?php echo $row['ucsubject'];?>" required />
										</div>
									</div><br>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User Message</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtucmessage value="<?php echo $row['ucmessage'];?>" required />
										</div>
									</div><br>

 <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">User status</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtucstatus value="<?php echo $row['ucstatus'];?>" required />
										</div>
									</div><br>
                                    
                                                                                                           

<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="btnup">
												<i class="ace-icon fa fa-check bigger-110"></i>
											    updated
											</button>
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>

										</div>
									</div>
</form>

<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<table id="datatableid" class="table  table-bordered table-hover">
											<thead>
												<tr>
													<th class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</th>
													
													
													<th>ucid</th>
													<th>ucname</th>
                                                    <th>ucemail</th>
                                                    <th>ucphone</th>
                                                    <th>ucsubject</th>
                                                    <th>ucmessage</th>
                                                    <th>ucstatus</th>
													<th>Action</th>
                                            
													
							
												</tr>
											</thead>

											<tbody>
                                            <?php
	include('conn.php');
    $q=mysqli_query($con,"select*from user_contact");
    while($row=mysqli_fetch_array($q))
    {
?>

												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
                                                    <td>
														<?php echo $row['ucid'];  ?>
													</td>

			
													<td>
														<?php echo $row['ucname'];  ?>
													</td>

                                                    <td>
														<?php echo $row['ucemail'];  ?>
													</td>
													
                                                    <td>
														<?php echo $row['ucphone'];  ?>
													</td>
                                                    <td>
														<?php echo $row['ucsubject'];  ?>
													</td>
                                                    <td>
														<?php echo $row['ucmessage'];  ?>
													</td>

                                                    <td>
														<?php echo $row['ucstatus']; ?>
                                                     </td>
														 
													<td>
                                                    <div class="hidden-sm hidden-xs btn-group">
															

															<!--<button class="btn btn-xs btn-info">
                                                               <?php echo "<a href='FAQ_edit.php?x=$row[0]' class='ace-icon fa fa-pencil bigger-120' ></a>";
                                                                ?>
															</button>-->

															<button class="btn btn-xs  btn-danger">
															<?php	echo "<a href='usercontactusdelete.php?x=$row[0] 'class='ace-icon fa fa-trash-o bigger-120'></a>";
															?>
															</button>

															
														</div>
                                                    </div>
													</td>
												</tr>
                    
                                                </form>
																</div>
															</div>
														</div>
													</td>
												</tr>
                                                <?php
    }
                                            ?>
											</tbody>
										</table>
									</div>
								</div>


        

<?php
include('footer.php');
?>


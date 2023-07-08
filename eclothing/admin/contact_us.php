<?php
include('Header.php');
?>
<?php
$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnins']))
{

    $username=$_POST['txtusername'];
    $useraddress=$_POST['txtuseraddress'];
    $usermobileno=$_POST['txtusermobileno'];
    $userwebaddress=$_POST['txtuserwebaddress'];
    $useremail=$_POST['txtuseremail'];
    $q=mysqli_query($con,"insert into contact_us values(null,'$username','$useraddress','$usermobileno','$userwebaddress','$useremail')");
    if($q)
      echo "inserted";
    else
      echo "not inserted";  
}
?>
 <!--<H1 ALIGN=CENTER> CONTACTUS </H1> -->
 <center><a href="" class="previous round"><b>&#8249; previ </b></a><b style="color:black;font-size:20px;">CONTACT US</b><a href="" class="Next round"><b>Next &#8250;</b></a></center>
<form method = POST>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Name</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtusername required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Address</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtuseraddress required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Mobileno</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtusermobileno  required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Webaddress</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtuserwebaddress required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Email</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtuseremail required />
										</div>
									</div><br>

<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="submit" name="btnins">
												<i class="ace-icon fa fa-check bigger-110"></i>
											    insert
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
													
												
												
                                                    <th>username</th>
                                                    <th>useraddress</th>
                                                    <th>usermobileno</th>
                                                    <th>userwebaddress</th>
                                                    <th>useremail</th>
													
													<th></th>
												</tr>
											</thead>

											<tbody>
                                            <?php
	include('conn.php');
    $q=mysqli_query($con,"select*from contact_us");
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
														<?php echo $row['username'];  ?>
													</td>
													
                                                    <td>
														<?php echo $row['useraddress'];  ?>
													</td>
													
                                                    <td>
														<?php echo $row['usermobileno'];  ?>
													</td>
													
                                                    <td>
														<?php echo $row['userwebaddress'];  ?>
													</td>

                                                    <td>
														<?php echo $row['useremail'];  ?>
													</td>
													<td>
                                                    <div class="hidden-sm hidden-xs btn-group">
															

															<button class="btn btn-xs btn-info">
                                                               <?php echo "<a href=contact_us_edit.php?x=$row[0] class='ace-icon fa fa-pencil bigger-120' ></a>";
                                                                ?>
															</button>

															<button class="btn btn-xs btn-danger">
															<?php	echo "<a href=contact_us_delete.php?x=$row[0] class='ace-icon fa fa-trash-o bigger-120'></a>";
															?>
															</button>

															
														</div>
                                                    </div>/
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
									</div><!-- /.span -->
								</div><!-- /.row -->
<?php
include('footer.php');
?>


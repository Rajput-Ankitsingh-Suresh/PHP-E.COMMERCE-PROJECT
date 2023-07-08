<?php
include('Header.php')
?>
<?php
$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnins']))
{

    $aname=$_POST['txtaname'];
    $email=$_POST['txtemail'];
    $Password=$_POST['txtPassword'];
    $pic = $_FILES["txtpic"]["name"];
    $dst="./images/".$pic;
    move_uploaded_file($_FILES['txtpic']['tmp_name'],$dst);
    $q=mysqli_query($con,"insert admin values(null,'$aname','$email','$Password','$pic')");
    if($q)
      echo "inserted";
    else
      echo "not inserted";  
}
?>
<!--<H1 ALIGN="CENTER">Admin-Master</H1>-->
<center><a href="" class="previous round"><b>&#8249; previ </b></a><b style="color:black;font-size:20px;">Admin-Master</b><a href="" class="Next round"><b>Next &#8250;</b></a></center>

<form method = POST enctype="multipart/form-data">

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Aname </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtaname required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtemail required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Password </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtPassword required />
										</div>
									</div><br>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">pic </label>

										<div class="col-sm-9">
											<input type="FILE" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name="txtpic" required />
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
													
													
													<th>aname</th>
                                                    <th>email</th>
													<th>Password</th>
													<th>pic</th>
													<th>Action</th>
                                            
													
							
												</tr>
											</thead>

											<tbody>
                                            <?php
	include('conn.php');
    $q=mysqli_query($con,"select*from admin");
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
														<?php echo $row['aname'];  ?>
													</td>
													
                                                    <td>
														<?php echo $row['email'];  ?>
                                                     </td>
													 <td>
														<?php echo $row['Password'];  ?>
                                                     </td>
													 <td>
													 <?php echo "<image src=images/$row[4] height=200 width=200>";  ?>
                                                     </td>
													 
													<td>
                                                    <div class="hidden-sm hidden-xs btn-group">
															

															<button class="btn btn-xs btn-info">
                                                               <?php echo "<a href='admin_master_edit.php?x=$row[0]' class='ace-icon fa fa-pencil bigger-120' ></a>";
                                                                ?>
															</button>

															<button class="btn btn-xs  btn-danger">
															<?php	echo "<a href='admin_master_delete.php?x=$row[0] 'class='ace-icon fa fa-trash-o bigger-120'></a>";
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
									</div><!-- /.span -->
								</div><!-- /.row -zzzz->
  
<?php
include('footer.php')
?>
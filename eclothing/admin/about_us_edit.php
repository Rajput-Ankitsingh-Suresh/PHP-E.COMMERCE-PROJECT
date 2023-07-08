<?php
include('Header.php')
?>
<?php
include('conn.php');
$userid = $_GET['x'];
$q=mysqli_query($con,"select * from about_us where userid=$userid");
$row=mysqli_fetch_array($q);
if(isset ($_POST['btnup']))
{

    $usertitle=$_POST['txtusertitle'];
    $userdescription=$_POST['txtuserdescription'];
    $q=mysqli_query($con, "update about_us set usertitle='$usertitle',userdescription='$userdescription'where userid=$userid");
    if($q)
        echo "updated";
    else
        echo "not updated";
        
}
?>
<center><a href="" class="previous round"><b>&#8249; previ </b></a><b style="color:black;font-size:20px;">About US EDIT</b><!--<a href="" class="Next round"><b>Next &#8250;</b></a>--></center>

<form method = POST >

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Title</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtusertitle value="<?php echo $row['usertitle'];?>" required />
										</div>
									</div><br>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Description</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtuserdescription value="<?php echo $row['userdescription'];?>" required />
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
													
												
												
                                                    <th>usertitle</th>
                                                    <th>userdescription</th>
                                                
													
													<th></th>
												</tr>
											</thead>

											<tbody>
                                            <?php
	include('conn.php');
    $q=mysqli_query($con,"select*from about_us");
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
														<?php echo $row['usertitle'];  ?>
													</td>
													
                                                    <td>
														<?php echo $row['userdescription'];  ?>
													</td>
									
													<td>
                                                    <div class="hidden-sm hidden-xs btn-group">
															

															<!--<button class="btn btn-xs btn-info">
                                                               <?php echo "<a href=about_us_edit.php?x=$row[0] class='ace-icon fa fa-pencil bigger-120' ></a>";
                                                                ?>
															</button>-->

															<button class="btn btn-xs btn-danger">
															<?php	echo "<a href=about_us_delete.php?x=$row[0] class='ace-icon fa fa-trash-o bigger-120'></a>";
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
								</div><!-- /.row -->

<?php
include('footer.php')
?>

<?php
include('Header.php')
?>
<?php
include('conn.php');
$sid = $_GET['x'];
$q=mysqli_query($con,"select * from subcategory where sid=$sid");
$row=mysqli_fetch_array($q);
if(isset ($_POST['btnup']))
{
    
    $cid=$_POST['category'];
    $sname=$_POST['txtsname'];
    $pic = $_FILES["txtpic"]["name"];
    $dst="./images/".$pic;
    move_uploaded_file($_FILES['txtpic']['tmp_name'],$dst);
    $q=mysqli_query($con, "update subcategory set sname='$sname',pic='$pic' where sid=$sid");
    if($q)
        echo "updated";
    else
        echo "not updated";
        
}
?>
<!--<h1 ALIGN=CENTER>SUBCATEGORYEDIT</H1>-->
<center><a href="" class="previous round"><b>&#8249; previ </b></a><b style="color:black;font-size:20px;">SUBCATEGORYEDIT</b><!--<a href="" class="Next round"><b>Next &#8250;</b></a>--></center>
<form method = POST  enctype="multipart/form-data">

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Select Category</label>

										<div class="col-sm-9">
										
<select name = category  class="col-xs-10 col-sm-5">
<?php
	$q=mysqli_query($con,"select * from category");
	while($row = mysqli_fetch_array($q))
	{
		echo "<option value = $row[0]>$row[1]</option>";
	}
?>
</select>
										</div>
									</div><br>


<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">SubcategoryName</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtsname value="<?php echo $row['sname'];?>" required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">pic</label>

										<div class="col-sm-9">
											<input type="FILE" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpic value="<?php echo $row['pic'];?>" required />
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
													
													<th>cid</th>
													<th>sname</th>
                                                    <th>pic</th>
													<th>Action</th>
                                            
													
							
												</tr>
											</thead>

											<tbody>
                                            <?php
	include('conn.php');
    $q=mysqli_query($con,"select*from subcategory");
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
														<?php echo $row['cid'];  ?>
													</td>

			
													<td>
														<?php echo $row['sname'];  ?>
													</td>
													
                                                    <td>
														<?php echo "<image src=images/$row[3] height=200 width=200>";  ?>
                                                     </td>
													 
													<td>
                                                    <div class="hidden-sm hidden-xs btn-group">
															

															<!--<button class="btn btn-xs btn-info">
                                                                <?php echo "<a href='subcategory_edit.php?x=$row[0]' class='ace-icon fa fa-pencil bigger-120' ></a>";
                                                                ?>
															</button>-->

															<button class="btn btn-xs  btn-danger">
															<?php	echo "<a href='subcategory_delete.php?x=$row[0] 'class='ace-icon fa fa-trash-o bigger-120'></a>";
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
								</div><!-- /.row --
<?php
include('footer.php')
?>

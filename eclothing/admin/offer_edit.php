
<?php
include('Header.php');
?>
<?php
include('conn.php');
$oid=$_GET['x'];
$q=mysqli_query($con,"select * from offer where oid=$oid");
$row=mysqli_fetch_array($q);
if(isset ($_POST['btnup']))
{

    $oname = $_POST['txtoname'];

    $pid = $_POST['product'];
    $description = $_POST['txtdescription'];
    $percentage = $_POST['txtpercentage'];
    $ostartdate = $_POST['txtostartdate'];
    $oendsdate = $_POST['txtoendsdate'];
    $q=mysqli_query($con, "update offer set oname='$oname',pid= $pid,description='$description',percentage='$percentage', ostartdate='$ostartdate', oendsdate='$oendsdate' where oid=$oid");
	echo"update offer set oname='$oname',pid= $pid,description='$description',percentage='$percentage', ostartdate='$ostartdate', oendsdate='$oendsdate', where oid=$oid";
    if($q)
	 	
        echo "updated";
    else
	     
        echo "not updated";
        
}
?>
<center><a href="" class="previous round"><b>&#8249; previ </b></a><b style="color:black;font-size:20px;">OFFER EDIT</b><!--<a href="" class="Next round"><b>Next &#8250;</b></a>--></center>
<form method = POST >
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Offer Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtoname required />
										</div>
									</div><br>
<!--<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> pid </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpid required />
										</div>
									</div><br>-->

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Select Product</label>

										<div class="col-sm-9">
										
<select name = product class="col-xs-10 col-sm-5" >
<?php
	$q=mysqli_query($con,"select * from product");
	while($row = mysqli_fetch_array($q))
	{
		echo "<option value = $row[0]>$row[2]</option>";
	}
?>
</select>
										</div>
									</div><br>									
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Offer Description </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtdescription required />
											<!--<textarea name="txtdescription" required  id="editor1" ></textarea>-->
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Offer Percentage </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpercentage required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Offer Startdate </label>

										<div class="col-sm-9">
											<input type="date" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtostartdate required />
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Offer Endsdate </label>

										<div class="col-sm-9">
											<input type="date" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtoendsdate required />
										</div>
									</div><br>       

<div class="">
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
													
													
													<th>oname</th>
                                                    <th>pid</th>
                                                    <th>description</th>
                                                    <th>percentage</th>
                                                    <th>ostartdate</th>
                                                    <th>oendsdate</th>
													<th>Action</th>
                                            
													
							
												</tr>
											</thead>

											<tbody>
                                            <?php
	include('conn.php');
    $q=mysqli_query($con,"select*from offer");
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
														<?php echo $row['oname'];  ?>
													</td>
													
                                                    <td>
														<?php echo $row['pid'];  ?>
                                                     </td>

                                                     <td>
														<?php echo $row['description'];  ?>
                                                     </td>
                                                     <td>
														<?php echo $row['percentage'];  ?>
                                                     </td>
                                                     <td>
														<?php echo $row['ostartdate'];  ?>
                                                     </td>

                                                     <td>
														<?php echo $row['oendsdate'];  ?>
                                                     </td>
													 
													<td>
                                                    <div class="hidden-sm hidden-xs btn-group">
															

															<!--<button class="btn btn-xs btn-info">
                                                               <?php echo "<a href='offer_edit.php?x=$row[0]' class='ace-icon fa fa-pencil bigger-120' ></a>";
                                                                ?>
															</button>-->

															<button class="btn btn-xs  btn-danger">
															<?php	echo "<a href='offer_delete.php?x=$row[0] 'class='ace-icon fa fa-trash-o bigger-120'></a>";
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


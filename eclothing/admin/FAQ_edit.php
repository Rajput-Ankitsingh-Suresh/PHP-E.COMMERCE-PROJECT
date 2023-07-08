
<?php
include('Header.php');
?>
<?php
include('conn.php');
$id=$_GET['x'];
$q=mysqli_query($con,"select * from faq where id=$id");
$row=mysqli_fetch_array($q);
if(isset ($_POST['btnup']))
{

    $Question = $_POST['txtQuestion'];
    $Answer = $_POST['txtAnswer'];
    $q=mysqli_query($con, "update faq set Question='$Question',Answer='$Answer' where id=$id");
    if($q)
	 	
        echo "updated";
    else
	     
        echo "not updated";
        
}
?>
<center><a href="" class="previous round"><b>&#8249; previ </b></a><b style="color:black;font-size:20px;">FAQ EDIT</b><!--<a href="" class="Next round"><b>Next &#8250;</b></a>--></center>
<form method = POST >
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Question</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtQuestion  value="<?php echo $row['Question'];?>" required />
										</div>
									</div><br>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Answer</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtAnswer value="<?php echo $row['Answer'];?>" required />
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
													
													
													<th>Question</th>
                                                    <th>Answer</th>
													<th>Action</th>
                                            
													
							
												</tr>
											</thead>

											<tbody>
                                            <?php
	include('conn.php');
    $q=mysqli_query($con,"select*from faq");
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
														<?php echo $row['Question'];  ?>
													</td>
													
                                                    <td>
														<?php echo $row['Answer'];  ?>
                                                     </td>
													 
													<td>
                                                    <div class="hidden-sm hidden-xs btn-group">
															

															<!--<button class="btn btn-xs btn-info">
                                                               <?php echo "<a href='FAQ_edit.php?x=$row[0]' class='ace-icon fa fa-pencil bigger-120' ></a>";
                                                                ?>
															</button>-->

															<button class="btn btn-xs  btn-danger">
															<?php	echo "<a href='FAQ_delete.php?x=$row[0] 'class='ace-icon fa fa-trash-o bigger-120'></a>";
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


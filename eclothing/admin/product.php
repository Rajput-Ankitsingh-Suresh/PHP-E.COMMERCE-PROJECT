<?php
include('Header.php')
?>
<?php
$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnins']))
{
    $sid=$_POST['subcategory'];
    $pname=$_POST['txtpname'];
    $pdescription=$_POST['txtpdescription'];
    $pprice=$_POST['txtpprice'];
	$psize=$_POST['txtpsize'];
    $qty=$_POST['txtqty'];
    $pstatus=$_POST['txtpstatus'];
    $pic = $_FILES["txtpic"]["name"];
    $dst="./images/".$pic;
    move_uploaded_file($_FILES['txtpic']['tmp_name'],$dst);
    $q=mysqli_query($con,"insert into product values(null,$sid,'$pname','$pdescription','$pprice' ,'$psize',$qty,$pstatus,'$pic')");
	echo"insert into product values(null,$sid,'$pname','$pdescription','$pprice', '$psize',$qty,$pstatus,'$pic')";
    if($q)
      echo "inserted";
    else
      echo "not inserted";  
}
?>
<!-- <H1 ALIGN=CENTER>Product</H1>-->
<center><a href="" class="previous round"><b>&#8249; previ </b></a><b style="color:black;font-size:20px;">PRODUCT</b><a href="" class="Next round"><b>Next &#8250;</b></a></center>
<form method = POST enctype="multipart/form-data">
	
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Select Subcategory</label>

										<div class="col-sm-9">
										
<select name="subcategory"  class="col-xs-10 col-sm-5">
<?php
	$q=mysqli_query($con,"select * from subcategory");
	while($row = mysqli_fetch_array($q))
	{
		echo "<option value=$row[0]>$row[2]</option>";
	}
?>
</select>
										</div>
									</div><br>	
    


 
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductName</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpname required/>
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductDescription</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpdescription required  />
											<!--<textarea name="txtpdescription" required  id="editor1" ></textarea>-->
										</div>
									</div><br>									
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductPrice</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpprice required/>
										</div>
									</div><br>                                                                        
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Product Size</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpsize required/>
										</div>
									</div><br>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductQuantity</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtqty required />
										</div>
									</div><br>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductStatus</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpstatus required/>
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">pic</label>

										<div class="col-sm-9">
											<input type="FILE" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpic required />
										</div>
									</div><br>									                                                                        	
<div class="">
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
													
													<th>sid</th>
													<th>pname</th>
                                                    <th>pdescription</th>
                                                    <th>pprice</th>
													<th>psize</th>
                                                    <th>qty</th>
                                                    <th>pstatus</th>
                                                    <th>pic</th>
													<th>Action</th>
                                            
													
							
												</tr>
											</thead>

											<tbody>
                                            <?php
	include('conn.php');
    $q=mysqli_query($con,"select*from product");
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
														<?php echo $row['sid'];  ?>
													</td>

			
													<td>
														<?php echo $row['pname'];  ?>
													</td>

                                                    <td>
														<?php echo $row['pdescription'];  ?>
													</td>
													
                                                    <td>
														<?php echo $row['pprice'];  ?>
													</td>

													<td>
														<?php echo $row['psize'];  ?>
													</td>
                                                    <td>
														<?php echo $row['qty'];  ?>
													</td>
                                                    <td>
														<?php echo $row['pstatus'];  ?>
													</td>

                                                    <td>
														<?php echo "<image src=images/$row[8] height=200 width=200>";  ?>
                                                     </td>
													 
													<td>
                                                    <div class="hidden-sm hidden-xs btn-group">
															

															<button class="btn btn-xs btn-info">
                                                               <?php echo "<a href='Product_edit.php?x=$row[0]' class='ace-icon fa fa-pencil bigger-120' ></a>";
                                                                ?>
															</button>

															<button class="btn btn-xs  btn-danger">
															<?php	echo "<a href='Product_delete.php?x=$row[0] 'class='ace-icon fa fa-trash-o bigger-120'></a>";
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

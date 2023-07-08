<?php
include('Header.php')
?>
<?php
include('conn.php');
$pid = $_GET['x'];
$q=mysqli_query($con,"select * from product where pid=$pid");
$row=mysqli_fetch_array($q);
if(isset ($_POST['btnup']))
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
    $q=mysqli_query($con, "update product set pname='$pname',pdescription='$pdescription',pprice='$pprice',psize='$psize',qty=$qty,pstatus=$pstatus,pic='$pic' where pid=$pid");
    if($q)
        echo "updated";
    else
        echo "not updated";
        
}
?>
<!-- <h1 ALIGN=CENTER>PRODUCTEDIT</H1>-->


<center><a href="" class="previous round"><b>&#8249; previ </b></a><b style="color:black;font-size:20px;">PRODUCTEDIT</b><!--<a href="" class="Next round"><b>Next &#8250;</b></a>--></center>
<form method = POST  enctype="multipart/form-data">


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
<!--<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">sid</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtsid value="<?php echo $row['sid'];?>" required />
										</div>
									</div><br>-->
 
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductName</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpname value="<?php echo $row['pname'];?>"/>
										</div>
									</div><br>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductDescription</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpdescription value="<?php echo $row['pdescription'];?>" required/>
											<!--<textarea name="txtpdescription" required  id="editor1" ></textarea>-->
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductPrice</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpprice value="<?php echo $row['pprice'];?>" required/>
										</div>
									</div><br> 
									
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductSize</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpsize value="<?php echo $row['psize'];?>" required/>
										</div>
									</div><br> 

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductQuantity</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtqty value="<?php echo $row['qty'];?>" required/>
										</div>
									</div><br>

<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductStatus</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpstatus value="<?php echo $row['pstatus'];?>" required/>
										</div>
									</div><br>
<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1">ProductImage</label>

										<div class="col-sm-9">
											<input type="FILE" id="form-field-1" placeholder="" class="col-xs-10 col-sm-5" name=txtpic value="<?php echo $row['pic'];?>" required />
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
													
													<th>sid</th>
													<th>pname</th>
                                                    <th>pdescription</th>
                                                    <th>pprice</th>
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
														<?php echo $row['qty'];  ?>
													</td>
                                                    <td>
														<?php echo $row['pstatus'];  ?>
													</td>

                                                    <td>
														<?php echo "<image src=images/$row[7] height=200 width=200>";  ?>
                                                     </td>
													 
													<td>
                                                    <div class="hidden-sm hidden-xs btn-group">
															

															<!--<button class="btn btn-xs btn-info">
                                                               <?php echo "<a href='Product_edit.php?x=$row[0]' class='ace-icon fa fa-pencil bigger-120' ></a>";
                                                                ?>
															</button>-->

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

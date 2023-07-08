<?php
include('Header.php')
?>
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
    $q=mysqli_query($con,"select*from user_contact ");
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
															

															<button class="btn btn-xs btn-info">
                                                               <?php echo "<a href='contactusmail.php?x=$row[0]' class='ace-icon fa fa-envelope bigger-200' ></a>";
                                                                ?>
															</button>

															<!--<button class="btn btn-xs  btn-danger">
															<?php	echo "<a href='usercontactusdelete.php?x=$row[0] 'class='ace-icon fa fa-trash-o bigger-120'></a>";
															?>
															</button>-->

															
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


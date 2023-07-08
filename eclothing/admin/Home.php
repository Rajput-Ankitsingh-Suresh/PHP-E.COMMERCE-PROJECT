<?php
//session_start();
include('Header.php');

//echo $_SESSION['Email'];
?>

<div class="col-xs-12 col-sm-10">
											<div class="left">
												<span class="btn btn-app btn-sm btn-light no-hover" style="height:200px; width:300px;border-style:solid; border-color:black;">
													<span style="font-size:500% ; color:blue;">
                                                        <?php
                                                        include('conn.php');
                                                        $q=mysqli_query($con,'select * from category');
                                                        $cnt=mysqli_num_rows($q);
                                                        echo $cnt;
                                                        ?> </span>

													<br />



												 <span  style="font-size:180%"> CATEGORY</span>
												</span>

												<span class="btn btn-app btn-sm btn-yellow no-hover"style="height:200px; width:300px; border-style:solid; border-color:black;">
													<span style="font-size:500% ; color:black;">
                                                    <?php
                                                        include('conn.php');
                                                        $q=mysqli_query($con,'select * from subcategory');
                                                        $cnt=mysqli_num_rows($q);
                                                        echo $cnt;
                                                    ?> 
                                                        
                                                </span>

													<br />
													<span style="font-size:150%">SUBCATEGORY</span>
												</span>

												<span class="btn btn-app btn-sm btn-pink no-hover"style="height:200px; width:300px;border-style:solid;border-color:black;">
													<span style="font-size:500% ; color:white;"> 
                                                    <?php
                                                        include('conn.php');
                                                        $q=mysqli_query($con,'select * from product');
                                                        $cnt=mysqli_num_rows($q);
                                                        echo $cnt;
                                                        ?>
                                                        
                                                </span>

													<br />
													<span style="font-size:180%"> PRODUCT </span>
												</span>

												<span class="btn btn-app btn-sm btn-grey no-hover"style="height:200px; width:300px;border-style:solid;border-color:black;">
													<span style="font-size:500% ; color:white;"> 
                                                    
                                                    <?php
                                                        include('conn.php');
                                                        $q=mysqli_query($con,'select * from offer');
                                                        $cnt=mysqli_num_rows($q);
                                                        echo $cnt;
                                                        ?>
                                                </span>

													<br />
													<span style="font-size:180%"> OFFER </span>
												</span>

												<span class="btn btn-app btn-sm btn-success no-hover" style="height:200px; width:300px;border-style:solid;border-color:black;">
													<span style="font-size:500% ; color:white;"> 
                                                 
                                                    <?php
                                                        include('conn.php');
                                                        $q=mysqli_query($con,'select * from gallery');
                                                        $cnt=mysqli_num_rows($q);
                                                        echo $cnt;
                                                        ?>
                                                </span>

													<br />
													<span style="font-size:180%"> GALLERY</span>
												</span>

												<span class="btn btn-app btn-sm btn-primary no-hover" style="height:200px; width:300px;border-style:solid;border-color:black;">
													<span style="font-size:500% ; color:white;">
                                                <?php     
                                                    include('conn.php');
                                                        $q=mysqli_query($con,'select * from userregistration');
                                                        $cnt=mysqli_num_rows($q);
                                                        echo $cnt;
                                                ?>    
                                                </span>

													<br />
													<span style="font-size:130%"> USERREGISTRATION </span>
												</span>

                                                <span class="btn btn-app btn-sm btn-pink no-hover"style="height:200px; width:300px;border-style:solid;border-color:black;">
													<span style="font-size:500% ; color:white;"> 
                                                        <?php
                                                        include('conn.php');
                                                        $q=mysqli_query($con,"SELECT * FROM `order`");
                                                        $cnt=mysqli_num_rows($q);
                                                        echo $cnt;
                                                        ?>
                                                        
                                                </span>

													<br />
													<span style="font-size:180%"> ORDER </span>
												</span>

                                                <span class="btn btn-app btn-sm btn-light no-hover" style="height:200px; width:300px;border-style:solid; border-color:black;">
													<span style="font-size:500% ; color:blue;">
                                                        <?php
                                                        include('conn.php');
                                                        $q=mysqli_query($con,'select * from cart');
                                                        $cnt=mysqli_num_rows($q);
                                                        echo $cnt;
                                                        ?> 
                                                        
                                                    </span>

													<br />
                                                    <span  style="font-size:180%"> CART</span>
												</span>
											</div>
<div class="space-12"></div>




<?php
include('footer.php');
?>
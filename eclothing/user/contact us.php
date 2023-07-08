<?php
include('Header.php');
?>
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('assets/images/contact-header-bg.jpg')">
        			<h1 class="page-title text-white">Contact us<span class="text-white">keep in touch with us</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            

            <div class="page-content pb-0">
                <div class="container">
                	<div class="row">
					  <?php
                         
                         include('conn.php');

                         $q=mysqli_query($con,'select * from contact_us');
                         while($row=mysqli_fetch_array($q))
                         {
            ?> 
                		<div class="col-lg-6 mb-2 mb-lg-0">
                			<h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                			<!--<p class="mb-3">Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>-->
                			<div class="row">
                				<div class="col-sm-7">
                					<div class="contact-info">
                						<!--<h3>The Office</h3>-->

                						<ul class="contact-list">
                							<li>
                								<i class="icon-map-marker"></i>
	                							<!--70 Washington Square South New York, NY 10012, United States-->
                                                <?php echo $row[2]?> 
	                						</li>
                							<li>
                								<i class="icon-phone"></i>
                								<a href="tel:#"><?php echo $row[3]?> </a>
                							</li>
                							<li>
                								<i class="icon-envelope"></i>
                								<a href="mailto:#"><?php echo $row[5]?> </a>
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-7 -->


                				<div class="col-sm-5">
                					<div class="contact-info">
                						<!--<h3>The Office</h3>-->

                						<ul class="contact-list">
                							<li>
                								<i class="icon-edit"></i>
	                							<span class="text-dark"><?php echo $row[1]?></span> 
                                                 
	                						</li>
                							<li>
                								<i class="icon-chrome"></i>
                								<span class="text-dark"><?php echo $row[4]?></span>
                                                
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-5 -->
                			</div><!-- End .row -->
                		</div><!-- End .col-lg-6 -->
						<?php } ?>

<?php
$con=mysqli_connect("localhost","root","","BCA6");
if(isset($_POST['btnins']))
{

    $ucname=$_POST['txtucname'];
    $ucemail=$_POST['txtucemail'];
    $ucphone=$_POST['txtucphone'];
    $ucsubject=$_POST['txtucsubject'];
    $ucmessage=$_POST['txtucmessage'];
    $q=mysqli_query($con,"insert into user_contact values(null,'$ucname','$ucemail','$ucphone','$ucsubject','$ucmessage',0)");
	//echo "insert into user_contact values(null,'$ucname','$ucemail','$ucphone','$ucsubject','$ucmessage',0)";
   
}
?>
                        
                		<div class="col-lg-6">
                			<h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                			<p class="mb-2">Use the form below to get in touch with the sales team</p>

                			<form method = POST class="contact-form mb-3" >
                				<div class="row">
                					<div class="col-sm-6">  
                                        <label for="cname" class="sr-only">Name</label>
                						<input type="text" class="form-control" id="cname" placeholder="Name *"  name="txtucname" required>
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6"> 
                                        <label for="cemail" class="sr-only">Email</label>
                						<input type="email" class="form-control" id="cemail" placeholder="Email *" name="txtucemail" required>
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                				<div class="row">
                					<div class="col-sm-6">
                                
                                       <label for="cphone" class="sr-only">Phone</label>
                						<input type="text" class="form-control" id="cphone" placeholder="Phone" name="txtucphone">
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                     
                                        <label for="csubject" class="sr-only">Subject</label>
                						<input type="text" class="form-control" id="csubject" placeholder="Subject" name="txtucsubject">
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                                <label for="cmessage" class="sr-only">Message</label>
                                 
                				<textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Message *"  type= "text" name="txtucmessage"></textarea>
							<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm"  align="right" name=btnins>
                					<span>SUBMIT</span>
            						<i class="icon-long-arrow-right"></i>
                				</button>
                			</form><!-- End .contact-form -->
                		</div><!-- End .col-lg-6 -->
                       
                	</div><!-- End .row -->

                	<hr class="mt-4 mb-5">

                	<div class="stores mb-4 mb-lg-5">
	                	<h2 class="title text-center mb-3">Our Stores</h2><!-- End .title text-center mb-2 -->

	                	<div class="row">
	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="assets/images/stores/img-1.jpg" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->
	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">Wall Street Plaza</h3><!-- End .store-title -->
	                							<address>88 Pine St, New York, NY 10005, USA</address>
	                							<div><a href="tel:#">+1 987-876-6543</a></div>

	                							<h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
                								<div>Monday - Saturday 11am to 7pm</div>
                								<div>Sunday 11am to 6pm</div>

                								<a href="#" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->

	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="assets/images/stores/img-2.jpg" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->

	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">One New York Plaza</h3><!-- End .store-title -->
	                							<address>88 Pine St, New York, NY 10005, USA</address>
	                							<div><a href="tel:#">+1 987-876-6543</a></div>

	                							<h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
												<div>Monday - Friday 9am to 8pm</div>
												<div>Saturday - 9am to 2pm</div>
												<div>Sunday - Closed</div>

                								<a href="#" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a>
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->
	                	</div><!-- End .row -->
                	</div><!-- End .stores -->
                </div><!-- End .container -->
            	<div id="map"></div><!-- End #map -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

<?php
include('footer.php');
?>
<?php
include('Header.php');
?>
 <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">F.A.Q<span>Pages</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <?php
                         
                         include('conn.php');

                         $q=mysqli_query($con,'select * from faq');
                         while($row=mysqli_fetch_array($q))
                         {
            ?> 
            <div class="page-content">
                <div class="container">
                <!--<h2 class="title text-center mb-3">Shipping Information</h2><!-- End .title -->
        			<div class="accordion accordion-rounded" id="accordion-1">
					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading-1">
					            <h2 class="card-title">
					                <!--<a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">-->
					            <?php echo $row[1]?>      
                                   <!--</a>-->
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-1">
					            	<div class="card-body">
                                    <?php echo $row[2]?> 
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->
                    </div>
                </div>
            </div>
          <?php } ?>      

         <!--<div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-9 col-xl-7">
                            <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                                <div class="col">
                                    <h3 class="cta-title text-white">If You Have More Questions</h3><!-- End .cta-title -->
                                  <!--  < <p class="cta-desc text-white">Quisque volutpat mattis eros</p><!-- End .cta-desc -->
                                <!--</div><!-- End .col -->

                                 <!--<div class="col-auto">
                                    <a href="contact.html" class="btn btn-outline-white"><span>CONTACT US</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .col-auto -->
                             <!--</div><!-- End .row no-gutters -->
                         <!--</div><!-- End .col-md-10 col-lg-9 -->
                     <!--</div><!-- End .row -->
                 <!--</div><!-- End .container -->
             <!--</div><!-- End .cta -->
 </main><!-- End .main -->



<?php
include('footer.php');
?>
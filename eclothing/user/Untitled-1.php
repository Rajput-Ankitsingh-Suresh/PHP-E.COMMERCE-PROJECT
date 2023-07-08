
       

                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-gallery">
                            <?php
                                $q=mysqli_query($con,"select * from gallery");
                                while($row=mysqli_fetch_array($q))
                                {
                            ?>
                            <div id="product-zoom-gallery" class="product-image-gallery">
                                                <a class='product-gallery-item active' href='#' data-image='../admin/images/$row[2]' data-zoom-image='../admin/images/$row[2]'>
                                                   <!-- <img src="assets/images/products/single/sidebar-gallery/1-small.jpg" alt="product side">-->
                                                   <?php echo " <img src='../admin/images/$row[2]' class='product-image-gallery' >";?>
                                                </a>
                                                

                                              <!--  <a class='product-gallery-item' href='#' data-image='../admin/images/$row[2]' data-zoom-image='../admin/images/$row[2]'>
                                                    <!--<img src="assets/images/products/single/sidebar-gallery/2-small.jpg" alt="product cross">-->
                                                   <!-- <?php echo " <img src='../admin/images/$row[2]' class='product-image-gallery' >";?>
                                                </a>

                                                <a class="product-gallery-item" href="#" data-image="assets/images/products/single/sidebar-gallery/3.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/3-big.jpg">
                                                    <img src="assets/images/products/single/sidebar-gallery/3-small.jpg" alt="product with model">
                                                </a>

                                                <a class="product-gallery-item" href="#" data-image="assets/images/products/single/sidebar-gallery/4.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/4-big.jpg">
                                                    <img src="assets/images/products/single/sidebar-gallery/4-small.jpg" alt="product back">
                                                </a>-->
                                            </div><!-- End .product-image-gallery -->
                                            <?php } ?>
                                        </div><!-- End .product-gallery -->
                                    </div><!-- End .col-md-6 -->
                                    </div><!-- End .row -->
                                
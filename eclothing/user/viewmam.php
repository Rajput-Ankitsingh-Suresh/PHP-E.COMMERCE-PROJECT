<div id="product-zoom-gallery" class="product-image-gallery">
<?php
$q1=mysqli_query($con,"select * from gallery");
while($row1=mysqli_fetch_array($q1))
{
    ?>
                                          
                                                <a class="product-gallery-item active" href="#" data-image="assets/images/products/single/sidebar-gallery/1.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/1-big.jpg">
                                                <?php
                                                echo "<img src="assets/images/products/single/sidebar-gallery/1-small.jpg" alt="product side"></a>
                                                ?>
</div>                                               
<?php
}
?>
   </div><!-- End .product-image-gallery -->
                                        </div><!-- End .product-gallery -->
                                    </div><!-- End .col-md-6 -->                                        
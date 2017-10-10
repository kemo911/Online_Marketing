<link href="<?php echo base_url(); ?>assets/css/item.css" rel="stylesheet" />
        <div class="content">
            <div class="container-fluid">
                <!-- start here  -->
                <div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
                                                    <div class="tab-pane active" id="pic-1"><img src="<?php echo base_url();?>/assets/img/places/<?php echo $item->image; ?>" /></div>
						</div>	
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $item->direction; ?></h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley .</p>
						<h4 class="price">current price: <span>$<?php echo $item->price?></span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p
						<div class="action">
                                                    <a class="add-to-cart btn btn-default" type="button" href="<?php echo base_url(); ?>C_profile/add_points">Choose This product</a>	
                                                    <?php echo '<label class="text-danger">'.$this->session->flashdata ("added").'</label>'; ?>
						</div>
					</div>
				</div>
                
                
                <!-- end here  -->
            </div>
        </div>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>


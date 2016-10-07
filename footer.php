            </div><!-- /.footer-top -->
            <div class="footer-middle">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>contact us</h2>
                            </div>
                            <div class="footer-content">
                            	<div class="email add">
                            		<p>Support@plazathemes.com</p>
                            	</div>
                            	<div class="phone add">
                            		<p>(800) 0123 456 789</p>
                            	</div>
                            	<div class="address add">Address: 
                            		<p>1234 - Bandit Tringi lAliquam Vitae. New York</p>
                            	</div>
                            	<div class="contact-link"><a href="#" class="btn btn-default">Open in Google Maps</a></div>
                            </div>
                        </div>
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>MY ACCOUNT</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>Payment &amp; Shipping</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Shipping Guide</a></li>
                                    <li><a href="#">Locations We Ship To</a></li>
                                    <li><a href="#">Estimated Delivery Time</a></li>
                                </ul>
                            </div>
                        </div>
                    	<div class="col-sm-3">
                        	<div class="footer-title">
                            	<h2>Customer Service</h2>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li><a href="#">Shipping Policy</a></li>
                                    <li><a href="#">Compensation First</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-6">
                        	<div class="copy">Copyright &copy; 2015 Plazathemes. All Rights Reserved</div>
                        </div>
                    	<div class="col-sm-6">
                        	<div class="payment"><img src="<?php echo base_url(); ?>assets/images/payment.png" alt="" class="img-responsive"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.footer -->
        
		<!-- Jquery Js -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
		<!-- Bootstrap Js -->
        <script src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<!-- Nivo Slider Js -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.pack.js"></script>
		<!-- Owl Carousel Js -->
        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
		<!-- Countdown Js -->
        <script src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/js/countdown.js"></script>
		<!-- Custom Js -->
        <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
		
        <script type="text/javascript">
			/* Main Slideshow */
			jQuery(window).load(function() {
				jQuery(document).off('mouseenter').on('mouseenter', '.pos-slideshow', function(e){
					$('.ma-banner7-container .timethai').addClass('pos_hover');
				});
				jQuery(document).off('mouseleave').on('mouseleave', '.pos-slideshow', function(e){
					$('.ma-banner7-container .timethai').removeClass('pos_hover');
				});
			});
			jQuery(window).load(function() {
				$('#ma-inivoslider-banner7').nivoSlider({
					effect: 'random',
					slices: 15,
					boxCols: 8,
					boxRows: 4,
					animSpeed: 1000,
					pauseTime: 6000,
					startSlide: 0,
					controlNav: false,
					controlNavThumbs: false,
					pauseOnHover: true,
					manualAdvance: false,
					prevText: 'Prev',
					nextText: 'Next',
					afterLoad: function(){
						},     
					beforeChange: function(){ 
					}, 
					afterChange: function(){ 
					}
				});
			});
		</script>
       
        <!-- Hot Deals Timer 1-->
		<script type="text/javascript">
            var dthen1 = new Date("12/25/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow1 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow1)-(dthen1));
            else
                ddiff = new Date((dthen1)-(dnow1));
            gsecs1 = Math.floor(ddiff.valueOf()/1000);
            
            var iid1 = "countbox_1";
            CountBack_slider(gsecs1,"countbox_1", 1);
        </script>
        <!-- Hot Deals Timer 2-->
		<script type="text/javascript">
			var dthen2 = new Date("05/21/26 11:59:00 PM");
			start = "08/04/15 03:02:11 AM";
			start_date = Date.parse(start);
			var dnow2 = new Date(start_date);
			if(CountStepper>0)
				ddiff= new Date((dnow2)-(dthen2));
			else
				ddiff = new Date((dthen2)-(dnow2));
			gsecs2 = Math.floor(ddiff.valueOf()/1000);
			
			var iid2 = "countbox_2";
			CountBack_slider(gsecs2,"countbox_2", 2);
		</script>
        <!-- Hot Deals Timer 3-->
		<script type="text/javascript">
            var dthen3 = new Date("05/21/33 11:59:00 PM");
            start = "08/04/15 03:02:11 AM";
            start_date = Date.parse(start);
            var dnow3 = new Date(start_date);
            if(CountStepper>0)
                ddiff= new Date((dnow3)-(dthen3));
            else
                ddiff = new Date((dthen3)-(dnow3));
            gsecs3 = Math.floor(ddiff.valueOf()/1000);
            
            var iid3 = "countbox_3";
            CountBack_slider(gsecs3,"countbox_3", 3);
        </script>	   

  </body>
</html>
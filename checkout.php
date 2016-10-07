        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                	<li><a href="<?php echo base_url(); ?>index.php/main/index">Home</a></li>
                	<li><a href="<?php echo base_url(); ?>index.php/main/index">Cart</a></li>
                    <li class="active">Checkout</li>
               	</ul>
            </div>
        </div>
        
        <div class="main">
        	<div class="container">
                <div class="checkout">
                	<div class="row">
                    	<div class="col-sm-9">
                        	<div class="checkout-step">
                        		<div class="checkout-step-item">
                                	<div class="step-title clearfix" data-toggle="collapse" data-target="#checkout-one">
                                        <span class="number">1</span>
                                        <h2>Checkout Method</h2>
                                    </div>
                                    <div id="checkout-one" class="collapse in">
                                    	<div class="step-content">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h4>Checkout as a gust or register</h4>
                                                    <div class="line2 mtb20"></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Register with us for future convenience:</label>
                                                        <div class="radio">
                                                          <label>
                                                            <a href="<?php echo base_url(); ?>index.php/main/checkout" class="btn btn-danger btn-md btn-continue fwb"> Checkout as Guest</a>
                                                          </label>
                                                        </div>
                                                        <div class="radio">
                                                          <label>
                                                            <a href="<?php echo base_url(); ?>index.php/main/register" class="btn btn-danger btn-md btn-continue fwb">Register</a> 
                                                          </label>
                                                        </div>
                                                    </div>
                                                    <p class="text-primary">Register and save time!</p>
                                                    <p class="text-primary">Register with us for future convenience:</p>
                                                    <ul class="list-unstyled">
                                                        <li>+  Fast and easy check out</li>
                                                        <li>+  Easy access to your order history and status</li>
                                                    </ul>
                                                    <br>
                                                    
                                                </div>
                                                <form action="<?php echo base_url(); ?>index.php/main/userlogin" method="post">
                                                <div class="col-sm-6">
                                                    <h4>Login</h4>
                                                    <div class="line2 mtb20"></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Already registered?</label>
                                                        <p class="text-muted">Please Login below:</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Username *</label>
                                                        <input type="text" class="form-control" name="username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Password *</label>
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                    <p><a href="#">Forgot your password?</a></p>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn">LOGIN</button>OR
                                                        <a href="<?php echo base_url(); ?>index.php/main/register" class="btn btn-danger btn-md btn-continue fwb">Register</a>                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-two">
                                        <span class="number">2</span>
                                        <h2>BILLING INFORMATION</h2>
                                    </div>
                                    <div id="checkout-two" class="collapse">
                                    	<div class="step-content">
                                    		Billing Information
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-three">
                                        <span class="number">3</span>
                                        <h2>SHIPPING INFORMATION</h2>
                                    </div>
                                    <div id="checkout-three" class="collapse">
                                    	<div class="step-content">
                                    		Shipping Information
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-four">
                                        <span class="number">4</span>
                                        <h2>SHIPPING METHOD</h2>
                                    </div>
                                    <div id="checkout-four" class="collapse">
                                    	<div class="step-content">
                                    		Shipping Method
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-five">
                                        <span class="number">5</span>
                                        <h2>PAYMENT INFORMATION</h2>
                                    </div>
                                    <div id="checkout-five" class="collapse">
                                    	<div class="step-content">
                                    		Payment Information
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-step-item">
                                	<div class="step-title clearfix collapsed" data-toggle="collapse" data-target="#checkout-six">
                                        <span class="number">6</span>
                                        <h2>ORDER REVIEW</h2>
                                    </div>
                                    <div id="checkout-six" class="collapse">
                                    	<div class="step-content">
                                    		Order Review
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        	<div class="block block-layered-nav">
                                <div class="block-content">
                                	<h2>Checkout progress</h2>
                                    <ol class="checkout-progress">
                                        <li><span class="fa fa-play-circle-o"></span> Billing address</li>
                                        <li><span class="fa fa-play-circle-o"></span> Shipping address</li>
                                        <li><span class="fa fa-play-circle-o"></span> shipping method</li>
                                        <li><span class="fa fa-play-circle-o"></span> payment methor</li>
                                    </ol>
                                </div>
                            </div><!-- /.block - Comments -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.main -->
        
        <div class="brands">
            <div class="container">
                <div class="title-group1">
                    <h2>popular brand</h2>
                </div>
                <div id="brands" class="owl-container">
                    <div class="owl">
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo base_url(); ?>assets/images/brand/logo_brand5.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo base_url(); ?>assets/images/brand/logo_brand4.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo base_url(); ?>assets/images/brand/logo_brand3.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo base_url(); ?>assets/images/brand/logo_brand2.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo base_url(); ?>assets/images/brand/logo_brand1.png" alt="" /></a>
                            </div>
                        </div>
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title=""><img src="<?php echo base_url(); ?>assets/images/brand/logo_brand3.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div><!-- /#brands -->
            </div>
        </div><!-- /.brands -->
        
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                	<div class="row">
                    	<div class="col-md-4 col-sm-4 hidden-sm hidden-xs">
                        	<div class="subscribe">
                                <div class="subscribe-inner">
                                    <h3>Sign up for newsletter</h3>
                                    Duis autem vel eum iriureDuis autem vel eum
                                </div>
                            </div>
                        </div>
                    	<div class="col-md-5 col-sm-8">
                        	<form method="post" class="form-inline form-subscribe">
                                <div class="form-group">
                                	<input type="text" class="form-control" id="newsletter" name="email">
                                </div>
                                <button class="btn btn-danger" title="Subscribe" type="submit">Subscribe</button>
        					</form>
                        </div>
                    	<div class="col-md-3 col-sm-4">
                        	<ul class="social">
                                <li><a href="#" class="face">face</a></li>
                                <li><a href="#" class="google">google</a></li>
                                <li><a href="#" class="twitter">twitter</a></li>
                                <li><a href="#" class="youtube">youtube</a></li>
                                <li><a href="#" class="linkedin">linkedin</a></li>
                            </ul>
                        </div>
                    </div>
           		</div>
            </div>
        <?php echo $this->session->flashdata('message'); ?>
        <div class="main">
        	<div class="container">
                <div class="checkout">
                	<div class="row">
                    	<div class="col-sm-9">
                        	<div class="checkout-step">
                        		<div class="checkout-step-item">
                                    <div id="checkout-one" class="collapse in">
                                    	<div class="step-content">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h4>Register</h4>
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
<center><form class="form-horizontal" action="<?php echo base_url(); ?>index.php/main/user" method="post" >
		<h4>Create Your Account</h4>
		<div class="control-group">
			<label class="control-label" for="akun">Nama Akun <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="akun" placeholder="Nama Akun" name="name">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="username">Username <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="username" placeholder="username" name="username">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="password">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="password" placeholder="Password" name="password">
		</div><br/>
	  <div>
	  <button class="btn btn-danger">Register</button></div>
	  </form>
	  </center><br/><br/><br/><br/><br/><br/>
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
		
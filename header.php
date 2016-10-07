<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Oktavyan: Ecommerce Template</title>
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="HTMLCooker">

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon--> 
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon--> 
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
		
		<!-- =============== Google fonts =============== -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
		
		
		<!-- Font Awesome CSS -->
		<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
		<!-- Bootstrap CSS -->
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Nivo Slider CSS -->
		<link href="<?php echo base_url(); ?>assets/css/nivo-slider.css" rel="stylesheet">
		<!-- Animate CSS -->
		<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">
		<!-- Owl Carousel CSS -->
		<link href="<?php echo base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet">
		<!-- Main Style CSS -->
		<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
		<!-- Responsive CSS -->
		<link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
		<![if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
   
   <!-- <?php echo $this->session->flashdata('message'); ?> -->
           
     		<div class="header">
        	<div class="topbar">
            	<div class="container">
                	<div class="topbar-left">
                        <ul class="topbar-nav clearfix">
                            <li><a href="<?php echo base_url(); ?>index.php/main/userpage/<?php echo $this->session->userdata('username'); ?>"><span class="account">Welcome!<strong>&nbsp; <?php $tes = $this->session->userdata('login_ok'); if($tes == TRUE) { echo $this->session->userdata('nama'); } else { echo "Guest";}?></strong></span></a></li>
                            <li><span class="phone">0(123) 456 789</span></li>
                            <li><span class="email">info@plazathemes.com</span></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                    	<ul class="topbar-nav clearfix">
                        <?php 
                        $validasi = $this->session->userdata('login_ok');
                        if ($validasi == FALSE) : ?>
                        	<li><a href="<?php echo base_url(); ?>index.php/main/checkout" class="login">Login</a></li>
                               <?php endif; ?>
                        <?php if ($validasi == TRUE): ?>
                            <li><a href="<?php echo base_url() ; ?>index.php/main/userlogout" class="login">Logout</a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo base_url(); ?>index.php/main/register" class="account">Create New Account</a></li>
                        	<li class="dropdown">
                            	<a href="#" class="currency dropdown-toggle" data-toggle="dropdown">USD</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Euro</a></li>
                                    <li><a href="#">US Dollar</a></li>
                                </ul>
                            </li>
                     
                        	<li class="dropdown">
                            	<a href="#" class="language dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url(); ?>assets/images/flag-us.png" alt=""> English</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><img src="<?php echo base_url(); ?>assets/images/flag-us.png" alt=""> &nbsp;English</a></li>
                                    <li><a href="#"><img src="<?php echo base_url(); ?>assets/images/flag-spain.png" alt=""> &nbsp;Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <div class="header-bottom">
            	<div class="container">
                	<div class="row">
                    	<div class="col-md-3">
                        	<a href="<?php echo base_url(); ?>index.php/main/index" class="logo"><img src="<?php echo base_url(); ?>assets/images/logo-okta.png" alt=""></a>
                        </div>
                        <div class="col-md-9">
                        	<div class="support-client">
                            	<div class="row">
                                	<div class="col-sm-4">
                                    	<div class="box-container time">
                                            <div class="box-inner">
                                            	<h2>working time</h2>
                                            	<p>Mon- Sun: 8.00 - 18.00</p>
                                            </div>
                                   		</div>
                                    </div>
                                    <div class="col-sm-4">
                                    	<div class="box-container free-shipping">
                                            <div class="box-inner">
                                                <h2>Free shipping</h2>
                                                <p>On order over $199</p>
                                            </div>
                                    	</div>
                                    </div>
                                    <div class="col-sm-4">
                                    	<div class="box-container money-back">
                                            <div class="box-inner">
                                                <h2>Money back 100%</h2>
                                                <p>Within 30 Days after delivery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.support-client -->
                            <form class="form-search">
                            	<input type="text" class="input-text" name="q" id="search" placeholder="Search products...">
                                <div class="dropdown">
                                  	<button type="button" class="btn" data-toggle="dropdown">All category <span class="fa fa-angle-down"></span></button>
                                  	<ul class="dropdown-menu dropdown-menu-right">
                                    	<li><a href="#">Computer</a></li>
                                    	<li><a href="#">Camera</a></li>
                                    	<li><a href="#">Smart Phone</a></li>
                                    	<li><a href="#">Electronic</a></li>
                                  	</ul>
                                </div>
                                <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
                            </form>
                            <div class="mini-cart">
                            	<div class="top-cart-title">
                                    <a href="<?php echo base_url(); ?>index.php/main/cart" class="dropdown-toggle" data-toggle="dropdown">
                                    	your cart &nbsp; &nbsp;<b><font size="5" face="arial black"><?php echo $this->cart->total_items(); ?></b></font>
                                    	<span class="price">RP.<?php echo $this->cart->total(); ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    	<div class="cart-listing">
                                        	<div class="media">
                                            	<div class="media-left"><a href="#"><img src="<?php echo base_url(); ?>assets/images/products/11.jpg" alt="" class="img-responsive"></a></div>
                                                <div class="media-body">
                                                	<button type="button" class="remove-cart-item" >&times;</button>
                                                	<h4>Accumsan elit</h4>
                                                    <div class="mini-cart-qty">Qty:2</div>
                                                    <div class="mini-cart-price">$ 64.00</div>
                                                </div>
                                            </div>
                                            <div class="media">
                                            	<div class="media-left"><a href="#"><img src="<?php echo base_url(); ?>assets/images/products/13.jpg" class="img-responsive" alt=""></a></div>
                                                <div class="media-body">
                                                	<button type="button" class="remove-cart-item" >&times;</button>
                                                	<h4>Accumsan elit</h4>
                                                    <div class="mini-cart-qty">Qty:2</div>
                                                    <div class="mini-cart-price">$ 64.00</div>
                                                </div>
                                            </div>
                                        </div><!-- /.cart-listing -->
                                        <div class="mini-cart-subtotal">Shipping: <span class="price">$5.00</span></div>
                                        <div class="mini-cart-subtotal">Total: <span class="price">$200.00</span></div>
                                        <div class="checkout-btn">
                                        	<a href="#" class="btn btn-default btn-md fwb">CHECK OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-3">
                        	<div class="mega-container visible-lg visible-md">
                                <div class="navleft-container">
                                    <div class="mega-menu-title"><h3>Category</h3></div>
                                    <div class="mega-menu-category">
                                    	<ul class="nav">
                                        	<li>
                                            	<a href="#">Computer</a>
                                                <div class="wrap-popup">
                                                    <div class="popup">
                                                        <div class="row">
                                                        	<div class="col-md-3">
                                                            	<h3>brand</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">canon</a></li>
                                                                    <li><a href="#">samsung</a></li>
                                                                    <li><a href="#">nikon</a></li>
                                                                    <li><a href="#">apple</a></li>
                                                                    <li><a href="#">toshiba</a></li>
                                                                    <li><a href="#">hp</a></li>
                                                                    <li><a href="#">nokia</a></li>
                                                                    <li><a href="#">Sony</a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-3 has-sep">
                                                            	<h3>accessories</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">Duis</a></li>
                                                                    <li><a href="#">autem </a></li>
                                                                    <li><a href="#">vel eum </a></li>
                                                                    <li><a href="#">iriure </a></li>
                                                                    <li><a href="#">dolor </a></li>
                                                                   	<li><a href="#">hendrerit </a></li>
                                                                    <li><a href="#">vulputate </a></li>
                                                                    <li><a href="#">velit </a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-6 has-sep">
                                                            	<div class="custom-menu-right">
                                                                    <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>bags &amp; cases</h3>
                                                                    		<div class="price-sale">40 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo base_url(); ?>assets/images/products/img-01.jpg" alt=""></div>
                                                                     </div>
                                                                     <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>Lens Fulters</h3>
                                                                    		<div class="price-sale">50 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo base_url(); ?>assets/images/products/img-02.jpg" alt=""></div>
                                                                     </div>
                                                                     <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>Flashes</h3>
                                                                    		<div class="price-sale">30 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo base_url(); ?>assets/images/products/img-03.jpg" alt=""></div>
                                                                     </div>
                                                            	</div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <a href="#" class="ads"><img alt="" src="<?php echo base_url(); ?>assets/images/ads/ads-08.jpg" class="img-responsive"></a>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li>
                                            	<a href="#">Camera</a>
                                                <div class="wrap-popup">
                                                    <div class="popup">
                                                        <div class="row">
                                                        	<div class="col-md-3">
                                                            	<h3>brand</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">canon</a></li>
                                                                    <li><a href="#">samsung</a></li>
                                                                    <li><a href="#">nikon</a></li>
                                                                    <li><a href="#">apple</a></li>
                                                                    <li><a href="#">toshiba</a></li>
                                                                    <li><a href="#">hp</a></li>
                                                                    <li><a href="#">nokia</a></li>
                                                                    <li><a href="#">Sony</a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-3 has-sep">
                                                            	<h3>accessories</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">Duis</a></li>
                                                                    <li><a href="#">autem </a></li>
                                                                    <li><a href="#">vel eum </a></li>
                                                                    <li><a href="#">iriure </a></li>
                                                                    <li><a href="#">dolor </a></li>
                                                                   	<li><a href="#">hendrerit </a></li>
                                                                    <li><a href="#">vulputate </a></li>
                                                                    <li><a href="#">velit </a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-6 has-sep">
                                                            	<div class="custom-menu-right">
                                                                    <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>bags &amp; cases</h3>
                                                                    		<div class="price-sale">40 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="images/products/img-01.jpg" alt=""></div>
                                                                     </div>
                                                                     <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>Lens Fulters</h3>
                                                                    		<div class="price-sale">50 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="images/products/img-02.jpg" alt=""></div>
                                                                     </div>
                                                                     <div class="box-banner media">
                                                                    	<div class="media-body">
                                                                    		<h3>Flashes</h3>
                                                                    		<div class="price-sale">30 <sup>%</sup><sub>off</sub></div>
                                                                    		<a href="http://www.plazathemes.com/">&gt;shop now</a>
                                                                        </div>
                                                                    	<div class="media-right"><img src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/images/products/img-03.jpg" alt=""></div>
                                                                     </div>
                                                            	</div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <a href="#" class="ads"><img alt="" src="<?php echo base_url(); ?>assets/images/ads/ads-08.jpg" class="img-responsive"></a>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li>
                                            	<a href="#">Smart phone</a>
                                                <div class="wrap-popup column2">
                                                    <div class="popup">
                                                        <div class="row">
                                                        	<div class="col-md-6">
                                                            	<h3>brand</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">canon</a></li>
                                                                    <li><a href="#">samsung</a></li>
                                                                    <li><a href="#">nikon</a></li>
                                                                    <li><a href="#">apple</a></li>
                                                                    <li><a href="#">toshiba</a></li>
                                                                    <li><a href="#">hp</a></li>
                                                                    <li><a href="#">nokia</a></li>
                                                                    <li><a href="#">Sony</a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-6 has-sep">
                                                            	<h3>accessories</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">Duis</a></li>
                                                                    <li><a href="#">autem </a></li>
                                                                    <li><a href="#">vel eum </a></li>
                                                                    <li><a href="#">iriure </a></li>
                                                                    <li><a href="#">dolor </a></li>
                                                                   	<li><a href="#">hendrerit </a></li>
                                                                    <li><a href="#">vulputate </a></li>
                                                                    <li><a href="#">velit </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li>
                                            	<a href="#">Destop</a>
                                                <div class="wrap-popup column2">
                                                    <div class="popup">
                                                        <div class="row">
                                                        	<div class="col-md-6">
                                                            	<h3>brand</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">canon</a></li>
                                                                    <li><a href="#">samsung</a></li>
                                                                    <li><a href="#">nikon</a></li>
                                                                    <li><a href="#">apple</a></li>
                                                                    <li><a href="#">toshiba</a></li>
                                                                    <li><a href="#">hp</a></li>
                                                                    <li><a href="#">nokia</a></li>
                                                                    <li><a href="#">Sony</a></li>
                                                                </ul>
                                                            </div>
                                                        	<div class="col-md-6 has-sep">
                                                            	<h3>accessories</h3>
                                                                <ul class="nav">
                                                                	<li><a href="#">Duis</a></li>
                                                                    <li><a href="#">autem </a></li>
                                                                    <li><a href="#">vel eum </a></li>
                                                                    <li><a href="#">iriure </a></li>
                                                                    <li><a href="#">dolor </a></li>
                                                                   	<li><a href="#">hendrerit </a></li>
                                                                    <li><a href="#">vulputate </a></li>
                                                                    <li><a href="#">velit </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li>
                                            	<a href="#">Tablet</a>
                                                <div class="wrap-popup column1">
                                                    <div class="popup">
                                                        <h3>brand</h3>
                                                        <ul class="nav">
                                                            <li><a href="#">canon</a></li>
                                                            <li><a href="#">samsung</a></li>
                                                            <li><a href="#">nikon</a></li>
                                                            <li><a href="#">apple</a></li>
                                                            <li><a href="#">toshiba</a></li>
                                                            <li><a href="#">hp</a></li>
                                                            <li><a href="#">nokia</a></li>
                                                            <li><a href="#">Sony</a></li>
                                                        </ul>
                                                    </div>
                                           		</div>
                                            </li>
                                            <li class="nosub"><a href="#">Electtronic</a></li>    
                                            <li class="nosub"><a href="#">New arrivals</a></li>
                                            <li class="nosub"><a href="#">Bestseller</a></li>
                                            <li class="more-menu"><a href="#">Bags &amp; Cases</a></li>
                                            <li class="more-menu"><a href="#">Accessories</a></li>
                                            <li class="view-more"><a href="#">More category</a></li>
                                        </ul>
                                   	</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                        	<ul class="menu clearfix visible-lg visible-md">
                            	<li class="active"><a href="<?php echo base_url(); ?>index.php/main/index">Home</a></li>
                            	<li><a href="#">Computer</a></li>
                            	<li><a href="#">camera</a></li>
                            	<li><a href="#">smart phone</a></li>
                            	<li><a href="#">electtronic</a></li>
                                <li><a href="#">new arrivals</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
                  	<div class="container">
                    	<div class="navbar-header">
                      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                      		</button>
                            <h2 class="navbar-brand visible-xs">Menu</h2>
                    	</div>
                    	<div class="collapse navbar-collapse">
                      		<ul class="nav navbar-nav">
                            	<li class="active"><a href="#">Home</a></li>
                        		<li class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Computer <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="#">Desktop PC</a></li>
                                    	<li><a href="#">Notebook</a></li>
                                    	<li><a href="#">Gaming</a></li>
                                    	<li><a href="#">Mouse &amp; Keyboard</a></li>
                                    </ul>
                                </li>
                            	<li class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Camera <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                    	<li><a href="#">Walkera</a></li>
                                        <li><a href="#">Fpv System &amp; Parts</a></li>
                                        <li><a href="#">RC Cars &amp; Parts</a></li>
                                        <li><a href="#">Helicopters &amp; Part</a></li>
                                    </ul>
                                </li>
                            	<li class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Smart Phone <span class="fa fa-angle-down"></span></a>									<ul class="dropdown-menu">
                                        <li><a href="#">Accessories for iPhone</a></li>
                                        <li><a href="#">Accessories for iPad</a></li>
                                        <li><a href="#">Accessories for Tablet PC</a></li>
                                        <li><a href="#">Tablet PC</a></li>
                                    </ul>
                               	</li>
                            	<li class="dropdown">
                                	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Electtronic <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Batteries &amp; Chargers</a></li>
                                        <li><a href="#">Headphone, Headset</a></li>
                                        <li><a href="#">Home Audio</a></li>
                                        <li><a href="#">Mp3 Player Accessories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">New Arrivals</a></li>
                      		</ul>
                    	</div><!-- /.navbar-collapse -->
                  	</div><!-- /.container -->
                </nav>
            </div><!-- /.header-bottom -->
        </div><!-- /.header -->
        
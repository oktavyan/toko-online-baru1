         <?php echo $this->session->flashdata('message'); ?>
        <div class="breadcrumbs">
            <div class="container">
                <ul class="breadcrumb">
                	<li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
               	</ul>
            </div>
        </div>
        
        <div class="main">
        	<div class="container">
                <div class="cart">
                	<form>
                    <div class="table-responsive">
                	<table class="table custom-table">
                        <thead>
                            <tr class="first last">
                                
                                <th>Product Name</th>
                                <!--<th>Edit</th>-->    
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Grandtotal</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                  <?php 
                                $cart = $this->cart->contents();
                                foreach ($cart as $item) : 
                            ?>
                            <tr>
                                
                                <td>
                                    <a href="#"><?php echo $item['name']; ?></a>
                                    <div class="text-muted">Size: 42<br>
                                    Color: Red</div>
                                </td>
                                <td> <img width="60" src="<?php echo base_url($item['options']['gambar']); ?>" alt=""/></td>
                                <!--<td class="text-center"><a href="#">Edit</a></td>-->
                                <form method="post" action="<?php echo base_url(); ?>index.php/keranjang/update/<?php echo $item['rowid']; ?>"> 
                                <td class="qty">
                                    <div class="input-group">
                                        <form method="POST" action="<?= base_url(); ?>index.php/keranjang/update/<?= $item['rowid'] ?>">
                                               
                                                <input type="text" name="qty" value="<?=$item['qty']; ?>" autocompleted="off" size="2"></input>

                                                <input class="btn" name="submit" value="+" type="submit"></input>
                                                <input class="btn" name="submit" value="-" type="submit"></input>
                                        </form> 
                                    </div><!-- /input-group -->
                                </td>
                                <td class="subtotal">Rp.<?= $item['price']; ?> </td>
                                <td class="grandtotal">Rp.<?=$item['subtotal']; ?></td>
                                <td class="text-center"><a class="btn-remove" href="<?php echo base_url(); ?>index.php/keranjang/remove/<?php echo  $item['rowid']; ?>">  <span class="fa fa-trash-o"></span></a></td>
                                                             
                                </a></td>
                            </tr>
                              <?php endforeach; ?>
                    	</tbody>
                    </table>
                    </div>
                    <div class="text-right">
                    	<a href="<?php echo base_url(); ?>index.php/main/index" class="btn btn-default btn-md">CONTINUE SHOPPING</a>
                        <button type="submit" class="btn btn-danger btn-md">UPDATE SHOPPING CART</button>
                    </div>
                    <div class="line2"></div>
                    <div class="row">
                    	<div class="col-sm-4">
                        	<h4>ESTIMATE SHIPPING AND TAX</h4>
                            <p class="text-muted">Enter your destination to get shipping &amp; tax</p>
                            <div class="form-group">
                            	<label class="control-label">Country <em>*</em></label>
                                <select class="form-control">
                                	<option>-- Select options  --</option>
                                </select>
                            </div>
                            <div class="form-group">
                            	<label class="control-label">State/Province <em>*</em></label>
                                <select class="form-control">
                                	<option>-- Select options  --</option>
                                </select>
                            </div>
                            <div class="form-group">
                            	<label class="control-label">Zip/Postal Code</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                            	<button type="button" class="btn btn-default btn-md">GET A QUOTE</button>
                            </div>
                        </div>
                    	<div class="col-sm-4">
                        	<h4>DISCOUNT CODE</h4>
                        	<p class="text-muted">Enter your coupon code if you have one</p>
                            <div class="form-group">
                            	<label class="control-label">&nbsp;</label>
                            	<input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                            	<button type="button" class="btn btn-default btn-md">APPLY COUPON</button>
                            </div>
                        </div>
                    	<div class="col-sm-4">
                        	<table class="table table-cart-total">
                            	<tr>
                                	<td>Subtotal:</td>
                                    <td class="text-right">Rp.<?php echo $this->cart->total(); ?></td>
                                </tr>
                            </table>
							<div class="text-right">
                            	<p><a href="<?php echo base_url(); ?>index.php/main/cek"><button type="button" class="btn btn-default btn-md fwb">PROCCED TO CHECKOUT</button></p>
                                <p><a href="#" class="text-muted">Checkout with multiples address</a></p>
                            </div>
                        </div>
                    </div>
                    </form>
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
        
       
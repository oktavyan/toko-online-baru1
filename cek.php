<center><div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url(); ?>index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Checkout Page</li>
    </ul>
	<table width="870px" height="300px" cellspacing="1" cellpadding="12" style="font-size: 20px;">
		<tr>
			<th>
				MemberID
			</th>
			<th>
			:
			</th>
			<td>
			<?php echo $this->session->userdata('username'); ?>
			</td>
		</tr>
		<tr>
			<th valign="top">
			Product
			</th>
			<th valign="top">
			:
			</th>
			<td valign="top">
				<?php 
				$cart = $this->cart->contents(); 
				foreach ($cart as $item) :
				?>
				<ul>
					<li><?= $item['name']; ?></li>
				</ul>
				<?php endforeach; ?>
			</td>
		</tr>
		<tr>
			<th>
				Total Item
			</th>
			<th>
			:
			</th>
			<td>
			<?= $this->cart->total_items(); ?>
			</td>
		</tr>
		<tr>
			<th>
				Total Price
			</th>
			<th>
			:
			</th>
			<td>
				 Rp <?= $this->cart->total(); ?> 
			</td>
		</tr>
		<tr>
			<th width="200">
				<a href="<?php echo base_url(); ?>index.php/main/confirmbuy"><button>CONFIRM BUY</button></a>
				<a href="<?php echo base_url(); ?>index.php/main/product_summary"><button>CANCEL</button></a>
			</th>
		</tr>
	</table>
    	
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
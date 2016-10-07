<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url(); ?>index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">User Page</li>
    </ul>
	
    	<table width="870px" height="300px" cellspacing="1" cellpadding="12" style="font-size: 20px;">
    	<?php foreach($data as $row) : ?>
	    	<tr>
		    	<th rowspan="5" width="400px">
		    	<?php if ($row->foto) { 
		    			echo "<img src='$row->foto'>";
		    	 		}
		    			 else { 
		    			echo "<img width='250' height='200' src=". base_url('assets/images/products/1.jpg').">";
		    			 } 
		    	?>
		    	</th>
	    	</tr>
	    	<tr>
		    	<th align="left">
		    		Username
		    	</th>
		    	<th>
		    		:
		    	</th>
		    	<td>
		    		<?= $row->username; ?>
		    	</td>
		    	<td width="200">
		    		<button class="btn btn-primary" width="400"><a style="color: #ffffff;" href="">Edit Profile</a></button>
		    	</td>
	    	</tr>
	    	<tr>
		    	<th align="left">
		    		Password
		    	</th>
		    	<th>
		    		:
		    	</th>
		    	<td>
		    		<?= $row->password; ?>
		    	</td>
	    	</tr>
	    	<tr>
		    	<th align="left">
		    		Full Name
		    	</th>
		    	<th>
		    		:
		    	</th>
		    	<td>
		    		<?= $row->nama; ?>
		    	</td>
	    	</tr>
	    	<tr>
		    	<th align="left" width="330px">
		    	Last Login
		    	</th>
		    	<th>
		    		:
		    	</th>
		    	<td width="330px">
		    		<?= $row->lastlogin; ?>
		    	</td>
	    	</tr>
	    	<tr>
	    		<td colspan="">
	    			<a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/tambah">Add New Product</a>
	    		</td>
	    	</tr>
	    <?php endforeach; ?>
    	</table>
    	

    	<fieldset>
    		<legend>TRANSAKSI</legend>
    		<table width="900">
    			<tr>
    				<td valign="top">
			    		<table>
			    			<tr>
				    			<th>
				    				<a href="<?php echo base_url(); ?>index.php/main/pending/<?= $row->username; ?>"><label style="width: 130px;" class="btn btn-large btn-success">PENDING</label></a>
				    			</th>
			    			</tr>
			    			<tr>
			    				<th>
			    					<a href="<?php echo base_url(); ?>index.php/main/userpage/<?= $row->username; ?>/waiting"><label style="width: 130px;" class="btn btn-large btn-success">WAITING</label></a>
				    			</th>
			    			</tr>
			    			<tr>
			    				<th>
			    					<a href="<?php echo base_url(); ?>index.php/main/userpage/<?= $row->username; ?>/process"><label style="width: 130px;" class="btn btn-large btn-success">PROCESS</label></a>
				    			</th>
			    			</tr>
			    			<tr>
			    				<th>
			    					<a href="<?php echo base_url(); ?>index.php/main/userpage/<?= $row->username; ?>/delivery"><label style="width: 130px;" class="btn btn-large btn-success">DELIVERY</label></a>
				    			</th>
			    			</tr>
			    			<tr>
			    				<th>
			    					<a href="<?php echo base_url(); ?>index.php/main/userpage/<?= $row->username; ?>/finish"><label style="width: 130px;" class="btn btn-large btn-success">FINISH</label></a>
				    			</th>
			    			</tr>
			    		</table>		
			    	</td>
			    	<td valign="top" align="center">
			    	<?php if($this->uri->segment(2) == "pending") : ?>
			    		<table width="700" border="2" style="
			    		font-size: 17px;
			    		">
			    			<tr>
			    				<th>KODE TRANSAKSI</th>
			    				<th>TANGGAL BELI</th>
			    				<th>JUMLAH ITEM</th>
			    				<th>TOTAL HARGA</th>
			    				<th>OPTION</th>
			    			</tr>
			    			<?php 
			    			foreach ($pending as $row) :
			    			?>
			    			<tr>
			    				<th> <?php echo $row->trxid; ?> </th>
			    				<th> <?php echo $row->tanggal; ?> </th>
			    				<th> <?php echo $row->qty; ?> </th>
			    				<th> <?php echo $row->harga; ?> </th>
			    				<th><a href="<?php echo base_url(); ?>index.php/main/payment/<?= $row->userid; ?>"><button style="width: 90px; height: 38px;" class="btn btn-large btn-success">$ PAY</button></th>
			    			</tr>
			    			<?php endforeach; ?>
			    		</table>
			    	<?php endif; ?>
			    	</td>
			    </tr>
			</table>

    	</fieldset>

		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
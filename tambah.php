<center><div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url(); ?>index.php/">Home</a> <span class="divider">/</span></li>
		<li class="active">Add Product</li>
    </ul>
	<h3> Add Product </h3>	
	<div class="well">
	<!--
	<div class="alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	<div class="alert fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div>
	 <div class="alert alert-block alert-error fade in">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
	 </div> -->
		</div>
		<form action="<?php echo base_url(); ?>index.php/main/tambahbrg" method="post" enctype="multipart/form-data">
		<div class="control-group">
			<label class="control-label">Product name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="nama">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label">Description <sup>*</sup></label>
			<div class="controls">
				<textarea name="keterangan"></textarea>
			  <?php #<input type="text" id="inputLnam" placeholder="Last Name"> ?>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label">Price <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="harga">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label">Category <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="kategori">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label">picture <sup>*</sup></label>
		<div class="controls">
		  <input type="file" name="foto">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label">View <sup>*</sup></label>
		<div class="controls">
		 &nbsp; &nbsp; <input type="text" name="lihat">
		</div>
	  </div>
	  <div class="control-group">
		<div class="controls">
		  <input type="submit" name="addnew" value="Add New">
		</div>
	  </div>
	</form>
	  </div>
</div>
</div>
</div>	  <br/><br/>
		
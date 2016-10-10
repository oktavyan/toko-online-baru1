<center><div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url(); ?>index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Checkout Page</li>
    </ul>
	<form action="<?php echo base_url(); ?>index.php/main/transaksi" method="post">
		<table width="600">
			<tr>
				<th>
					TUJUAN
				</th>
				<th>
					:
				</th>
				<th>
					<input type="text" name="tujuan">
				</th>
			</tr>
			<tr>
				<th>
					EKSPEDISI
				</th>
				<th>
					:
				</th>
				<th>
					<select name="ekspedisi">
						<?php 
							$ex = array('JNE' => 'JNE', 'MEX_Berlian' => 'MEX_Berlian', 'POS_Indonesia' => 'POS_Indonesia', 'BRE' => 'BRE', 'Indah_Cargo' => 'Indah_Cargo');
							foreach ($ex as $key => $value) {
								echo "<option value = $value >$value</option>";
							}
						?>
					</select>
				</th>
			</tr>
			<tr>
			<th><input type="submit" name="confirm" value="CONFIRM"></th>
			</tr>
		</table>
	</form>
    	
		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
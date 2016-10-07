<center>
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url(); ?>index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">User Payment</li>
    </ul>
	
    	<!--<fieldset>
    	<legend>PRODUK</legend>
    		<table>
    			<tr>
    				
    			</tr>
    			<tr>
    				
    			</tr>
    			<tr>
    				
    			</tr>
    			<tr>
    				
    			</tr>
    		</table>
    	</fieldset>-->

    	<fieldset>
    		<legend> PEMBAYARAN </legend>
    		<table>
    		<form action="#" method="POST">
    		<tr>
    		<td align="left"><label><b/>CREDIT</label></td>
    		</tr>
    		<tr>
    			<th>
    				<label>Nama Depan :</label>
    			</th>
    			<th>
    				<label>Nama Belakang :</label>
    			</th>
    		</tr>
    		<tr>
    			<th><input type="text" name="f_name" placeholder="First Name"></th>
    			<th><input type="text" name="l_name" placeholder="Last Name"></th>
    		</tr>
    		<tr>
    			<th>
    				<label>Nomer Kartu Kredit :</label>
    			</th>
    			<th colspan="2">
    				<label>Kode Keamanan :</label>
    			</th>
    		</tr>
    		<tr>
    			<th><input type="text" name="c_number" placeholder="Credit Card Number"></th>
    			<th><input type="text" name="s_code" placeholder="Security Code"></th>
    		</tr>
    		<tr>
    			<th>
    				<label>Expiration Month :</label>
    			</th>
    			<th>
    				<label>Expiration Year :</label>
    			</th>
    		</tr>
    		<tr>
    		<th>
    			<select name="exp_month">
							<?php
								$exp_month = array('JANUARI' => 'JANUARI','FEBRUARI' => 'FEBRUARI','MARET' => 'MARET','APRIL' => 'APRIL','MEI' => 'MEI','JUNI' => 'JUNI','JULI' => 'JULI','AGUSTUS' => 'AGUSTUS','SEPTEMBER' => 'SEPTEMBER','OKTOBER' => 'OKTOBER','NOVEMBER' => 'NOVEMBER','DESEMBER' => 'DESEMBER');
							 foreach ($exp_month as $key => $value) {

								echo "<option value = $value >$value</option>";
							}
							?>
				</select>
			</th>
			<th>
				<select name="exp_year">
							<?php for ($d=2016; $d>=1940; $d--) {
											echo "<option value = $d >$d</option>";
									}
							?>
				</select>
			</th>
    		</tr>
    		<tr>
    		<td align="left"><label><b/>BILLING</label></td>
    		</tr>
    		<tr>
    			<th align="left">
    				<label>Alamat :</label>
    			</th>
    		</tr>
    		<tr>
    			<th colspan="2" align="left">
    				<input style="width: 429px" type="text" name="address" placeholder="Address">
    			</th>
    		</tr>
    		<tr>
    			<th align="left">
    				<label>Kota :</label>
    			</th>
    			<th align="left">
    				<label>Provinsi :</label>
    			</th>
    		</tr>
    		<tr>
    			<th><input type="text" name="city" placeholder="City"></th>
    			<th><input type="text" name="state" placeholder="State/Province"></th>
    		</tr>
    		<tr>
    			<th align="left">
    				<label>Kodepos :</label>
    			</th>
    		</tr>
    		<tr>
    			<th>
    				<input type="text" name="postal" placeholder="Postal/Zip Code">
    			</th>
    		</tr><br/>
    		<tr>
    			<th colspan="2" align="center">
    				<input class="btn btn-large btn-success" type="submit" name="submit" value="CONFIRM!">
    			</th><br/>
    		</tr>
    		</form>
    		</table>
    	</fieldset>

		</div>
		</div>
	</div>	
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
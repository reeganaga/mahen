<?php 

 ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php 
 ?>
<form action="print.php" method="post">
	<table>
		<tr>
			<td>SPP Tetap</td>
			<td><input type="checkbox" name="spp-tetap" class="cb-spp" data-price="960000" value="960000">
				Rp 960.000,00
			</td>
			<td class="val-total"></td>
		</tr>
		<tr>
			<td>Variable</td>
			<td><input type="checkbox" name="spp-variable" class="cb-variable" data-price="65000" value="65000">
				<input type="text" name="input-sks"> X Rp 65.000
			</td>
			<td class="val-total"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" value="process" name="process-spp"></td>
		</tr>
	</table>
</form>

<script>
	//ignore this
	jQuery('input[type="checkbox"]').change(function(event) {
		console.log(jQuery(this).data('price'));
		var price = jQuery(this).data('price');
		jQuery(this).parent('.val-total').html(price)
		jQuery(this).parent('td').parent('.val-total').html('test')
		console.log(jQuery(this).parent().parent('.val-total'))
	});

</script>
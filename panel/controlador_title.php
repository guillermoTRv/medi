<h3 class="box-title">
	<?php echo $enc_apartado; ?>
	<?php  
		if ($get_id_subapartado != '') {
			echo " - ".$subapartado_enc;
		}
		if ($get_act != '') {
			if ($get_act == "edicion_subapartados") {
				echo " - Edicion Supartados";
			}
			if ($get_act == "material_modulo") {
				echo " - Material del modulo";
			}
		}
	?>
	
</h3>
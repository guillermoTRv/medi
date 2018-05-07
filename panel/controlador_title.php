<h3 class="box-title">
	<?php echo $apartado_enc; ?>
	<?php  
		if ($get_id_subapartado != '') {
			echo " - ".$subapartado_enc;
		}
		if ($get_act != '') {
			if ($get_act == "edicion_subapartados") {
				echo " - Edicion Supartados";
			}
		}
	?>
	
</h3>
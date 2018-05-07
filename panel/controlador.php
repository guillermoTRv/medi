<?php 
	if ($get_id_subapartado == '' & $get_act == '') {
		include("panel/vista_principal.php");
	}
	if ($get_id_subapartado != '') {
		include("panel/vista_subapartado.php");
	}
	if ($get_act != '') {
		if ($get_act == 'edicion_subapartados') {
			include("panel/edicion_subapartados.php");
		}
	}

?>
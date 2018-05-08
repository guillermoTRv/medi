<?php 
	if ($id_apartado_get == '' and $action == '') {
		include("clinica/vista_principal.php");		
	}
	if ($id_apartado_get != '') {
		include("clinica/vista_apartado.php");
	}
	if ($action != '') {
		if ($action == "agregar_clinica") {
			include("clinica/subir_clinica.php");			
		}
		if ($action == "edicion_apartados_clinicos") {
			include("clinica/edicion_apartados_clinicos.php");
		}

	}

?>
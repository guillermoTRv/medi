<?php 
	include("../funciones.php");
	$ap_clinica = sanitizar("ap_clinica");
	$id_modulo  = sanitizar("id_modulo");

	if ($ap_clinica != '') {
		
		$consulta_val = consulta_val("SELECT NULL FROM ap_clinica WHERE ap_clinica = '$ap_clinica' and id_modulo = '$id_modulo'");
		if ($consulta_val == 0) {
			
			$insertar = consulta_gen("INSERT INTO ap_clinica(id_modulo,ap_clinica,posicion) values('$id_modulo','$ap_clinica',0)");
			echo "El Apartado Clinico fue registrado exitosamente";
		}
		else{
			echo "El apartado clinico ya ha sido registrado antes";
		}
	}
	else{
		echo "Campo vacio";
	}
?>
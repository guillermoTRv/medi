<?php 
	include("../funciones.php");
	$id_apartado = sanitizar("id_apartado");
	$apartado    = sanitizar("apartado"); 
	$id_modulo   = sanitizar("id_modulo");

	if ($apartado != '') {
		
		$consulta_val = consulta_val("SELECT NULL FROM ap_clinica WHERE ap_clinica = '$ap_clinica' and id_modulo = '$id_modulo'");
		if ($consulta_val == 0) {
			
			$update = consulta_gen("UPDATE ap_clinica SET ap_clinica = '$apartado' where id_ap_clinica = '$id_apartado'");
			echo "Cambio registrado exitosamente";

		}
		else{
			echo "El apartado clinico ya ha sido registrado antes";
		}
	}
	else{
		echo "Campo vacio";
	}
?>
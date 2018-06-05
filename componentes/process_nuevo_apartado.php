<?php 
	include("../funciones.php");
	$apartado  = sanitizar("apartado");
	$id_modulo = sanitizar("id_modulo");
	$tipo = sanitizar("tipo");

	if ($apartado != '' and $tipo != '') {
		
		$validacion = consulta_val("SELECT NULL FROM apartados WHERE apartado = '$apartado'");
		if ($validacion == 0) {
			
			$insertar = consulta_gen("INSERT INTO apartados(id_modulo,apartado,posicion,tipo) values('$id_modulo','$apartado','0','$tipo')");
			echo "Registro Correcto";
		}
		else{
			echo "El subapartado ya ha sido registrado antes";
		}
	}
	else{
		echo "Campo vacio";
	}

?>
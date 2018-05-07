<?php 
	include("../funciones.php");
	$apartado  = sanitizar("apartado");
	$id_modulo = sanitizar("id_modulo");

	if ($apartado != '') {
		
		$validacion = consulta_val("SELECT NULL FROM apartados WHERE apartado = '$apartado'");
		if ($validacion == 0) {
			
			$insertar = consulta_gen("INSERT INTO apartados(id_modulo,apartado,posicion) values('$id_modulo','$apartado','0')");
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
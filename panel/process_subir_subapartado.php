<?php  
	include("../funciones.php");
	$subapartado = sanitizar("subapartado");
	$id_apartado = sanitizar("apartado");
	if ($subapartado != '') {
		
		$consulta_val = consulta_val("SELECT null FROM subapartados where id_apartado = '$id_apartado' and subapartado = '$subapartado'");
		if ($consulta_val == 0) {
			# code...
		
			consulta_gen("INSERT INTO subapartados(id_apartado,subapartado,recopilador,presentacion,temporal,posicion)
				values('$id_apartado','$subapartado','','','',0)
				");
			echo "El Subapartado ha sido registrado exitosamente";

		}

		else{
			echo "El subapartado ya ha sido registrado con anterioridad";
		}

	}
	else{
		echo "Campo vacio";
	}
?>
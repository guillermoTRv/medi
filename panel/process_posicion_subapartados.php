<?php 
	include("../funciones.php");
	echo $id_subapartado = sanitizar_get("id_subapartado");
	echo $posicion = sanitizar_get("posicion");

	consulta_gen("UPDATE subapartados SET posicion = '$posicion' WHERE id_subapartado = '$id_subapartado'");
?>
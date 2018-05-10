<?php 
	include("../funciones.php");
	$id_apartado = sanitizar_get("id_apartado");
	$posicion = sanitizar_get("posicion");

	consulta_gen("UPDATE apartados SET posicion = '$posicion' WHERE id_apartado = '$id_apartado'");
?>
<?php 
	include("../funciones.php");
	echo $id_ap_clinica = sanitizar_get("id_apartado");
	echo $posicion = sanitizar_get("posicion");

	consulta_gen("UPDATE ap_clinica SET posicion = '$posicion' WHERE id_ap_clinica = '$id_ap_clinica'");
?>
<?php 
	include("../funciones.php");
	$id_ap_clinica = sanitizar_get("id");
	$delete = consulta_gen("DELETE FROM ap_clinica WHERE id_ap_clinica = '$id_ap_clinica'");
	echo "El apartado fue eliminado exitosamente";
?>
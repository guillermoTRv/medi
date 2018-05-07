<?php  
	include("../funciones.php");
	$id = sanitizar_get("id");
	consulta_gen("DELETE FROM apartados WHERE id_apartado = '$id'");
	echo "<p style='margin-top:8px'>El apartado ha sido eliminado exitosamente</p>";

?>
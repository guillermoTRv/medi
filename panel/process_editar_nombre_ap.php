<?php 
	include("../funciones.php");
	$apartado = sanitizar("apartado");
	$id_apartado = sanitizar("id_apartado");

	consulta_gen("UPDATE apartados SET apartado = '$apartado' WHERE id_apartado = '$id_apartado'");

	echo "<p style='margin-top:8px'>El cambio ha sido registrado exitosamente</p>";

?>
<?php 
	include("../funciones.php");
	$id_subapartado = sanitizar("id_subapartado");
	$recopilador = $_POST["recopilador"];
	$presentacion = $_POST["presentacion"];
	$temporal = $_POST["temporal"];

	$update = consulta_gen("UPDATE subapartados SET recopilador = '$recopilador',presentacion='$presentacion',temporal='$temporal' WHERE id_subapartado='$id_subapartado'");

	?>
		<div class="alert alert-info alert-dismissible" style="margin-top:10px;margin-bottom:-10px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Datos registrada exitosamente
        </div>
	<?php
?>
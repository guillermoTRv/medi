<?php 
	include("../funciones.php");
	$id_modulo = sanitizar("id_modulo");
	$material  = $_POST["material"];

	consulta_gen("UPDATE material_modulo SET material = '$material' WHERE id_modulo = '$id_modulo'");
	?>
		<div class="alert alert-info alert-dismissible" style="margin-top:10px;margin-bottom:-10px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Datos registrados exitosamente
        </div>
	<?php
?>
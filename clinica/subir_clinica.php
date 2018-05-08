<div class="box-body">
	<h4>Subir Clinica</h4>
	<form action="">
		<input name="titulo" type="text" class="form-control" placeholder="Titulo">
		<select name="tipo_clinica" id="" class="form-control" style="margin-top:8px">
			<option value="">Seleccionar Clinica</option>
			<option value="concreta">Clinica Concreta</option>
			<option value="general">Clinica General</option>
			<option value="sindrome">Sindrome</option>
			<option value="practico">Practica Clinica</option>
		</select>
		<select name="apartado_clinica" id="" class="form-control" style="margin-top:8px">
			<option value="">Seleccionar Apartado Clinico</option>
			<?php 
				$consulta = mysqli_query($q_sec,"SELECT * FROM ap_clinica WHERE id_modulo = '$id_modulo_get' order by posicion asc");
				while ($array = mysqli_fetch_array($consulta)) {
					$id_ap_clinica = $array["id_ap_clinica"];
					$ap_clinica    = $array["ap_clinica"];
					?>
					<option value="<?php echo $id_ap_clinica ?>"><?php echo $ap_clinica ?></option>
					<?php
				}
			?>
		</select>
		<!--<button class="btn btn-default btn-sm" style="margin-top:8px">Agregar Relacion</button>
		<div class="relacion_clinica"></div>-->

		<select name="apartado_af" id="" class="form-control" style="margin-top:8px">
			<option value="">Seleccionar Apartado A.F</option>
			<?php 
				$consulta = mysqli_query($q_sec,"SELECT * FROM apartados WHERE id_modulo = '$id_modulo_get'");
				while ($array = mysqli_fetch_array($consulta)) {
					$id_apartado = $array["id_apartado"];
					$apartado    = $array["apartado"];
					?>
					<option value="<?php echo $id_apartado ?>"><?php echo $apartado ?></option>
					<?php
				}
			?>
		</select>
		<select name="subapartado_af" id="" class="form-control" style="margin-top:8px">
			<option value="">(Opcional) Seleccionar Subapartado A.F</option>
		</select>
		<button class="btn btn-default btn-sm" style="margin-top:8px">Agregar Relacion</button>
		<div class="relacion_af"></div>

		<select name="sistema_extra" id="" class="form-control" style="margin-top:8px">
			<option value="">(opcional) Relacion Sistemas</option>
		</select>
		<!-- Agregar nota que aparezca en el subapartado -->
		<button class="btn btn-default btn-sm" style="margin-top:8px">Agregar Relacion</button>

		<button class="btn btn-primary btn-block btn-sm" style="margin-top:8px">Aceptar</button>
		<br>
	</form>
</div>
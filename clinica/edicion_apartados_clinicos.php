<div class="box-body pad">
  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalSubir">Subir Apartado Clinico</button>
	<table class="table">
		<thead>
			<tr>
				<th>Apartado Clinico</th>
				<th>Accion</th>
				<th>Orden</th>
			</tr>	
		</thead>
		<tbody>
			<?php
				$consulta = mysqli_query($q_sec,"SELECT * FROM ap_clinica WHERE id_modulo = '$id_modulo_get'  order by posicion asc");
                while ($array =  mysqli_fetch_array($consulta)) {
                    $id_ap_clinica = $array["id_ap_clinica"];
                    $apartado_clinico = $array["ap_clinica"];
                    $posicion = $array["posicion"];
                          ?>
                            <tr>
                            	<td><?php echo $apartado_clinico ?></td>
                            	<td>

                            		<a class="editar" data-ide="<?php echo $id_ap_clinica ?>" data-apartado='<?php echo $apartado_clinico ?>' style="color:black" href="" data-toggle="modal" data-target="#myModalEditar">
                                    	<i class="fa fa-edit"></i>
                                    </a>

                                    <a class="eliminar" data-ide="<?php echo $id_ap_clinica ?>" data-apartado='<?php echo $apartado_clinico ?>' style="color:black" href="" data-toggle="modal" data-target="#myModalEliminar">
                                    	<i class="fa fa-times-circle"></i>
                                    </a>
                            	</td>
                            	<td>
                            		<input type="text" style="height:20px;width: 30px;text-align: center;" value="<?php echo $posicion ?>" class="input_posicion" data="<?php echo $id_ap_clinica ?>">
                            	</td>
                            </tr>
                          <?php
                }
                ?>
		</tbody>
	</table>	
</div>

<div class="modal fade" id="myModalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar Apartado Clinico - <strong class="strong_apartado_eliminar"></strong></h4>
      </div>
      <div class="modal-body">
        ¿Esta seguro de que desea eliminar el apartado clinico <strong class="strong_apartado_eliminar"></strong>?
        <br>Con ello tambien se eliminaran todos los materiales complementarios relacionados
        <input type="hidden" class="input_id">
        <div class="mensaje_eliminar"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn_eliminar_apartado">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Apartado Clinico - <strong class="strong_apartado_editar"></strong></h4>
      </div>
      <div class="modal-body">
        <form method="POST" class="form_editar_apartado">
        	<input type="text" class="form-control input_apartado" name="apartado">
        	<input type="hidden" class="value_apartado" name="id_apartado">
        	<input type="hidden" value="<?php echo $id_modulo_get ?>" name="id_modulo">
        </form>
        <div class="mensaje_editar_nombre"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn_editar_apartado">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalSubir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Subir Apartado Clinico</h4>
      </div>
      <div class="modal-body">
        <form method="POST" class="form_subir_ap_clinica">
          <input type="text" class="form-control input_ap_clinica" name="ap_clinica">
          <input type="hidden" name="id_modulo" value="<?php echo $id_modulo_get ?>">
        </form>
        <div class="mensaje_subir"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn_subir_ap_clinica">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<script>
  	$(document).on('click','.eliminar',function(){
    	event.preventDefault();
    	var id_apartado = $(this).data("ide")
    	var apartado = $(this).data("apartado")
    	$(".input_id").val(id_apartado)
    	$(".strong_apartado_eliminar").html(apartado)
	})
  	$(document).on('click','.editar',function(){
    	event.preventDefault();
    	var id_apartado = $(this).data("ide")
    	var apartado = $(this).data("apartado")
    	$(".strong_apartado_editar").html(apartado)
    	$(".input_apartado").val(apartado)
    	$(".value_apartado").val(id_apartado)
  	})

  	$(document).on('click','.btn_editar_apartado',function(){
      	$(".btn_editar_apartado").prop( "disabled",true)
      	var url="clinica/process_editar_nombre_ap.php";
      	$.ajax({
            type:"POST",
            url:url,
            data:$(".form_editar_apartado").serialize(),
            success:function(data){
                $(".mensaje_editar_nombre").html(data); 
                $(".btn_editar_apartado").prop( "disabled",false) 
                window.location.href = ""       
            }
      	});
      	return false;
  	})

  	$(document).on('click','.btn_eliminar_apartado',function(){
    	$(".btn_eliminar_apartado").prop( "disabled",true)
    	var id = $(".input_id").val()
    	$.ajax({
        	type:"GET",
        	url:"clinica/process_eliminar_apartado.php?id="+id+"",
        	success:function(data){
            	$(".mensaje_eliminar").html(data); 
            	$(".btn_eliminar_apartado").prop( "disabled",false) 
        	    window.location.href = ""       
    	    }
    	});
    	return false;
    })
  $(document).on('click','.btn_subir_ap_clinica',function(){
    $(".btn_subir_ap_clinica").prop( "disabled",true)
    $.ajax({
        type:"POST",
        url:"clinica/process_subir_ap_clinica.php",
        data:$(".form_subir_ap_clinica").serialize(),
        success:function(data){
            $(".mensaje_subir").html(data); 
            $(".btn_subir_ap_clinica").prop( "disabled",false) 
            window.location.href = ""       
        }
    });
  })
  $(document).on('change','.input_posicion',function(){
    var id_apartado = $(this).attr("data")
    var valor_posicion = $(this).val()
    $.ajax({
        type:"GET",
        url:"clinica/process_posicion_apartados.php?id_apartado="+id_apartado+"&posicion="+valor_posicion+"",
        success:function(data){

        }
    });
    return false;
  })/*
  $(document).ready(function(){
      $("input").change(function(){
          alert("The text has been changed.");
      });
  });*/
</script>

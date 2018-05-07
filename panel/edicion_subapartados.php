<div class="box-body pad">
  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalSubir">Subir Subapartado</button>
	<table class="table">
		<thead>
			<tr>
				<th>Subapartado</th>
				<th>Accion</th>
				<th>Orden</th>
			</tr>	
		</thead>
		<tbody>
			<?php
				$consulta = mysqli_query($q_sec,"SELECT subapartado,id_subapartado,posicion FROM subapartados WHERE id_apartado = '$id_apartado'  order by posicion asc");
                while ($array =  mysqli_fetch_array($consulta)) {
                    $subapartado   = $array["subapartado"];
                    $id_subapartado = $array["id_subapartado"];
                    $posicion = $array["posicion"];
                          ?>
                            <tr>
                            	<td><?php echo $subapartado ?></td>
                            	<td>

                            		<a class="editar" data-ide="<?php echo $id_subapartado ?>" data-subapartado='<?php echo $subapartado ?>' style="color:black" href="" data-toggle="modal" data-target="#myModalEditar">
                                    	<i class="fa fa-edit"></i>
                                    </a>

                                    <a class="eliminar" data-ide="<?php echo $id_subapartado ?>" data-subapartado='<?php echo $subapartado ?>' style="color:black" href="" data-toggle="modal" data-target="#myModalEliminar">
                                    	<i class="fa fa-times-circle"></i>
                                    </a>
                            	</td>
                            	<td>
                            		<input type="text" style="height:20px;width: 30px;text-align: center;" value="<?php echo $posicion ?>" class="input_posicion" data="<?php echo $id_subapartado ?>">
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
        <h4 class="modal-title" id="myModalLabel">Eliminar Subapartado - <strong class="strong_subapartado_eliminar"></strong></h4>
      </div>
      <div class="modal-body">
        ¿Esta seguro de que desea eliminar el subapartado <strong class="strong_subapartado_eliminar"></strong>?
        <br>Con ello tambien se eliminaran todos los materiales complementarios relacionados
        <input type="hidden" class="input_id">
        <div class="mensaje_eliminar"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn_eliminar_subapartado">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalEditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Subapartado - <strong class="strong_subapartado_editar"></strong></h4>
      </div>
      <div class="modal-body">
        <form method="POST" class="form_editar_subapartado">
        	<input type="text" class="form-control input_subapartado" name="subapartado">
        	<input type="hidden" class="value_subapartado" name="id_subapartado">
        </form>
        <div class="mensaje_editar_nombre"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn_editar_subapartado">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalSubir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Subir Subapartado</h4>
      </div>
      <div class="modal-body">
        <form method="POST" class="form_subir_subapartado">
          <input type="text" class="form-control input_subapartado" name="subapartado">
          <input type="hidden" name="apartado" value="<?php echo $id_apartado ?>">
        </form>
        <div class="mensaje_subir"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn_subir_subapartado">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).on('click','.eliminar',function(){
    event.preventDefault();
    var id_subapartado = $(this).data("ide")
    var subapartado = $(this).data("subapartado")
    $(".input_id").val(id_subapartado)
    $(".strong_subapartado_eliminar").html(subapartado)
    
  })
  $(document).on('click','.editar',function(){
    event.preventDefault();
    var id_subapartado = $(this).data("ide")
    var subapartado = $(this).data("subapartado")
    $(".strong_subapartado_editar").html(subapartado)
    $(".input_subapartado").val(subapartado)
    $(".value_subapartado").val(id_subapartado)
  })

  $(document).on('click','.btn_editar_subapartado',function(){
      $(".btn_editar_subapartado").prop( "disabled",true)
      var url="panel/process_editar_nombre_sub.php";
      $.ajax({
            type:"POST",
            url:url,
            data:$(".form_editar_subapartado").serialize(),
            success:function(data){
                $(".mensaje_editar_nombre").html(data); 
                $(".btn_editar_subapartado").prop( "disabled",false) 
                window.location.href = ""       
            }
      });
      return false;
  })

  $(document).on('click','.btn_eliminar_subapartado',function(){
    $(".btn_eliminar_subapartado").prop( "disabled",true)
    var id = $(".input_id").val()
    $.ajax({
        type:"GET",
        url:"panel/process_eliminar_subapartado.php?id="+id+"",
        success:function(data){
            $(".mensaje_eliminar").html(data); 
            $(".btn_eliminar_subapartado").prop( "disabled",false) 
            window.location.href = ""       
        }
    });
    return false;
  })
  $(document).on('click','.btn_subir_subapartado',function(){
    $(".btn_subir_subapartado").prop( "disabled",true)
    $.ajax({
        type:"POST",
        url:"panel/process_subir_subapartado.php",
        data:$(".form_subir_subapartado").serialize(),
        success:function(data){
            $(".mensaje_subir").html(data); 
            $(".btn_subir_subapartado").prop( "disabled",false) 
            window.location.href = ""       
        }
    });
  })
  $(document).on('change','.input_posicion',function(){
    var id_subapartado = $(this).attr("data")
    var valor_posicion = $(this).val()
    $.ajax({
        type:"GET",
        url:"panel/process_posicion_subapartados.php?id_subapartado="+id_subapartado+"&posicion="+valor_posicion+"",
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

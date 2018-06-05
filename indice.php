<!DOCTYPE html>
<?php include("funciones.php") ?>
<?php 
  $getvar     = sanitizar_get("modulo");
  $consulta   = consulta_array("SELECT modulo,id_modulo,estudio FROM modulos WHERE getvar = '$getvar'");
  $modulo_enc = $consulta['modulo'];
  $id_modulo_get = $consulta['id_modulo'];
  $estudio = $consulta["estudio"];
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Medii</title>
  <?php include("componentes/css.php") ?>
</head>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <?php include("componentes/header.php"); ?>
    <div class="content-wrapper">
    <div class="container">
      <div class="row" style="margin-top: 28px">
        <div class="col-md-10 col-md-offset-1">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h2 class="box-title">Indice - <?php echo $modulo_enc ?> - <?php echo $estudio ?></h2>
                    <div class="box-tools pull-right">
                      <div class="has-feedback">
                        <div class="btn-group">
                          <a type="button" href="#" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-default">
                            <i class="fa fa-plus-circle"></i>
                          </a>
                        </div> 
                        
                      </div>
                    </div>
                  </div>
                  <div class="box-body">
                    <a href="" class="anatofisiologia">Aspectos Clinicos</a> &nbsp;&nbsp;&nbsp;
                    <a href="" class="clinica">Aspectos Clinicos</a> &nbsp;&nbsp;&nbsp; 
                    <a href="" class="farmacologia">Farmacoterapia</a> &nbsp;&nbsp;&nbsp; 
                    <a href="">Casos Clinicos</a> &nbsp;&nbsp;&nbsp; 
                    <a href="">Medipracticas</a> &nbsp;&nbsp;&nbsp; 
                    <a href="">M.Complementarios</a> &nbsp;&nbsp;&nbsp; 
                    <a href="">Subir un contenido</a>
                  </div>
                  <div class="box-body">
                    <table class="table table-condensed table-striped tabla_anatofisiologia">
                      <thead>
                        <tr>
                          <th>Apartado</th>
                          <th>Acciones</th>
                          <th><center>Evaluacion</center></th>
                          <th>Posicion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  
                          $consulta = mysqli_query($q_sec,"SELECT id_apartado,apartado,posicion FROM apartados WHERE id_modulo = '$id_modulo_get' and tipo='anatofisiologia' order by posicion asc");
                          while ($array = mysqli_fetch_array($consulta)) {
                            $id_apartado = $array["id_apartado"];
                            $apartado = $array["apartado"];
                            $ruta = "panel.php?modulo=$getvar&tipo=anatofisiologia&apartado=$id_apartado";
                            $posicion = $array["posicion"];
                            ?> 
                              <tr style="padding-top:-10px">
                                <td><a style="color:black" href="<?php echo $ruta ?>"><?php echo $apartado ?></a></td>
                                <td>
                                  <a class="editar" href="" style="color:black" data-ide="<?php echo $id_apartado ?>" data-apartado='<?php echo $apartado ?>' href="" data-toggle="modal" data-target="#myModalEditar">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <a class="eliminar" href="" style="color:black" data-ide="<?php echo $id_apartado ?>" data-apartado='<?php echo $apartado ?>' href="" data-toggle="modal" data-target="#myModalEliminar">
                                    <i class="fa fa-times-circle"></i>
                                  </a>
                                </td>
                                <td>
                                  <center><i class="fa fa-star-o"></i></center>
                                </td>
                                <td>
                                  <input type="text" style="height:20px;width: 30px;text-align: center;" class="input_posicion" data="<?php echo $id_apartado ?>" value="<?php echo $posicion ?>">
                                </td>
                              </tr> 
                            <?php
                          }

                        ?>
                      </tbody>
                    </table>
                    <table class="table table-condensed table-striped tabla_clinica" style="display: none"> 
                      <thead>
                        <tr>
                          <th>Apartado</th>
                          <th>Acciones</th>
                          <th><center>Evaluacion</center></th>
                          <th>Posicion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  
                          $consulta = mysqli_query($q_sec,"SELECT id_apartado,apartado,posicion FROM apartados WHERE id_modulo = '$id_modulo_get' and tipo='clinica' order by posicion asc");
                          while ($array = mysqli_fetch_array($consulta)) {
                            $id_apartado = $array["id_apartado"];
                            $apartado = $array["apartado"];
                            $ruta = "panel.php?modulo=$getvar&tipo=clinica&apartado=$id_apartado";
                            $posicion = $array["posicion"];
                            ?> 
                              <tr style="padding-top:-10px">
                                <td><a style="color:black" href="<?php echo $ruta ?>"><?php echo $apartado ?></a></td>
                                <td>
                                  <a class="editar" href="" style="color:black" data-ide="<?php echo $id_apartado ?>" data-apartado='<?php echo $apartado ?>' href="" data-toggle="modal" data-target="#myModalEditar">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <a class="eliminar" href="" style="color:black" data-ide="<?php echo $id_apartado ?>" data-apartado='<?php echo $apartado ?>' href="" data-toggle="modal" data-target="#myModalEliminar">
                                    <i class="fa fa-times-circle"></i>
                                  </a>
                                </td>
                                <td>
                                  <center><i class="fa fa-star-o"></i></center>
                                </td>
                                <td>
                                  <input type="text" style="height:20px;width: 30px;text-align: center;" class="input_posicion" data="<?php echo $id_apartado ?>" value="<?php echo $posicion ?>">
                                </td>
                              </tr> 
                            <?php
                          }

                        ?>
                      </tbody>
                    </table>
                    <table class="table table-condensed table-striped tabla_farmacologia" style="display: none"> 
                      <thead>
                        <tr>
                          <th>Apartado</th>
                          <th>Acciones</th>
                          <th><center>Evaluacion</center></th>
                          <th>Posicion</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  
                          $consulta = mysqli_query($q_sec,"SELECT id_apartado,apartado,posicion FROM apartados WHERE id_modulo = '$id_modulo_get' and tipo='farmacologia' order by posicion asc");
                          while ($array = mysqli_fetch_array($consulta)) {
                            $id_apartado = $array["id_apartado"];
                            $apartado = $array["apartado"];
                            $ruta = "panel.php?modulo=$getvar&tipo=farmacologia&&apartado=$id_apartado";
                            $posicion = $array["posicion"];
                            ?> 
                              <tr style="padding-top:-10px">
                                <td><a style="color:black" href="<?php echo $ruta ?>"><?php echo $apartado ?></a></td>
                                <td>
                                  <a class="editar" href="" style="color:black" data-ide="<?php echo $id_apartado ?>" data-apartado='<?php echo $apartado ?>' href="" data-toggle="modal" data-target="#myModalEditar">
                                    <i class="fa fa-edit"></i>
                                  </a>
                                  <a class="eliminar" href="" style="color:black" data-ide="<?php echo $id_apartado ?>" data-apartado='<?php echo $apartado ?>' href="" data-toggle="modal" data-target="#myModalEliminar">
                                    <i class="fa fa-times-circle"></i>
                                  </a>
                                </td>
                                <td>
                                  <center><i class="fa fa-star-o"></i></center>
                                </td>
                                <td>
                                  <input type="text" style="height:20px;width: 30px;text-align: center;" class="input_posicion" data="<?php echo $id_apartado ?>" value="<?php echo $posicion ?>">
                                </td>
                              </tr> 
                            <?php
                          }

                        ?>
                      </tbody>
                    </table>
                  </div>  
                  <!-- /.box-body -->
                </div>
        </div>
      </div>
    </div><br>
  </div>
  <?php include("componentes/footer.php") ?>
  
  <div class="modal fade" id="modal-default">
      <div class="modal-dialog" style="margin-top: 100px">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Agregar Apartado</h4>
              </div>
              <div class="modal-body">
                    <form class="form_new_apartado" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Nombre del apartado</label>
                        <input type="text" class="form-control" id="apartado" name="apartado">
                        <select class ="form-control" style="margin-top:10px;" name="tipo"> 
                          <option value="">--</option>                        
                          <option value="anatofisiologia">Anatofisiologia</option>
                          <option value="clinica">Clinica</option>
                          <option value="farmacologia">Farmacologia</option>
                        </select>
                        <input type="hidden" name="id_modulo" value="<?php echo $id_modulo_get ?>" >
                        <input type="hidden" value="<?php echo $getvar ?>" class="getvar_form">
                      </div>
                      <div class="mensaje_new_apartado"></div>
                    </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary btn_new_apartado">Aceptar</button>
              </div>
        </div>
      </div>
  </div>
  
  <div class="modal fade" id="myModalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Eliminar Apartado - <strong class="strong_apartado_eliminar"></strong></h4>
        </div>
        <div class="modal-body">
          ¿Esta seguro de que desea eliminar el apartado <strong class="strong_apartado_eliminar"></strong>?
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
          <h4 class="modal-title" id="myModalLabel">Editar Apartado - <strong class="strong_apartado_editar"></strong></h4>
        </div>
        <div class="modal-body">
          <form method="POST" class="form_editar_apartado">
            <input type="text" class="form-control input_apartado" name="apartado">
            <input type="hidden" class="value_apartado" name="id_apartado">
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


</div>

<?php include("componentes/js.php"); ?>
<script>
    $(document).on("click",".btn_new_apartado",function(){
      $(".btn_new_apartado").prop( "disabled",true)
      var getvar = $(".getvar_form").val()
      var url="componentes/process_nuevo_apartado.php";
          $.ajax({
              type:"POST",
              url:url,
              data:$(".form_new_apartado").serialize(),
              success:function(data){
                  if (data == "Registro Correcto") {
                    $(".mensaje_new_apartado").html(data);
                    window.location.href = "indice.php?modulo="+getvar+""  
                  }
                  else{
                    $(".mensaje_new_apartado").html(data);
                    $(".btn_new_apartado").prop( "disabled",false) 
                  }   
              }
          });
          return false;
    })
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
    $(document).on('click','.btn_eliminar_apartado',function(){
      $(".btn_eliminar_subapartado").prop( "disabled",true)
      var id = $(".input_id").val()
      $.ajax({
          type:"GET",
          url:"panel/process_eliminar_apartado.php?id="+id+"",
          success:function(data){
              $(".mensaje_eliminar").html(data); 
              $(".btn_eliminar_apartado").prop( "disabled",false) 
              window.location.href = ""       
          }
      });
      return false;
    })
    $(document).on('click','.btn_editar_apartado',function(){
      $(".btn_editar_subapartado").prop( "disabled",true)
      var url="panel/process_editar_nombre_ap.php";
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
    $(document).on('change','.input_posicion',function(){
      var id_apartado = $(this).attr("data")
      var valor_posicion = $(this).val()
      $.ajax({
          type:"GET",
          url:"panel/process_posicion_apartados.php?id_apartado="+id_apartado+"&posicion="+valor_posicion+"",
          success:function(data){
          }
      });
      return false;
    })
    $(document).on('click','.clinica',function(){
      event.preventDefault()
      $(".tabla_anatofisiologia").hide();
      $(".tabla_farmacologia").hide();
      $(".tabla_clinica").show()
    })
    $(document).on('click','.anatofisiologia',function(){
      event.preventDefault()
      $(".tabla_clinica").hide();
      $(".tabla_farmacologia").hide();
      $(".tabla_anatofisiologia").show()
    })
    $(document).on('click','.farmacologia',function(){
      event.preventDefault()
      $(".tabla_anatofisiologia").hide();
      $(".tabla_clinica").hide();
      $(".tabla_farmacologia").show()
    })
</script>

</body>
</html>

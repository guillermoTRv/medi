<input type="hidden" value="<?php echo $get_id_subapartado ?>" class="id_subapartado_js">
<div class="box-header with-border" style="padding-top:3px;padding-bottom:3px">
	<a href="" class="recopilador_panel"><strong>Recopilador</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="" class="presentacion_panel"><strong>Presentacion</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="" class="temporal_panel"><strong>Temporal</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="" class="btn_ventana" data="articulos"><strong>Articulos</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="" class="btn_ventana" data="imagenes"><strong>Imagenes</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="" class="btn_ventana" data="interrogantes"><strong>Interrogantes</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="" id="presentacion_panel"><strong>Notas</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="" id="presentacion_panel"><strong>Vitacora</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="" id="presentacion_panel"><strong>+ Materiales</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<div class="box-body pad">
    <div class="caja_recopilador">    
        <p style="margin-top:-10px;margin-bottom:2px">
            <a href="" class="lectura_recopilador">Texto</a> - <a href="" class="editar_recopilador">Editar</a>
        </p>
        <form class="form_uno_subapartado" style="display: none">
            <textarea id="editor1" name="recopilador" rows="10" cols="80">
                <?php echo $recopilador ?>
            </textarea>
        </form>
        <div class="texto_recopilador" style="margin-top:-12px;padding:5px">
            <?php echo $recopilador ?>
        </div>
    </div>

    <div class="caja_presentacion" style="display: none"> 
        <p style="margin-top:-10px;margin-bottom:2px">
             <a href="" class="lectura_presentacion">Texto</a> - <a href="" class="editar_presentacion">Editar</a>
        </p>
        <form method="post" class="form_dos_subapartado" style="display: none">
            <textarea id="editor2" name="presentacion" rows="10" cols="80">
                <?php echo $presentacion ?>
            </textarea>
        </form>
        <div class="texto_presentacion" style="margin-top:-12px;padding:5px">
            <?php echo $presentacion ?>
        </div>
    </div>

    <div class="caja_temporal" style="display: none">
        <p style="margin-top:-10px;margin-bottom:2px">
             <a href="" class="lectura_temporal">Texto</a> - <a href="" class="editar_temporal">Editar</a>
        </p>
        <form method="post" class="form_tres_temporal" style="display: none">
            <textarea id="editor3" name="" rows="10" cols="80">
                <?php echo $temporal ?>
            </textarea>
        </form>
        <div class="texto_temporal" style="margin-top:-12px;padding:5px">
            <?php echo $temporal ?>
        </div>
    </div>
    

    <form method="POST" class="form_enviar_subapartado" style="display: none">
    	<input type="text" class="input_uno" name="recopilador">
    	<input type="text" class="input_dos" name="presentacion">
        <input type="text" class="input_tres" name="temporal">
    	<input type="text" name="id_subapartado" value="<?php echo $get_id_subapartado ?>">
    </form>
    <div class="mensaje_subapartado">
    	
    </div>

    <div class="ventanas" style="display: none">
    </div>

</div>

<div class="box-footer">           
      <button type="button" class="btn btn-default btn_guardar_cambios_sub">Guardar Cambios</button>
      <button type="button" class="btn btn-default btn_vitacora">Guardar Vitacora</button>

      <div class="pull-right">
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_material">Material</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_bibliografia">Bibliografia</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_notas">Notas</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_reactivo">Reactivo</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_interrogante">Interrogante</button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_articulo">Articulo</button>  
      </div>                          
</div>

<?php include("panel/modal_subir_material.php"); ?>
<?php include("panel/modal_control_bibliografia.php"); ?>
<?php include("panel/modal_subir_notas.php"); ?>
<?php include("panel/modal_subir_reactivo.php"); ?>

<?php include("panel/modal_subir_interrogante.php"); ?>
<?php include("panel/modal_subir_articulo.php"); ?>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  $(document).on('click','.recopilador_panel',function(){
    event.preventDefault();
    $(".caja_presentacion").hide()
    $(".caja_temporal").hide()
    $(".ventanas").hide()
    $(".caja_recopilador").show()
  })
  $(document).on('click','.presentacion_panel',function(){
    event.preventDefault();
    $(".caja_recopilador").hide()
    $(".caja_temporal").hide()
    $(".ventanas").hide()
    $(".caja_presentacion").show()
  })
  $(document).on('click','.temporal_panel',function(){
    event.preventDefault();
    $(".caja_recopilador").hide()
    $(".caja_presentacion").hide()
    $(".ventanas").hide()
    $(".caja_temporal").show()

  })

  $(document).on('click','.btn_ventana',function(){
    event.preventDefault();
    var id_subapartado_js = $(".id_subapartado_js").val()
    $(".caja_recopilador").hide()
    $(".caja_presentacion").hide()
    $(".caja_temporal").hide()

    $(".ventanas").show()
    var data_ventana = $(this).attr("data")
    if (data_ventana == "articulos") {
      $(".ventanas").load("panel/ventena_articulos.php?id_subapartado_js="+id_subapartado_js+"")
    }
    if (data_ventana == "imagenes") {
      $(".ventanas").load("panel/ventena_imagenes.php")
    }
    if (data_ventana == "interrogantes") {
      $(".ventanas").load("panel/ventana_interrogantes.php")
    }
  })

  $(document).on('click','.btn_guardar_cambios_sub',function(){
    var contenido_uno = CKEDITOR.instances['editor1'].getData();
    var contenido_dos = CKEDITOR.instances['editor2'].getData();
    var contenido_tres = CKEDITOR.instances['editor3'].getData();

    $('.input_uno').val(contenido_uno)
    $('.input_dos').val(contenido_dos)
    $(".input_tres").val(contenido_tres)

    $.ajax({
        type:'POST',
        url:"panel/process_subapartado.php",
        data:$('.form_enviar_subapartado').serialize(),
        success:function(data){
            $(".mensaje_subapartado").html(data)
            $('.btn_guardar_cambios_sub').prop('disabled,false')        
        }
    });

  })
  $(document).on('click','.btn_vitacora',function(){
    var contenido_uno = CKEDITOR.instances['editor1'].getData();
    var contenido_dos = CKEDITOR.instances['editor2'].getData();
    var contenido_tres = CKEDITOR.instances['editor3'].getData();

    $('.input_uno').val(contenido_uno)
    $('.input_dos').val(contenido_dos)
    $(".input_tres").val(contenido_tres)

    $.ajax({
        type:'POST',
        url:"panel/process_vitacora.php",
        data:$('.form_enviar_subapartado').serialize(),
        success:function(data){
            $(".mensaje_subapartado").html(data)
            $('.btn_guardar_cambios_sub').prop('disabled,false')        
        }
    });

  })

  $(document).on('click','.editar_recopilador',function(){
    event.preventDefault()
    $(".texto_recopilador").hide()
    $(".form_uno_subapartado").show()
  })
  $(document).on('click','.lectura_recopilador',function(){
    event.preventDefault()
    $(".form_uno_subapartado").hide()
    $(".texto_recopilador").show()
  })
  $(document).on('click','.editar_presentacion',function(){
    event.preventDefault()
    $(".texto_presentacion").hide()
    $(".form_dos_subapartado").show()
  })
  $(document).on('click','.lectura_presentacion',function(){
    event.preventDefault()
    $(".form_dos_subapartado").hide()
    $(".texto_presentacion").show()
  })
  $(document).on('click','.editar_temporal',function(){
    event.preventDefault()
    $(".texto_temporal").hide()
    $(".form_tres_temporal").show()
  })
  $(document).on('click','.lectura_temporal',function(){
    event.preventDefault()
    $(".form_tres_temporal").hide()
    $(".texto_temporal").show()
  })
</script>
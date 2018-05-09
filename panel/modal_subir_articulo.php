<div class="modal fade" id="modal_articulo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Subir un articulo</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="form_articulo" enctype="multipart/form-data">
          <input type="hidden" class="relaciones" name="relaciones">
          <input type="text" name="titulo" class="form-control input-sm" placeholder="Titulo" style="margin-bottom:5px">

          <input type="text" name="institucion" class="form-control input-sm" placeholder="Institucion" style="margin-bottom:5px">
          
          <input type="text" name="publicadora" class="form-control input-sm" placeholder="Publicadora" style="margin-bottom:5px">
          
          <input type="text" name="autores" class="form-control input-sm" placeholder="Autores" style="margin-bottom:5px">

          <input type="text" name="fecha" class="form-control input-sm" placeholder="Mes/Año" style="margin-bottom:5px">

          <input type="text" name="pais" class="form-control input-sm" placeholder="Pais" style="margin-bottom:5px">

          <input type="text" name="comentarios" class="form-control input-sm" placeholder="Comentarios" style="margin-bottom:5px">

          <input type="text" name="link" class="form-control input-sm" placeholder="Link" style="margin-bottom:10px">
          
          <div class="row">
            <div class="col-md-6">
              <select name="categoria" class="form-control categoria input-sm" style="margin-bottom:5px">
                    <option value="">Categoria</option>
                    <option value="anatofisiologia">Anatofisiologia</option>
                    <option value="clinica">Clinica</option>
                    <option value="farmacologia">Farmacologia</option>
              </select>
              <select name="apartado" class="form-control apartado input-sm" style="margin-bottom:5px">
                    <option value="">Apartado</option>
              </select>
              <select name="subapartado" class="form-control subapartado input-sm" style="margin-bottom:5px">
                    <option value="">Subapartado</option>
              </select>      
              <button class="btn btn-default btn-block btn-sm btn_referencia" style="margin-bottom:7px">Agregar Referencia</button>
            </div>
            <div class="col-md-6 lista_relacion" >
                
            </div>
          </div>
          <input type="file" name="file">
          <input type="hidden" name="modulo" id="modulo" value="<?php echo $id_modulo ?>">
        </form>                  
        <div class="mensaje_articulo" style="margin-top:6px;font-weight:bold"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary btn_subir_articulo">Aceptar</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).on("change",".categoria",function(){
        var categoria = $(this).val()
        var modulo = $("#modulo").val()
        $.ajax({
          type:"GET",
          url:"panel/select_categoria.php?categoria="+categoria+"&modulo="+modulo+"",
          success:function(data){
            $(".apartado").html(data)
          }
        })      
  })
  $(document).on("change",".apartado",function(){
        var apartado   = $(this).val()
        var categoria  = $(".categoria").val()
        $.ajax({
          type:"GET",
          url:"panel/select_apartado.php?apartado="+apartado+"&categoria="+categoria+"",
          success:function(data){
            $(".subapartado").html(data)
          }
        })      
  })
  $(document).on("click",".btn_subir_articulo",function(){
        var relaciones = $(".relacion").length
        var id_modulo  = $("#modulo").val()
        $(".relaciones").val(relaciones)
        var formData = new FormData($("#form_articulo")[0]);
        var ruta = "panel/process_subir_articulo.php";
        $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos)
            {
                if (datos == 'mens_uno') {
                  $(".mensaje_articulo").html("No dejar campos vacios")
                }
                if (datos == 'mens_dos') {
                  $(".mensaje_articulo").html("El articulo ya ha sido registrado anteriormente")
                }
                if (datos == 'mens_tres') {
                  $(".mensaje_articulo").html("El archivo no pude subirse") 
                }
                if (datos != 'mens_uno' && datos != 'mens_dos' && datos != 'mens_tres') {
                  $(".articulo_relacion").val(datos)
                  $(".modulo_relacion").val(id_modulo)
                      var ultima_relacion = $(".lista_relacion .relacion:last form").attr("class")
                      for(var i = 1; i <= ultima_relacion; i++ ){
                        //var apartado_relacion = $("."+i+" div .apartado_relacion").val()
                        $.ajax({
                            type:"POST",
                            url:"panel/process_relacion_articulo.php",
                            data:$("."+i).serialize(),
                            success:function(data){
                            }
                        });
                      }
                  $(".mensaje_articulo").html("El articulo ha sido registrado exitosamente")
                }
            }
        });
  });
  $(document).on("click",".btn_referencia",function(){
    event.preventDefault();
    var modulo = $("#modulo").val()
    var categoria = $(".categoria").val()
    var apartado = $(".apartado").val()
    var subapartado = $(".subapartado").val()
    if (subapartado == '') {subapartado = 0}
    $.ajax({
          type:"GET",
          url:"panel/valores_relacion_articulos.php?modulo="+modulo+"&categoria="+categoria+"&apartado="+apartado+"&subapartado="+subapartado+"",
          success:function(data){
            var num_relacion = parseInt($(".relacion").length)
            if (num_relacion == 0) {
              $(".lista_relacion").append(data)  
              $(".lista_relacion .relacion:last form").addClass("1")
            }else{
              var class_anterior = parseInt($(".lista_relacion .relacion:last form").attr("class"))
              var class_nueva_num = parseInt(class_anterior + 1)
              var class_nueva_txt = class_nueva_num.toString()
              $(".lista_relacion").append(data)  
              $(".lista_relacion .relacion:last form").addClass(class_nueva_txt)
            }
          }
    })  
    //alert(categoria +"-"+ apartado +"-"+ subapartado)
  })
  $(document).on("click",".quitar_relacion",function(){
    event.preventDefault();
    $(this).parent().parent().remove()
  })
  //Los articulos se pueden relacionar con otros temas despues de que se hayan registrado
</script>

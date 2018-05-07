<div class="modal fade" id="modal_material" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Subir Material</h4>
      </div>
      <div class="modal-body" style="padding-top:8px">
          <p><a class="a_subir_imagen" href="">Subir Imagen</a> - <a class="a_subir_enlace" href="">Enlazar Material </a> - <a class="a_subir_link" href="">Link </a> - <a class="a_subir_video" href="">Video</a></p>
          <div class="subir_imagen">
            <form action="">
              <input type="text" name="titulo" class="form-control" placeholder="Titulo" style="margin-bottom:5px">
              <input type="text" name="comentario" class="form-control" placeholder="Comentarios" style="margin-bottom:5px">
              <input type="file" name="imagen">
            </form>
          </div>
          <div class="subir_enlace" style="display: none;">
            Subir Enlace
          </div>
          <div class="subir_link" style="display: none">
            Subir Link
          </div>
          <div class="subir_video" style="display: none">
            Subir Video
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).on('click','.a_subir_imagen',function(){
    event.preventDefault();
    $(".subir_enlace").hide()
    $(".subir_link").hide()
    $(".subir_video").hide()
    $(".subir_imagen").show()
  })
  $(document).on('click','.a_subir_enlace',function(){
    event.preventDefault();
    $(".subir_link").hide()
    $(".subir_video").hide()
    $(".subir_imagen").hide()
    $(".subir_enlace").show()
  })
  $(document).on('click','.a_subir_link',function(){
    event.preventDefault();
    $(".subir_enlace").hide()
    $(".subir_video").hide()
    $(".subir_imagen").hide()
    $(".subir_link").show()
  })
  $(document).on('click','.a_subir_video',function(){
    event.preventDefault();
    $(".subir_enlace").hide()
    $(".subir_link").hide()
    $(".subir_imagen").hide()
    $(".subir_video").show()
  })
</script>
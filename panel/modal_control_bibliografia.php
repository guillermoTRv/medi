<div class="modal fade" id="modal_bibliografia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding:8px">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Control Bibliografia</h4>
      </div>
      <div class="modal-body" style="padding:10px">
            <p><a href="" id="biblio_ocupada">Bibliografia Ocupada &nbsp; </a> - <a href="" id="biblio_subir"> &nbsp; Añadir Bibliografia</a></p>
            <div id="ventana_biblio"> 
              <table class="table">
                <thead>
                  <tr>
                    <th>Libro</th>
                    <th>Abreviacion</th>
                    <th>Comentarios</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tortora</td>
                    <td>tr</td>
                    <td>Solo me mostro el concepto de Nervio</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div id="subir_biblio" style="display: none">
              <form action="">
                <select name="" id="" class="form-control">
                  <option value="">Seleccionar una Bibliografia</option>
                </select>
                <input type="text" class="form-control" style="margin-top:8px" placeholder="Comentarios">
                <button type="button" class="btn btn-default btn-sm" style="margin-top:8px">Aceptar</button>
              </form>
              <br>
              <form action="">
                <input type="text" class="form-control" style="margin-top:8px" placeholder="Libro">
                <input type="text" class="form-control" style="margin-top:8px" placeholder="Codigo">
                <input type="text" class="form-control" style="margin-top:8px" placeholder="Comentarios">
                <button type="button" class="btn btn-default btn-sm" style="margin-top:8px">Aceptar</button>
              </form>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar Ventana</button>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).on('click','#biblio_subir',function(){
    event.preventDefault();
    $("#ventana_biblio").hide()
    $("#subir_biblio").show()
  })
  $(document).on('click','#biblio_ocupada',function(){
    event.preventDefault();
    $("#subir_biblio").hide()
    $("#ventana_biblio").show()
  })
</script>
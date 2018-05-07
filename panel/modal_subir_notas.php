<div class="modal fade" id="modal_notas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Control Notas</h4>
      </div>
      <div class="modal-body">
          <form class="form_articulo" method="POST">
              <select name="apartado" id="apartado" class="form-control" style="margin-bottom:5px">
                  <option value="">Apartado</option>
              </select>

              <select name="subapartado" id="subapartado" class="form-control" style="margin-bottom:5px">
                  <option value="">Subapartado</option>
              </select>

              <input type="text" name="titulo" class="form-control" placeholder="Interrogante" style="margin-bottom:5px">

              <input type="text" name="comentarios" class="form-control" placeholder="Comentarios" style="margin-bottom:5px">

              <input type="hidden" name="modulo" id="modulo" value="<?php echo $id_modulo ?>">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
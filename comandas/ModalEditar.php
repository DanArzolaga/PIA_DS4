
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataComanda['IdComanda']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar estatus
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataComanda['IdComanda']; ?>">

            <div class="modal-body" id="cont_modal">

            
            <div class="form-group">
          <label class="col-form-label" for="estatus">Estatus</label>
          <select class="form-control" name="estatus">
          <?php  
            if($dataComanda['IdEstatusComanda'] =='1'){
              echo '<option value=1 selected>Abierta</option>';
              echo '<option value=2>Cancelada</option>';
              echo '<option value=3>Finalizada</option>';
              
            }else if($dataComanda['IdEstatusComanda'] ==='2'){
              echo '<option value=1>Abierta</option>';
              echo '<option value=2 selected>Cancelada</option>';
              echo '<option value=3>Finalizada</option>';

            }else{
              echo '<option value=1>Abierta</option>';
              echo '<option value=2>Cancelada</option>';
              echo '<option value=3 selected>Finalizada</option>';
      
            }
          ?>
          </select>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->

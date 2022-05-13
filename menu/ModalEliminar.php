<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $dataMenu['IdMenu']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="color: #fff; text-align: center;">
            <h4 class="modal-title">
                Eliminar
            </h4>
        </div>

        <div class="modal-body">
          <strong style="text-align: center !important"> 
            <?php echo "¿Realmente quieres eliminar " . $dataMenu['Descrip'] . "?"; ?>
        
          </strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger btnBorrar" data-dismiss="modal" id="<?php echo $dataMenu['IdMenu']; ?>">Eliminar</button>
        </div>
        
        </div>
      </div>
</div>
<!---fin ventana eliminar--->
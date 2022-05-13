<!-- Ventana modal para eliminar -->
<div class="modal fade" id="deleteChildresn<?php echo $dataUsuario['IdUsuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #dc3545;">
            <h4 class="modal-title" style="color: #fff; text-align: center;">
                Eliminar
            </h4>
        </div>

        <div class="modal-body">
          <strong style="text-align: center !important"> 
            <?php echo "¿Realmente quieres eliminar a " . $dataUsuario['Nombre'] . "?"; ?>
        
          </strong>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger btnBorrar" data-dismiss="modal" id="<?php echo $dataUsuario['IdUsuario']; ?>">Eliminar</button>
        </div>
        
        </div>
      </div>
</div>
<!---fin ventana eliminar--->
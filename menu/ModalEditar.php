<?php 

$sqlCategoria = ("SELECT * FROM  categoria");
$dataCategoriaSelect  = mysqli_query($con, $sqlCategoria);
?>

<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataMenu['IdMenu']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="POST" action="recib_Update.php">
        <input type="hidden" name="id" value="<?php echo $dataMenu['IdMenu']; ?>">

            <div class="modal-body" id="cont_modal">

            
            <div class="form-group">
          <label class="col-form-label" for="categoria">Categoria</label>
          <select name="categoria" class="form-control">
    <?php
      while ($dataSelect = mysqli_fetch_array($dataCategoriaSelect)) { ?>
        <option value="<?php echo $dataSelect["IdCategoria"]; ?>">
          <?php echo utf8_encode($dataSelect["Descrip"]); ?>
        </option>
    <?php } ?>
  </select>
        </div>

        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Descripción:</label>
          <input type="text" name="descrip" class="form-control" value="<?php echo $dataMenu['Descrip']; ?>" required="true">
        </div>

        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Descripción Corta:</label>
          <input type="text" name="descripCorta" class="form-control" value="<?php echo $dataMenu['DescripCorta']; ?>" required="true">
        </div>

        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Precio:</label>
          <input type="number" name="precio" class="form-control" value="<?php echo $dataMenu['PUnitario']; ?>" required="true">
        </div>

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

<?php
include('../bd/config.php');

$sqlUsuario   = ("SELECT * FROM usuario ORDER BY tipo");
$queryUsuario = mysqli_query($con, $sqlUsuario);

?>

<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $dataUsuario['IdUsuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <input type="hidden" name="id" value="<?php echo $dataUsuario['IdUsuario']; ?>">

            <div class="modal-body" id="cont_modal">


            <div class="form-group">
          <label class="col-form-label" for="tipoUsuario">Tipo de Usuario</label>
          <select class="form-control" name="tipoUsuario">
          <?php  
            if($dataUsuario['tipoUsuario']==='1'){
              echo '<option value=1 selected>Admin</option>';
              echo '<option value=2>Cajero</option>';
              echo '<option value=3>Mesero</option>';
              echo '<option value=4>Cocinero</option>';
              
            }elseif($dataUsuario['tipoUsuario']==='2'){
              echo '<option value=1>Admin</option>';
              echo '<option value=2 selected>Cajero</option>';
              echo '<option value=3>Mesero</option>';
              echo '<option value=4>Cocinero</option>';

            }elseif($dataUsuario['tipoUsuario']==='3'){
              echo '<option value=1>Admin</option>';
              echo '<option value=2>Cajero</option>';
              echo '<option value=3>Mesero selected</option>';
              echo '<option value=4>Cocinero</option>';
              
            }else{
              echo '<option value=1>Admin</option>';
              echo '<option value=2>Cajero</option>';
              echo '<option value=3>Mesero</option>';
              echo '<option value=4 selected>Cocinero</option>';
            }
          ?>
          </select>
        </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $dataUsuario['Nombre']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Apellido Paterno:</label>
                  <input type="text" name="app" class="form-control" value="<?php echo $dataUsuario['APaterno']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Apellido Materno:</label>
                  <input type="text" name="apm" class="form-control" value="<?php echo $dataUsuario['AMaterno']; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Contraseña:</label>
                  <input type="text" name="contra" class="form-control" value="<?php echo $dataUsuario['Contra']; ?>" required="true">
                </div>
                <div class="mb-3">
        <label for="rbActivo">Activo</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbActivo" value="S" <?php echo $dataUsuario['IdActivo']==='A' ?  'checked' : '' ?> checked>
            <label class="form-check-label" for="estadoA">Si</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="rbActivo" value="N" <?php echo $dataUsuario['IdActivo']==='N' ?  'checked' : '' ?>>
          <label class="form-check-label" for="estadoN">No</label>
        </div>
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

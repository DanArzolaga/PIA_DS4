<?php
include('../bd/config.php');

$sqlUsuario   = ("SELECT * FROM vUsuarios ORDER BY tipo");
$queryUsuario = mysqli_query($con, $sqlUsuario);

?>

<!--ventana para Update--->
<div class="modal fade" id="detailChildresn<?php echo $dataUsuario['IdUsuario']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #0d6efd !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Datos del Usuario
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

            <div class="modal-body" id="cont_modal">
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>ID:</strong> <?php echo $dataUsuario['IdUsuario']; ?></li>
            <li class="list-group-item"><strong>Nombre:</strong> <?php echo $dataUsuario['Nombre']; ?> </li>
            <li class="list-group-item"><strong>A.Paterno:</strong> <?php echo $dataUsuario['APaterno']; ?></li>
            <li class="list-group-item"><strong>A.Materno:</strong>  <?php echo $dataUsuario['AMaterno']; ?></li>
            <li class="list-group-item"><strong>Cargo:</strong> <?php echo $dataUsuario['tipo']; ?></li>
            <li class="list-group-item"><strong>Contraseña:</strong> <?php echo $dataUsuario['Contra']; ?></li>
            <li class="list-group-item"><strong>Estatus:</strong> <?php echo $dataUsuario['IdActivo']==='1' ?  'Activo' : 'No Activo'; ?></li>
            <li class="list-group-item"><strong>Fecha Registro:</strong> <?php echo $dataUsuario['FecAlta']; ?></li>
        </ul>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>

    </div>
  </div>
</div>
<!---fin ventana Update --->

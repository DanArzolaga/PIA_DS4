<?php

$sqlTipo         = ("SELECT * FROM  tipousuario ORDER BY Descrip");
$dataUsuariosSelect  = mysqli_query($con, $sqlTipo);

?>

<form name="form-data" action="recibUsuario.php" method="POST">

    <div class="row">
    <div class="col-md-12 mt-2">
        <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
        <select name="tipoUsuario" class="form-control">
        <option value="">Seleccione el tipo</option>
        <?php
          while ($dataSelect = mysqli_fetch_array($dataUsuariosSelect)) { ?>
            <option value="<?php echo $dataSelect["IdTipoUsuario"]; ?>">
              <?php echo utf8_encode($dataSelect["Descrip"]); ?>
            </option>
        <?php } ?>
      </select>
    </div>

      <div class="col-md-12 mt-2">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre" required='true' autofocus>
      </div>
      <div class="col-md-12 mt-2">
          <label for="app" class="form-label">Apellido Paterno</label>
          <input type="text" class="form-control" name="app" required='true'>
      </div>
      <div class="col-md-12 mt-2">
          <label for="apm" class="form-label">Apellido Materno</label>
          <input type="text" class="form-control" name="apm" required='true'>
      </div>
      <div class="col-md-12 mt-2">
          <label for="contra" class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="contra" required='true'>
      </div>

      <div class="col-md-12 mt-2">
        <label for="rbActivo">Activo</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="activo" value="S" checked>
            <label class="form-check-label" for="rbActivoS">Si</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="activo" value="N">
          <label class="form-check-label" for="rbActivoN">No</label>
        </div>
        </div>
    </div>
      <div class="row justify-content-start text-center mt-3">
          <div class="col-12">
              <button class="btn btn-primary btn-block" id="btnEnviar">
                  Registrar
              </button>
          </div>
      </div>
</form>

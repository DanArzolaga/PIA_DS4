<?php

$sqlCategoria         = ("SELECT * FROM  categoria ORDER BY Descrip");
$dataCategoriaSelect  = mysqli_query($con, $sqlCategoria);

?>
<form name="form-data" action="recibMenu.php" method="POST">

    <div class="row">

    <div class="col-md-12 mt-2">
        <label for="categoria" class="form-label">Categoria</label>
        <select name="categoria" class="form-control">
        <option value="">Seleccione la categoria</option>
        <?php
          while ($dataSelect = mysqli_fetch_array($dataCategoriaSelect)) { ?>
            <option value="<?php echo $dataSelect["IdCategoria"]; ?>">
              <?php echo utf8_encode($dataSelect["Descrip"]); ?>
            </option>
        <?php } ?>
      </select>
    </div>

      <div class="col-md-12 mt-2">
          <label for="nombre" class="form-label">Descripción</label>
          <input type="text" class="form-control" name="descrip" required='true' autofocus>
      </div>

      <div class="col-md-12 mt-2">
          <label for="nombre" class="form-label">Descripción Corta</label>
          <input type="text" class="form-control" name="descripCorta" required='true' autofocus>
      </div>

      <div class="col-md-12 mt-2">
          <label for="nombre" class="form-label">Precio</label>
          <input type="number" class="form-control" name="precio" required='true' autofocus>
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


<?php
include('../bd/config.php');

$sqlMenu = ("SELECT * FROM  menu ORDER BY IdCategoria");
$dataMenuSelect  = mysqli_query($con, $sqlMenu);


$sqlMesa = ("SELECT * FROM  mesa");
$dataMesaSelect  = mysqli_query($con, $sqlMesa);

$sqlUsuario = ("SELECT * FROM  usuario WHERE IdTipoUsuario=3");
$dataUsuarioSelect  = mysqli_query($con, $sqlUsuario);




?>
<form name="form-data" action="recibComanda.php?metodo=1" method="POST">

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label>Mesa</label>
              <select name="mesa" class="form-control">
                <option value="">Seleccione una mesa</option>
        <?php
          while ($dataSelect = mysqli_fetch_array($dataMesaSelect)) { ?>
            <option value="<?php echo $dataSelect["IdMesa"]; ?>">
              <?php echo utf8_encode($dataSelect["Descrip"]); ?>
            </option>
        <?php } ?>
      </select>
    </div>
  </div>

  <div class="col-md-7 mt-2">
      <label for="menu" class="form-label">Platillo</label>
      <select name="menu" class="form-control">
    <option value="">Seleccione el platillo</option>
    <?php
      while ($dataSelect = mysqli_fetch_array($dataMenuSelect)) { ?>
        <option value="<?php echo $dataSelect["IdMenu"]; ?>">
          <?php echo utf8_encode($dataSelect["DescripCorta"]); ?>
        </option>
    <?php } ?>
  </select>
  </div>

  <div class="col-md-2 mt-2">
      <label for="cantidad" class="form-label">Cantidad</label>
      <input type="number" class="form-control" name="cantidad" required='true' autofocus>
  </div>

  
  <div class="col-md-3 mt-2">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" class="form-control" name="precio" required="true" autofocus>
  </div>

</div>
  <div class="row justify-content-start text-center mt-3">
  <div class="col-12">
          <button class="btn btn-primary btn-block" id="btnAgregar">
              Agregar
          </button>
      </div>
  </div>
</form>

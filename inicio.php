<?php 

include('bd/config.php');

session_start();

if (isset($_SESSION['IdUsuario']) && isset($_SESSION['Usuario'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
  <title>PIA</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <style> 
        table tr th{
            background:rgba(0, 0, 0, .6);
            color: azure;
        }
        tbody tr{
          font-size: 12px !important;

        }
        h3{
            color:crimson; 
            margin-top: 100px;
        }
        a:hover{
            cursor: pointer;
            color: #333 !important;
        }
      </style>
</head>
<body>
  

<nav style="background-color: #007bff;">
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-20 mt-4">
        <a class="btn btn-primary" href="#"><i class="bi bi-house"></i> Inicio</a>
        <a class="btn btn-primary" href="comandas/index.php"><i class="bi bi-bag"></i> Comandas</a>
        <a class="btn btn-primary" href="menu/index.php"><i class="bi bi-postcard"></i> Menu</a>
        <a class="btn btn-primary" href="mesas/index.php"><i class="bi bi-journal"></i> Mesas</a>
        <a class="btn btn-primary" href="usuarios/index.php"><i class="bi bi-person"></i> Usuarios</a>
        <a class="btn btn-primay" style="color:#fff; margin: 0 0 0 250px;" href="logout.php"><i class="bi bi-power"></i> Cerrar Sesión</a>
        <hr class="mb-3">
    </div>
</nav>

<div class="container p-5">
  <h1>Bienvenido, <?php echo $_SESSION['Nombre']; ?></h1>
</div>
<div class="container">
  <div class="row">

  <?php
$sqlVentas   = ("SELECT * FROM vComandasVentas");
$queryVentas = mysqli_query($con, $sqlVentas);

?>

<div class="col">
<div class="card text-white bg-primary mb-2 mt-3" style="max-width: 18rem;">
  <div class="card-header"><i class="bi bi-person-circle"></i> Ventas</div>
  <div class="card-body">
    <h5 class="card-title">Total de Ventas</h5>
    <?php
                              while ($dataVentas = mysqli_fetch_array($queryVentas)) { ?>
      <p class="card-text"> <?php echo '$'. $dataVentas['Ventas_totales']; ?></p>

    <?php } ?>
    
  </div>
</div>
  </div>

  <?php
$sqlComandas   = ("SELECT * FROM comanda where IdEstatusComanda = 3");
$queryComandas = mysqli_query($con, $sqlComandas);
$cantidadComandas     = mysqli_num_rows($queryComandas);
?>
  <div class="col">
<div class="card text-white bg-primary mb-2 mt-3" style="max-width: 18rem;">
  <div class="card-header"><i class="bi bi-person-circle"></i> Comandas </div>
  <div class="card-body">
    <h5 class="card-title">Comandas atentidas</h5>
    <p class="card-text"><?php echo $cantidadComandas; ?></p>
  </div>
</div>
  </div>

  <div class="col">
<div class="card text-white bg-primary mb-2 mt-3" style="max-width: 18rem;">
  <div class="card-header"><i class="bi bi-person-circle"></i> Menú</div>
  <div class="card-body">
    <h5 class="card-title">Los más vendidos</h5>
    <p class="card-text">consulta</p>
  </div>
</div>
  </div>

  <?php
$sqlUsuarios   = ("SELECT * FROM usuario");
$queryUsuarios = mysqli_query($con, $sqlUsuarios);
$cantidadUsuarios     = mysqli_num_rows($queryUsuarios);
?>

  <div class="col">
<div class="card text-white bg-primary mb-2 mt-3" style="max-width: 18rem;">
  <div class="card-header"><i class="bi bi-person-circle"></i> Usuarios</div>
  <div class="card-body">
    <h5 class="card-title">Total de Usuarios</h5>
    <p class="card-text-center"> <?php echo $cantidadUsuarios; ?></p>
  </div>
</div>
  </div>
</div>
</div>

<div class="container mt-2 p-5">

<?php
$sqlComanda   = ("SELECT * FROM vComandas where estatus = 'Abierta'");
$queryComanda = mysqli_query($con, $sqlComanda);
$cantidad     = mysqli_num_rows($queryComanda);
?>

<div class="row text-center">
  <div class="col-md-3"> 
    <strong>Lista de Comandas Actuales <span>  ( <?php echo $cantidad; ?> )</span> </strong>
  </div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="body">
      <div class="row clearfix">

          <div class="col-sm-12">
              <div class="row">
                <div class="col-md-12 p-2">


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="datatable">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Estatus</th>
                            <th scope="col">Mesa</th>
                            <th scope="col">fecha</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              while ($dataComanda = mysqli_fetch_array($queryComanda)) { ?>
                          <tr>
                            <td><?php echo $dataComanda['IdComanda']; ?></td>
                            <td><?php echo $dataComanda['usuario']; ?></td>
                            <td><?php echo $dataComanda['estatus']; ?></td>
                            <td><?php echo $dataComanda['IdMesa']; ?></td>
                            <td><?php echo $dataComanda['FecComanda']; ?></td>
                          </tr>


                        <?php } ?>
                        </tbody>
                    </table>
                </div>


              </div>
          </div>
          </div>
      </div>
  </div>
</div>

</div>



</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
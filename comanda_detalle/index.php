<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="../img/icon.ico"/>
  <title>PIA</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

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
        <a class="btn btn-primary" href="../inicio.php"><i class="bi bi-house"></i> Inicio</a>
        <a class="btn btn-primary" href="../comandas/index.php"><i class="bi bi-bag"></i> Comandas</a>
        <a class="btn btn-primary" href="../menu/index.php"><i class="bi bi-postcard"></i> Menu</a>
        <a class="btn btn-primary" href="../mesas/index.php"><i class="bi bi-journal"></i> Mesas</a>
        <a class="btn btn-primary" href="../usuarios/index.php"><i class="bi bi-person"></i> Usuarios</a>
        <a class="btn btn-primay" style="color:#fff; margin: 0 0 0 250px;" href="../logout.php"><i class="bi bi-power"></i> Cerrar Sesión</a>
        <hr class="mb-3">
    </div>
</nav>

<div class="container mt-2 p-3">

<?php
include('../bd/config.php');

$sqlComandatmp   = ("SELECT * FROM vcomanda_detalle");
$queryComandatmp = mysqli_query($con, $sqlComandatmp);
$cantidad     = mysqli_num_rows($queryComandatmp);

$sqlMesa         = ("SELECT * FROM mesa");
$dataMesaSelect  = mysqli_query($con, $sqlMesa);

$precioTotal = 0.00;
$sumPrecioTotal = 0.00;

?>

<div class="col-sm-12">
  <div class="row">
    <div class="col mb-3">
      <a class="btn btn-primary" href="../comandas/index.php"><i class="bi bi-arrow-left-circle"></i></a>
    </div>
  </div>
</div>


<div class="row text-center">
  <div class="col-md-4"> 
    <strong>Registrar Nueva Comanda</strong>
  </div>
  <div class="col-md-6"> 
    <strong>Lista de platillos <span>  ( <?php echo $cantidad; ?> )</span> </strong>
  </div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="body">

      <div class="row clearfix">

        <div class="col-sm-5">

        <!--- Formulario para registrar comanda --->
        <?php include('registrarComanda.php'); ?>

        </div>  

          <div class="col-sm-7">
              <div class="row">

                <div class="col-md-12 p-2">

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="datatable">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Total</th>

                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              while ($dataComandaD = mysqli_fetch_array($queryComandatmp)) { ?>
                          <tr>
                            <td><?php echo $dataComandaD['id_menu']; ?></td>
                            <td><?php echo $dataComandaD['Descrip']; ?></td>
                            <td><?php echo $dataComandaD['cantidad_tmp']; ?></td>
                            <td><?php echo $dataComandaD['precio_tmp']; ?></td>
                            <td><?php echo  $precioTotal = $dataComandaD['precio_tmp']*$dataComandaD['cantidad_tmp']?></td>
                            
                          <td> 
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataComandaD['id_tmp']; ?>">
                                  <i class="bi bi-trash"></i>
                              </button>
                          </td>
                          </tr>

                            <!--Ventana Modal para la Alerta de Eliminar--->
                            <?php include('ModalEliminar.php'); ?>

                            
                        <?php $sumPrecioTotal+=$precioTotal;  } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Total</th>
                            <th><?php echo '$'. number_format($sumPrecioTotal, 2);?></th>
                            <th>   
                              <a href="recibComanda.php?metodo=2&sumPrecioTotal=<?php $sumPrecioTotal;?>">      
                              <button class="btn btn-primary btn-block" id="btnGuardar">Guardar</button>
                              </a>
                            </th>
                          </tr>
                        </tfoot>
                    </table>
                </div>


              </div>
          </div>
          </div>
      </div>
  </div>
</div>
</div>


<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript">


    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });

//Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);



    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "recib_Delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="index.php";
                  $('#respuesta').html(data);
                }
            });
    return false;

    });


});
</script>

</body>
</html>
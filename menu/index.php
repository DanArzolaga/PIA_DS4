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
        <a class="btn btn-primary" href="#"><i class="bi bi-postcard"></i> Menu</a>
        <a class="btn btn-primary" href="../mesas/index.php"><i class="bi bi-journal"></i> Mesas</a>
        <a class="btn btn-primary" href="../usuarios/index.php"><i class="bi bi-person"></i> Usuarios</a>
        <a class="btn btn-primay" style="color:#fff; margin: 0 0 0 250px;" href="../logout.php"><i class="bi bi-power"></i> Cerrar Sesión</a>
        <hr class="mb-3">
    </div>
</nav>

<div class="container mt-2 p-5">

<?php
include('../bd/config.php');

$sqlMenu   = ("SELECT * FROM vMenu");
$queryMenu = mysqli_query($con, $sqlMenu);
$cantidad     = mysqli_num_rows($queryMenu);
?>

<div class="row text-center">
  <div class="col-md-5"> 
    <strong>Registrar Nuevo Menu</strong>
  </div>
  <div class="col-md-6"> 
    <strong>Lista de Menu <span>  ( <?php echo $cantidad; ?> )</span> </strong>
  </div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="body">
      <div class="row clearfix">

        <div class="col-sm-5">
        <!--- Formulario para registrar menu --->
        <?php include('registrarMenu.php');  ?>
        </div>  

         

          <div class="col-sm-7">
              <div class="row">
                <div class="mt-2" style="margin: 0 0 0 500px;">
                <a class="btn btn-primary" href="../categorias/index.php"><i class="bi bi-card-list"></i> Agregar categoria</a>
                </div>
                <div class="col-md-12 p-2">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="datatable">
                        <thead>
                          <tr>
                            <th scope="col">Categoria</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Desc. Corta</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              while ($dataMenu = mysqli_fetch_array($queryMenu)) { ?>
                          <tr>
                            <td><?php echo $dataMenu['categoria']; ?></td>
                            <td><?php echo $dataMenu['Descrip']; ?></td>
                            <td><?php echo $dataMenu['DescripCorta']; ?></td>
                            <td><?php echo "$". $dataMenu['PUnitario']; ?></td>
                          <td> 
                            
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataMenu['IdMenu']; ?>">
                                 <i class="bi bi-pencil-square"></i>
                              </button>

                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataMenu['IdMenu']; ?>">
                                  <i class="bi bi-trash"></i>
                              </button>
                          </td>
                          </tr>
                     

                            <!--Ventana Modal para Actualizar--->
                            <?php  include('ModalEditar.php'); ?>

                            <!--Ventana Modal para la Alerta de Eliminar--->
                            <?php include('ModalEliminar.php'); ?>


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


<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


<script type="text/javascript">

$(document).ready( function () {
    $('#datatable').DataTable({
    language: {
      url: "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
    }
} );
} );

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
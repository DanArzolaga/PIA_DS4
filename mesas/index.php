<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="../img/logo-mywebsite-urian-viera.svg"/>
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
        <a class="btn btn-primary" href="#"><i class="bi bi-journal"></i> Mesas</a>
        <a class="btn btn-primary" href="../usuarios/index.php"><i class="bi bi-person"></i> Usuarios</a>
        <a class="btn btn-primay" style="color:#fff; margin: 0 0 0 250px;" href="../logout.php"><i class="bi bi-power"></i> Cerrar Sesión</a>
        <hr class="mb-3">
    </div>
</nav>

<div class="container mt-2 p-5">

<?php
include('../bd/config.php');

$sqlMesa   = ("SELECT * FROM mesa ORDER BY IdMesa");
$queryMesa = mysqli_query($con, $sqlMesa);
$cantidad     = mysqli_num_rows($queryMesa);
?>

<div class="row text-center">
  <div class="col-md-5"> 
    <strong>Registrar Nueva Mesa</strong>
  </div>
  <div class="col-md-6"> 
    <strong>Lista de Mesas <span>  ( <?php echo $cantidad; ?> )</span> </strong>
  </div>
</div>

<div class="row clearfix">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="body">
      <div class="row clearfix">

        <div class="col-sm-5">
        <!--- Formulario para registrar mesa --->
        <?php include('registrarMesa.php');  ?>
        </div>  

         

          <div class="col-sm-7">
              <div class="row">
                <div class="col-md-12 p-2">


                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" id="datatable">
                        <thead>
                          <tr>
                          <th scope="col">#</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acción</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                              while ($dataMesa = mysqli_fetch_array($queryMesa)) { ?>
                          <tr>
                            <td><?php echo $dataMesa['IdMesa']; ?></td>
                            <td><?php echo $dataMesa['Descrip']; ?></td>
                            
                          <td> 
                            
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editChildresn<?php echo $dataMesa['IdMesa']; ?>">
                                 <i class="bi bi-pencil-square"></i>

                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteChildresn<?php echo $dataMesa['IdMesa']; ?>">
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
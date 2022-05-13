<?php
include('../bd/config.php');
$tipoUsuario 	 = $_REQUEST['tipoUsuario'];
$nombre      = $_REQUEST['nombre'];
$app 	 = $_REQUEST['app'];
$apm 	 = $_REQUEST['apm'];
$contra 	 = $_REQUEST['contra'];
$activo 	 = $_REQUEST['activo'];


$QueryInsert = ("INSERT INTO usuario(
    IdTipoUsuario,
    Nombre,
    APaterno,
    AMaterno,
    Contra,
    IdActivo
)
VALUES (
    '".$tipoUsuario. "',
    '".$nombre. "',
    '".$app. "',
    '".$apm."',
    '".$contra."',
    '".$activo."'
)");
$insertUsuario = mysqli_query($con, $QueryInsert);

header("location:index.php");
?>

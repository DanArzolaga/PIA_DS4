<?php
include('../bd/config.php');

$idMenu 	 = $_REQUEST['menu'];
$cantidad 	 = $_REQUEST['cantidad'];
$precio 	 = $_REQUEST['precio'];
$mesa 	 = $_REQUEST['mesa'];
$usuario 	 = $_SESSION['IdUsuario'];

$QueryInsert = ("INSERT INTO tmp(
    id_menu,
    cantidad_tmp,
    precio_tmp,
    mesa_tmp,
    usuario_tmp
    )
VALUES (
    '".$idMenu. "',
    '".$cantidad. "',
    '".$precio. "',
    '".$mesa. "',
    '".$usuario. "'
)");
$insertComanda = mysqli_query($con, $QueryInsert);

header("location:index.php");  


?>

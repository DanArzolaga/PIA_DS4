<?php
include('../bd/config.php');

$metodo = $_GET['metodo'];

if($metodo == 1){ //es para agregar los platillos en la tabla tmp

$idMenu 	 = $_REQUEST['menu'];
$cantidad 	 = $_REQUEST['cantidad'];
$precio 	 = $_REQUEST['precio'];

$QueryInsert = ("INSERT INTO tmp(
    id_menu,
    cantidad_tmp,
    precio_tmp
    )
VALUES (
    '".$idMenu. "',
    '".$cantidad. "',
    '".$precio. "'
)");
$insertComanda = mysqli_query($con, $QueryInsert);

header("location:index.php");  
}

if($metodo == 2){


}


?>

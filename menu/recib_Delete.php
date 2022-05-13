<?php
include('../bd/config.php');
$idMenu = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM menu WHERE IdMenu= '".$idMenu."' ");
mysqli_query($con, $DeleteRegistro);
?>
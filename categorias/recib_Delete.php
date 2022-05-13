<?php
include('../bd/config.php');
$idCategoria = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM categoria WHERE IdCategoria= '".$idCategoria."' ");
mysqli_query($con, $DeleteRegistro);
?>
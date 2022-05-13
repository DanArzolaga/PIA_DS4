<?php
include('../bd/config.php');
$idMesa = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM mesa WHERE IdMesa= '".$idMesa."' ");
mysqli_query($con, $DeleteRegistro);
?>
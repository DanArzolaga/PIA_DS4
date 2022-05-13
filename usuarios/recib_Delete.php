<?php
include('../config.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM usuario WHERE IdUsuario= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);
?>
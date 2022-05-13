<?php
include('../bd/config.php');
$id_tmp = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM tmp WHERE id_tmp= '".$id_tmp."' ");
mysqli_query($con, $DeleteRegistro);
?>
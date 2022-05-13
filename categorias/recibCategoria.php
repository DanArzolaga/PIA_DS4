<?php
include('../bd/config.php');
$descrip 	 = $_REQUEST['descrip'];


$QueryInsert = ("INSERT INTO categoria(Descrip)
VALUES (
    '".$descrip. "'
)");
$insertUsuario = mysqli_query($con, $QueryInsert);

header("location:index.php");
?>

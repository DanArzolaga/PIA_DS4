<?php
include('../bd/config.php');

$categoria 	 = $_REQUEST['categoria'];
$descrip 	 = $_REQUEST['descrip'];
$descripCorta 	 = $_REQUEST['descripCorta'];
$precio 	 = $_REQUEST['precio'];


$QueryInsert = ("INSERT INTO menu(
    IdCategoria,
    Descrip,
    DescripCorta,
    PUnitario

    )
VALUES (
    '".$categoria. "',
    '".$descrip. "',
    '".$descripCorta. "',
    '".$precio. "'
)");
$insertMenu = mysqli_query($con, $QueryInsert);

header("location:index.php");
?>

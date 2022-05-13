
<?php
include('../bd/config.php');
$idMenu = $_REQUEST['id'];
$categoria 	 = $_REQUEST['categoria'];
$descrip 	 = $_REQUEST['descrip'];
$descripCorta 	 = $_REQUEST['descripCorta'];
$precio 	 = $_REQUEST['precio'];

$update = ("UPDATE menu 
	SET 
	IdCategoria  ='" .$categoria. "',
    Descrip  ='" .$descrip. "',
    DescripCorta  ='" .$descripCorta. "',
    PUnitario  ='" .$precio. "'

WHERE IdMenu='" .$idMenu. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>

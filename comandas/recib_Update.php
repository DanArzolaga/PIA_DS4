
<?php
include('../bd/config.php');
$idComanda = $_REQUEST['id'];
$estatus 	 = $_REQUEST['estatus'];

$update = ("UPDATE comanda 
	SET 
	IdEstatusComanda  ='" .$estatus. "'

WHERE IdComanda='" .$idComanda. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>

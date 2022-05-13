
<?php
include('../bd/config.php');
$idMesa = $_REQUEST['id'];
$descrip 	 = $_REQUEST['descrip'];

$update = ("UPDATE mesa 
	SET 
	Descrip  ='" .$descrip. "'

WHERE IdMesa='" .$idMesa. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>

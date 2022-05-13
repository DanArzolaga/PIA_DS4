
<?php
include('../bd/config.php');
$idCategoria = $_REQUEST['id'];
$descrip 	 = $_REQUEST['descrip'];

$update = ("UPDATE categoria 
	SET 
	Descrip  ='" .$descrip. "'

WHERE IdCategoria='" .$idCategoria. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>

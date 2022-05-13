
<?php
include('../bd/config.php');
$idUsuario = $_REQUEST['id'];
$tipoUsuario 	 = $_REQUEST['tipoUsuario'];
$nombre      = $_REQUEST['nombre'];
$app 	 = $_REQUEST['app'];
$apm 	 = $_REQUEST['apm'];
$contra 	 = $_REQUEST['contra'];
$activo 	 = $_REQUEST['activo'];

$update = ("UPDATE usuario 
	SET 
	IdTipoUsuario  ='" .$tipoUsuario. "',
	Nombre  ='" .$nombre. "',
	APaterno ='" .$app. "',
	AMaterno ='" .$apm. "',
	Contra ='" .$contra. "',
	IdActivo ='" .$activo. "'

WHERE IdUsuario='" .$idUsuario. "'
");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>

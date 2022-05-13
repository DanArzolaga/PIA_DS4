<?php 
session_start(); 
include "bd/config.php";

if (isset($_POST['txtUsuario']) && isset($_POST['txtContra'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$usuario = validate($_POST['txtUsuario']);
	$contra = validate($_POST['txtContra']);

	if (empty($usuario)) {
		header("Location: index.php?error=El usuario es requerido");
	    exit();
	}else if(empty($contra)){
        header("Location: index.php?error=La contraseña es requerida");
	    exit();
	}else{
		$sql = "SELECT * FROM usuario WHERE Usuario='$usuario' AND Contra='$contra'";

		$result = mysqli_query($con, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Usuario'] === $usuario && $row['Contra'] === $contra) {
            	$_SESSION['Usuario'] = $row['Usuario'];
            	$_SESSION['Nombre'] = $row['Nombre'];
				$_SESSION['Contra'] = $row['Contra'];
				$_SESSION['IdUsuario'] = $row['IdUsuario'];
            	$_SESSION['IdTipoUsuario'] = $row['IdTipoUsuario'];

				if($_SESSION['IdTipoUsuario']==1){
					header("Location: inicio.php");
		        	exit();
				} else{
					header("Location: comandas/index.php");
		        	exit();
				}	
            }else{
				header("Location: index.php?error=Usuario o contraseña incorrectos");
		        exit();
			}
		}else{
			header("Location: index.php?error=Usuario o contraseña incorrectos");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}
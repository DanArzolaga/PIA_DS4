<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio de Sesión</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"> 
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body style="background-color: #007bff">
           <form action="login.php" method="post">
             <h2>Inicio de Sesión</h2>
             <?php if (isset($_GET['error'])) { ?>
               <p class="error"><?php echo $_GET['error']; ?></p>
             <?php } ?>
             <label>Usuario</label>
             <input type="text" name="txtUsuario" placeholder="Usuario"><br>
      
             <label>Contraseña</label>
             <input type="password" name="txtContra" placeholder="Contraseña"><br>
              
             <button type="submit">Ingresar</button>
           </form>
      </body>
</html>
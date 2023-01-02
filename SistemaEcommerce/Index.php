<?php session_start();
    if (!isset($_SESSION['Id']) && !isset($_SESSION['NombreUsuario'])) { 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>
</head>
<body>
    <div class="contenedor">
        <h1><ins>Iniciar sesion</ins></h1>
        <br>
        <form action="Login/LoginAuth.php" method="POST">  
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']?></p>
            <?php } ?>
            <label for="">
            <i class="fa-solid fa-user"></i>
                Usuario
            </label>
            <input type="text" placeholder="Ingrese usuario" name="Usuario" autocomplete="off">

            <label for="">
                <i class="fa-solid fa-lock"></i>
                Clave
            </label>
            <input type="password" placeholder="Ingrese Clave" name="Clave" autocomplete="off">

            <input type="submit" class="button" value="Entrar">
        </form>
        <a href="Registrarse.php" class="Boton_Ingresar">
            Registrarse
        </a>
        ||
        <a href="" class="Boton_Ingresar">
            Recuperar clave
        </a>
    </div>
</body>
</html>
<?php
    }else {
        header('location: Home/Home.php');
    }
?>
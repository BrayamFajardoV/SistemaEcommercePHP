<?php session_start();
if (isset($_SESSION['Id']) && isset($_SESSION['NombreUsuario'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Perfil</title>
    </head>

    <body>
        <header>
            <div class="navegacion">
                <nav class="navegacion_logo">
                    <h1>System<span>Ecommerce</span></h1>
                </nav>
                <div class="navegacion_links">
                    <ul>
                        <li><a href="../Home/Home.php">Inicio</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Marcas</a></li>
                        <li><a href="../Categorias/CategoriasI.php">Categorias</a></li>
                        <li><a href="../Login/Perfil.php">Bienvenido: <span class="sesion"><?= $_SESSION['NombreCompleto'] ?></span></a></li>
                        <li><a href="../Login/CerrarSesion.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="perfil_contenedor">
            <h1> Perfil : <?= $_SESSION['NombreCompleto'] ?></h1>
        </div>
        <div class="perfil_imagen">
            <div class="perfil_contenedor-imagen">
                <img src="../Img/user.png" alt="">
            </div>
            <div class="perfil_contenedor-formulario">
                <h1>Datos del usuario</h1>
                <div class="perfil-formulario">
                    <form action="">
                        <div>
                            <label for="">
                            <i class="fa-regular fa-id-badge"></i>Numero de registro</label>
                            <input type="text" name="Id" value="<?= $_SESSION['Id'] ?>" disabled>
                        </div>
                        <div>
                            <label for="">
                                <i class="fa-solid fa-user"></i> Nombre completo</label>
                            <input type="text" value="<?= $_SESSION['NombreCompleto'] ?>" disabled>
                        </div>
                        <div>
                            <label for="">
                                <i class="fa-solid fa-users"></i>Nombre de usuario</label>
                            <input type="text" value="<?= $_SESSION['NombreUsuario'] ?>" disabled>
                        </div>
                        <div>
                            <label for="">
                            <i class="fa-solid fa-envelope"></i>Correo</label>
                            <input type="text" value="<?= $_SESSION['Correo'] ?>" disabled>
                        </div> 
                    </form>
                </div>
                <br>
                <div>
                    <a href="../Home/Home.php">Regresar</a>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header('location: ../Index.php');
}
?>
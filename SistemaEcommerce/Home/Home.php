<?php session_start();
if (isset($_SESSION['Id']) && isset($_SESSION['NombreUsuario'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Home System Ecommerce</title>
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
                        <li><a href="../Marcas/MarcasI.php">Marcas</a></li>
                        <li><a href="../Categorias/CategoriasI.php">Categorias</a></li>
                        <li><a href="../Login/Perfil.php">Bienvenido: <span class="sesion"><?= $_SESSION['NombreCompleto'] ?></span></a></li>
                        <li><a href="../Login/CerrarSesion.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <br>
        <div class="Contenedor_info">
            <h1>ECOMMERCE CREADO POR <span>YAMDEVS</span></h1>
        </div>

        <div class="informacion">
            <div class="informacion_tecnologias">
                <h1>Tecnologias utilizadas en este proyecto</h1>
                <br>
                <div class="informacion_imagenes">
                    <div class="informacion_imagenes-color">
                        <img width="100px" src="../Img/CSS3.png" alt="">
                        <img width="100px" src="../Img/38497.png" alt="">
                        <img width="100px" src="../Img/javascript-logo-transparent-logo-javascript-images-3.png" alt="">
                        <img width="150px" src="../Img/Webysther_20160423_-_Elephpant.svg.png" alt="">
                        <img width="120px" src="../Img/mysql_PNG31.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="informacion_general">
                <h1>Descripcion del proyecto</h1>
                <p>Proyecto ecommerce simple, con inicio de sesion integrado,
                    modulo de productos donde se veran reflejados todos los
                    productos, tambien modulo de marcas y categorias donde estara
                    todo lo relacionado a ello ademas de usar tecnologias de vanguadia como php, html, css, javascript y mysql.
                </p>
            </div>
        </div>
    </body>
    </html>
<?php
} else {
    header('location: ../Index.php');
}
?>
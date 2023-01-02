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
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="../CSS/Style.css">
        <title>Agregar Marca</title>
    </head>

    <body>
        <header>
            <div class="navegacion">
                <nav class="navegacion_logo">
                    <h1>System<span>Ecommerce</span></h1>
                </nav>
                <div class="formulario_agregar-boton">
                    <a href="../Marcas/MarcasI.php">Regresar</a>
                </div>
            </div>
        </header>
        <br>
        <div class="formulario_titulo">
            <h2>Agregar Marca</h2>
        </div>
        <div class="Formulario_Agregar">
            <form action="../Marcas/AgregarM.php" method="POST">
                <div class="Formulario_Inputs">
                    <label for="">Nombre Marca</label>
                    <input type="text" name="nombreMarca" autocomplete="off">
                </div>
                <div class="Formulario_Inputs">
                    <label for="">Estado Marca</label>
                    <input type="text" name="Estadomarca"  autocomplete="off">
                </div>
                <div class="boton_enviar">
                    <input type="submit" value="Agregar Marca">
                </div>
            </form>
        </div>
    </body>

    </html>
<?php
} else {
    header('location: ../Index.php');
}
?>
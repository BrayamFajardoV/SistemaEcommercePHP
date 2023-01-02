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
        <title>Marcas</title>
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
        <div class="Categoria_Info">
            <h1>Listado de Marcas</h1>
        </div>
        <div class="agregar_boton">
            <a href="../Marcas/FormularioAgregar.php">Agregar Marca</a>
        </div>
        <div class="Categoria_Tabla">
            <table class="tabla" id='myTable'>
                <thead class="thead">
                    <tr class="tr">
                        <th scope="col">#</th>
                        <th scope="col">Nombre Marca</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once('../Config/Conexion.php');

                    $sql = "SELECT * FROM Marcas";
                    $query = mysqli_query($conexion, $sql);

                    while ($fila = $query->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $fila['Id'] ?></td>
                            <td><?php echo $fila['NombreMarca'] ?></td>
                            <td>
                                <?php
                                if ($fila['Estado'] == 1) {
                                    echo "<p class='estado1'>Activo</p>";
                                } else {
                                    echo "<p class='estado2'>Inactivo</p>";
                                }
                                ?>
                            </td>
                            <td class="botones">
                                <a class="sp1" href="../Marcas/FormularioEditar.php?Id=<?php echo $fila['Id'] ?>">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a class="sp2" href="../Marcas/EliminarM.php?Id=<?php echo $fila['Id']?>">
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <script src="../Js//Jquery.js"></script>
        <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="../Js/Script.js"></script>
    </body>
</html>
<?php
} else {
    header('location: ../Index.php');
}
?>
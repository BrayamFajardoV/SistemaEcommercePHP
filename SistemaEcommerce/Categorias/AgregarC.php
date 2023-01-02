<?php
session_start();
include_once('../Config/Conexion.php');


if (empty($_POST['categoria'])) {
    echo "<script>
                alert('El campo nombre no puede estar vacio!');
                window.location.href = '../Categorias/FormularioAgregar.php'
        </script>";
} else {

    $nombreCategoria = $_POST['categoria'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO categorias(NombreCategoria, Estado) VALUES('$nombreCategoria','$estado')";
    $query = mysqli_query($conexion, $sql);

    if ($query === true) {
        echo "<script>
            alert('Categoria agregada correctamente!');
            location.href = '../Categorias/CategoriasI.php'
            </script>";
    } else {
        echo "<script>
            alert('Algo fallo');
            location.href = '../Categorias/FormularioAgregar.php'
            </script>";
    }
}

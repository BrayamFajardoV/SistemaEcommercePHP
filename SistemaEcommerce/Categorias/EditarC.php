
<?php
session_start();
include_once('../Config/Conexion.php');

if (empty($_POST['Nombrecategoria'])) {
    echo "<script>
                alert('El campo nombre no puede estar vacio');
                window.location.href = '../Categorias/CategoriasI.php'
    </script>";
} else {
    $Id  = $_POST['Id'];
    $nombreCategoria = $_POST['Nombrecategoria'];
    $estadoCategoria = $_POST['Estadocategoria'];

    $sql = "UPDATE categorias SET NombreCategoria = '$nombreCategoria' , Estado = '$estadoCategoria' WHERE Id = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        echo "<script>
                alert('Categoria editada correctamente!');
                window.location.href = '../Categorias/CategoriasI.php'
                </script>";
    } else {
        echo "Error al editar";
    }
}


?>
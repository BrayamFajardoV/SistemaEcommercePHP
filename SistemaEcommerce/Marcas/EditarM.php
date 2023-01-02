
<?php
session_start();
include_once('../Config/Conexion.php');

if (empty($_POST['NombreMarca'])) {
    echo "<script>
                alert('El campo nombre no puede estar vacio');
                window.location.href = '../Marcas/MarcasI.php'
    </script>";
} else {
    $Id  = $_POST['Id'];
    $nombreMarca = $_POST['NombreMarca'];
    $estadoMarca = $_POST['EstadoMarca'];

    $sql = "UPDATE marcas SET NombreMarca = '$nombreMarca' , Estado = '$estadoMarca' WHERE Id = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        echo "<script>
                alert('Marca editada correctamente!');
                window.location.href = '../Marcas/MarcasI.php'
                </script>";
    } else {
        echo "Error al editar";
    }
}


?>
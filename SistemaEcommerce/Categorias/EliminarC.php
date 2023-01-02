<?php 
    session_start();
    include_once('../Config/Conexion.php');

    $Id  = $_REQUEST['Id'];
    $sql = "DELETE FROM categorias WHERE Id = '$Id'";

    $query = mysqli_query($conexion, $sql);
    
    if ($query) {
        echo "<script>
                alert('Categoria eliminada correctamente!');
                window.location.href = '../Categorias/CategoriasI.php'
        </script>";
    }else {
        echo "Categoria no eliminada";
    }
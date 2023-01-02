<?php 
    session_start();
    include_once('../Config/Conexion.php');

    $Id  = $_REQUEST['Id'];
    $sql = "DELETE FROM Marcas WHERE Id = '$Id'";

    $query = mysqli_query($conexion, $sql);
    
    if ($query) {
        echo "<script>
                alert('Marca eliminada correctamente!');
                window.location.href = '../Marcas/MarcasI.php'
        </script>";
    }else {
        echo "Marca no eliminada";
    }
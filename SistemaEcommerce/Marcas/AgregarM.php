<?php
include_once('../Config/Conexion.php');

$marcaNombre  = $_POST['nombreMarca'];
$estadoMarca = $_POST['Estadomarca'];

$sql = "INSERT INTO marcas(NombreMarca, Estado) VALUES('$marcaNombre','$estadoMarca')";
$query = mysqli_query($conexion, $sql);

if ($query) {
    echo "<script>
            alert('Marca agregada correctamente!');
            window.location.href = '../Marcas/MarcasI.php'
        </script>";
}else {
    echo "Marca NO agregada";
}

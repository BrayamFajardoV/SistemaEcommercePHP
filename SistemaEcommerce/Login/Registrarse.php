<?php

    session_start();

    include_once('../Config/Conexion.php');
    if (isset($_POST['Usuario']) && isset($_POST['NombreCompleto']) && isset($_POST['Clave']) && isset($_POST['RClave']) 
        && isset($_POST['Correo'])) {

        function validar($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);

            return $data;
        }
        
        $usuario = validar($_POST['Usuario']);
        $nombreCompleto = validar($_POST['NombreCompleto']);
        $clave = validar($_POST['Clave']);
        $Rclave = validar($_POST['RClave']);
        $Correo = validar($_POST['Correo']);

        $datosUsuario = 'Usuario=' . $usuario . '&NombreCompleto=' . $nombreCompleto;

        if (empty($usuario)) {
            header("location: ../Registrarse.php?error=El usuario es requerido&$datosUsuario");
            exit();
        }elseif(empty($nombreCompleto)){
            header("location: ../Registrarse.php?error=El nombre completo es requerido&$datosUsuario");
            exit();
        }elseif(empty($clave)){
            header("location: ../Registrarse.php?error=La clave es requerida&$datosUsuario");
            exit();
        }elseif(empty($Rclave)){
            header("location: ../Registrarse.php?error=Repetir la clave es requerida&$datosUsuario");
            exit();
        }elseif(empty($Correo)){
            header("location: ../Registrarse.php?error=El correo es requerido&$datosUsuario");
            exit();
        }elseif($clave !== $Rclave){
            header("location: ../Registrarse.php?error=La clave no coincide&$datosUsuario");
            exit();
        }else {
            $clave = password_hash($clave, PASSWORD_DEFAULT); //Cambio linea
        
            $sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$usuario'";
            $query = $conexion->query($sql);

            if (mysqli_num_rows($query) > 0) {
                header("location: ../Registrarse.php?error=El usuario ya existe!");
                exit();
            }else {
                $sql2 = "INSERT INTO usuarios(NombreCompleto, NombreUsuario, Clave, Correo) VALUES('$nombreCompleto','$usuario','$clave','$Correo')";
                $query2 = $conexion->query($sql2);
                if ($query2) {
                    header("location: ../Registrarse.php?success=Usuario creado con exito");
                    exit();
                }else {
                    header("location: ../Registrarse.php?success=Ocurrio un error");
                    exit();
                }
            }
        }
    }else {
        header('location: ../Registrarse.php');
        exit();
    }

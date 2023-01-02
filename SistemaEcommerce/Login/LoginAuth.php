<?php 
    session_start();
    include_once('../Config/Conexion.php');

    if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {

        function validar($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $usuario = validar($_POST['Usuario']);
        $clave = validar($_POST['Clave']);

        /*Validar campos vacios*/
        if (empty($usuario)) {
            header('location: ../Index.php?error=El usuario es requerido');
            exit();
        }else if (empty($clave)) {
            header('location: ../Index.php?error=La clave es requerida');
            exit();
        }else {
            $sql = "SELECT * FROM usuarios WHERE NombreUsuario='$usuario'";
            $query = $conexion->query($sql);

            if ($query->num_rows == 1) {
                $usuarioQ = $query->fetch_assoc();

                $Id = $usuarioQ['Id'];
                $NombreUsuario = $usuarioQ['NombreUsuario'];
                $UClave = $usuarioQ['Clave'];
                $NombreCompleto = $usuarioQ['NombreCompleto'];
                $Correo = $usuarioQ['Correo'];

                if ($usuario === $NombreUsuario) {
                    if (password_verify($clave, $UClave)) {
                        $_SESSION['Id'] = $Id;
                        $_SESSION['NombreUsuario'] = $NombreUsuario;
                        $_SESSION['NombreCompleto'] = $NombreCompleto;
                        $_SESSION['Correo'] = $Correo;
                        
                        echo    "<script>
                                    alert('Bienvenido $NombreCompleto');
                                    location.href = '../Home/Home.php';
                                </script>";
                    }else {
                        header('location: ../Index.php?error=Usuario o Clave incorrecta');
                    }
                }else {
                    header('location: ../Index.php?error=Usuario o Clave incorrecta');
                }
            }else {
                header('location: ../Index.php?error=Usuario o Clave incorrecta');
            }
        }
    }